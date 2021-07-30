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
	<li>
    <a href="" style="text-transform: uppercase;" class="myDIV"><img src="{{url('upload/download(1).png')}}" title="{{$child->name}}" alt="">({{ $child->user_sponser_id }}){{ $child->name }}</a>
    <div class="hide" id="example2">
                                    	Name:{{$child->name}}
                                    	<br>
                                    	Sponser Id:{{$child->sponser_id}}<br>PLAN:{{$child->sign_up_plan}}<br>Position:{{$child->position}}<br>{{$child->login_status}}
                                    </div>
	@if(count($child->children))
            @include('user.manageChild',['children' => $child->children])
        @endif
	</li>
@endforeach
</ul>