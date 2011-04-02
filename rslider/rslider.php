<?php
/*
    Plugin Name: M-vSlider
    Plugin URI: http://mamirulamin.wordpress.com/2010/08/10/mvslider-multi-sliders-clone-of-vslider/
    Description: Implementing a featured image gallery into your WordPress theme has never been easier! Showcase your portfolio, animate your header or manage your banners with M-vSlider. M-vSlider by  Muhammad Amir Ul Amin. M-vSlider is multi sliders clone of vSlider (http://www.vibethemes.com/wordpress-plugins/vslider-wordpress-image-slider-plugin/)
    Author: M. Amir Ul Amin
    Version: 1.0.0

	M-vSlider is released under GPL:
	http://www.opensource.org/licenses/gpl-license.php
*/

// Load jQuery from WordPress
function rslider_loadJquery( ) {
    wp_enqueue_script( 'jquery-ui-tabs', 'js/ui.tabs.js', array( 'jquery' ) );
}

// M-vSlider Theme Head
function rslider_head () {
global $wpdb;
global $table_slider;  
  $rslider_js = (WP_PLUGIN_URL.'/rslider/js/rslider.js');

	$mainsql = " SELECT * FROM $table_slider order by rs_id";
		
	if ( $mainrows = $wpdb->get_results($mainsql) )
	{
	?>
	    <script type="text/javascript" src="<?php echo $rslider_js; ?>"></script>
<?php
		foreach($mainrows as $myslider)
		{ 
 	$rs_id = $myslider->rs_id;
 	$rs_name = $myslider->rs_name;
    $rs_width = $myslider->rs_width;
    $rs_height = $myslider->rs_height;
    $rs_speed =$myslider->rs_speed;
    $rs_animstyle = $myslider->rs_animstyle;
    $rs_css = $myslider->rs_css;
    $rs_timeout = $myslider->rs_timeout;
    $rs_type = $myslider->rs_type;
			
?>

    <!-- Start M-vSlider -->
    <style type="text/css">
        #sliderbody<?php echo $rs_id; ?>, #sliderbody<?php echo $rs_id; ?> img {width: <?php echo $rs_width; ?>px;height: <?php echo $rs_height; ?>px;}
        #rslider<?php echo $rs_id; ?> {<?php echo $rs_css; ?>}
        #rslider<?php echo $rs_id; ?> {height: <?php echo $rs_height; ?>px;overflow: hidden;}
        #rslider<?php echo $rs_id; ?> ul {list-style: none !important;margin: 0 !important;padding: 0 !important;}
        #rslider<?php echo $rs_id; ?> ul li {list-style: none !important;margin: 0 !important;padding: 0 !important;}
        #sliderbody<?php echo $rs_id; ?> {overflow: hidden !important;}
        #sliderbody<?php echo $rs_id; ?> img {-ms-interpolation-mode: bicubic;}
    </style>
    <script type="text/javascript">
        /*** M-vSlider Init ***/
        jQuery.noConflict();
        jQuery(document).ready(function(){
        	    jQuery('ul#sliderbody<?php echo $rs_id; ?>').innerfade({
        	        animationtype: '<?php echo $rs_animstyle; ?>',
        		    speed: <?php echo $rs_speed; ?>,
        			timeout: <?php echo $rs_timeout; ?>000,
         			type: '<?php echo $rs_type; ?>',
        			containerheight: '<?php echo $rs_height; ?>px'
        		});
        });
    </script>
    <!-- End M-vSlider -->

<?php 
		}
	}
}

