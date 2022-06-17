<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function index(){
        $groups = Group::all()->toJson();
        dd($groups);
    }

    public function findGroup($key_name) {
        $group = Group::where('key_name', $key_name)->first()->toJson();
        dd($group);
    }
}
