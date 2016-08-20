@extends('layouts.app')

@section('content')
<div class="page-header">
 <h2>Register a new application</h2>
</div>

    <div class="row">
    <div class="col-md-10 col-lg-10 col-md-offset-1">
     <form action="">
        <div class="row">
         <div class="col-md-6">
           <div class="form-group">
             <label for="name">Application name <span class="text-danger">*</span></label>
             <input type="text" id="name" name="name" class="form-control">
           </div>

           <div class="form-group">
            <label for="link">Application link <span class="text-danger">*</span></label>
            <input type="text" id="link" name="link" placeholder="https://" class="form-control">
           </div>
         </div>

        <div class="col-md-6">
         <div class="form-group">
          <label for="group">Application group <span class="text-danger">*</span></label>
          <select name="group" id="group" class="form-control">
            <option value="">-- Please select --</option>
            <option value="administration">Administration</option>
            <option value="communication">Communication</option>
          </select>
        </div>

        <div class="form-group">
         <label for="roles">Roles <span class="text-danger">*</span></label>
         <select name="roles" id="roles" class="form-control">
           <option value="">-- Please select --</option>
           @foreach($roles as $role)
            <option value="{!! $role->name !!}">{!! $role->name !!}</option>
           @endforeach
         </select>
       </div>
       </div>
     </div>

     <div class="row">
      <div class="col-md-6">
       <div class="form-group">
         <div class="checkbox">
           <label>
             <input type="checkbox" name="externWindow" value="true">Open in new window
           </label>
         </div>
       </div>
     </div>

     </div>

     <div class="form-group">
       <label for="description">Description <span class="text-danger">*</span></label>
       <textarea id="description" name="description" rows="10" class="form-control"></textarea>
     </div>

    <hr/>

    <button type="submit" class="btn btn-sm btn-success"><span class="fa fa-check"></span> Send</button>
    <button type="reset" class="btn btn-sm btn-danger">Cancel</button>
   </form>
  </div>
</div>
@endsection
