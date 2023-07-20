<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       

     
    </head>  
    <header>
        
　　<body>
　　   <div>注文処理・注文データダウンロード</div>
　　   　<p>明日到着分注文処理</p>
　　      <button type="button" value="テスト" onClick="disp()">CSVダウンロード</button>
    　　   <p>日付指定注文処理・注文データダウンロード</p>
        　　 <form action ='/serchedexportCsv' method ="POST">
        　　   @csrf 
        　　   <input type ="date" name='date'>
        　　   <button type ="submit" value ="ダウンロード"> ダウンロード</button>
        　　   </form>
        <script>
        　 function disp(){
        　　 if(window.confirm("CSVデータをダウンロードしますか？")){
        　　   　   location.href = "/csv-download";
        　　   　     }else{
        　　   　     window.alert('キャンセルされました');   
        　　   　        }
        　　 }
        </script>

        <a href = '/product'>商品情報編集</a>
        <a href ='/customer'>顧客・購入情報</a>
    </header>
　　   
　　    </div>
　　    
　　    
　　</body>

　</html>