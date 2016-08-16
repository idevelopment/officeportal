<form method="POST" action="" class="form-horizontal">
{!! csrf_field() !!}
<fieldset>
  <div class="form-group form-sep">
    <label for="email" class="control-label col-sm-2">{{trans('staff.email')}} <span class="text-danger">*</span></label>
     <div class="col-sm-8">
      <input type="text" id="email" name="email" value="{{ Auth::user()->email }}" class="form-control">
     </div>
 </div>

 <div class="form-group form-sep">
   <label for="phone" class="control-label col-sm-2">{{trans('staff.phone')}} <span class="text-danger">*</span></label>
    <div class="col-sm-8">
     <input type="text" id="phone" name="phone" value="{{ Auth::user()->phone }}" class="form-control">
    </div>
</div>

<div class="form-group form-sep">
  <label for="mobile" class="control-label col-sm-2">{{trans('staff.mobile')}} <span class="text-danger">*</span></label>
   <div class="col-sm-8">
    <input type="text" id="mobile" name="mobile" value="{{ Auth::user()->mobile }}" class="form-control">
   </div>
</div>

<div class="form-group form-sep">
  <label for="internPhone" class="control-label col-sm-2">{{trans('staff.internPhone')}}</label>
   <div class="col-sm-8">
    <input type="text" id="phone" name="internPhone" value="{{ Auth::user()->internPhone }}" class="form-control">
   </div>
</div>

<div class="form-group form-sep">
  <label for="skype" class="control-label col-sm-2">{{trans('staff.skype')}}</label>
   <div class="col-sm-8">
    <input type="text" id="skype" name="skype" value="{{ Auth::user()->skype }}" class="form-control">
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
