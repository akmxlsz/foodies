<?php

namespace App\Http\Controllers;

use App\Models\Saja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SajaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $saja = DB::table('sajas')

        ->get();

        return view('saja', ['saja'=>$saja]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $saja= new Saja();
        $saja->name=$request->name;
        $saja->email=$request->email;
        $saja->phone_no=$request->phone_no;
        $saja->saja=$request->saja;
        $saja->created_at=today();
        $saja->updated_at=today();
        $saja->save();
        return redirect('saja');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
