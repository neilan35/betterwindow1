<!-- <div class="container">	 -->
	<div class="alert alert-success flash-msg"> <button type="button" class="close" data-dismiss="alert">×</button>
			<b><?= h($message) ?></b>
	</div>
<!-- </div> -->

<script>
$(document).ready(function(){
	$('.flash-msg').delay(6000).fadeOut('slow');
});
</script>