<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemFilmapsController extends Controller
{
    public function index()
    {
        $page_title = 'Item';
        // $page_description = 'Login description for the page';

        // return view('pages.login', compact('page_title', 'page_description'));
        return view('pages.itemfilmaps',compact('page_title'));
    }

    /**
     * Demo methods below
     */

    // Datatables
}