// M-vSlider Function
function rslider($atts = 0) { 
	
	$rs_id = $atts;
	if ($atts["id"]) $rs_id = $atts["id"];

	global $wpdb;
	global $table_slider;
	$mainsql = " SELECT * FROM $table_slider WHERE rs_id ='".$rs_id."'";
	if($mainrows = $wpdb->get_results($mainsql) ) { 
?>

    <div id="rslider<?php echo $rs_id;?>">
        <ul id="sliderbody<?php echo $rs_id;?>">
            <?php 
				foreach($mainrows as $myslider)
				{ 
				    $rs_img1 = $myslider->rs_img1;
					$rs_img2 = $myslider->rs_img2;
					$rs_img3 = $myslider->rs_img3;
					$rs_img4 = $myslider->rs_img4;
					$rs_img5 = $myslider->rs_img5;
					$rs_img6 = $myslider->rs_img6;
					$rs_img7 = $myslider->rs_img7;
					$rs_img8 = $myslider->rs_img8;
					$rs_img9 = $myslider->rs_img9;
					$rs_img10 = $myslider->rs_img10;

					$rs_lnk1 = $myslider->rs_lnk1;
					$rs_lnk2 = $myslider->rs_lnk2;
					$rs_lnk3 = $myslider->rs_lnk3;
					$rs_lnk4 = $myslider->rs_lnk4;
					$rs_lnk5 = $myslider->rs_lnk5;
					$rs_lnk6 = $myslider->rs_lnk6;
					$rs_lnk7 = $myslider->rs_lnk7;
					$rs_lnk8 = $myslider->rs_lnk8;
					$rs_lnk9 = $myslider->rs_lnk9;
					$rs_lnk10 = $myslider->rs_lnk10;

            ?>

                <?php if($rs_img1) { ?>
                <li><a href="<?php echo stripslashes($rs_lnk1); ?>"><img src="<?php echo stripslashes($rs_img1); ?>" alt="featured" class="rsliderImg" /></a></li><?php } ?>

                <?php if($rs_img2) { ?>
                <li><a href="<?php echo stripslashes($rs_lnk2); ?>"><img src="<?php echo stripslashes($rs_img2); ?>" alt="featured" class="rsliderImg" /></a></li><?php } ?>

                <?php if($rs_img3) { ?>
                <li><a href="<?php echo stripslashes($rs_lnk3); ?>"><img src="<?php echo stripslashes($rs_img3); ?>" alt="featured" class="rsliderImg" /></a></li><?php } ?>

                <?php if($rs_img4) { ?>
                <li><a href="<?php echo stripslashes($rs_lnk4); ?>"><img src="<?php echo stripslashes($rs_img4); ?>" alt="featured" class="rsliderImg" /></a></li><?php } ?>

                <?php if($rs_img5) { ?>
                <li><a href="<?php echo stripslashes($rs_lnk5); ?>"><img src="<?php echo stripslashes($rs_img5); ?>" alt="featured" class="rsliderImg" /></a></li><?php } ?>

                <?php  if($rs_img6) { ?>
                <li><a href="<?php echo stripslashes($rs_lnk6); ?>"><img src="<?php echo stripslashes($rs_img6); ?>" alt="featured" class="rsliderImg" /></a></li><?php } ?>

                <?php  if($rs_img7) { ?>
                <li><a href="<?php echo stripslashes($rs_lnk7); ?>"><img src="<?php echo stripslashes($rs_img7); ?>" alt="featured" class="rsliderImg" /></a></li><?php } ?>

                <?php if($rs_img8) { ?>
                <li><a href="<?php echo stripslashes($rs_lnk8); ?>"><img src="<?php echo stripslashes($rs_img8); ?>" alt="featured" class="rsliderImg" /></a></li><?php } ?>

                <?php if($rs_img9) { ?>
                <li><a href="<?php echo stripslashes($rs_lnk9); ?>"><img src="<?php echo stripslashes($rs_img9); ?>" alt="featured" class="rsliderImg" /></a></li><?php } ?>

                <?php if($rs_img10) { ?>
                <li><a href="<?php echo stripslashes($rs_lnk10); ?>"><img src="<?php echo stripslashes($rs_img10); ?>" alt="featured" class="rsliderImg" /></a></li><?php } ?>

                <?php }//foreach
				?>
        </ul>
    </div>

<?php }
}
// Register M-vSlider As Widget
add_action('widgets_init', create_function('', "register_widget('rslider_widget');"));
class rslider_widget extends WP_Widget {

	function rslider_widget() {
		$widget_ops = array( 'classname' => 'rslider-widget', 'description' => 'jQuery based image slider' );
		$control_ops = array( 'width' => 200, 'height' => 250, 'id_base' => 'rslider-widget' );
		$this->WP_Widget( 'rslider-widget', 'M-vSlider - Image Slider', $widget_ops, $control_ops );
	}

