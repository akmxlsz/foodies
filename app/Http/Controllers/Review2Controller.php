<?php

namespace App\Http\Controllers;

use App\Models\Review2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Review2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $review = DB::table('review2s')

        ->get();

        return view('review2', ['review2'=>$review]);
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
        $review= new Review2();
        $review->name=$request->name;
        $review->review=$request->review;
        $review->created_at=today();
        $review->updated_at=today();
        $review->save();
        return redirect('review2');
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
