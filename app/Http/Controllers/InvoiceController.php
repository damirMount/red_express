<?php

namespace App\Http\Controllers;

use App\Invoce;
use App\Service\InvoiceGetter;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class InvoiceController extends Controller
{


    public function getInvoice(Request $request)
    {
        return InvoiceGetter::getInvoice($request->invoice);
    }

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
     * @param  \App\Invoce  $invoce
     * @return \Illuminate\Http\Response
     */
    public function show(Invoce $invoce)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Invoce  $invoce
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoce $invoce)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Invoce  $invoce
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invoce $invoce)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Invoce  $invoce
     * @return \Illuminate\Http\Response
     */
    public function destroy(Invoce $invoce)
    {
        //
    }
}
