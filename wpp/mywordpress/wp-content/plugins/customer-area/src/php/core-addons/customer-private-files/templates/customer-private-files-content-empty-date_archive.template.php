<?php
/** Template version: 3.0.1
 *
 * -= 3.0.1 =-
 * - Typo in current addon slug & change icon
 *
 * -= 3.0.0 =-
 * - Improve UI for new master-skin
 *
 * -= 1.0.0 =-
 * - Initial version
 *
 */
?>

<?php
$current_addon_slug = 'customer-private-files';
$current_addon_icon = apply_filters('cuar/private-content/view/icon?addon=' . $current_addon_slug, 'fa fa-file');
$current_addon = cuar_addon($current_addon_slug);
$post_type = $current_addon->get_friendly_post_type();
?>

<div class="collection panel cuar-empty cuar-empty-date <?php echo $post_type; ?>">
    <div class="collection-content">
        <p class="mn"><?php _e( 'There are no files for that period.', 'cuar' ); ?></p>
    </div>
</div>