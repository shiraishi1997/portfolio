@extends('layout.common')
@section('content')

　　    <h1>商品編集</h1>
　　    <form action = "/product/{{$product->id}}" method="POST">
　　        @csrf
　　        @method("put")
　　        <div class="mb-3">
　　            <label for="exampleInputEmail1" class="form-label">商品名</label>
　　            <input type ="text" class="form-control" name ="product[name]" value="{{$product->name}}">
　　        </div>
　　         <div class="mb-3">
　　             <label for="exampleInputPassword1" class="form-label">商品詳細</label>
　　           <textarea name="product[detail]"  class="form-control" value = "{{$product->detail}}"></textarea>
　　        </dic>
　　        <div class ="mb-3">
　　            <label for="exampleInputPassword1" class="form-label">商品詳細</label>
　　          　<input type="number" class="form-control" name = "product[no_tax_price]" value = "{{$product->no_tax_price}}">
　　        </div>
　　        <input type="submit" value="編集完了"/>
　　    </form>
@endsection