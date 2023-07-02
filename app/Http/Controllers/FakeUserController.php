<?php

namespace App\Http\Controllers;

use App\Models\fakeUser;
use Illuminate\Http\Request;

class FakeUserController extends Controller
{
    public function index()
    {
         //   index will return the 10 fake users details
       $users = fakeUser::take(10)->get();
        return response()->json($users);;

    }

}
