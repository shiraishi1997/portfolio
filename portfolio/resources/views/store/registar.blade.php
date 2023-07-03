<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        
    </head>  
    
　　<body>
　　    <h1>会員登録</h1>
　　    <form action = "/store" method="POST">
　　        @csrf
　　        <div class ="name">
　　        　<h2>会社名</h2>
　　        　<input type ="text" name ="store[name]" placeholder ="会社名">
　　        </div>
　　        <dic class ="street">
　　           <h3>番地</h3>
　　           <textarea name="store[street]" placeholder="番地"></textarea>
　　        </dic>
　　        <div class ="block">
　　        　<h4>マンション名など</h4>
　　        　<input type="text" name = "store[block]" placeholder="マンション名">
　　        </div>
　　        <div class ="telephone">
　　           <h5>電話番号</h5>
　　            <input type ="number" name ="store[telephone]" >
　　       </div>
　　        <div>
　　            <h6>email</h6>
　　            <input type ="text" name ="store[email]">
　　        </div>
　　        <div>
　　            <h7>ログインパスワード</h7>
　　            <input type ="text" name ="store[password]">
　　      　</div>
　　        <input type="submit" value="会員登録"/>
　　        
　　    </form>
　　    
　　    
　　</body>

　</html>