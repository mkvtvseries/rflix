<?php if($this->common_model->get_ads_status('home_header')=='1'): ?>
<!-- header ads -->
<div id="ads" style="padding: 20px 0px;text-align: center;">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
			<?php
 $subscriptions = $this->subscription_model->check_validated_subscription_plan();
?>
			<?php
if ($this->session->userdata('login_status') != '1' && $subscriptions != "TRUE" ) {
    echo $this->common_model->get_ads('home_header');
}elseif ($this->session->userdata('login_status') == '1' && $subscriptions != "TRUE" ) {
    echo $this->common_model->get_ads('home_header');
}
?>
			</div>
		</div>
	</div>
</div>
<!-- header ads -->
<?php endif; ?>