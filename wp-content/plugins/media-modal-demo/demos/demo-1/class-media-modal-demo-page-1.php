<?php
/**
 * Demo Page One
 */
class Media_Modal_Demo_Page_1 extends Media_Modal_Demo_Page_Abstract {
	/**
	 * Enqueues the media script.
	 */
	public function enqueue_scripts() {
		wp_enqueue_script(
			'media-modal-demo',
			plugins_url( 'js/media-modal-demo.js', __FILE__ ),
			array( 'media-views' )
		);
	}

	/**
	 * Prints a short description of what the demo does.
	 */
	public function print_description() {
		?>
		<p>This demo shows a simple media frame without a sidebar.</p>
		<p>
			The frame queries only images. You can select only one image at once.<br />
			When the button "Select" is clicked the frame closes and you get the details of the selected image.
		</p>
		<?php
	}

	/**
	 * Renders the demo page content.
	 */
	public function render_content() {
		?>
		<input type="button" class="button open-media-button" id="open-media-lib" value="Open Media Library" data-title="Select An Image" data-button-text="Select" />
		<fieldset id="attachment-details" class="attachment-fieldset">
			<legend>Attachment Details</legend>

			<div class="alignleft">
				<p><label>ID:<br /><input type="text" id="attachment-id" class="regular-text" /></label></p>
				<p><label>Title:<br /><input type="text" id="attachment-title" class="regular-text" /></label></p>
				<p><label>Filename:<br /><input type="text" id="attachment-filename" class="regular-text" /></label></p>
				<p><label>Height:<br /><input type="text" id="attachment-height" class="regular-text" /></label></p>
				<p><label>Width:<br /><input type="text" id="attachment-width" class="regular-text" /></label></p>
				<p><label>URL:<br /><input type="text" id="attachment-url" class="regular-text" /></label></p>
			</div>

			<div class="alignleft">
				<p><strong>Image:</strong><br/><img id="attachment-src" /></p>
			</div>

			<div class="alignleft">
				<p><label>RAW Data:<br /><textarea id="attachment-raw" class="code"></textarea></label>
			</div>
		</fieldset>
		<?php
	}
}
