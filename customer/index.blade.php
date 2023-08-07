@extends('layout.common')
@section('content')
　　     <h1>氏名検索（一部のみでも可）</h1>
　　      <form class="input-group">>
    　　      @csrf
            <input type ="text" name ="keyword" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
            <button class="btn btn-outline-success" type="submit">検索リセット</button>
        　</form>
　　    <h2>会員情報</h2>
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
　　               <th scope="col">過去注文歴</th>
　　           </tr>
           </thead>
         <tbody>
　　    @foreach ($customers as $customer) 
　　        <tr>
　　               <th scope="col">{{$customer->name}}</th>
　　               <th scope="col">{{$customer->postcode}}</th>
　　               <th scope="col">{{$customer->prefecture}}</th>
　　               <th scope="col">{{$customer->city}}</th>
　　               <th scope="col">{{$customer->street}}</th>
　　               <th scope="col">{{$customer->telephone}}</th>
　　               <th scope="col">{{$customer->birthday}}</th>
　　               <th scope="col" ><a href='/customer/{{$customer->id}}'>詳細</a></th>
　　               
　　           
　　        </tr>
　　   @endforeach
　　    </tbody>
　　   </table>
@endsection