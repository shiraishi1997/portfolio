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
        public function serchedexportCsv(Request $request){
         $headers =[
            'Content-type' => 'text/csv',
            'Content-Disposition' => 'attachment;'
        ];

        $fileName = Carbon::now()->format('y-m-d').'orderlist.csv';
        $keyword =$request->input('date');
        $date =Carbon::parse($keyword);
       // dd($date);
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
                 'telephone',
                 'product_name',
                 'no_tax_price'
                 ];
        
        
        $callback =function()use ($head,$orders){
             $stream = fopen('php://output', 'w');
             
            fputcsv($stream,$head);
        
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
                    $order->customer->telephone,
                    $product->name,
                    $product->no_tax_price
                    ];
                
                fputcsv($stream, $content);
                }    
            }
            
           fclose($stream);  
        };
        
     return response()->streamDownload($callback, $fileName, $headers);
    //
}
    
    public function exportCsv(){
         $headers =[
            'Content-type' => 'text/csv',
            'Content-Disposition' => 'attachment;'
        ];
        $fileName = Carbon::now()->format('y-m-d').'orderlist.csv';
        $date = Carbon::tomorrow();
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
                 'telephone',
                 'product_name',
                 'no_tax_price'
                 ];
        
        
        $callback =function()use ($head,$orders){
             $stream = fopen('php://output', 'w');
             
            fputcsv($stream,$head);
        
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
                    $order->customer->telephone,
                    $product->name,
                    $product->no_tax_price
                    ];
                
                fputcsv($stream, $content);
                }    
            }
            
           fclose($stream);  
        };
        
     return response()->streamDownload($callback, $fileName, $headers);
    //
}
}
