<?php

namespace App\Http\Controllers;

use App\Invoce;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class InvoiceController extends Controller
{


    public function getInvoice(Request $request)
    {
        $response = Http::withBasicAuth('обмен', 'qa1')
            ->withHeaders([
                'Content-Type' => 'application/json; charset=utf-8'
            ])
            ->get('http://212.112.99.14:8080/mcargoupdate/hs/getstatusinvoice/.' . $request->invoice);

        $cargo = json_decode($response, true);

        if (isset($cargo['number_id']))
        {
            return $this->timeCalc($cargo);
        }
        else{
            return $cargo;
        }
    }


    public function timeCalc($cargo)
    {
        $time = Carbon::now()->diffInDays($cargo['time'], false);
        if ($time > 0){
            $cargo['time'] = $time . ' дня';
        }
        else{
            $cargo['time'] = abs($time) . ' дня назад';
        }

        return $cargo;
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
