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
　　        
　　        <h2 class='name'>名前:{{$customer->name}}</h2>
　　        <h4 class=street>番地:{{$customer->street}}</h4>
　　        <h5 class='telephone'>{{$customer->telephone}}</h5>
　　        <h6 class='birthday'>{{$customer->birthday}}</h6>
　　        <a href='/order/registar/{{$customer->id}}'>新規注文登録</a>
　　       
　　   @endforeach
　　    
　　    </div>
　　    
　　    
　　</body>

　</html>