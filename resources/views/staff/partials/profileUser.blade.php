<form method="POST" action="" class="form-horizontal">
{!! csrf_field() !!}
<fieldset>
  <div class="form-group form-sep">
    <label for="fname" class="control-label col-sm-2">
      {{trans('staff.fname')}}<span class="text-danger">*</span></label>
     <div class="col-sm-8">
    <input id="fname" name="fname" class="form-control" value="{{ Auth::user()->fname }}" type="text">
      </div>
  </div>

  <div class="form-group form-sep">
   <label for="name" class="control-label col-sm-2">
    {{trans('staff.name')}}<span class="text-danger">*</span>
   </label>
     <div class="col-sm-8">
      <input type="text" id="name" name="name" value="{{ Auth::user()->name }}" class="form-control">
     </div>
  </div>

<div class="form-group form-sep">
  <label for="address" class="control-label col-sm-2">{{trans('staff.address')}} <span class="text-danger">*</span></label>
   <div class="col-sm-8">
    <input type="text" id="address" name="address" value="{{ Auth::user()->mobile }}" class="form-control">
   </div>
</div>

<div class="form-group form-sep">
 <label for="zipcode" class="control-label col-sm-2">{{trans('staff.zipcode')}} <span class="text-danger">*</span></label>
  <div class="col-sm-8">
   <input type="text" id="zipcode" name="zipcode" value="{{ Auth::user()->zipcode }}" class="form-control">
  </div>
</div>

<div class="form-group form-sep">
 <label for="city" class="control-label col-sm-2">{{trans('staff.city')}} <span class="text-danger">*</span></label>
  <div class="col-sm-8">
   <input type="text" id="city" name="city" value="{{ Auth::user()->city }}" class="form-control">
  </div>
</div>

<div class="form-group form-sep">
<label for="country" class="control-label col-sm-2">{{trans('staff.country')}} <span class="text-danger">*</span></label>
 <div class="col-sm-8">
  <input type="text" id="country" name="country" value="{{ Auth::user()->country }}" class="form-control">
 </div>
</div>

 <div class="form-group form-sep">
  <label for="bio" class="control-label col-sm-2">{{trans('staff.role')}}</label>
   <div class="col-sm-8">
     Developer
   </div>
  </div>

  <div class="form-group form-sep">
  <label for="avatar" class="control-label col-sm-2">User avatar</label>
  <div class="col-sm-8">
    <div class="thumbnail" style="width: 80px; height: 80px;">
    <img src="{{asset('img/user.png')}}"/></div>
      <span class="btn btn-default btn-file">
      <input type="file" name="avatar" id="avatar"/>
     </span>
   </div>
  </div>

 <div class="form-group">
   <div class="col-sm-8 col-sm-offset-2">
    <button class="btn btn-success" type="submit">{{ trans('app.update') }}</button>
    <button type="reset" class="btn btn-danger">Cancel</button>
  </div>
 </div>
</fieldset>
</form>
