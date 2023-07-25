@extends('layout.common')
@section('content')

　　    <h1>商品編集</h1>
　　    <form action = "/product/{{$product->id}}" method="POST">
　　        @csrf
　　        @method("put")
　　        <div class ="name">
　　        　<h2>商品名</h2>
　　        　<input type ="text" name ="product[name]" value="{{$product->name}}">
　　        </div>
　　        <dic class ="detail">
　　           <h3>商品詳細</h3>
　　           <textarea name="product[detail]" value = "{{$product->detail}}"></textarea>
　　        </dic>
　　        <div class ="no_tax_price">
　　        　<h4>税抜き価格</h4>
　　        　<input type="number" name = "product[no_tax_price]" value = "{{$product->no_tax_price}}">
　　        </div>
　　        
　　        <input type="submit" value="編集完了"/>
　　        
　　    </form>
@endsection