<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        
    </head>  
    
　　<body>
　　    
    　　    <h1 class ='customer'>会員情報</h1>
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
            　       @endforeach
          <form action="/order/{{$order->id}}" method ="POST">
        　　        @csrf
        　　        @method('PUT')
                    <div>配達予定日</div>
            　     <input ='text' name ='order[delivery_date]' value ='{{$order->delivery_date}}'>
                 <div>注文日</div>
                  <input ='text' name ='order[ordered_date]' value ='{{$order->ordered_date}}'>
                　<input type="submit" value="配達日変更"/>

        </form>          
         
        
        
            
            
        　　  　   
　　   
　　    
　　    
　　    
　　    
　　    
　　    
　　    
　　    
　　    
　　    
　　        
　　    
　　    
　　    
　　</body>

　</html>