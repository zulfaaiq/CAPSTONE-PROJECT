<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Get-Blood</title>
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/responsive.css" />
    <script src="https://kit.fontawesome.com/6e843ddcb5.js" crossorigin="anonymous"></script>
  @vite(['resources/js/app.js'])
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
    <div class="title_umum">
    <h3>Data Ketersediaan Darah Rumah Sakit Umum Daerah Kabupaten Brebes</h3>
    </div>
    <table class="table table-bordered table-hover">
  <tr>
    <th>ID</th>
    <th>Golongan Darah</th>
    <th>Jumlah</th>
  </tr>
  @foreach($rsud_kab_brebes as $s) 
  <tr>
    <td>{{$s->id}}</td>
    <td>{{$s->gol_darah}}</td>
    <td>{{$s->jumlah}}</td>
  </tr>
  @endforeach
</table>
</body>