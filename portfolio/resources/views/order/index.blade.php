<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        
    </head>  
    
　　<body>
　　    <form action="/order" method="GET">
　　     <li>電話番号または氏名で検索</li>
　　     @csrf
　　     　<li><input ="search" name="keyword",placeholder="電話番号（氏名の一部（例：田中）を入力" value ="{{$keyword}}"></li>
　　     　<li><input type=submit value="検索"></li>
　　       
　　    </form>
　　    
　　   @foreach($orders as $order)
　　        <h1 class ='customer'>会員情報</h1>
        　　       <div>会員番号</div>
        　　        <p class ='id'>{{$order->customer_id}}</p>
        　　       <div>名前</div>
        　　        <p class ='name'>{{$order->customer->name}}</p>
        　　       <div>郵便番号</div>
        　　        <p class ='postcode'>{{$order->customer->postcode}}</p>
        　　       <div>都道府県</div>
        　　        <p class ='prefecture'>{{$order->customer->prefecture}}</p>
        　　       <div>市区町村</div>
        　　        <p class ='city'>{{$order->customer->city}}</p>
        　　       <div>番地</div>
        　　        <p class='town'>{{$order->customer->town}}</p>
        　　       <div>マンション名等</div>
        　　       <p class='block'>{{$order->customer_block}}</p>
        　    
        　  <h2>注文詳細</h2>
        　   <div>注文商品</div>
        　       @foreach($order->products as $product)
        　        <div>商品名</div>
        　        <p class='name'>{{$product->name}}</p>
        　        <div>税抜き価格</div>
        　         <p class='no_tax_price'>{{$product->no_tax_price}}</p>
        　         
        　       @endforeach
        　    <div>配達予定日</div>
        　     <p class ='delivery_date'>{{$order->delivery_date}}</p>
             <div>注文日</div>
              <p class ='ordered_date'>{{$order->ordered_date}}</p>
              
              <a href ='/order/{{$order->id}}'>注文編集・削除</a>
        
        @endforeach
            
            
        　　  　   
　　   
　　    
　　    
　　    
　　    
　　    
　　    
　　    
　　    
　　    
　　    
　　        
　　    
　　    
　　    
　　</body>

　</html>