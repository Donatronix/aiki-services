<?php

namespace App\Http\Controllers\Technician;

use App\Http\Controllers\Controller;
use App\Models\Assessment\Assessment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class TechnicianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\User $technician
     *
     * @return \Illuminate\Http\Response
     */
    public function show(User $technician)
    {
        return view('dashboard.app-contact-detail', ['technician' => $technician]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\User $technician
     * @return \Illuminate\Http\Response
     */
    public function edit(User $technician)
    {
        return $technician;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  @param \App\Models\User $technician
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $technician)
    {
        DB::transaction(function () use ($request, $technician) {
            $technician->update([$request->toArray()]);
        });
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\User $technician
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $technician)
    {
        DB::beginTransaction();
        try {
            $technician->delete();
        } catch (\Throwable $th) {
            DB::rollback();
            session()->flash('error', $th->getMessage());
            return redirect()->back();
        }
        DB::commit();
        return redirect()->back();
    }
}
