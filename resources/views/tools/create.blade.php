@extends('layouts.app')

@section('content')
<div class="page-header">
 <h2>Create a new link</h2>
</div>

    <div class="row">
        <div class="col-md-3">
          <div class="heading_b"><span class="heading_text">Categories</span></div>
              <div class="list-group">
                <a href="{{url('tools/list')}}" class="list-group-item">All</a>
              <a href="{{url('tools/register')}}" class="active list-group-item">Create a new link</a>
            </div>
          </div>

    <div class="col-md-9 col-lg-9">
     <form action="">
        <div class="row">
         <div class="col-md-6">
           <div class="form-group">
             <label for="appname">Application name <span class="text-danger">*</span></label>
             <input type="text" id="appname" name="appname" class="form-control">
           </div>
         </div>

        <div class="col-md-6">
         <div class="form-group">
          <label for="mail_cc">Application group <span class="text-danger">*</span></label>
          <select name="group" id="group" class="form-control input-sm">
              <option value="">-- Select group --</option>
            <option value="administration">Administration</option>
            <option value="communication">Communication</option>
          </select>
        </div>
       </div>
     </div>

     <div class="row">
      <div class="col-md-6">
       <div class="form-group">
        <label for="appname">Application link <span class="text-danger">*</span></label>
        <input type="text" id="appname" name="appname" placeholder="https://" class="form-control">
       </div>
     </div>
     <div class="col-md-6">
       <div class="clearfix">&nbsp;</div>
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
       <textarea id="description" name="description" class="form-control"></textarea>
     </div>

    <hr/>

    <button type="submit" class="btn btn-sm btn-success"><span class="fa fa-check"></span> Send</button>
    <button type="reset" class="btn btn-sm btn-danger">Cancel</button>
   </form>
  </div>
</div>
@endsection
