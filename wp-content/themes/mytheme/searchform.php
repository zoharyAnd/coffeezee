<form action="" methog="get" class="form-inline ml-auto">

    <!-- to search within a specific bunch of category: use the category_id as value -->
    <!-- <input type="hidden" name="cat" value="10"> -->
    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="s" id="search" value="<?php the_search_query(  ); ?>" required>
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>