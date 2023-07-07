<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use App\Models\Order;
use App\Models\product;
use Illuminate\Support\Facades\DB;

class OrderDuplicate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'duplicate';
    
    protected $description='ordersテーブルのレコード複製';

    /**
     * The console command description.
     *
     * @var string
     */
      public function __construct()
    {   
        parent::__construct();
    }
    

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $carbon = carbon::today();
        $date = $carbon->subday(2);
        //今日注文されたデータを取得してIDを取得
        //$orders = order::whereDate('ordered_date',$date)->with('customer')->get();
        $orders = order::whereDate('ordered_date',$date)->with(['products'=>function ($query)use($date){
            $query;}])->get();
        //$order_id =array_column($orders,'id');
        //中間テーブルからデータを今日注文された商品を検索して取得、その後IDも取得
        //$products = db::table('order_product')->get();
        
        
        
        DB::beginTransaction(); 
        try {
            foreach($orders as $order){
                   
                 $new_order =$order->replicate();
                 $new_order->fill([
                 'id'=>null,
                 'delivery_date' => date("Y-m-d",strtotime('90 days'))
                 //'creates_at'=>carbon::now()
                 ])->save();
                 //dd($new_order);
                //dd($order->products());
                foreach($order->products as $product){
                    //dd($product);
                $new_order->products()->attach($product->id);
                       
                }
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e);
        }  
            
         
        
        //dd($new_orders);
           
           
   
           
            
            
        
        
        
        
        
        
        return Command::SUCCESS;
    }
}
