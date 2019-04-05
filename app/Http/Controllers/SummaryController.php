<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class SummaryController extends Controller
{
    public function indexTraining()
    {
        return view('summaries.index_training');
    }
    public function indexResource()
    {
        return view('summaries.index_resource');
    }
}
