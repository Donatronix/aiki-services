<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;

class DashboardController extends Controller
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
                return $this->dashboard();
            }
        }
        return view('dashboard.page-profile');
    }

    /**
     * Display the dashboard
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('dashboard.index', ['technicians' => User::technicians()->get()]);
    }
}
