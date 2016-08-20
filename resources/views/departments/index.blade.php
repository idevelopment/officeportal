@extends('layouts.app')
@section('content')
@can ('view-departments')

<div class="page-header ">
 <h1>Departments</h1>
</div>
<div class="jumbotron alert-info">
<h3><i class="fa fa-info-circle"></i> The list below displays all departments that you can contact when you have an urgent question.</h3>
<p class="text-center">Please keep in mind that <strong class="text-danger">red phone numbers</strong> are internal voip numbers.</p>
<p></p>
</div>


 <div class="row">
   <div class="col-md-12">
     @can('create-departments')
     <div class="btn-toolbar">
       <a href="{{route('departments.register')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Create new department</a>
     </div>
     <div class="clearfix">&nbsp;</div>
     @endcan
     <table class="table table-bordered table-striped">
       <thead>
         <th class="col-md-3">Department</th>
         <th>Public inbox</th>
         <th>Public phone</th>
         <th class="text-danger">Red Phone</th>
         <th>Opening hours</th>
       </thead>
       <tbody>
         @foreach($departments as $department)
         <tr>
           <td>{!! $department->name !!}</td>
           <td><a href="mailto:{!! $department->mailbox !!}">{!! $department->mailbox !!}</a></td>
           <td>{!! $department->phone !!}</td>
           <td>{!! $department->redphone !!}</td>
           <td>
             <span class="fa fa-phone"></span> 9:00 - 17:30<br>
             <span class="fa fa-envelope"></span> 9:00 - 17:30<br>
           </td>
         </tr>
         @endforeach
       </tbody>
     </table>
   </div>
 </div>
@endcan
@endsection
