<h3>Please insert the contact hours for phone support</h3>
<div class="row">
  <div class="col-md-12">
<div id="phone" class="col-md-11 col-md-offset-1"></div>
<div class="clearfix">&nbsp;</div>
</div>
</div>

<hr>

<div class="row">
  <div class="col-md-12">
  <h3>Please insert the contact hours for email support</h3>

<div id="email" class="col-md-11 col-md-offset-1"></div>
<div class="clearfix">&nbsp;</div>
</div>
</div>

<script>
 $("#phone").businessHours();
 $("#email").businessHours({
   labelOn: "Working day",
   labelOff: "Day off",
   operationTime: [
                {},
                {},
                {},
                {},
                {},
                {isActive: true},
                {isActive: true}
],
defaultOperationTimeFrom: '0:00',
defaultOperationTimeTill: '24:00',
 });

</script>
