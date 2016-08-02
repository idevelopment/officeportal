@extends('layouts.app')

@section('content')
<div class="page-header">
 <h2>Documentations</h2>
</div>
<div class="clearfix">&nbsp;</div>

<div class="row">
  <div class="col-md-11 col-sm-11  col-md-offset-2">

  <div class="col-md-3 col-sm-6">
  <div class="serviceBox2">
                              <div class="service-icon">
                                  <i class="fa  fa-bar-chart"></i>
                              </div>
                              <div class="service-content">
                                  <h3>
                                      <a href="#">Administration</a>
                                  </h3>
                                  <p>
                                      Find all the procedures regarding sales and invoices
                                  </p>
                              </div>
                          </div>
                      </div>

                      <div class="col-md-3 col-sm-6">
                          <div class="serviceBox2">
                              <div class="service-icon">
                                  <i class="fa fa-gears"></i>
                              </div>
                              <div class="service-content">
                                  <h3>
                                      <a href="#">Provisioning</a>
                                  </h3>
                                  <p>
                                    Fin all the procedures regarding service provisioning.
                                  </p>
                              </div>
                          </div>
                      </div>

                      <div class="col-md-3 col-sm-6">
                          <div class="serviceBox2">
                              <div class="service-icon">
                                  <i class="fa fa-life-ring"></i>
                              </div>
                              <div class="service-content">
                                  <h3>
                                      <a href="#">Support</a>
                                  </h3>
                                  <p>
                                      Find answers to all your questions regarind customer support
                                  </p>
                              </div>
                          </div>
                      </div>

               </div>
</div>
               <div class="row">
                 <div class="col-md-11 col-sm-11  col-md-offset-2">
                   <form class="form-horizontal">
  <div class="form-group">
    <label class="control-label">&nbsp;</label>

    <div class="col-sm-8">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Search">
    </div>

    <div class="col-sm-2">
      <button type="submit" class="btn btn-default">Search</button>
    </div>
  </div>
</form>
                  </div>
                </div>

@endsection
