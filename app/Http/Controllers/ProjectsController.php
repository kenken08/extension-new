<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        return view('projects.index');
    }
}
