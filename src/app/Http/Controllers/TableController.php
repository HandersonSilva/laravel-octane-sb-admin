<?php

namespace App\Http\Controllers;


class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.table-livewire.index');
    }
}
