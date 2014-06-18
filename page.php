<?php
if ( is_page(2) ) { include('page_report.php'); }
elseif ( is_page(8) ) { include('page_stories.php'); }
elseif ( is_page(10) ) { include('page_maps.php'); }
elseif ( is_page(12) ) { include('page_data.php'); }
else{ include('page_about.php'); }
?>