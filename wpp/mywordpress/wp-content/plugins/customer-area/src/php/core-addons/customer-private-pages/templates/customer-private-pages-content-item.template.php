<?php
/** Template version: 3.3.0
 *
 * -= 3.3.0 =-
 * - Replace clearfix CSS classes with cuar-clearfix
 *
 * -= 3.2.0 =-
 * - Improve longs owner names rendering
 *
 * -= 3.1.0 =-
 * - Improve thumbnails ratios
 *
 * -= 3.0.0 =-
 * - Improve UI for new master-skin
 *
 * -= 2.0.0 =-
 * - Add cuar- prefix to bootstrap classes
 *
 * -= 1.1.0 =-
 * - Updated markup
 * - Normalized the extra class filter name
 *
 * -= 1.0.0 =-
 * - Initial version
 *
 */
?>

<?php
global $post;

$extra_class = ' ' . get_post_type();
$extra_class = apply_filters('cuar/templates/list-item/extra-class?post-type=' . get_post_type(), $extra_class, $post);

$current_addon_slug = 'customer-private-pages';
$thumb_icon = apply_filters('cuar/private-content/view/icon?addon=' . $current_addon_slug, 'fa fa-book', $post);
$thumb_header = apply_filters('cuar/private-content/view/header?addon=' . $current_addon_slug, '', $post);
$thumb_sub_header = apply_filters('cuar/private-content/view/header?addon=' . $current_addon_slug, '', $post);
?>

<div class="collection-item of-h mix<?php echo $extra_class; ?>">
    <div class="collection-item-wrapper panel panel-tile br-a">

        <div class="collection-list-blocks cuar-clearfix">
            <div class="collection-thumbnail collection-list-left panel-body pn <?php if (has_post_thumbnail()) { ?> thumb-active<?php } ?>">
                <a href="<?php the_permalink(); ?>"<?php if (has_post_thumbnail()) { ?> style="background-position: center; background-size:cover; background-image:url(<?php the_post_thumbnail_url('wpca-thumb'); ?>);"<?php } ?>>
                    <div class="collection-thumbnail-padder">
                        <div class="collection-thumbnail-overlay">
                            <div class="collection-thumbnail-valign">
                                <div class="collection-thumbnail-overlay-content">
                                    <?php if ($thumb_icon !== '') : ?>
                                        <i class="collection-thumbnail-icon <?php echo esc_attr($thumb_icon); ?>"></i>
                                    <?php endif; ?>
                                    <?php if ($thumb_header !== '') : ?>
                                        <span class="collection-thumbnail-header h4 mbn"><?php echo $thumb_header; ?></span>
                                    <?php endif; ?>
                                    <?php if ( !$thumb_sub_header !== '') : ?>
                                        <span class="collection-thumbnail-subheader h5"><?php echo $thumb_sub_header; ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <table class="collection-metas table">
                    <tr data-toggle="tooltip" data-placement="top" data-original-title="<?php esc_attr_e('Created on', 'cuar') ?>">
                        <th class="p5"><i class="fa fa-calendar"></i></th>
                        <td><?php echo get_the_date(); ?></td>
                    </tr>
                </table>

                <div class="collection-badges">
                    <?php do_action('cuar/templates/collection/item/badges'); ?>
                </div>
            </div>

            <div class="collection-description collection-list-right panel-footer">
                <div class="cuar-title h4">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </div>
                <p class="collection-excerpt br-t pt20"><?php echo get_the_excerpt(); ?></p>
            </div>
        </div>

        <div class="collection-footer-metas collection-list-blocks br-t">
            <div class="collection-footer-meta-author collection-list-left" data-toggle="tooltip" data-placement="top" data-original-title="<?php esc_attr_e('Created by', 'cuar') ?>">
                <div class="p5 table-layout"><i class="fa fa-user"></i><div><?php echo get_the_author_meta('display_name'); ?></div></div>
            </div>
            <div class="collection-footer-meta-owner collection-list-right" data-toggle="tooltip" data-placement="top" data-original-title="<?php esc_attr_e('Assigned to', 'cuar') ?>">
                <div class="p5 pln va-m"><i class="fa fa-group"></i> <?php echo cuar_get_the_owner(); ?></div>
            </div>
        </div>
    </div>
</div>