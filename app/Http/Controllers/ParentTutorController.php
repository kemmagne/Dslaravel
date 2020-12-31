<?php

namespace App\Http\Controllers;

use App\Http\Resources\Resource\Pareent_tutorResource;
use App\Http\Resources\Collection\Parent_tutorCollection;


use App\Parent_tutor;
use Illuminate\Http\Request;

class ParentTutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parent_tutor = Parent_tutor::all();
        // return $week;

         return Parent_tutorCollection::collection($parent_tutor);
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
     * @param  \App\Parent_tutor  $parent_tutor
     * @return \Illuminate\Http\Response
     */
    public function show(Parent_tutor $parent_tutor)
    {
        return new Pareent_tutorResource($parent_tutor);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Parent_tutor  $parent_tutor
     * @return \Illuminate\Http\Response
     */
    public function edit(Parent_tutor $parent_tutor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Parent_tutor  $parent_tutor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parent_tutor $parent_tutor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Parent_tutor  $parent_tutor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parent_tutor $parent_tutor)
    {
        //
    }
}
