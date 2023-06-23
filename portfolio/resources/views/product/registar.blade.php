<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        
    </head>  
    
　　<body>
　　    <h1>商品登録</h1>
　　    <form action = "/product" method="POST">
　　        @csrf
　　        <div class ="name">
　　        　<h2>商品名</h2>
　　        　<input type ="text" name ="product[name]" placeholder ="商品名">
　　        </div>
　　        <dic class ="detail">
　　           <h3>商品詳細</h3>
　　           <textarea name="product[detail]" placeholder="商品の詳細説明"></textarea>
　　        </dic>
　　        <div class ="no_tax_price">
　　        　<h4>税抜き価格</h4>
　　        　<input type="number" name = "product[no_tax_price]" placeholder="税抜き価格">
　　        </div>
　　        
　　        <input type="submit" value="商品登録"/>
　　        
　　    </form>
　　    
　　    
　　</body>

　</html>