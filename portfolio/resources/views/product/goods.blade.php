@extends('layout.common')
@section('content')
　　<body>
　　    <h1>登録商品</h1>
　　    
　　        <div class ="name">
　　        　<h2>{{$product->name}}</h2>
　　        </div>
　　        <dic class ="detaill">
　　           <h3>{{$product->detail}}</h3>
　　        </div>
　　        <div class ="no_tax_price">
　　        　<h4>{{$product->no_tax_price}}</h4>
　　        </div>
　　        
　　    </form>
@endsection