<?php
// get_search_form(); is the default way of adding a search bar to WP. We will not use this
?>
<form class="search-form" action="<?php echo home_url(); ?>"
  method="get">
  <input type="text" name="s" value="" placeholder="Search.." class="search-field">
  <input type="hidden" name="post_type[]" value="idm-projects">
  <button class="search-button">Search</button>
</form>

        <!-- <form action="search.php">
            <input type="text" placeholder="Search.." name="search" class="search-field">
            <button type="submit" class="search-button">Search</button>
        </form> -->