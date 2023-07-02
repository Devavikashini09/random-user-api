<?php

namespace App\Http\Controllers;

use App\Models\fakeUser;
use Illuminate\Http\Request;

class FakeUserController extends Controller
{
    public function index(Request $request)
    {
        $results = $request->query('results', 10);
        $gender = $request->query('gender');
        $page = $request->query('page', 1);

        $query = fakeUser::query();

        if ($gender) {
            $query->where('gender', $gender);
        }

        $users = $query->paginate($results, ['*'], 'page', $page);
        return $users;
    }

}
