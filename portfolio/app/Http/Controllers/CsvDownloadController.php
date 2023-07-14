<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;
use App\Models\Order;
use App\Models\Customer;
use App\Models\Product;
use Carbon\Carbon;

class CsvDownloadController extends Controller
{
    public function exportCsv(){
         $headers =[
            'Content-type' => 'text/csv',
            'Content-Disposition' => 'attachment;'
        ];
        $fileName = Carbon::now()->format('Y-M-D').'orderlist.csv';
        $date =Carbon::parse('2023-07-04');
        $orders = Order::whereDate('delivery_date',$date)->with(['products'=>function ($query)use($date){$query;}])->get();
        //dd($orders);

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
        
        /*foreach($orders as $order){
                foreach($order->products as $product){
                $content =[
                    $order->customer->name,
                    $order->customer->postcode,
                    $order->customer->prefecture,
                    $order->customer->city,
                    $order->customer->town,
                    $order->customer->block,
                    $order->delivery_date,
                    $order->ordered_date,
                    $product->name,
                    $product->no_tax_price
                    ];
                }}
                dd($orders);*/
        $callback =function()use ($head,$orders){
             $stream = fopen('php://output', 'w');
             
            fputcsv($stream,$head);
            
            //dd($orders);
           
            foreach($orders as $order){
                foreach($order->products as $product){
                $content =[
                    $order->customer->name,
                    $order->customer->postcode,
                    $order->customer->prefecture,
                    $order->customer->city,
                    $order->customer->town,
                    $order->customer->block,
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
