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
     @if (session('message') != null)
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <p class="alert alert-success">
                                {{ session('message') }}
                            </p>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                    @endif
                    @if (session('notmessage') != null)
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <p class="alert alert-danger">
                                {{ session('notmessage') }}
                            </p>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                    @endif
    <br><br><br><br>
    <div class="container">
        <center>
            <h2 class="text-primary">Member Register Now !</h2>
        </center>
        <form method="POST" action="{{ url('member/update/save') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$edit->id}}">
            <div class="row">
                <div class="col">
                    <label>Name*</label>
                    <input type="text" class="form-control" type="text" placeholder="Mr xyz" name="name"
                        value="{{$edit->name}}" >
                </div><br>

                <div class="col">
                    <label>Member_sponsor_id</label>
                    <input type="text" name="user_sponser_id" value="{{$edit->user_sponser_id}}"
                        class="form-control" readonly>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <label>Email(Provide valid email)</label>
                    <input class="form-control" type="email" name="email" placeholder="xyz@domain.com"
                        value="{{$edit->email}}" >
                </div>
                <div class="col">
                    <label>Phone no.(10-digit Number)</label>
                    <input class="form-control" type="text" name="phone_no" placeholder="91*******"
                        value="{{$edit->phone_no}}" >
                </div>
            </div><br>
            <div class="row">
                <div class="col">
                    <label>Placement ID</label>
                    <input class="form-control" type="text" name="placement_id"
                        placeholder="where you want to place the ID" value="{{$edit->placement_id}}" >
                </div>
                <div class="col">
                    <label>Position*</label>
                    <select class="form-control" type="select" name="position" value="{{$edit->position}}" >
                        <option>Left</option>
                        <option>Right</option>
                    </select>
                </div>
            </div><br>
            <div class="row">
                <div class="col">
                    <label>Sign Up Plan*</label>
                    <select class="form-control" type="select" name="sign_up_plan" value="{{$edit->sign_up_plan}}" >
                        <option selected value="A">Plan A. Price :<span>&#8377;</span>500.00</option>
                        <option value="B">Plan B. Price :<span>&#8377;</span>10,000.00</option>
                        <option value="C">Plan C. Price :<span>&#8377;</span>30,000.00</option>
                        <option value="D">Plan D. Price :<span>&#8377;</span>100,000.00</option>
                    </select>
                </div>
                <div class="col">
                    <label>e-Pin</label>
                    <input class="form-control" name="e_pin" value="{{$edit->e_pin}}" >
                </div>
            </div>
            <br>
            <div class="checkbox">
                <h6 class="text-primary">Pay later</h6>
                <label><input type="checkbox" value="" name="pay" value="{{$edit->pay}}"> I'll pay later</label>
            </div>
            <br>
            <div class="row">
                <div class="col" style="width: 50%">
                    <label for="sel1">State*</label>
                    <input type="text" name="states" value="{{$edit->states}}" class="form-control">
                </div>
                <div class="col">
                    <label>City*</label>
                    <input class="form-control" type="text" name="city" placeholder="" value="{{$edit->city}}" >
                </div>
            </div><br>
            <div class="row">
                <div class="col">
                    <label>Street Address*</label>
                    <input type="text" class="form-control" type="text" placeholder="Flat/House No/Building"
                        name="street_address" value="{{$edit->street_address}}" >
                </div><br>
                <div class="col">
                    <label>Zip Code*</label>
                    <input class="form-control" type="text" name="zipcode" placeholder=""
                        value="{{$edit->zipcode}}" >
                </div>
            </div><br>
            <div class="row">
                <div class="col">
                    <label>Password*</label>
                    <input type="text" class="form-control" type="text" name="password"
                        value="{{$edit->password}}">
                </div>
                <div class="col">
                    <label>Retype Password</label>
                    <input class="form-control" type="text" name="password" value="{{$edit->password}}">
                </div>
            </div><br>
            <button type="submit" class="btn btn-warning mt-3">Update</button>
        </form>
    </div>
    <br><br><br><br>
</body>

</html>
