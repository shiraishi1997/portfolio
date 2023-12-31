@extends('layout.common')
@section('content') 
　　<body>
　　    <h1>配送先</h1>
　　     <table class="table">
　　          <thead>
                  <tr>
　　               <th scope ="col">名前</th>
　　               <th scope="col">郵便番号</th>
　　               <th scope="col">都道府県</th>
　　               <th scope="col">市区町村</th>
　　               <th scope="col">番地</th>
　　               <th scope="col">電話番号</th>
　　               <th scope="col">生年月日</th>
　　           </tr>
           </thead>
　　         <th scope ="col">{{$customer->name}}</th>
　　         <th scope ="col">{{$customer->postcode}}</th>
　　         <th scope ="col">{{$customer->prefecture}}</th>
　　         <th scope ="col">{{$customer->city}}</th>
　　         <th scope ="col">{{$customer->street}}</th>
　　         <th scope ="col">{{$customer->telephone}}</th>
　　         <th scope ="col">{{$customer->birthday}}</th>
　　    </table>
　　  <h2>配達記録</h2>
　　  　<table class-"table">
　　  　    <thead>
　　          <tr>
　　              <th scope="col">配達日</th>
　　              <th scale="col">注文詳細</th>
　　          </tr>
　　      </thead>
　　      <tbody>
　　          @foreach($customer->orders as $order)
　　          <tr>
　　              <th scope="col">{{$order->delivery_date}}</th>
　　              <th scope="col"><a href = '/order/{{$order->id}}'>詳細</a></th>
　　          </tr>
    　　          @endforeach
    　　  </tbody>
　　  </table>
　　      
  </body>
@endsection
