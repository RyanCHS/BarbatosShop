<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title')</title>
     <!-- Latest compiled and minified CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="{{url('css/main.css')}}">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
     <!-- Latest compiled JavaScript -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
   
</head>
<body class="bg-light">

  @php
      use App\Models\category;
      $listcategories = category::all();
  @endphp
    <nav class="navbar navbar-expand-lg nav-white shadow-sm bg-white">
        <div class="container">
          <a class="navbar-brand" href="/">Barbatos Shop</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Category
                </a>
                <ul class="dropdown-menu">
                  @foreach ($listcategories as $category)
                    <li><a class="dropdown-item" href="{{ route('productcategory', ['category_id'=>$category->id]) }}">{{$category->name}}</a></li>           
                  @endforeach
                </ul>
              </li>
              @if (Auth::check() && Auth::user()->role == '1')
                <li class="nav-item">
                  <a class="nav-link" href="/manageProduct">Manage Product</a>
                </li>     
              @endif
            </ul>
            
            <ul class="navbar-nav">
              @if (!Auth::check())
                <a class="btn"  href="/login">Login</a>
                <a class="btn"  href="/regis">Register</a> 
              @else
                @if (Auth::user()->role == '0')
                  <form action='/cart'>
                    @csrf
                    <button class="btn" type="submit"><i class="fa fa-shopping-cart"></i></button>
                  </form>
                @endif
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{Auth::user()->name}}
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/profile">Profile</a></li>
                    @if (Auth::user()->role == '0')
                      <li><a class="dropdown-item" href="/history">History</a></li>
                    @endif
                    <li><a class="dropdown-item" href="/logout">Logout</a></li>
                  </ul>
                </li>   
              @endif
              
            </ul>
          </div>
        </div>
      </nav>

      @yield('body')
</body>
</html>