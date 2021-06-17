<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
  <br><br><br><br>
<div class="container">
  <center><h2 class="text-primary">User Register Now !</h2></center>
    <form method="post" action="{{url('user/registration/save')}}" enctype="multipart/form-data">
      @csrf
      <div class="row">
      <div class="col">
        <label >Name*</label>
        <input type="text" class="form-control" type="text" placeholder="Mr xyz" name="name" value="{{ old('name') }}">
      </div><br>
     
      <div class="col">
      <label>User_sponsor_id</label>
      <input type="text" name="user_sponser_id" value="{{Auth::user()->sponser_id}}" class="form-control" >
      </div>
    </div>
  <div class="row">
      <div class="col">
        <label >Email(Provide valid email)</label>
        <input class="form-control" type="email" name="email" placeholder="xyz@domain.com" value="{{ old('email') }}">
      </div>
      <div class="col">
        <label >Phone no.(10-digit Number)</label>
        <input class="form-control" type="text" name="phone_no" placeholder="91*******" value="{{ old('phone_no') }}">
      </div>
    </div><br>
    <div class="row">
      <div class="col">
        <label >Placement ID</label>
        <input class="form-control" type="text" name="placement_id" placeholder="where you want to place the ID" value="{{ old('placement_id') }}">
      </div>
      <div class="col">
        <label >Position*</label>
      <select class="form-control" type="select" name="position" value="{{ old('position') }}">
      <option>Left</option>
      <option>Right</option>
      </select> 
      </div>
    </div><br>
    <div class="row">

      <div class="col">
        <label >e-Pin</label>
        <input  class="form-control" name="e_pin" value="{{ old('e_pin') }}">
      </div>
    </div>
  <br>
  
    <div class="row">
      <div  class="col" style="width: 50%">
      <label for="sel1">State*</label>
      <select class="form-control" type="select" name="states" value="{{ old('states') }}">
      <option>Select State</option>
      <option>Madhya Pradesh</option>
      <option>Uttar Pradesh</option>
      <option>Arunachal Pradesh</option>
      </select> 
        </div>
        <div class="col">
        <label >City*</label>
        <input class="form-control" type="text" name="city" placeholder="" value="{{ old('city') }}">
      </div>
    </div><br>
     <div class="row">
      <div class="col">
        <label >Street Address*</label>
        <input type="text" class="form-control" type="text" placeholder="Flat/House No/Building" name="street_address" value="{{ old('street_address') }}">
      </div><br>
      <div class="col">
        <label >Zip Code*</label>
        <input  class="form-control" type="text" name="zipcode" placeholder="" value="{{ old('zipcode') }}">
      </div>
    </div><br>
    <div class="row">
      <div class="col">
        <label >Password*</label>
        <input type="text" class="form-control" type="text" name="password" value="{{ old('password') }}">
      </div>
      <div class="col">
        <label >Retype Password</label>
        <input class="form-control" type="text" name="password" value="{{ old('password') }}">
      </div>
    </div><br>
    <button type="submit" class="btn btn-warning mt-3">Register</button>
  </form>
</div>
<br><br><br><br>
</body>
</html>