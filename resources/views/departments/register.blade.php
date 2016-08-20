@extends('layouts.app')
@section('content')
@can ('create-departments')
<div class="page-header ">
 <h2>Create department</h2>
</div>

<form action="{{route('departments.store')}}" method="post" class="form-horizontal">
  {!! csrf_field() !!}

 <div id="wizard_form" class="wizard">
<h3>Basic</h3>
<section>
  @include('departments/partials/create/basic')
</section>

<h3>Contact hours</h3>
<section>
  @include('departments/partials/create/contacthours')
</section>

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
@endcan
@endsection
