@extends('layouts.app')
@section('content')
<div class="page-header">
<h2>Create user</h2>
</div>
<div class="col-md-3">
  @include('staff/partials/sidebar')

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
     @include('staff/partials/create/contact')
   </section>

 <h3>Access details</h3>
  <section>
    @include('staff/partials/create/access')

  </section>
</div>
</form>

</div>
<script>
     $(function() {
         // wizard
         wizard.init();
     })
 </script>

<script>
// wizard
	wizard = {
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
						wizard.setContentHeight('#wizard_101')
					}
				});
				// set initial wizard height
				wizard.setContentHeight('#wizard_101');
                // rezie wizard on window resize
                $(window).on('resize',function() {
                    wizard.setContentHeight('#wizard_101');
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
						wizard.setContentHeight('#wizard_form');
					},
					onFinished: function(event, currentIndex) {
          wizard_form.submit();
          alert("Submitted!");

					}
				});
				// set initial wizard height
				wizard.setContentHeight('#wizard_form');
                // rezie wizard on window resize
                $(window).on('resize',function() {
                    wizard.setContentHeight('#wizard_form');
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
