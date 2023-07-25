@extends('layout.common')
@section('content')
　　    <h1 class ='customer'>会員情報</h1>
　　     <table class="table">
　　          <thead>
                  <tr>
                   <th scope="col">会員ID</th>
　　               <th scope ="col">名前</th>
　　               <th scope="col">郵便番号</th>
　　               <th scope="col">都道府県</th>
　　               <th scope="col">市区町村</th>
　　               <th scope="col">番地</th>
　　               <th scope="col">電話番号</th>
　　               <th scope="col">生年月日</th>
　　           </tr>
           </thead>
         <tbody>
             <tr>
                 <th scope="col">{{$order->customer_id}}</th>
                 <th scope="col">{{$order->customer->name}}</th>
                 <th scope="col">{{$order->customer->postcode}}</th>
                 <th scope="col">{{$order->customer->prefecture}}</th>
                 <th scope="col">{{$order->customer->city}}</th>
                 <th scope="col">{{$order->customer->town}}</th>
                 <th scope="col">{{$order->customer->telephone}}</th>
　　             <th scope="col">{{$order->customer->birthday}}</th>
        　　</tr>
         </tbody>
        </table>
        <h2>注文詳細</h2>
        <table class="table">
　　          <thead>
                  <tr>
　　               <th scope ="col">注文商品名</th>
　　               <th scope="col">税抜き価格</th>
　　               <th scope="col">税込み価格</th>
　　               <th scope="col">配達予定日</th>
　　               <th scope="col">注文日</th>
　　               <th scope="col">配達予定日変更</th>
　　               <th scope="col">注文削除</th>
　　           </tr>
           </thead>
         <tbody>
             @foreach($order->products as $product)
                <tr>
                  <th scope="col">{{$product->name}}</th>
                  <th scope="col">{{$product->no_tax_price}}</th>
                  <th scope="col">{{$product->no_tax_price*1.1}}</th>
                  <th scope="col">{{$order->delivery_date}}</th>
                  <th scope="col">{{$order->ordered_date}}</th>
                  <th scope="col"><a href ="/order/{{$order->id}}/edit">配達日変更</a></th>
                 @endforeach
                  <th scope="col">
                  <form action="/order/{{$order->id}}" id ="form_{{$order->id}}" method="POST">
                       @csrf
                       @method('DELETE')
                       <button type="button" onclick="deletePost({{ $order->id }})">注文削除</button> 
                  </form>
                  </th>
                </tr>
         </tbody>
        </table>
            　　　<script>
            　      function deletePost(id){
            　          'use strict'
            　          
            　          if(confirm('削除すると復元できません。注文を再度お客様にしていただく必要があります。\n本当に削除しますか？')){
            　              document.getElementById(`form_${id}`).submit();
            　          }
            　      }
        　　　</script>
@endsection
            


