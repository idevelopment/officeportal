@extends('layouts.app')

@section('content')
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
          <div class="col-md-5">
                            <div class="user-col">
                                <div class="media">
                                <a class="pull-left" href="#">
                                    <img class="media-object img-circle" src="{{asset('img/user.png')}}" alt="100x100" data-src="holder.js/100x100" style="width: 100px; height: 100px;">
                                </a>
                                <div class="media-body">
                                    <h3 class="follower-name">Ray Sin</h3>
                                    <div><i class="fa fa-map-marker"></i> San Francisco, California, USA</div>
                                    <div><i class="fa fa-phone"></i> +324987974</div>
                                    <div><i class="fa fa-briefcase"></i> Software Engineer at <a href="">SomeCompany, Inc.</a></div>

                                    <div style="height: 20px;"></div>

                                    <div class="btn-toolbar">
                                            <button class="btn btn-default"><i class="fa fa-envelope"></i> Contact</button>

                                    </div><!-- btn-toolbar -->
                                </div><!-- media-body -->
                            </div>
                            </div>
                        </div><!--.col-5-->

      </div>
    </div>
@endsection
