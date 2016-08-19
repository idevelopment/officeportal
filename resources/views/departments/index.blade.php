@extends('layouts.app')

@section('content')
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
     <table class="table table-bordered table-striped">
       <thead>
         <th>Department</th>
         <th>Public inbox</th>
         <th>Public phone</th>
         <th class="text-danger">Red Phone</th>
         <th>Opening hours</th>
       </thead>
       <tbody>
         <tr>
           <td>Administration</td>
           <td><a href="mailto:support@idevelopment.be">support@idevelopment.be</a></td>
           <td>+32</td>
           <td>3000</td>
           <td>
             <span class="fa fa-phone"></span> 9:00 - 17:30<br>
             <span class="fa fa-envelope"></span> 9:00 - 17:30<br>
           </td>
         </tr>

         <tr>
           <td>Sales</td>
           <td><a href="mailto:sales@idevelopment.be">sales@idevelopment.be</a></td>
           <td>+32</td>
           <td>2000</td>
           <td>
             <span class="fa fa-phone"></span> 9:00 - 17:30<br>
             <span class="fa fa-envelope"></span> 9:00 - 17:30<br>
           </td>
         </tr>

         <tr>
           <td>Support</td>
           <td><a href="mailto:support@idevelopment.be">support@idevelopment.be</a></td>
           <td>+32</td>
           <td>3000</td>
           <td>
             <span class="fa fa-phone"></span> 9:00 - 17:30<br>
             <span class="fa fa-envelope"></span> 00:00 - 24:00<br>
           </td>
         </tr>

       </tbody>
     </table>
   </div>
 </div>
@endsection
