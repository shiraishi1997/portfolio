<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Redupulicate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'redupulicate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '本日配達予定のorderテーブルのレコードを複製';

    /**
     * Execute the console command.
     *
     * @return int
     */
     public function __construct()
    {   
        parent::__construct();
    }
    public function handle()
    {
         $date = carbon::today();
        
        //今日注文されたデータを取得してIDを取得。
        //その後、中間テーブルからデータを今日注文された商品を検索して取得
        $orders = order::whereDate('delivery_date',$date)->with(['products'=>function ($query)use($date){
            $query;}])->get();
        //
        
        DB::beginTransaction(); 
        try {
            foreach($orders as $order){
                   
                 $new_order =$order->replicate();
                 $new_order->fill([
                 'id'=>null,
                 'delivery_date' => date("Y-m-d",strtotime('90 days'))
                 ])->save();
                
                foreach($order->products as $product){
                $new_order->products()->attach($product->id);
                }
            
            }
           
            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e);
        }  
        return Command::SUCCESS;
    }
}
