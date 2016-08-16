<div class="form-group">
    <label for="fname" class="control-label col-sm-2">
      {{trans('staff.fname')}}<span class="text-danger">*</span></label>
     <div class="col-sm-8">
    <input id="fname" name="fname" class="form-control" value="{{ Auth::user()->fname }}" type="text">
      </div>
  </div>

  <div class="form-group">
   <label for="name" class="control-label col-sm-2">
    {{trans('staff.name')}}<span class="text-danger">*</span>
   </label>
     <div class="col-sm-8">
      <input type="text" id="name" name="name" value="{{ Auth::user()->name }}" class="form-control">
     </div>
  </div>

<div class="form-group">
  <label for="address" class="control-label col-sm-2">{{trans('staff.address')}} <span class="text-danger">*</span></label>
   <div class="col-sm-8">
    <input type="text" id="address" name="address" value="{{ Auth::user()->mobile }}" class="form-control">
   </div>
</div>

<div class="form-group">
 <label for="zipcode" class="control-label col-sm-2">{{trans('staff.zipcode')}} <span class="text-danger">*</span></label>
  <div class="col-sm-8">
   <input type="text" id="zipcode" name="zipcode" value="{{ Auth::user()->zipcode }}" class="form-control">
  </div>
</div>

<div class="form-group">
 <label for="city" class="control-label col-sm-2">{{trans('staff.city')}} <span class="text-danger">*</span></label>
  <div class="col-sm-8">
   <input type="text" id="city" name="city" value="{{ Auth::user()->city }}" class="form-control">
  </div>
</div>

<div class="form-group">
<label for="country" class="control-label col-sm-2">{{trans('staff.country')}} <span class="text-danger">*</span></label>
 <div class="col-sm-8">
  <input type="text" id="country" name="country" value="{{ Auth::user()->country }}" class="form-control">
 </div>
</div>
