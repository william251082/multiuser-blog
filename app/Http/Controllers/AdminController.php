<?php

namespace App\Http\Controllers;

class AdminController extends Controller
{
    public function getIndex()
    {
        // Fetch Posts & Messages
        return view('admin.index');
    }
}