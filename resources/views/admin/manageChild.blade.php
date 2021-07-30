<style type="text/css">
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
<ul>
@foreach($children as $child)
@if($child->sponser_id != null)
	<li>
    <a href="" style="text-transform: uppercase;" class="myDIV">

        @if($child->login_status=='activated')
                                        <img src="{{url('upload/images.png')}}" alt="" >
                                        @elseif($child->login_status=='blocked')
                                        <img src="{{url('upload/download(1).png')}}" alt="" >
                                        @endif
        ({{ $child->sponser_id }}){{ $child->name }}</a>
    <div class="hide" id="example2">
                                    	Name:{{$child->name}}
                                    	<br>
                                    	Sponser Id:{{$child->sponser_id}}<br>PLAN:{{$child->sign_up_plan}}<br>Position:{{$child->position}}<br>{{$child->login_status}}
                                    </div>
	@if(count($child->children))
            @include('admin.manageChild',['children' => $child->children])
        @endif
                                </li>

    @else

    @endif
@endforeach
</ul>
