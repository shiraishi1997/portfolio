<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="resources/css/font.css">
    </head>
    <body class="d-flex align-items-center py-4 bg-body-tertiary">
      <main class="form-signin w-100 m-auto">
        <form　action ="{{route('login')}}"  method ="POST" class="text-center">
            @csrf
            @method('post')
          <h1 class="h3 mb-3 fw-normal">サインイン</h1>
          
          <div class="form-floating">
            <input type="email" class="form-control" id="email" placeholder="name@example.com">
            <label for="floatingInput">Emailアドレス</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="password" placeholder="パスワード">
            <label for="floatingPassword">パスワード</label>
          </div>
          <button class="btn btn-primary w-100 py-2" type="submit">サインイン</button>
       </form>
      </main>

    </body>
    
</html>