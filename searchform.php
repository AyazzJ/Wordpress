<form role="search" method="get" class="pf-search" action="<?php echo esc_url(home_url('/')); ?>">
    <label class="screen-reader-text" for="pf-search-field"><?php esc_html_e('Search for:', 'posterframe'); ?></label>
    <input type="search" id="pf-search-field" class="pf-search__field" placeholder="<?php esc_attr_e('Search posters…', 'posterframe'); ?>" value="<?php echo get_search_query(); ?>" name="s">
    <button type="submit" class="pf-button pf-button--ghost"><?php esc_html_e('Search', 'posterframe'); ?></button>
</form>
