@extends("admin.master")
@section("content")
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
* {
	padding: 0px;
	margin: 0px;
	box-sizing: border-box;
}
body {
	height: 100vh;
	display: grid;
	align-items: center;
	font-family: 'Poppins', sans-serif;
}
.tree {
	width: 100%;
	height: auto;
	text-align: center;
}
.tree ul {
    padding-top: 10px;
    padding-bottom: 0px;
    padding-right: 0px;
    padding-left: 0px;
    position: relative;
    transition: .5s;
}
.tree li {
	display: inline-table;
    text-align: center;
    list-style-type: none;
    position: relative;
    padding: 10px;
    transition: .5s;
}
.tree li::before, .tree li::after {
	content: '';
	position: absolute;
	top: 0;
	right: 50%;
	border-top: 1px solid #ccc;
	width: 51%;
	height: 10px;
}
.tree li::after {
	right: auto;
	left: 50%;
	border-left: 1px solid #ccc;
}
.tree li:only-child::after, .tree li:only-child::before {
	display: none;
}
.tree li:only-child {
	padding-top: 0;
}
.tree li:first-child::before, .tree li:last-child::after {
	border: 0 none;
}
.tree li:last-child::before {
	border-right: 1px solid #ccc;
	border-radius: 0 5px 0 0;
	-webkit-border-radius: 0 5px 0 0;
	-moz-border-radius: 0 5px 0 0;
}
.tree li:first-child::after {
	border-radius: 5px 0 0 0;
	-webkit-border-radius: 5px 0 0 0;
	-moz-border-radius: 5px 0 0 0;
}
.tree ul ul::before {
	content: '';
	position: absolute;
	top: 0;
	left: 50%;
	border-left: 1px solid #ccc;
	width: 0;
	height: 20px;
}
.tree li a {
	border: 1px solid #ccc;
	padding: 10px;
	display: inline-grid;
	border-radius: 5px;
	text-decoration-line: none;
	border-radius: 5px;
	transition: .5s;
    width: 150px;
}
.tree li a img {
	width: 50px;
	height: 50px;
	margin-bottom: 10px !important;
	border-radius: 100px;
	margin: auto;
}
.tree li a span {
	border: 1px solid #ccc;
	border-radius: 5px;
	color: #666;
	padding: 8px;
	font-size: 12px;
	text-transform: uppercase;
	letter-spacing: 1px;
	font-weight: 500;
}
/*Hover-Section*/
.tree li a:hover, .tree li a:hover i, .tree li a:hover span, .tree li a:hover+ul li a {
	background: #c8e4f8;
	color: #000;
	border: 1px solid #94a0b4;
}
.tree li a:hover+ul li::after, .tree li a:hover+ul li::before, .tree li a:hover+ul::before, .tree li a:hover+ul ul::before {
	border-color: #94a0b4;
}
.hide {
  display: none;
}

.myDIV:hover + .hide {
  display: block;
  color: red;
}
#example2 {
  border: 1px solid;
  padding: 10px;
  box-shadow: 5px 10px 18px #888888;
}
	</style>
</head>
<body>
	<div class="page-wrapper">
      <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Network</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">User Tree</li>
              </ol>
            </nav>
          </div>
        </div>
        <!--end breadcrumb-->
        <div class="row">
          <div class="col-xl-12 mx-auto">
            <h6 class="mb-0 text-uppercase">User Tree</h6>
            <hr/>
            <div class="card border-top border-0 border-4 border-primary">
              <div class="card-body p-9">
                <div class="card-title d-flex align-items-center">
                  <div><i class="bx bxs-user me-1 font-22 text-primary"></i>
                  </div>
                  <h5 class="mb-0 text-primary">User Tree</h5>
                </div>
                <hr>

	                            <left><div class="tree" class="center" class="myDIV">

<ul>
                        @foreach($sponsr as $category)
                            <li>
                                <ul>
                                    <a href=""style="text-transform: uppercase;"  data-toggle="popover" data-content="Some content inside the popover" class="myDIV">
                                        @if($category->login_status=='activated')
                                        <img src="{{url('upload/images.png')}}" alt="" >
                                        @elseif($category->login_status=='blocked')
                                        <img src="{{url('upload/download(1).png')}}" alt="" >
                                        @endif
                                            {{ $category->sponser_id }} {{ $category->name }}


                                    </a>
                                    <div class="hide" id="example2">
                                    	Name:{{$category->name}}
                                    	<br>
                                    	Sponser Id:{{$category->sponser_id}}<br>PLAN:{{$category->sign_up_plan}}<br>Position:{{$category->position}}<br>{{$category->login_status}}
                                    </div>
                                     @if(count($category->children))
                                        @include('admin.manageChild',['children' => $category->children])
                                    @endif

                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </div></left>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</body>
</html>

@endsection
