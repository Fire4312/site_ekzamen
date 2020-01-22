<?php

namespace App\Http\Controllers;

use App\Groups;
use Illuminate\Http\Request;

class GroupsController extends Controller
{
    public function index(Request $request)
    {
    	$groups = Groups::all();

    	return view('groups', compact('groups'));
    }
}
