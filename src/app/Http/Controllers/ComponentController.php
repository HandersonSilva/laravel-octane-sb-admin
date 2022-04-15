<?php

namespace App\Http\Controllers;

class ComponentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function buttons()
    {
        return view('pages.buttons.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cards()
    {
        return view('pages.cards.index');
    }
}
