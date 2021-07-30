@extends("front.master")
@section("content")
<style type="text/css">
  @import url(https://fonts.googleapis.com/css?family=Raleway:400,700,600);
</style>
<div class="jumbotron text-center">
  <h1 class="display-3">Thank You!</h1>
  <p class="lead"><strong>Please check your email</strong> for further instructions on how to complete your account setup.</p>
  <hr>
  <p>
    Having trouble? <a href="{{url('front/contact_us')}}">Contact us</a>
  </p>
  <p class="lead">
    <a class="btn btn-primary btn-sm" href="{{url('/')}}" role="button">Continue to homepage</a>
  </p>
</div>
@endsection