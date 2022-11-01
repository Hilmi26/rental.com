<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    /**
     * Display all the static pages when authenticated
     *
     * @param string $page
     * @return \Illuminate\View\View
     */
    public function index(string $page)
    {
        if (view()->exists("page.{$page}")) {
            return view("page.{$page}");
        }
        return abort(404);
    }
}
