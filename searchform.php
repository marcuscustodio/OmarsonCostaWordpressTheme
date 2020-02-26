<?php

/*

Template Name: Search Form

*/

?>

<div class="search-custom">
	<form action="<?php echo home_url('/'); ?>" method="get" accept-charset="utf-8" id="searchform" role="search">
	  <input type="text" name="s" id="s" class="form-control input-sm" placeholder="Digite sua busca"  value="<?php the_search_query(); ?>" />
	  <button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-search"></i></button>
	</form>
</div>
