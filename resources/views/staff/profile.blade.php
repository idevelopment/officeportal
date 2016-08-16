@extends('layouts.app')
@section('content')
<div class="clearfix">&nbsp;</div>
<div class="row">
 <div class="col-sm-6">
   <img class="user_profile_img" src="{{asset('img/user.png')}}" alt="" width="76" height="76" />
   <h1 class="user_profile_name"> {{ Auth::user()->fname }} {{ Auth::user()->name }}</h1>
   <p class="user_profile_info">Web Developer</p>
 </div>
</div>

 <hr/>

<div class="row">
 <div class="col-md-12">

   <!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
  <li role="presentation" class="active"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">General data</a></li>
  <li role="presentation"><a href="#contact" aria-controls="profile" role="tab" data-toggle="tab">Contact details</a></li>
  <li role="presentation"><a href="#password" aria-controls="messages" role="tab" data-toggle="tab">Password management</a></li>
  <li role="presentation"><a href="#apps" aria-controls="settings" role="tab" data-toggle="tab">Applications</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="profile">
    @include('staff/partials/profileUser')
  </div>
  <div role="tabpanel" class="tab-pane" id="contact">
   @include('staff/partials/profileContact')
 </div>
  <div role="tabpanel" class="tab-pane" id="password">
    @include('staff/partials/profilePassword')
  </div>
  <div role="tabpanel" class="tab-pane" id="apps">
    @include('staff/partials/profileApps')
  </div>
</div>



 </div>
</div>
@endsection
