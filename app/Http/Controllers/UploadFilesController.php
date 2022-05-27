<?php

namespace App\Http\Controllers;

use App\Models\UploadFiles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadFilesController extends Controller
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
    public function create(Request $request)
    {
        //

        $fileName = "sfashgja";

        Storage::disk('local')->put('example.png', $request);
        // dd($request);


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
     * @param  \App\Models\UploadFiles  $uploadFiles
     * @return \Illuminate\Http\Response
     */
    public function show(UploadFiles $uploadFiles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UploadFiles  $uploadFiles
     * @return \Illuminate\Http\Response
     */
    public function edit(UploadFiles $uploadFiles)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UploadFiles  $uploadFiles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UploadFiles $uploadFiles)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UploadFiles  $uploadFiles
     * @return \Illuminate\Http\Response
     */
    public function destroy(UploadFiles $uploadFiles)
    {
        //
    }
}
