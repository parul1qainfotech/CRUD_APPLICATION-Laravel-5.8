<html>
<head>
<script src='js/app.js'></script>
<script src='https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js'></script>
<script src='https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js'></script>
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="stylesheet" href="{{asset('css/app.css')}}">

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css'>
<title>@yield('Home')</title>
</head>
<body class="body">
<div class="header">
@section('header')
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">parul@sajwan</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="show">UserList</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="add">ADD </a>
      </li>
  
    </ul>
  </div>
</nav>
@show
</div>

<div class="content">
@yield('content')

</div>
@section('footer')
<footer class="footer">
<p>Parul sajwan</p>
<p>Parulsajwan1999@gmail.com</p>
@show
</footer>
</body>
</html>