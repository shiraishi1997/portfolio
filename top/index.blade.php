@extends('layout.common')
@section('content')
    <ul>
　　　　<li><a href = '/csv'>出荷用CSVデータダウンロード</a>
　　　　     <p>出荷処理に必要なCSVをデータダウンロードできます。当該ページから、翌日出荷分と日付指定でのデータをダウンロードできます。</p>
        <li><a href = '/product'>登録商品編集</a></li>
             <p>登録している商品情報の編集が可能です。</p>
        <li><a href ='/customer'>顧客情報・購入情報編集</a></li>
              <a>顧客情報と顧客の購入履歴が閲覧できます。また、購入情報の編集や削除等の操作が可能です。</a>
    </ul>
@endsection