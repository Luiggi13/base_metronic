<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RemoteHomeController extends Controller
{
    public function index()
    {
        $page_title = 'Remote Ok Home';
        // $page_description = 'Login description for the page';

        // return view('pages.login', compact('page_title', 'page_description'));
        return view('pages.remotehome',compact('page_title'));
    }

    /**
     * Demo methods below
     */

    // Datatables
}
