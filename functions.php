<?php
# Roots stuff
include get_template_directory() . '/inc/roots/utils.php';
include get_template_directory() . '/inc/roots/cleanup.php';
include get_template_directory() . '/inc/roots/nav.php';

# This is needed by include and markdown-file, move this down when shortcodes are moved to plugins
include get_template_directory() . '/inc/misc.php';

# Shortcodes (TODO: Move to separate plugins)
include get_template_directory() . '/inc/shortcodes/hubspot-form.php';
include get_template_directory() . '/inc/shortcodes/include.php';
include get_template_directory() . '/inc/shortcodes/markdown-file.php';

# WP fixes and hacks
include get_template_directory() . '/inc/active-archive-link-on-taxonomies.php';
include get_template_directory() . '/inc/add-post-type-arg-to-get-terms.php';
include get_template_directory() . '/inc/attachments-archive.php';
include get_template_directory() . '/inc/comment-form-placeholders.php';

include get_template_directory() . '/inc/get-archive-data.php';
include get_template_directory() . '/inc/get-site-logo.php';

include get_template_directory() . '/inc/hide-acf-section-fields.php'; # TODO: Move to ACF/
include get_template_directory() . '/inc/hide-sleek-from-admin.php';

include get_template_directory() . '/inc/html-in-widget-titles.php';
include get_template_directory() . '/inc/jquery-cdn-in-foot.php';
include get_template_directory() . '/inc/more-markdown.php';
include get_template_directory() . '/inc/open-graph-tags.php';
include get_template_directory() . '/inc/pagination-css-class.php';

include get_template_directory() . '/inc/post-thumbnails.php';

include get_template_directory() . '/inc/register-acf.php';
include get_template_directory() . '/inc/register-assets.php';
include get_template_directory() . '/inc/register-post-types.php';
include get_template_directory() . '/inc/register-sidebars.php';
include get_template_directory() . '/inc/register-taxonomies.php';
include get_template_directory() . '/inc/register-theme-options.php';

include get_template_directory() . '/inc/disable-wp-embed.php';
include get_template_directory() . '/inc/remove-emoji-css-js.php';
include get_template_directory() . '/inc/remove-home-from-yoast-breadcrumbs.php';

include get_template_directory() . '/inc/exclude-current-post-in-upw.php';

include get_template_directory() . '/inc/set-cpt-in-search.php';
include get_template_directory() . '/inc/setup-lang.php';

include get_template_directory() . '/inc/show-all-post-types-for-auhors.php';
include get_template_directory() . '/inc/unset-active-blog-class.php';

# include get_template_directory() . '/inc/ajax.php';
# include get_template_directory() . '/inc/relevanssi.php';
# include get_template_directory() . '/inc/tinymce-styles.php';
