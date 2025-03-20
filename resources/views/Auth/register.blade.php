    @extends('layouts.layout')

    @section('title')
    Register
    @endsection

    @section('form')
    @include('errors.error')
    
    <form action={{ route('Register') }} method="post">
        @csrf
                <div class="form-group first">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" id="email" value={{ old('email') }}>

                </div>
                <div class="form-group">
                    <label for="username">UserName</label>
                    <input type="text" name="name" class="form-control" id="username" value={{ old('name') }}>
                    
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password">
                    
                </div>
                <div class="form-group last mb-4">
                    <label for="cpassword">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="cpassword">
                    
                </div>
                
                <input type="submit" value="Register Now" class="btn btn-block btn-primary">
                <br>
                <small>Already Have An Account :<a href={{ route('LoginForm') }} style="text-decoration: none">Login</a></small>
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
