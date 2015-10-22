<div class="alert alert-danger flash-msg">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <b><?= h($message) ?></b>
</div>

<script>
$(document).ready(function(){
	$('.flash-msg').delay(6000).fadeOut('slow');
});
</script>