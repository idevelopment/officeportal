@extends('layouts.app')
@section('content')
<div class="page-header">
<h2>Create user</h2>
</div>
<div class="col-md-3">
  <div class="heading_b"><span class="heading_text">Categories</span></div>
      <div class="list-group">
      <a href="{{ url('/staff') }}" class="active list-group-item">All</a>
      <a href="{{ url('/staff/create') }}" class="list-group-item">Create user</a>
      <a href="javascript:void(0)" class="list-group-item">Manage departments</a>
      <a href="javascript:void(0)" class="list-group-item">Manage roles</a>
    </div>
  </div>

<div class="col-md-9">
  <div class="clearfix">&nbsp;</div>
   <form method="POST" action="{{url('staff/save')}}" class="form-horizontal">
    <div id="wizard_form" class="wizard">
  {!! csrf_field() !!}
  <h3>Profile details</h3>
   <section>
     @include('staff/partials/create/profileUser')
   </section>

  <h3>Contact details</h3>
   <section>
     <div class="form-group">
         <label for="email" class="control-label col-sm-2">
           {{trans('staff.email')}} <span class="text-danger">*</span></label>
          <div class="col-sm-8">
         <input id="email" name="email" class="form-control" value="" type="text">
           </div>
       </div>

    <div class="form-group">
        <label for="mobile" class="control-label col-sm-2">
          {{trans('staff.mobile')}} <span class="text-danger">*</span></label>
         <div class="col-sm-8">
        <input id="mobile" name="mobile" class="form-control" value="" type="text">
          </div>
      </div>

      <div class="form-group">
       <label for="name" class="control-label col-sm-2">
        {{trans('staff.phone')}}
       </label>
         <div class="col-sm-8">
          <input type="text" id="name" name="name" value="{{ Auth::user()->name }}" class="form-control">
         </div>
      </div>

    <div class="form-group">
      <label for="skype" class="control-label col-sm-2">{{trans('staff.skype')}} </label>
       <div class="col-sm-8">
        <input type="text" id="skype" name="skype" value="" class="form-control">
       </div>
    </div>

   </section>

 <h3>Access details</h3>
  <section>
   <p><strong>Comments</strong></p>
   <p>JavaScript has support for single- and multi-line comments. Comments are ignored by the JavaScript engine and therefore have no side-effects on the outcome of the program. Use comments to document the code for other developers. Libraries like JSDoc are available to help generate project documentation pages based on commenting conventions.</p>

     </section>
</div>
</form>

</div>
<script>
     $(function() {
         // wizard
         yukon_steps.init();
     })
 </script>

<script>
// wizard
	yukon_steps = {
		init: function() {
			if ($("#wizard_101").length) {
				// initialize wizard
				$("#wizard_101").steps({
					headerTag: 'h3',
					bodyTag: "section",
					titleTemplate: "<span class=\"title\">#title#</span>",
					enableAllSteps: false,
					enableFinishButton: false,
					transitionEffect: "slideLeft",
					labels: {
						next: "<div class=\"pull-right\"><button class=\"btn btn-default\"> Next <i class=\"fa fa-angle-right\"></i></button></div>",
						previous: "<div class=\"pull-left\"><button class=\"btn btn-default\"> <i class=\"fa fa-angle-left\"></i> Previous</button></div>",
						current: "",
						finish: "Agree"
					},
					onStepChanged: function (event, currentIndex, priorIndex) {
						// adjust wizard height
						yukon_steps.setContentHeight('#wizard_101')
					}
				});
				// set initial wizard height
				yukon_steps.setContentHeight('#wizard_101');
                // rezie wizard on window resize
                $(window).on('resize',function() {
                    yukon_steps.setContentHeight('#wizard_101');
                })
			}

			if ($("#wizard_form").length) {
				var wizard_form = $('#wizard_form');
				// initialize wizard
				wizard_form.steps({
					headerTag: 'h3',
					bodyTag: "section",
					enableAllSteps: false,
					titleTemplate: "<span class=\"title\">#title#</span>",
					transitionEffect: "slideLeft",
					labels: {
            next: "<div class=\"pull-right\"><button class=\"btn btn-primary\"> Next <i class=\"fa fa-arrow-right\"></i></button></div>",
						previous: "<div class=\"pull-left\"><button class=\"btn btn-default\"> <i class=\"fa fa-arrow-left\"></i> Previous</button></div>",
						current: "",
						finish: "<div class=\"pull-right\"><button class=\"btn btn-success\"><i class=\"fa fa-check\"></i> Save</button></div>"
					},

					onStepChanged: function (event, currentIndex, priorIndex) {
						// adjust wizard height
						yukon_steps.setContentHeight('#wizard_form');
					},
					onFinished: function(event, currentIndex) {
						alert("Submitted!");

          wizard_form.submit();
					}
				});
				// set initial wizard height
				yukon_steps.setContentHeight('#wizard_form');
                // rezie wizard on window resize
                $(window).on('resize',function() {
                    yukon_steps.setContentHeight('#wizard_form');
                })
            }
        },
		setContentHeight: function($wizard) {
			setTimeout(function() {
				var cur_height = $($wizard).children('.content').children('.body.current').outerHeight();
				$($wizard).find('.content').height(cur_height);
			},0);
		}
	};
</script>
@endsection
