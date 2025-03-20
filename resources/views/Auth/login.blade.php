@extends('layouts.layout')

@section('title')
  Login
@endsection
@include('errors.error')
@include('success')
@section('form')
  <form action={{ route('Login') }} method="post">
              @csrf
              <div class="form-group first">
                <label for="email">Email</label>
                <input type="text" name="email" name="email" class="form-control" id="email" value={{ old('email') }}>

              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" name="password" class="form-control" id="password">
                
              </div>
              
              <input type="submit" value="Login" class="btn btn-block btn-primary">
              <br>
              <small>Do Not Have Account :<a href={{ route('RegisterForm') }} style="text-decoration: none">Register</a></small>
              <br><br>
              
              <div class="social-login">
                <a href="#" class="facebook">
                  <span class="icon-facebook mr-3"></span> 
                </a>
                <a href="#" class="twitter">
                  <span class="icon-twitter mr-3"></span> 
                </a>
                <a href="#" class="google">
                  <span class="icon-google mr-3"></span> 
                </a>
              </div>
            </form>
@endsection
