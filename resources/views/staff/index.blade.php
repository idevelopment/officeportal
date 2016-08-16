@extends('layouts.app')

@section('content')
<div class="page-header ">
 <h1>User management</h1>
</div>
    <div class="row">
        <div class="col-md-3">
          <div class="heading_b"><span class="heading_text">Categories</span></div>
              <div class="list-group">
              <a href="{{ url('/staff') }}" class="active list-group-item">All</a>
              <a href="{{ url('/staff/create') }}" class="list-group-item">Create user</a>
              <a href="javascript:void(0)" class="list-group-item">Manage departments</a>
              <a href="javascript:void(0)" class="list-group-item">Manage roles</a>
            </div>
          </div>

        <div class="col-md-8">
        <div class="row">
            <div class="col-sm-4 col-md-4 col-sep-md">
                <select name="contactList_filter" id="contactList_filter" class="form-control input-sm">
                    <option value="">-- Select Department --</option>
                	<option value="Administration">Administration</option>
                	<option value="Technical_support">Technical support</option>
                	<option value="Devops">Devops</option>
                	<option value="Security">Security</option>
                	<option value="Management">Management</option>
                </select>
            </div>
            <div class="col-sm-4 col-md-3">
                <input type="text" name="search" id="search" class="form-control input-sm" placeholder="Find user">
            </div>
            <div class="col-sm-4 col-md-3">
                <button class="btn btn-primary btn-sm">Filter</button>
            </div>
        </div>

        <div class="row">
          <hr/>
          @foreach($users as $userItem)
                  <ul class="contact_list">
                      <li class="contact_item">
                          <a href="#">
                              <img class="img-circle" src="{{asset('img/user.png')}}" alt=""/>
                              <span class="contact_content">
                                  <h2>{!! $userItem->name !!}</h2>
                                  <span class="text-muted">Manager</span>
                                  <small class="text-muted">
                                    {!! $userItem->email !!}
                                  </small>
                              </span>
                          </a>
                      </li>
                      @endforeach
                      <li class="contact_item">
                          <a href="#">
                              <img class="img-circle" src="{{asset('img/user.png')}}" alt=""/>
                              <span class="contact_content">
                                  <h2>Tim Joosten</h2>
                                  <span class="text-muted">Devops</span>
                                  <small class="text-muted">tim.joosten@idevelopment.be</small>
                              </span>
                          </a>
                      </li>

                    </ul>
        </div>
          </div><!--.col-5-->
    </div>
@endsection
