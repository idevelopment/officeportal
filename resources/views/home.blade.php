@extends('layouts.app')

@section('content')
<div class="container-fluid">
<div class="page-title">
 <h1>User management</h1>
</div>
    <div class="row">
        <div class="col-md-3">
          <ul class="nav nav-pills list-group nav-stacked">
           <li>
            <a href="/users/register"><span class="fa fa-users fa-lg"></span>
              <span>List users</span>
            </a>
           </li>

           <li>
            <a href="/users/register"><span class="fa fa-user fa-lg"></span>
              <span>Create user</span>
            </a>
           </li>

           <li>
            <a href="/contact/index"><span class="fa fa-user fa-lg"></span>
              <span>Manage roles</span>
            </a>
           </li>

           <li>
            <a href="/contact/index"><span class="fa fa-user fa-lg"></span>
              <span>Contact Management</span>
            </a>
           </li>                      
    </ul>
        </div>

        <div class="col-md-9">
            <div class="panel panel-default">
                <div class="panel-heading">Recent users</div>

                <div class="panel-body">
                    <table class="table table-striped">
                      <thead>
                          <th>Name</th>
                          <th>Department</th>
                          <th>Phone</th>
                          <th></th>
                      </thead>
                      <tbody>
                          <tr>
                              <td>Glenn Hermans</td>
                              <td>Management</td>
                              <td>+32498797417</td>
                              <td></td>
                          </tr>
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
