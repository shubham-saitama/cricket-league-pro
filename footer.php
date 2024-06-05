<?php
/**
 * The template for displaying the footer.
 *
 * @package cricket-league-pro
 */

$about_section = get_theme_mod('cricket_league_pro_footer_enable');
if ('Disable' == $about_section) {
	return;
}

if (get_theme_mod('cricket_league_pro_footer_bgcolor')) {
	$section_backg = 'background-color:' . esc_attr(get_theme_mod('cricket_league_pro_footer_bgcolor')) . ';';
} elseif (get_theme_mod('cricket_league_pro_footer_bg_image_one')) {
	$section_backg = 'background-image:url(\'' . esc_url(get_theme_mod('cricket_league_pro_footer_bg_image_one')) . '\')';
} else {
	$section_backg = '';
}
$footer_position = get_theme_mod('cricket_league_pro_position_fixed'); 
?>

<footer class="outer-footer" style="<?php echo $section_backg; ?>" data-footer-position ="<?php echo $footer_position; ?>">
	<?php get_template_part('template-parts/footer/custom-footer'); ?>
	<?php get_template_part('template-parts/footer/footer-columns'); ?>
	<?php get_template_part('template-parts/footer/footer-contact'); ?>
	<?php get_template_part('template-parts/footer/copyright'); ?>
</footer>
<?php wp_footer(); ?>
</body>

</html>