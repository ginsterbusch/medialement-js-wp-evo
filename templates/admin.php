<?php 
/**
 * Template: Admin settings
 *
 * @package MedieElementJSEVO
 */
?>
<div class="wrap">
	<h2>MediaElement.js HTML5 Player Options</h2>

	<p><?php echo sprintf( __('See <a href="%s">MediaElementjs.com</a> for more details on how the HTML5 player and Flash fallbacks work'), 'http://mediaelementjs.com/' ); ?>.</p>

	<form method="post" action="options.php">
		<?php wp_nonce_field('update-options'); ?>
		<input type="hidden" name="action" value="update" />

		<h3 class="title"><span><?php _e('General Settings'); ?></span></h3>

		<table  class="form-table">
			<tr valign="top">
				<th scope="row">
					<label for="mep_script_on_demand"><?php _e('Load Script on Demand (requires WP 3.3)'); ?></label>
				</th>
				<td >
					<input name="mep_script_on_demand" type="checkbox" id="mep_script_on_demand" <?php echo (get_option('mep_script_on_demand') == true ? "checked" : "")  ?> />
				</td>
			</tr>
		</table>

		<h3 class="title"><span><?php _e('Video Settings'); ?></span></h3>
			
		<table  class="form-table">
			<tr valign="top">
				<th scope="row">
					<label for="mep_default_video_width"><?php _e('Default Width'); ?></label>
				</th>
				<td >
					<input name="mep_default_video_width" type="text" id="mep_default_video_width" value="<?php echo get_option('mep_default_video_width'); ?>" />
				</td>
			</tr>
			<tr valign="top">
				<th scope="row">
					<label for="mep_default_video_height"><?php _e('Default Height' ); ?></label>
				</th>
				<td >
					<input name="mep_default_video_height" type="text" id="mep_default_video_height" value="<?php echo get_option('mep_default_video_height'); ?>" />
				</td>
			</tr>	
			<tr valign="top">
				<th scope="row">
					<label for="mep_default_video_type"><?php _e('Default Type'); ?></label>
				</th>
				<td >
					<input name="mep_default_video_type" type="text" id="mep_default_video_type" value="<?php echo get_option('mep_default_video_type'); ?>" /> <span class="description">such as "video/mp4"</span>
				</td>
			</tr>	
			<tr valign="top">
				<th scope="row">
					<label for="mep_video_skin"><?php _e('Video Skin'); ?></label>
				</th>
				<td >
					<select name="mep_video_skin" id="mep_video_skin">
						<option value="" <?php selected( $this->get_setting('video_skin'), ''); ?>><?php _e('Default'); ?></option>
						<option value="wmp" <?php selected( $this->get_setting('video_skin'), 'wmp'); ?>><?php _e('WMP'); ?></option>
						<option value="ted" <?php selected( $this->get_setting('video_skin'), 'ted'); ?>><?php _e('TED'); ?></option>
						
						<?php /*<option value="" <?php echo (get_option('mep_video_skin') == '') ? ' selected' : ''; ?>>Default</option>
						<option value="wmp" <?php echo (get_option('mep_video_skin') == 'wmp') ? ' selected' : ''; ?>>WMP</option>
						<option value="ted" <?php echo (get_option('mep_video_skin') == 'ted') ? ' selected' : ''; ?>>TED</option>*/ ?>
					</select>
				</td>
			</tr>				
		</table>

		<h3 class="title"><span>Audio Settings</span></h3>
		

		<table  class="form-table">
			<tr valign="top">
			<tr valign="top">
				<th scope="row">
					<label for="mep_default_audio_width"><?php _e('Default Width'); ?></label>
				</th>
				<td >
					<input name="mep_default_audio_width" type="text" id="mep_default_audio_width" value="<?php echo get_option('mep_default_audio_width'); ?>" />
				</td>
			</tr>
			<tr valign="top">
				<th scope="row">
					<label for="mep_default_audio_height"><?php _e('Default Height'); ?></label>
				</th>
				<td >
					<input name="mep_default_audio_height" type="text" id="mep_default_audio_height" value="<?php echo get_option('mep_default_audio_height'); ?>" />
				</td>
			</tr>			
				<th scope="row">
					<label for="mep_default_audio_type"><?php _e('Default Type'); ?></label>
				</th>
				<td >
					<input name="mep_default_audio_type" type="text" id="mep_default_audio_type" value="<?php echo get_option('mep_default_audio_type'); ?>" /> <span class="description">such as "audio/mp3"</span>
				</td>
			</tr>			
		</table>

		<p>
			<button type="submit" class="button-primary"></button> value="<?php _e('Save Changes') ?>" />
		</p>

	</div>



	</form>
</div><!-- /.wrap -->
 
