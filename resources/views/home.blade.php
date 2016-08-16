@extends('layouts.app')

@section('content')

<div class="row">
  <div class="jumbotron">
<h2>Welcome to the office portal</h2><hr>
<p>This portal is to give all members from iDevelopment the correct answers and tools</p>
</div>
</div>

    <div class="row">
      <div class="col-md-3">
         <h3 class="heading_a">Shortcuts</h3>
          <ul class="list-group">
           <li class="list-group-item">
             <a href="/contact/index">
               <span class="shortcut-icon ssc-icon icon-personal-details icon-larger"></span>
               <span> Contact Management </span>
                 </a>
             </li>

             <li class="list-group-item">
                 <a href="/en/overview">
                   <span class="shortcut-icon ssc-icon icon-server-information icon-larger"></span>
                   <span>All services</span>
                 </a>
             </li>

             <li class="list-group-item">
                 <a href="/finance/index">
                  <span class="fa fa-file"></span>
                  <pan>Open Access Requests</span>
                 </a>
             </li>
             </ul>
      </div>

      <div class="col-md-9">
        <div class="row">
        <h3 class="heading_a">Recent activity</h3>
        <ul class="notifications">
  <li class="notification">
      <div class="media">
        <div class="media-left">
          <div class="media-object">
            <img data-src="holder.js/50x50?bg=cccccc" class="img-circle" alt="Name">
          </div>
        </div>
        <div class="media-body">
          <strong class="notification-title"><a href="#">Dave Lister</a> commented on <a href="#">DWARF-13 - Maintenance</a></strong>
          <p class="notification-desc">I totally don't wanna do it. Rimmer can do it.</p>

          <div class="notification-meta">
            <small class="timestamp">27. 11. 2015, 15:00</small>
          </div>
        </div>
      </div>
  </li>


  <li class="notification">
      <div class="media">
        <div class="media-left">
          <div class="media-object">
            <img data-src="holder.js/50x50?bg=cccccc" class="img-circle" alt="Name">
          </div>
        </div>
        <div class="media-body">
          <strong class="notification-title"><a href="#">James Bond</a> resolved <a href="#">B-007 - Desolve Spectre organization</a></strong>

          <div class="notification-meta">
            <small class="timestamp">1. 9. 2015, 08:00</small>
          </div>

        </div>
      </div>
  </li>
</ul>

        </div>

    </div>
@endsection
