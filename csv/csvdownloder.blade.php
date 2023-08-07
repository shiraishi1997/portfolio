@extends('layout.common')
@section('content')

　　   　<p>明日到着分注文処理</p>
　　      <button type="button"  class="btn btn-primary" onClick="disp()">CSVダウンロード</button>
　　      
　　      
    　　   <p>日付指定注文処理・注文データダウンロード</p>
        　　 <form action ='/serchedexportCsv' method ="POST">
        　　   @csrf 
        　　   <input type ="date" name='date'>
        　　 <button type ="submit" class="btn btn-secondary" value ="ダウンロード"> ダウンロード</button>
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
  @endsection