@extends('front.app')
@section('page_title')
ContactUs
@endsection
@section('contents')
<style type="text/css">
  body {
    background-color: #f1f1f1;
  }

  .contact-form {
    margin: 50px auto;
    padding: 25px 20px 10px;
    background: #39BAF0;

    border-radius: 5px;
    color: #fff;
  }

  .contact-form h2 {
    margin-top: 0px;
    margin-bottom: 15px;
    padding-bottom: 5px;
    border-radius: 10px;

  }
</style>

<div class="container">
  <div class="row">
    <div class="col-md-6  col-md-6 offset-6 ">
      <div class="contact-form">
        <form action="{{route('contact-us')}}" method="post">
          {{ csrf_field() }}
          <h2 class="text-center">Contact Us</h2>
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
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Your Email">
            @error('email')
            <span class="invalid-feedback" role="alert">
              <strong style="color:red;">{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="text">Subject</label>
            <input type="text" name="subject" class="form-control" placeholder="Subject">
            @error('subject')
            <span class="invalid-feedback" role="alert">
              <strong style="color:red;">{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="your message">Your Message</label>
            <textarea name="message" rows="8" class="form-control" placeholder="Your Message"></textarea>
            @error('message')
            <span class="invalid-feedback" role="alert">
              <strong style="color:red;">{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="form-group">
            <input type="submit" value="Send Message" class="btn btn-success btn-block btn-lg" />
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection