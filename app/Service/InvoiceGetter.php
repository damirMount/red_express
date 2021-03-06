<?php
/**
 * Created by PhpStorm.
 * User: damir
 * Date: 21.06.2022
 * Time: 11:17
 */

namespace App\Service;


use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

class InvoiceGetter
{
    public static function getInvoice($invoice)
    {
        $response = Http::withBasicAuth('обмен', 'qa1')
            ->withHeaders([
                'Content-Type' => 'application/json; charset=utf-8'
            ])
            ->get('http://212.112.99.14:8080/mcargoupdate/hs/getstatusinvoice/' . $invoice);

        $cargo = json_decode($response, true);

        if (isset($cargo['number_id']))
        {
            return self::timeCalc($cargo);
        }
        else{
            return $cargo;
        }
    }

    static public function timeCalc($cargo)
    {
        $time = Carbon::now()->diffInDays($cargo['time'], false);
        if ($time > 0){
            $cargo['time'] = $time . ' дня';
        }
        elseif ($time == 0){
            $cargo['time'] =  abs($time) . ' дней';
        }
        else{
            if (abs($time) == 1) {
                $cargo['time'] = abs($time) . ' день назад';
            }
            elseif (abs($time) >= 2 && abs($time) <= 4) {
                $cargo['time'] = abs($time) . ' дня назад';

            }
            else{
                $cargo['time'] = abs($time) . ' дней назад';
            }
        }

        return $cargo;
    }
}
