<form class="form-inline" role="form" method="get" action="<?php bloginfo('url'); ?>/">
  <div class="form-group">
    <input type="text" class="form-control" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="Your search...">
  </div>
  <button type="submit" class="btn btn-default">Search</button>
</form>