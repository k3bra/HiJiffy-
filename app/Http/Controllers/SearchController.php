<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {

        $request->validate(
            ['name' => 'required|string']
        );

        return User::where('name', 'like', '%' . $request->get('name') . '%')->orderBy('name', 'asc')->get();
    }
}