	function widget($args, $instance) {
		extract($args);

		echo $before_widget;

			if (!empty($instance['title']) && !empty($instance['rs_id']))
				echo $before_title . $instance['title'] . $after_title;

			rslider($instance['rs_id']);

		echo $after_widget;
	}

	function update($new_instance, $old_instance) {
		return $new_instance;
	}

	function form($instance) { ?>
		<p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e("Title"); ?>:</label>
			<input id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $instance['title']; ?>" style="width:95%;" /></p>
		<p><label for="<?php echo $this->get_field_id('rs_id'); ?>"><?php _e("M-vSlider ID"); ?>:</label>
			<input id="<?php echo $this->get_field_id('rs_id'); ?>" name="<?php echo $this->get_field_name('rs_id'); ?>" value="<?php echo $instance['rs_id']; ?>" style="width:95%;" /></p>

	<?php
	}
}

// Add M-vSlider Short Code
add_shortcode('m-vslider', 'rslider');

// Add The Option Page to WordPress Dashboard
function rslider_addPage () {
    add_menu_page('M-vSlider Setup', 'M-vSlider Setup', 8, __FILE__, 'rslider_page');
}

// rslide Options Page
function rslider_page () {

global $wpdb;
global $table_slider;
if ($_GET['rs_action'] == 'rs_remove')
{
	$wpdb->query("DELETE FROM $table_slider WHERE rs_id = '" . $_GET['rs_id'] . "'");
	$_GET['rs_id'] = '';
}


if ($_POST['rs_addnew'] && $_POST['rs_name'])
{
	$rows_affected = $wpdb->insert( $table_slider, array( 'rs_id' => '', 'rs_name' => $_POST['rs_name']) );
	if ($rows_affected == 1) {$_GET['rs_id'] = $wpdb->insert_id;}
}

$currurl = $_SERVER['PHP_SELF'] . '?page=' . $_GET['page'];
if (!$_GET['rs_id'] && !$_POST['rs_id'])
{
			
			$sql = " 	SELECT * FROM $table_slider order by rs_id";

			$rows = $wpdb->get_results($sql);
		?>
				<div class="wrap" id="rslider-panel">
					<div id="icon-options-general" class="icon32"><br /></div>
					<h2><?php _e("M-vSlider - Home"); ?></h2>		
					<div id='css_rs_main'><BR><BR>
						<table id='css_rs_table'>
							<tr>
								<th >Actions</th>
								<th >ID</th>
								<th >Name</th>
								<th >Width x Height</th>
								<th >Speed</th>
								<th >Timeout</th>
								<th >Anim. Style</th>
								<th >Type</th>
								<th >Custom CSS</th>
							</tr>
		<?php						  
							$style_a['fade']='Fade';
							$style_a['slide']='Slide';

							$type_a['sequence']='Sequence';
							$type_a['random']='Random';
							$type_a['random_start']='Random Start';

						if ( $rows = $wpdb->get_results($sql) )
						{
							foreach($rows as $row)
							{ 
				?>
							<tr>
								<td align="center"><a href="<?php echo $currurl;?>&rs_id=<?php echo $row->rs_id;?>&rs_action=rs_edit"><img src="<?php echo WP_PLUGIN_URL;?>/rslider/edit.png"></a>&nbsp;&nbsp;<a href="<?php echo $currurl;?>&rs_id=<?php echo $row->rs_id;?>&rs_action=rs_remove"><img src="<?php echo WP_PLUGIN_URL;?>/rslider/remove.png"></a></td>
								<td><?php echo $row->rs_id ;?></td>
								<td><?php echo$row->rs_name;?></td>
								<td><?php echo $row->rs_width ."x". $row->rs_height . " px";?></td>
								<td><?php echo $row->rs_speed . " ms";?></td>
								<td><?php echo $row->rs_timeout . " sec";?></td>
								<td><?php echo $style_a[$row->rs_animstyle] ;?></td>
								<td><?php echo $type_a[$row->rs_type] ;?></td>
								<td><?php echo $row->rs_css ;?></td>
							</tr>
				<?php 
							}
						}
						else
						{
				?>
							<tr>
								<td colspan="9">No Slider Configured!</td>
							</tr>
				<?php 
						}
				?>
						</table>
						<div>
							<form method='post' action='<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']);?>'>
								New Slider Name: <input type=text id='rs_name' name='rs_name'>
								<input type=submit value='Add New Slider' id='rs_addnew'  name='rs_addnew' onclick=\"var val=this.form.rs_name.value;if (val== null || val == '' ) {alert('Pleae enter slider name first!');return false;}\">
							</form>
						</div>
					</div>
				</div>
					<?php

}
else
{
    $cur_page = $_SERVER['PHP_SELF'].'?page='.$_GET['page'];
$rs_id = $_GET['rs_id'];

if ('process' == $_POST['tcOptions']) {

$updatequery = "UPDATE $table_slider SET rs_name='".$_POST['rs_name']."',";

if ($_POST['rs_width']) {$updatequery .= " rs_width = '".$_POST['rs_width']."',";}
if ($_POST['rs_height']) {$updatequery .= " rs_height = '".$_POST['rs_height']."',";}
if ($_POST['rs_speed']) {$updatequery .= " rs_speed = '".$_POST['rs_speed']."',";}
if ($_POST['rs_animstyle']) {$updatequery .= " rs_animstyle = '".$_POST['rs_animstyle']."',";}
if ($_POST['rs_css']) {$updatequery .= " rs_css = '".$_POST['rs_css']."',";}
if ($_POST['rs_timeout']) {$updatequery .= " rs_timeout = '".$_POST['rs_timeout']."',";}
if ($_POST['rs_type']) {$updatequery .= " rs_type = '".$_POST['rs_type']."',";}


$updatequery .= " rs_img1 = '".$_POST['rs_img1']."',";
$updatequery .= " rs_lnk1 = '".$_POST['rs_lnk1']."',";
$updatequery .= " rs_img2 = '".$_POST['rs_img2']."',";
$updatequery .= " rs_lnk2 = '".$_POST['rs_lnk2']."',";
$updatequery .= " rs_img3 = '".$_POST['rs_img3']."',";
$updatequery .= " rs_lnk3 = '".$_POST['rs_lnk3']."',";
$updatequery .= " rs_img4 = '".$_POST['rs_img4']."',";
$updatequery .= " rs_lnk4 = '".$_POST['rs_lnk4']."',";
$updatequery .= " rs_img5 = '".$_POST['rs_img5']."',";
$updatequery .= " rs_lnk5 = '".$_POST['rs_lnk5']."',";
$updatequery .= " rs_img6 = '".$_POST['rs_img6']."',";
$updatequery .= " rs_lnk6 = '".$_POST['rs_lnk6']."',";
$updatequery .= " rs_img7 = '".$_POST['rs_img7']."',";
$updatequery .= " rs_lnk7 = '".$_POST['rs_lnk7']."',";
$updatequery .= " rs_img8 = '".$_POST['rs_img8']."',";
$updatequery .= " rs_lnk8 = '".$_POST['rs_lnk8']."',";
$updatequery .= " rs_img9 = '".$_POST['rs_img9']."',";
$updatequery .= " rs_lnk9 = '".$_POST['rs_lnk9']."',";
$updatequery .= " rs_img10 = '".$_POST['rs_img10']."',";
$updatequery .= " rs_lnk10 = '".$_POST['rs_lnk10']."'";
$updatequery .= " WHERE rs_id = ".$_POST['rs_id'];

$wpdb->query($updatequery);
$rs_id = $_POST['rs_id'];

}
	$myslider = $wpdb->get_row("SELECT * FROM $table_slider WHERE rs_id = '" . $rs_id . "'");
 	$rs_name = $myslider->rs_name;
    $rs_width = $myslider->rs_width;
    $rs_height = $myslider->rs_height;
    $rs_speed =$myslider->rs_speed;
    $rs_animstyle = $myslider->rs_animstyle;
    $rs_css = $myslider->rs_css;
    $rs_timeout = $myslider->rs_timeout;
    $rs_type = $myslider->rs_type;

    $rs_img1 = $myslider->rs_img1;
    $rs_img2 = $myslider->rs_img2;
    $rs_img3 = $myslider->rs_img3;
    $rs_img4 = $myslider->rs_img4;
    $rs_img5 = $myslider->rs_img5;
    $rs_img6 = $myslider->rs_img6;
    $rs_img7 = $myslider->rs_img7;
    $rs_img8 = $myslider->rs_img8;
    $rs_img9 = $myslider->rs_img9;
    $rs_img10 = $myslider->rs_img10;

    $rs_lnk1 = $myslider->rs_lnk1;
    $rs_lnk2 = $myslider->rs_lnk2;
    $rs_lnk3 = $myslider->rs_lnk3;
    $rs_lnk4 = $myslider->rs_lnk4;
    $rs_lnk5 = $myslider->rs_lnk5;
    $rs_lnk6 = $myslider->rs_lnk6;
    $rs_lnk7 = $myslider->rs_lnk7;
    $rs_lnk8 = $myslider->rs_lnk8;
    $rs_lnk9 = $myslider->rs_lnk9;
    $rs_lnk10 = $myslider->rs_lnk10;


if($rs_width == "") {
    $rs_width = 250;
}
if($rs_height == "") {
    $rs_height = 250;
}
if($rs_speed == "") {
    $rs_speed = 1000;
}
if($rs_timeout == "") {
    $rs_timeout = 5;
}
if($rs_css == "") {
    $rs_css = "margin: 0px 0px 0px 0px;
padding: 0;
border: none;";
}

?>

<div class="wrap" id="rslider-panel"><div id="icon-options-general" class="icon32"><br /></div>
	<h2><?php _e("<a href='$currurl'>M-vSlider</a> &raquo; Slider Options"); ?></h2>
    <?php if ( $_REQUEST['save'] ) echo '<div id="message" class="updated fade" style="width:750px;"><p><strong>M-vSlider Options Saved.</strong></p></div>'; ?>
    <form method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>&updated=true">
    <input type="hidden" name="tcOptions" value="process" />
    <input type="hidden" name="rs_id" value="<?php echo $rs_id?>" />

    <!-- Start First Column -->
	<div class="metabox-holder">

		<div class="postbox">
		<h3><?php _e("M-vSlider General Settings"); ?></h3>
			<div class="inside">
                <p>
                <?php _e("Name:"); ?>&nbsp;<input type="text" name="rs_name" value="<?php  echo $rs_name; ?>" size="35" />&nbsp;
                </p>
                <p>
                <?php _e("Width:"); ?>&nbsp;<input type="text" name="rs_width" value="<?php  echo $rs_width; ?>" size="5" />&nbsp;px&nbsp;&nbsp;
                <?php _e("Height:"); ?>&nbsp;<input type="text" name="rs_height" value="<?php  echo $rs_height; ?>" size="5" />&nbsp;px
                </p>
                <p>
                <?php _e("Speed:"); ?>&nbsp;<input type="text" name="rs_speed" value="<?php  echo $rs_speed; ?>" size="5" />&nbsp;<?php _e("milliseconds"); ?>&nbsp;&nbsp;
                <?php _e("Animation:"); ?>&nbsp;
                <select name="rs_animstyle">
            	<option style="padding-right:10px;" value="fade" <?php selected('fade', $rs_animstyle); ?>><?php _e("Fade"); ?></option>
            	<option style="padding-right:10px;" value="slide" <?php selected('slide', $rs_animstyle); ?>><?php _e("Slide"); ?></option>
            	</select>
                </p>
                <p><?php _e("Timeout:"); ?>&nbsp;<input type="text" name="rs_timeout" value="<?php  echo $rs_timeout; ?>" size="5" />&nbsp;<?php _e("seconds"); ?>&nbsp;&nbsp;
                <?php _e("Type:"); ?>&nbsp;
                <select name="rs_type">
            	<option style="padding-right:10px;" value="sequence" <?php selected('sequence', $rs_type); ?>><?php _e("Sequence"); ?></option>
            	<option style="padding-right:10px;" value="random" <?php selected('random', $rs_type); ?>><?php _e("Random"); ?></option>
                <option style="padding-right:10px;" value="random_start" <?php selected('random_start',  $rs_type); ?>><?php _e("Random Start"); ?></option>
            	</select>
                </p>
			</div>
		<h3><?php _e("Custom CSS Settings"); ?></h3>
			<div class="inside">
                <p>Enter here custom CSS for M-vSlider:<br />
                <textarea name="rs_css" cols="45" rows="4"><?php echo stripslashes($rs_css); ?></textarea>
                </p>
                <p><input type="submit" class="button" name="save" value="<?php _e('Update Options') ?>" /></p>
			</div>
		</div>


		<p><input type="submit" class="button-primary" name="save" value="<?php _e('Save Settings') ?>" /></p>

	</div>
    <!-- End First Column -->

    <!-- Start Second Column -->
	<div class="metabox-holder">

		<div class="postbox">
		<h3><?php _e("Custom Images Setup"); ?></h3>
			<div class="inside">
                <p><?php _e("Image 1 path:"); ?><br />
                <input type="text" name="rs_img1" value="<?php echo stripslashes($rs_img1); ?>" size="40" />
                <?php _e("Image 1 links to:"); ?><br />
                <input type="text" name="rs_lnk1" value="<?php echo stripslashes($rs_lnk1); ?>" size="40" />
                </p>

                <p><?php _e("Image 2 path:"); ?><br />
                <input type="text" name="rs_img2" value="<?php echo stripslashes($rs_img2); ?>" size="40" />
                <?php _e("Image 2 links to:"); ?><br />
                <input type="text" name="rs_lnk2" value="<?php echo stripslashes($rs_lnk2); ?>" size="40" />
                </p>

                <p><?php _e("Image 3 path:"); ?><br />
                <input type="text" name="rs_img3" value="<?php echo stripslashes($rs_img3); ?>" size="40" />
                <?php _e("Image 3 links to:"); ?><br />
                <input type="text" name="rs_lnk3" value="<?php echo stripslashes($rs_lnk3); ?>" size="40" />
                </p>

                <p><?php _e("Image 4 path:"); ?><br />
                <input type="text" name="rs_img4" value="<?php echo stripslashes($rs_img4); ?>" size="40" />
                <?php _e("Image 4 links to:"); ?><br />
                <input type="text" name="rs_lnk4" value="<?php echo stripslashes($rs_lnk4); ?>" size="40" />
                </p>

                <p><?php _e("Image 5 path:"); ?><br />
                <input type="text" name="rs_img5" value="<?php echo stripslashes($rs_img5); ?>" size="40" />
                <?php _e("Image 5 links to:"); ?><br />
                <input type="text" name="rs_lnk5" value="<?php echo stripslashes($rs_lnk5); ?>" size="40" />
                </p>

                <p><?php _e("Image 6 path:"); ?><br />
                <input type="text" name="rs_img6" value="<?php echo stripslashes($rs_img6); ?>" size="40" />
                <?php _e("Image 6 links to:"); ?><br />
                <input type="text" name="rs_lnk6" value="<?php echo stripslashes($rs_lnk6); ?>" size="40" />
                </p>

                <p><?php _e("Image 7 path:"); ?><br />
                <input type="text" name="rs_img7" value="<?php echo stripslashes($rs_img7); ?>" size="40" />
                <?php _e("Image 7 links to:"); ?><br />
                <input type="text" name="rs_lnk7" value="<?php echo stripslashes($rs_lnk7); ?>" size="40" />
                </p>

                <p><?php _e("Image 8 path:"); ?><br />
                <input type="text" name="rs_img8" value="<?php echo stripslashes($rs_img8); ?>" size="40" />
                <?php _e("Image 8 links to:"); ?><br />
                <input type="text" name="rs_lnk8" value="<?php echo stripslashes($rs_lnk8); ?>" size="40" />
                </p>

                <p><?php _e("Image 9 path:"); ?><br />
                <input type="text" name="rs_img9" value="<?php echo stripslashes($rs_img9); ?>" size="40" />
                <?php _e("Image 9 links to:"); ?><br />
                <input type="text" name="rs_lnk9" value="<?php echo stripslashes($rs_lnk9); ?>" size="40" />
                </p>

                <p><?php _e("Image 10 path:"); ?><br />
                <input type="text" name="rs_img10" value="<?php echo stripslashes($rs_img10); ?>" size="40" />
                <?php _e("Image 10 links to:"); ?><br />
                <input type="text" name="rs_lnk10" value="<?php echo stripslashes($rs_lnk10); ?>" size="40" />
                </p>

                <p><input type="submit" class="button" name="save" value="<?php _e('Update Options') ?>" /></p>
			</div>
		</div>

	</div>
    <!-- End Second Column -->

	</form>
</div>

<?php }
}
function rslider_install () {
   global $wpdb;
   global $table_slider;
   global $rslider_db_version;

   if($wpdb->get_var("show tables like '$table_slider'") != $table_slider) {
      print "creating table";
   $create_table_sql = "CREATE TABLE  $table_slider (
`rs_id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`rs_name` VARCHAR( 100 ) NOT NULL,
`rs_css` VARCHAR( 255 ) NOT NULL DEFAULT  'margin: 0px 0px 0px 0px; padding: 0; border: none;',
`rs_width` SMALLINT NOT NULL DEFAULT  '250',
`rs_height` SMALLINT NOT NULL DEFAULT  '250',
`rs_speed` INT NOT NULL DEFAULT  '1000',
`rs_animstyle` VARCHAR( 10 ) NOT NULL DEFAULT  'fade',
`rs_timeout` SMALLINT NOT NULL DEFAULT  '5',
`rs_type` VARCHAR( 15 ) NOT NULL DEFAULT  'sequence',
`rs_img1` VARCHAR( 255 ),
`rs_lnk1` VARCHAR( 255 ),
`rs_img2` VARCHAR( 255 ),
`rs_lnk2` VARCHAR( 255 ),
`rs_img3` VARCHAR( 255 ),
`rs_lnk3` VARCHAR( 255 ),
`rs_img4` VARCHAR( 255 ),
`rs_lnk4` VARCHAR( 255 ),
`rs_img5` VARCHAR( 255 ),
`rs_lnk5` VARCHAR( 255 ),
`rs_img6` VARCHAR( 255 ),
`rs_lnk6` VARCHAR( 255 ),
`rs_img7` VARCHAR( 255 ),
`rs_lnk7` VARCHAR( 255 ),
`rs_img8` VARCHAR( 255 ),
`rs_lnk8` VARCHAR( 255 ),
`rs_img9` VARCHAR( 255 ),
`rs_lnk9` VARCHAR( 255 ),
`rs_img10` VARCHAR( 255 ),
`rs_lnk10` VARCHAR( 255 ),
UNIQUE (
`rs_name`
));";

      require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
      $wpdb->query($create_table_sql);
      print "table created";
	  
	  $rows_affected = $wpdb->insert( $table_slider, array( 'rs_id' => '', 'rs_name' => 'Default Slider') );
 
      add_option("rslider_db_version", $rslider_db_version);

   }
}

function rslider_adminCSS () {?>
<style type='text/css'>
#rslider-panel .metabox-holder {float: left;width: 380px;margin: 0px; padding:0px 10px 0px 0px;}
#rslider-panel .metabox-holder .postbox .inside {padding: 0 10px;}
.red {font-weight: normal;color: #B80028;}
#css_rs_main, #css_rs_main div {border: 0;margin-top:15px}
#css_rs_table {border-collapse:collapse;width:98%;}
#css_rs_table, #css_rs_table th, #css_rs_table td {border: 1px solid #DDD;padding: 2px 2px 2px 5px;}
#css_rs_table td {background-color: #FFF;}
#css_rs_table th {background-color: #EEE;}
</style>

<?php }
global $wpdb;
global $rslider_db_version;
global $table_slider;
$rslider_db_version="1.0";
$table_slider=$wpdb->prefix.'rs_slider';
//$table_slider='$table_slider';

register_activation_hook(__FILE__,'rslider_install');
add_action('wp_print_scripts', 'rslider_loadJquery' );
add_action('wp_head', 'rslider_head');
add_action('admin_head', 'rslider_adminCSS');
add_action('admin_menu', 'rslider_addPage');

?>
