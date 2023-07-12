<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;
use App\Models\Order;
use App\Models\Customer;
use App\Models\Product;
use Carbon\carbon;

class CsvDownloadController extends Controller
{
    public function exportCsv(){
         $headers =[
            'Content-type' => 'text/csv',
            'Content-Disposition' => 'attachment;'
        ];
        $fileName = carbon::now()->format('Y-M-D').'orderlist.csv';
        $date =carbon::tomorrow();
        
        $callback =function(){
             $stream = fopen('php://output', 'w');
             $head =[
                 'name',
                 'postcode',
                 'prefecture',
                 'city',
                 'town',
                 'block',
                 'delivery_date',
                 'ordered_date',
                 'product_name',
                 'no_tax_price'
                 ];
            fputcsv($stream,$head);
            
            $orders = order::whereDate('delivery_date','2023-10-04')->with(['products'=>function ($query)use($date){
            $query;}]);
            
            foreach($orders->cursor() as $order){
                foreach($order->products as $product){
                $content =[
                    $order->customer()->name,
                    $order->customer()->postcode,
                    $order->customer()->prefecture,
                    $order->customer()->city,
                    $order->customer()->town,
                    $order->customer()->block,
                    $order->delivery_date,
                    $order->ordered_date,
                    $product->name,
                    $product->no_tax_price
                    ];
                //mb_convert_variables('SJIS', 'UTF-8', $content);
                fputcsv($stream, $content);
                }    
            }
           fclose($stream);  
        };
        
     return response()->streamDownload($callback, $fileName, $headers);
    //
}
}
