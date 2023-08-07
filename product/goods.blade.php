@extends('layout.common')
@section('content')
<h1>商品詳細</h1>
    <table class="table">
        <thead>
            <tr>
                <th>商品名</th>
                <th>商品詳細</th>
                <th>税抜き価格</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>{{$product->name}}</th>
                <th>{{$product->detail}}</th>
                <th>{{$product->no_tax_price}}</th>
            </tr>
        </tbody>
    </table>
@endsection