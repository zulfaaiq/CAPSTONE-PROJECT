<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Get-Blood/Login</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/responsive.css">
</head>
<body>
<div class="nav-container">
        <div class="wrapper">
          <nav>
            <div class="logo">
              GET-BLOOD
            </div>
    
            <ul class="nav-items">
              <li>
                <a href="/login">Login</a>
              </li>
    
              <li>
                <a href="/dashboard">Dashboard</a>
              </li>
    
              <li>
                <a href="/about">About</a>
              </li>
    
              <li>
                <a href="/team">Team</a>
              </li>
    
            </ul>
          </nav>
        </div>
      </div>
    <div class="container"><br>
        <div class="col-md-5 col-md-offset-4">
            <h2 class="text-center"><b>Get-Blood</b><br>Aplikasi Persediaan Darah</h3>
            <hr>
            @if(session('error'))
            <div class="alert alert-danger">
                <b>Opps!</b> {{session('error')}}
            </div>
            @endif
            <form action="{{ route('actionlogin') }}" method="post">
            @csrf
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
                <a href="{{ route('google.login') }}" class="btn btn-info btn-block">Login With Google</a>
                <hr>
                <p class="text-center">Belum punya akun? <a href="/register">Register</a> sekarang!</p>
            </form>
        </div>
    </div>
</body>
</html>