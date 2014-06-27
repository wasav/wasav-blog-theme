<form class="form-inline" role="form" method="get" action="<?php bloginfo('url'); ?>/" id="searchform">
  <div class="input-group">
    <input type="text" class="form-control" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="Your search...">
    <span role="btn" class="input-group-addon" onclick="javascript:document.forms.searchform.submit();"><i class="glyphicon glyphicon-search"></i></span>
  </div>
</form>