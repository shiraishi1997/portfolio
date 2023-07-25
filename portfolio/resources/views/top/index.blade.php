<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        
     
    </head>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/top">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/product">商品情報編集</a>
                        </li>
                        <li>
                          <a class="nav-link" href="/customer">顧客情報・購入情報</a>
                        </li>
                       
                </div>
            </div>
         </nav>
    </header>
    <body>
        <a href ='/top'>Topに戻る</a>
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

        <a href = '/product'></a>
        <a href ='/customer'>顧客・購入情報</a>
    </body>
　　
　　

　</html>