<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AnnouncementsController extends Controller
{
    public function index()
    {   
        return view('admin.announcements.index');
    }
}
