<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use Illuminate\Http\Request;

class CvController extends Controller
{
    /**
     * Display a list of the publiced cvs.
     *
     * This method fetchs cvs data from data base and pass them to index view to be shoen in public.
     *
     * @return array An array of cv objects that comes form database.
     */
    public function index()
    {
        $cvs= Cv::where('is_public', true)->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //we need to check if the user have a custom template here and let him to choose it.
        //after choosing we shoould pass the template to a view to be filled by the user.
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //here we need to update the statistic of the template and after that start saving the cv based on the template.

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cv  $cv
     * @return \Illuminate\Http\Response
     */
    public function show(Cv $cv)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cv  $cv
     * @return \Illuminate\Http\Response
     */
    public function edit(Cv $cv)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cv  $cv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cv $cv)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cv  $cv
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cv $cv)
    {
        //
    }
}
