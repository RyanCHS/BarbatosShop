@extends('Component.navbar')

@section('page_title', 'Login')
    
@section('body')
<div class="bg-light d-flex justify-content-center">
    <div class="card shadow-sm " style="width: 30rem; margin-top: 10rem; margin-bottom: 10rem;">
        <div class="bg-light text-center">
            <p class="py-2 fw-bold">Login</p>
        </div>
        <form method="POST" action="loginAction" >
            <div class="card-body mx-3 mb-3">
                @csrf
                <div class="mb-3 pt-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input name="emailInput" type="email" class="form-control" placeholder="Enter Your Email"  value="{{Cookie::get('CookieEmail') !== null ? Cookie::get('CookieEmail') : ""}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input name="passwordInput" type="password" class="form-control" placeholder="Enter Your Password" value="{{Cookie::get('CookiePassword') !== null ? Cookie::get('CookiePassword') : ""}}">
                </div>
    
                <div class="">
                    <input name="rememberInput" type="checkbox" id="">
                    <label for="" class="form-label">Remember Me</label>
                </div>
    
                @if ($errors->any())
                        <p class="text-danger">{{$errors->first()}}</p>
                @endif
    
                <div class="text-center mb-3">
                    <button type="submit" class="btn btn-outline-secondary mt-4 col-6">Login</button>
                </div>
    
                <div class="">
                    Don't have an account?
                    <a href="/regis" class=""> Register Here</a>
                </div>
    
            </div>
        </form>
        
 
      </div>
@endsection