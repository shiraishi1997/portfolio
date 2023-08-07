@extends('layout.common')
@section('content')
　　    <h1>商品登録</h1>
　　    <form action = "/product" method="POST">
　　        @csrf
　　        <div class="col-auto">
　　            <label for="exampleFormControlInput1" class="form-label">商品名</label>
　　        　  <input type ="text"  class="form-control" name ="product[name]" placeholder ="商品名">
　　        </div>
　　        <dic class ="mb-3">
　　            <label for="exampleFormControlTextarea1" class="form-label">商品詳細</label>
　　            <textarea name="product[detail]"  class="form-control"  placeholder="商品の詳細説明"></textarea>
　　        </dic>
　　        <div class ="mb-3">
　　             <label for="exampleFormControlInput1" class="form-label">税抜き価格</label>
　　        　   <input type="number"  class="form-control" rows="3" name = "product[no_tax_price]" placeholder="税抜き価格">
　　        </div>
　　        <button type="submit" class="btn btn-primary mb-3">商品登録</button>
　　        
　　    </form>
@endsection