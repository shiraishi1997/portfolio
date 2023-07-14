<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        

 
    </head>  
　　<body>
　　    <h1>会員情報</h1>
　　        <div>名前</div>
　　         <p class ='name'>{{$customer->name}}</p>
　　      　<div>郵便番号</div>
        　　    <p class ='postcode'>{{$customer->postcode}}</p>
        　　<div>都道府県</div>
        　　    <p class ='prefecture'>{{$customer->prefecture}}</p>
        　　<div>市区町村</div>
        　　    <p class ='city'>{{$customer->city}}</p>
        　　<div>番地</div>
　　          <p class=street>{{$customer->street}}</p>
　　        <div>電話番号</div>
　　          <p class='telephone'>{{$customer->telephone}}</p>
　　        <div>生年月日</div>
　　          <p class='birthday'>{{$customer->birthday}}</p>
　　  <h2>注文詳細</h2>
　　      @foreach($customer->orders as $order)
　　       <div>配達日</div>
　　        <p class ='delivery_date'>{{$order->delivery_date}}</p>
　　       <div>初回注文日</div>
　　        <p class='ordered_date'>{{$order->ordered_date}}</p>
　　        <div>税抜き価格</div>
　　         <p class='no_tax_price'>{{$order->no_tax_price}}</p>
　　        <a href = '/order/{{$order->id}}'>注文詳細</a>
　　      `@endforeach
　　    
　　    
　　</body>

　</html>