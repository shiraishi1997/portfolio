<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        
    </head>  
    
　　<body>
　　    <h1>会員情報一覧</h1>
　　    <div class='customer'>
　　    @foreach ($customers as $customer) 
　　        
　　        <h2 class='name'>名前:{{$customer->name}}</h2>
　　        <h3 class='address'>
　　            @foreach($customer->addresses as $address)
　　             <div class='postcode'>郵便番号:{{$address->postcode}}</div>
　　             <div class='prefecture'>都道府県:{{$address->prefecture}}</div>
　　             <div class='city'>市区町村:{{$address->city}}</div>
　　             <div class='town'>{{$address->town}}</div>
　　            @endforeach
　　        </h3>
　　        <h4 class=street>番地:{{$customer->street}}</h4>
　　        <h5 class='telephone'>{{$customer->telephone}}</h5>
　　        <h6 class='birthday'>{{$customer->birthday}}</h6>
　　       
　　   @endforeach
　　    
　　    </div>
　　    
　　    
　　</body>

　</html>