@extends('layout.common')
@section('content')
　　     <h1>配送先</h1>
　　     <table class="table">
　　          <thead>
                  <tr>
　　               <th scope ="col">名前</th>
　　               <th scope="col">郵便番号</th>
　　               <th scope="col">都道府県</th>
　　               <th scope="col">市区町村</th>
　　               <th scope="col">番地</th>
　　               <th scope="col">電話番号</th>
　　               <th scope="col">生年月日</th>
　　           </tr>
           </thead>
　　         <th scope ="col">{{$order->customer->name}}</th>
　　         <th scope ="col">{{$order->customer->postcode}}</th>
　　         <th scope ="col">{{$order->customer->prefecture}}</th>
　　         <th scope ="col">{{$order->customer->city}}</th>
　　         <th scope ="col">{{$order->customer->street}}</th>
　　         <th scope ="col">{{$order->customer->telephone}}</th>
　　         <th scope ="col">{{$order->customer->birthday}}</th>
　　    </table>
　　    <h2>注文詳細</h2>
　　     <table class="table">
　　          <thead>
                  <tr>
　　               <th scope ="col">変更前配達予定日</th>
　　               <th scope ="col">変更後配達予定日</th>
　　               <th scope ="col">商品名</th>
　　               <th scope ="col">税抜き価格</th>
　　               <th scope ="col">税込み価格</th>
　　               <th scope ="col">配達予定日</th>
　　               <th scope ="col">注文日</th>
　　              </tr>
           </thead>
         <tbody>
             @foreach($order->products as $product)
                <tr>
                    <th scope="col">{{$order->delivery_date}}</th>
                    <th scope="col">
                         <form action="/order/{{$order->id}}" method ="POST">
                             @csrf
                             @method('PUT')
                             <input ='text' name ='order[delivery_date]' value ='{{$order->delivery_date}}'>
                             <input type="submit" value="配達日変更"/>
                         </form> 
                    </th>
                    <th scope="col">{{$product->name}}</th>
                    <th scope="col">{{$product->no_tax_price}}</th>
                    <th scope="col">{{$product->no_tax_price*1.1}}</th>
                    <th scope="col">{{$order->delivery_date}}</th>
                    <th scope="col">{{$order->ordered_date}}</th>
                
                 @endforeach
                 
                </tr>
         </tbody>
        </table>
