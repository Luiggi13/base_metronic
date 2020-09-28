<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchFilmapsController extends Controller
{
    public function index()
    {
        $page_title = 'Buscador Filmaps';
        // $page_description = 'Login description for the page';

        // return view('pages.login', compact('page_title', 'page_description'));
        return view('pages.searchfilmaps',compact('page_title'));
    }

    /**
     * Demo methods below
     */

    // Datatables
}
