<form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
    <div>
    	<input type="text" name="s" id="s" placeholder="<?php _e('Buscar...', 'jeo'); ?>" value="<?php echo $_GET['s']; ?>" />
    </div>
</form>
