<script type="text/javascript">
function checkTifcha(){
	if($( "#tifcha" ).slider( "value" )==255)
	{
		$( "#contactSubmit" ).css( "background-color", "#3c62ab" )
		$( "#contactSubmit" ).css( "cursor", "hand" )
		$( "#contactSubmit" ).css( "cursor", "pointer" )
		$( "#tifcha" ).slider( "disable" );
		$( "#contactSubmit" ).unbind("click");
	}
	else
	{
		setTimeout("$('#tifcha').slider('value', 0);", 100);
	}
}
$(function() {
	$( "#contactSubmit" ).click(function(event){
		return false;
	});
	$( "#contactSubmit" ).css( "background-color", "#888" )
	$( "#contactSubmit" ).css( "cursor", "default" )
	$( "#tifcha" ).slider({
		animate: "slow",
		orientation: "horizontal",
		max: 255,
		value: 0,
		stop: checkTifcha				   
	});
});
</script>
<div id="tifcha"></div>