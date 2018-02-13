<!-- Search Template -->
<form role="search" method="get" class="searchform group" action="<?php echo home_url( '/' ); ?>">

    <input type="search" id="s" placeholder="<?php echo esc_attr_x( 'Search...', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
    <button type="submit" id="searchsubmit"> <i class="fa fa-search"></i> </button>
</form>