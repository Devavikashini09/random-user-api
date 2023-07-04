<?php

namespace App\Http\Controllers;

use App\Models\fakeUser;
use Illuminate\Http\Request;

class FakeUserController extends Controller
{
    /**
     * Returns the fakeUser based on query request
     */
    public function index(Request $request)
    {
        $results = $request->query('results', 10);
        $page = $request->query('page', 1);
        $gender = $request->query('gender');
        $name = $request->query('name');
        $email = $request->query('email');
        $search = $request->query('search');

        $query = fakeUser::query();

        if ($gender) {
            $query->where('gender', $gender);
        }
        if ($name) {
            $query->where('username', $name);
        }
        if ($email) {
            $query->where('email', $email);
        }
        if ($search) {
            $query->where('first_name', 'LIKE', '%'.$search.'%')
                ->orWhere('last_name', 'LIKE', '%'.$search.'%')
                ->orWhere('gender', 'LIKE', '%'.$search.'%')
                ->orWhere('email', 'LIKE', '%'.$search.'%')
                ->orWhere('username', 'LIKE', '%'.$search.'%')
                ->orWhere('nationality', 'LIKE', '%'.$search.'%')
                ->orWhere('address_postcode', 'LIKE', '%'.$search.'%')
                ->orWhere('address_city', 'LIKE', '%'.$search.'%')
                ->orWhere('address_state', 'LIKE', '%'.$search.'%');
        }

        $users = $query->paginate($results, ['*'], 'page', $page);

        return $users;
    }
}
