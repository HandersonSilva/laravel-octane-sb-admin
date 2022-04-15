<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function colors()
    {
        return view('pages.colors.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function borders()
    {
        return view('pages.borders.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function animations()
    {
        return view('pages.animations.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function other()
    {
        return view('pages.other.index');
    }


}
