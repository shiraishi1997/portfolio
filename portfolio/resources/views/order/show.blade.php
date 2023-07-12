<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        
    </head>  
    
　　<body>
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
        　　 <p class='town'>{{$order->customer->toswn}}</p>
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
              
              <a href ="/order/{{$order->id}}">配達日変更</a>
              <form action="/order/{{$order->id}}" id ="form_{{$order->id}}" method="POST">
                   @csrf
                   @method('DELETE')
                   <button type="button" onclick="deletePost({{ $order->id }})">注文削除</button> 
              </form>
        　　　<script>
        　      function deletePost(id){
        　          'use strict'
        　          
        　          if(confirm('削除すると復元できません。注文を再度お客様にしていただく必要があります。\n本当に削除しますか？')){
        　              document.getElementById(`form_${id}`).submit();
        　          }
        　      }
        　　　</script>
        </body>
            
            
        　　  　   
　　   
　　    
　　    
　　    
　　    
　　    
　　    
　　    
　　    
　　    
　　    
　　        
　　    
　　    
　　    
　　</body>

　</html>