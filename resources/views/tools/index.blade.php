@extends('layouts.app')

@section('content')
<div class="page-header">
 <h2>Tools</h2>
</div>
<div class="clearfix">&nbsp;</div>

<div class="col-md-10 col-sm-10  col-md-offset-1">
<div class="row">

    <div class="col-md-6 col-sm-6">
   <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">General</div>
      <div class="panel-body">
        <ul>
          <li><a href="https://mail.idevelopment.be:8443" target="_blank">HCRM</a></li>
          <li><a href="https://mail.idevelopment.be:8443" target="_blank">OpenProvider</a></li>
          <li><a href="https://mail.idevelopment.be:8443" target="_blank">Plesk panel</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="col-md-6 col-sm-6">
 <div class="panel-group">
  <div class="panel panel-default">
    <div class="panel-heading">Communication</div>
    <div class="panel-body">
      <ul>
        <li><a href="https://www.facebook.com/groups/idevelopmentbe/" target="_blank">Facebook</a></li>
        <li><a href="" target="_blank">Twitter</a></li>
      </ul>
    </div>
  </div>
</div>
</div>

</div>

<div class="row">

  <div class="col-md-6 col-sm-6">
   <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">Provisioning</div>
      <div class="panel-body">
        <ul>
          <li><a href="https://mail.idevelopment.be:8443" target="_blank">Plesk panel</a></li>
          <li><a href="https://serviceforce.office.idevelopment.be" target="_blank">SericeForce</a></li>
          <li><a href="{url('sar')}" target="_blank">Service Access Requests</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>


<div class="col-md-6 col-sm-6">
  <div class="panel panel-default">
    <div class="panel-heading">Voice</div>
    <div class="panel-body">
      <ul>
        <li><a href="#" target="_blank">FreePBX</a></li>
        <li><a href="https://www.crdc.be" target="_blank">CRDC</a></li>
        <li><a href="http://www.wittegids.be" target="_blank">Witte Gids</a></li>
        <li><a href="http://www.goudengids.be/" target="_blank">Gouden Gids</a></li>

      </ul>
  </div>
</div>
</div>
    </div>
</div>

@endsection
