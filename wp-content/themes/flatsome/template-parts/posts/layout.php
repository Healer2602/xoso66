<?php
$str =   substr($_SERVER["REQUEST_URI"],  5);
$trimStr = trim($str, "/");
echo $trimStr
?>
<?php
do_action('flatsome_before_blog');
?>

<?php if (!is_single() && get_theme_mod('blog_featured', '') == 'top') {
    get_template_part('template-parts/posts/featured-posts');
} ?>
<div class="row align-center">
    <div class="large-12 col">
        <?php if (!is_single() && get_theme_mod('blog_featured', '') == 'content') {
            get_template_part('template-parts/posts/featured-posts');
        } ?>

        <?php
        // if(is_single()){
        // 	get_template_part( 'template-parts/posts/single');
        // 	comments_template();
        // } elseif(get_theme_mod('blog_style_archive', '') && (is_archive() || is_search())){
        // 	get_template_part( 'template-parts/posts/archive', get_theme_mod('blog_style_archive', '') );
        // } else{
        // 	get_template_part( 'template-parts/posts/archive', get_theme_mod('blog_style', 'normal') );
        // }
        ?>
        <div class="row">
            <?php if ($trimStr === "so-ket-qua") : ?>
            <div class="large-9">
                <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>

                <?php get_template_part("components/skq/so-ket-qua", get_theme_mod('blog_style', 'normal'))  ?>

            </div>
            <div class="large-3 siderbar-right">
                <?php get_template_part("pages/siderbar-right", get_theme_mod('blog_style', 'normal'))  ?>
            </div>
            <?php elseif ($trimStr === "tin-tuc") : ?>
            <div class="large-9">
                <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>

                <?php get_template_part("components/tin-tuc", get_theme_mod('blog_style', 'normal'))  ?>

            </div>
            <div class="large-3 siderbar-right">
                <?php get_template_part("pages/siderbar-right", get_theme_mod('blog_style', 'normal'))  ?>
            </div>
            <?php else : ?>
            <div class="large-3 siderbar-left">
                <?php get_template_part("pages/siderbar-left", get_theme_mod('blog_style', 'normal'))  ?>
            </div>
            <div class="large-6">
                <?php if (function_exists('rank_math_the_breadcrumbs')) rank_math_the_breadcrumbs(); ?>
                <?php switch ($trimStr) {
                        case "xo-so-mien-bac":
                            get_template_part("components/xsmb/xsmb", get_theme_mod('blog_style', 'normal'));
                            break;
                        case "xo-so-mien-nam":
                            get_template_part("components/xsmn/xsmn", get_theme_mod('blog_style', 'normal'));
                            break;
                        default:
                    } ?>



            </div>
            <div class="large-3 siderbar-right">
                <?php get_template_part("pages/siderbar-right", get_theme_mod('blog_style', 'normal'))  ?>
            </div>
            <?php endif ?>
        </div>
    </div>

</div>

<?php do_action('flatsome_after_blog');