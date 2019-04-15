<form role="search" method="get" action="<?php echo esc_url( home_url('/')); ?>">
    <div class="holder">
        <input type="search" name="s" placeholder="Search" value="<?php esc_attr(get_search_query()); ?>">
        <button type="submit">
            <i class="fa fa-search"></i>
        </button>
    </div>
</form>