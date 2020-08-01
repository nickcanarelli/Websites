<form action="<?php echo home_url( '/' ); ?>" method="get" class="searchform">
    <fieldset>
      <div class="input-group --shadow-well">
        <input type="text" name="s" id="search" placeholder="Search the site..." value="<?php the_search_query(); ?>" class="form-control" />
        <span class="input-group-btn">
          <button type="submit" class="button --search"><span class="icon-search"></span></button>
        </span>
      </div>
    </fieldset>
</form>