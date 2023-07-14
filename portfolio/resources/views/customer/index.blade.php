<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        
    </head>  
    
　　<body>
　　    <form action="" method="GET">
　　     <li>電話番号または氏名で検索</li>
　　     @csrf
　　     　<li><input ="search" name="keyword",placeholder="電話番号（11字または10字）か氏名の一部（例：田中）を入力"</li>
　　     　<li><input type=submit value="検索"></li>
　　       
　　    </form>
　　    <h1>会員情報</h1>
　　    <div class='customer'>
　　    @foreach ($customers as $customer) 
　　        
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
　　        <a href='/customer/{{$customer->id}}'>詳細</a>
　　       
　　   @endforeach
　　    
　　    </div>
　　    
　　    
　　</body>

　</html>