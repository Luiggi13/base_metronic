<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginFilmapsController extends Controller
{
    public function index()
    {
        $page_title = 'Login';
        // $page_description = 'Login description for the page';

        // return view('pages.login', compact('page_title', 'page_description'));
        return view('pages.loginfilmaps',compact('page_title'));
    }

    /**
     * Demo methods below
     */

    // Datatables
}
