<div class="form-group">
    <label for="department" class="control-label col-sm-2">
      {{trans('staff.department')}} <span class="text-danger">*</span></label>
     <div class="col-sm-8">
       <select name="department" id="department" class="form-control">
         <option value="">-- Please select --</option>
         @foreach($departments as $department)
          <option value="{!! $department->name !!}">{!! $department->name !!}</option>
         @endforeach
       </select>
      </div>
  </div>

  <div class="form-group">
      <label for="role" class="control-label col-sm-2">
        {{trans('staff.role')}} <span class="text-danger">*</span></label>
       <div class="col-sm-8">
         <select name="role" id="role" class="form-control">
           <option value="">-- Please select --</option>
           @foreach($roles as $role)
            <option value="{!! $role->name !!}">{!! $role->name !!}</option>
           @endforeach
         </select>
        </div>
    </div>
