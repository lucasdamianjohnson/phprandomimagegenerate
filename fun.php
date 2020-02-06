<?php


?>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="//www.mtu.edu/mtu_resources/script/n/jquery.js"><\/script>')</script>

<img id="animation" src="index.php?i=1"/>


<script type="text/javascript">
	function update(i,z,factor,of,count) {
			if(i == 0) {
			factor = 500;
			} else 
			if(i == 10000) {
			 factor = -500;
			} 
		
			if(z == 0) {
			of = 500;
			} else 
			if(z == 10000) {
			 of = -500;
			} 
		
	
		$("#animation").attr("src","index.php?i="+i+"&z="+z+"&count="+count);
		setTimeout(
			function() 
			{
				count++;
					i += factor;
						z += of;
				update(i,z,factor,of,count);
			}, 2000);
	}	

	$(document).ready(function(){
		var i = 0;
		var z = 0;
		var count = 0;
		update(i,z,10,10,count);
		


	});
</script>