<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Dashboard\DashboardController;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()) {
            if (auth()->user()->isAdmin) {
                $dashboard = new DashboardController;
                return $dashboard->dashboard();
            } else {
                return view('dashboard.page-profile');
            }
        }

        return view('pages.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function RequestService()
    {
        return view('pages.RequestService');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function service()
    {
        return view('pages.service');
    }
}
