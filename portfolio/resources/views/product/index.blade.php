@extends('layout.common')
@section('content')
<h1>登録商品一覧</h1>
   <table class="table">
       <thead>
           <tr>
               <th>商品名</th>
               <th>商品詳細</th>
               <th>税抜き価格</th>
           </tr>
       </thead>
       <tbody>
            @foreach ($products as $product) 
           <tr>
               <th>{{$product->name}}</th>
               <th>{{$product->detail}}</th>
               <th>{{$product->no_tax_price}}</th>
            @endforeach
           </tr>
       </tbody>
   </table>
   <button type="button" class="btn btn-link"><a href ='/product/registar'>新規商品登録</a></button>
@endsection