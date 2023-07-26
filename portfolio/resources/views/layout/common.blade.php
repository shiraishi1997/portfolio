<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        
    </head>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/top">Home</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/csv">出荷用CSVデータダウンロード</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/product">商品情報編集</a>
                        </li>
                        <li>
                          <a class="nav-link" href="/customer">顧客情報・購入情報</a>
                        </li>
                        <li>
                           <a class="nav-link" href="route('profile.edit')">会員情報編集</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                               <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                         <a href="route('logout')"
                                    onclck="event.preventDefault();
                                                this.closest('form').submit();">
                                             {{ __('Log Out') }}
                                </a></form></li>
                            </ul>
                        </li>
                </div>      
            </div>
         </nav>
     </header>
     <body>
         @yield('content')
     </body>
 </html>