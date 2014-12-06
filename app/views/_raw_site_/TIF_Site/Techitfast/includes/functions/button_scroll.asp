<script type="text/javascript">
$(document).ready(function(){
		var duration = 800;
		var easing = "swing";
		var textI = 0;
		$('text_window.p#0').hide();
		$('text_window.p#1').hide();
		$('text_window.p#2').hide();
  		$(".window_control").click(function(){
			if(textI == 0){
				$('p#3').slideToggle(duration,easing);
			}
			textI++
			for(var textII=0;textII<3;textII++){
				if(ii == this.id){
					if($('p#'+textII).is(":visible")){}
					else{
						$("p#"+this.id).slideToggle(duration,easing);
					}
				}
				else{
					if($('p#'+textII).is(":visible")){
						$("p#"+textII).slideToggle(duration,easing);
					}
				}
			}
   });
});
</script>

<div class="button_wrapper">
  <input class="window_control" id="0" type="button" />
  <input class="window_control" id="1" type="button" />
  <input class="window_control" id="2" type="button" />
</div>


<div class="text_window">
  <p id="0">This is box one</p>
  <p id="1">This is box two</p>
  <p id="2">This is box three</p>
  <p id="3">This is Initial</p>
</div>