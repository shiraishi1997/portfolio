<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        
    </head>  
    
　　<body>
　　    <h1>登録商品</h1>
　　    
　　        <div class ="name">
　　        　<h2>{{$product->name}}</h2>
　　        </div>
　　        <dic class ="detaill">
　　           <h3>{{$product->detail}}</h3>
　　        </div>
　　        <div class ="no_tax_price">
　　        　<h4>{{$product->no_tax_price}}</h4>
　　        </div>
　　        
　　    </form>
　　    
　　    
　　</body>

　</html>