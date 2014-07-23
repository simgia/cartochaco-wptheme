<?php

/*
 * cartochaco
 * Advanced navigation para los Informes (Reports).
 */
class cartochaco_AdvancedNav_Reports {
	var $prefix = 'cartochaco_filter_';
	var $slug = 'reports';

	function __construct() {
		add_filter('query_vars', array($this, 'query_vars'));
		add_filter('body_class', array($this, 'body_class'));
		add_action('pre_get_posts', array($this, 'pre_get_posts'));
		add_action('generate_rewrite_rules', array($this, 'generate_rewrite_rules'));

	}

	function query_vars($vars) {
		$vars[] = 'cartochaco_advanced_nav_reports';
		return $vars;
	}

	function body_class($class) {
		if(get_query_var('cartochaco_advanced_nav_reports'))
			$class[] = 'advanced-nav';
		return $class;
	}

	function generate_rewrite_rules($wp_rewrite) {
		$widgets_rule = array(
			$this->slug . '$' => 'index.php?cartochaco_advanced_nav_reports=1'
		);
		$wp_rewrite->rules = $widgets_rule + $wp_rewrite->rules;
	}

	function pre_get_posts($query) {

		if($query->is_main_query() && $query->get('cartochaco_advanced_nav_reports')) {

			$query->is_home = false;

			$query->set('posts_per_page', 30);
			$query->set('ignore_sticky_posts', true);

			if(isset($_GET[$this->prefix . 's'])) {

				$query->set('s', $_GET[$this->prefix . 's']);

			}

			if(isset($_GET[$this->prefix . 'category'])) {

				$query->set('category__in', $_GET[$this->prefix . 'category']);

			}

			if(isset($_GET[$this->prefix . 'date_start'])) {

				$after = $_GET[$this->prefix . 'date_start'];
				$before = $_GET[$this->prefix . 'date_end'];

				if($after) {

					if(!$before)
						$before = date('Y-m-d H:i:s');

					$query->set('date_query', array(
						array(
							'after' => date('Y-m-d H:i:s', strtotime($after)),
							'before' => date('Y-m-d H:i:s', strtotime($before)),
							'inclusive' => true
						)
					));
				}

			}

		}

	}

	function form() {
		wp_enqueue_script('chosen');
		wp_enqueue_script('moment-js');
		wp_enqueue_style('chosen', get_stylesheet_directory_uri() . '/css/chosen.css');
		wp_enqueue_script('jquery-ui-datepicker');
		wp_enqueue_style('jquery-ui-smoothness', 'http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css');
		?>
		<form class="advanced-nav-filters row">
			<?php
			$oldest = array_shift(get_posts(array('posts_per_page' => 1, 'order' => 'ASC', 'orderby' => 'date')));
			$newest = array_shift(get_posts(array('posts_per_page' => 1, 'order' => 'DESC', 'orderby' => 'date')));

			$before = $oldest->post_date;
			$after = $newest->post_date;
			?>
			<div class="container">
				
				<div class="three columns">
					<label for="<?php echo $this->prefix; ?>date_start"><?php _e('Date range', 'jeo'); ?></label>
					<label class="sublabel" for="<?php echo $this->prefix; ?>date_start" style="display: none;"></label>
					<input type="text" class="date-from" id="<?php echo $this->prefix; ?>date_start" placeholder="<?php _e('From', 'jeo'); ?>" name="<?php echo $this->prefix; ?>date_start" value="<?php echo (isset($_GET[$this->prefix . 'date_start'])) ? $_GET[$this->prefix . 'date_start'] : ''; ?>" />
				</div>
				<div class="three columns">
					<label class="sublabel" for="<?php echo $this->prefix; ?>date_end">&nbsp;</label>
					<input type="text" class="date-to" id="<?php echo $this->prefix; ?>date_end" placeholder="<?php _e('To', 'jeo'); ?>" name="<?php echo $this->prefix; ?>date_end" value="<?php echo (isset($_GET[$this->prefix . 'date_end'])) ? $_GET[$this->prefix . 'date_end'] : ''; ?>" />
				</div>
				<div class="three columns">
					<label for="">&nbsp;</label>
					<input type="submit" class="button" value="<?php _e('Filter', 'jeo'); ?>" />
				</div>
			</div>
		</form>
		<script type="text/javascript">
			(function($) {

				$(document).ready(function() {
					var min = moment('<?= $before; ?>').toDate();
					var max = moment('<?= $after; ?>').toDate();

					$('.date-range-inputs .date-from').datepicker({
						defaultDate: min,
						changeMonth: true,
						changeYear: true,
						numberOfMonths: 1,
						maxDate: max,
						minDate: min
					});

					$('.date-range-inputs .date-to').datepicker({
						defaultDate: max,
						changeMonth: true,
						changeYear: true,
						numberOfMonths: 1,
						maxDate: max,
						minDate: min
					});	

				});

			})(jQuery);
		</script>
		<?php

	}

}

$GLOBALS['cartochaco_adv_nav_reports'] = new cartochaco_AdvancedNav_Reports();

function cartochaco_adv_nav_reports_filters() {
	return $GLOBALS['cartochaco_adv_nav_reports']->form();
}

?>
