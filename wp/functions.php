<?php
/*
*   AVADA
*   Code to change logo per page   
*/
add_action( 'avada_logo_prepend', 'logo_image_home' );
function logo_image_home() {
	if(is_page('1305')) {  // here you have to put the id of the page you want to changes
		echo '<img src="https://campaigntester.com/wp-content/uploads/2020/04/logo.png" srcset="https://campaigntester.com/wp-content/uploads/2020/04/logo.png 1x, https://campaigntester.com/wp-content/uploads/2020/04/logo2x.png 2x" width="542" height="76" style="max-height:76px;height:auto;" alt="Verusinsight Logo" data-retina_logo_url="https://campaigntester.com/wp-content/uploads/2020/04/logo2x.png" class="Verusinsight Logo" />';
	}
}
?>