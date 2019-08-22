@extends('front.app')
@section('page_title')
Register
@endsection
@section('contents')
<style type="text/css">
  body {
    background-color: #f1f1f1;
  }

  .register-form {
    margin: 50px auto;
    padding: 25px 20px;
    background: #39BAF0;
    box-shadow: 2px 2px 4px #ab8de0;
    border-radius: 5px;
    color: #fff;
  }

  .register-form h2 {
    margin-top: 0px;
    margin-bottom: 15px;
    padding-bottom: 5px;
    border-radius: 10px;

  }
</style>
<div class="container">
  <div class="row">
    <div class="col-md-6 col-sm-8 col-xs-12 col-md-offset-3 col-sm-offset-2">
      <div class="register-form">
        <form action="{{route('customer-register')}}" method="post">
          {{ csrf_field() }}

          <h2 class="text-center">Registration</h2>
          <p class="hint-text">Create your account. It's free and takes just a minute.</p>
          <div class="row">
            <div class="col-md-6 col-xs-12">
              <div class="form-group">
                <label for="first name">First Name</label>
                <input type="text" name="first_name" class="form-control" placeholder="First Name">
                @error('first_name')
                <span class="invalid-feedback" role="alert">
                  <strong style="color:red;">{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
            <div class="col-md-6 col-xs-12">
              <div class="form-group">
                <label for="last name">Last Name</label>
                <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                @error('last_name')
                <span class="invalid-feedback" role="alert">
                  <strong style="color:red;">{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="address">Address</label>
            <input type="address" name="address" class="form-control" placeholder="Address">
            @error('address')
            <span class="invalid-feedback" role="alert">
              <strong style="color:red;">{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="phone">Phone</label>
            <input type="phone" name="phone" class="form-control" placeholder="Phone">
            @error('phone')
            <span class="invalid-feedback" role="alert">
              <strong style="color:red;">{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email">
            @error('email')
            <span class="invalid-feedback" role="alert">
              <strong style="color:red;">{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password">
            @error('password')
            <span class="invalid-feedback" role="alert">
              <strong style="color:red;">{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="confirm password">Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password">
          </div>
          <div class="row">
            <div class="col-md-6 col-xs-12">
              <div class="form-group">
                <input type="submit" value="Register" class="btn btn-success btn-block btn-lg" tabindex="7">
              </div>
            </div>
            <div class="col-md-6 col-xs-12">
              <div class="form-group">
                <a href="{{route('customerlogin')}}" class="btn btn-danger btn-block btn-lg">Login</a>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection