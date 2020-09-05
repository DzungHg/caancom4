<?php

/**
 * FormBuilder render file (embed method D) for form 'lien-he'
 * 
 * Instructions
 * ============
 * 
 * 1. If not already in place, the contents of this file should be placed in this file:
 * 
 *    /site/templates/FormBuilder/form-lien-he.php
 * 
 *    When present, FormBuilder will always use this file for $forms->render('lien-he'); calls, rather than 
 *    the markup that it generates at runtime.
 * 
 * 2. Move the indicated stylesheet <link> tags further-below to your document <head>, to appear when this form
 *    is rendered. You may optionally omit any or all of the stylesheets if you don't think you will need them. 
 *    In particular, remove any that duplicate stylesheets you may already be loading (like from CSS frameworks).
 * 
 * 3. Also move the indicated Javascript <script> tags below to your <head> or before closing the </body> tag,
 *    to appear when this form will be rendered. You may optionally omit any of the scripts if you don't think 
 *    you will need them. In particular, remove any that duplicate scripts you may already be loading (like jQuery 
 *    or CSS framework files). We recommend that you always keep the 'form-builder-d.js' script in place.
 * 
 * 4. Adjust the form markup below as you see fit. Keep the form field 'name' attributes in tact. Please note that
 *    removing any 'id' or 'class' attributes (or other significant changes to the markup) may interfere with or
 *    disable features provided by FormBuilder for a given field. So be sure to test any changes thoroughly.
 * 
 * 5. To render this form, place the following in a template file where you want the form to appear: 
 * 
 *    echo $forms->render('lien-he'); 
 * 
 * Optional: Steps 2 and 3 above ask you copy <link> and <script> tags in your document <head>. We recommend that 
 * you surround them in something like if($page->id == 123) { ... }, so that you are only rendering these assets 
 * on the page where the form will be displayed (where '123' is the ID of the page).
 * 
 * Please leave the following here
 * ===============================
 * Date: 2019-12-14 12:06:52
 * Hash: 8201df3020107278877586b37e2d5a17
 * 
 * If you get want to disable an 'out of date' warning from FormBuilder for this file, copy the 'Hash' (like seen 
 * above) from the /site/assets/cache/FormBuilder/form-lien-he.php file, and paste to make it replace the hash 
 * value that you see above. We also recommend you update the 'Date' for your own reference.
 * 
 * 
 * Variables provided to this template
 * ===================================
 * @var InputfieldForm $form Form that is being rendered or processed
 * @var FormBuilderProcessor $processor Processor of form
 * @var array $values Existing values of field inputs, indexed by field name
 * @var array $labels Field labels indexed by field name
 * @var array $descriptions Field descriptions indexed by field name
 * @var array $notes Field notes indexed by field name
 * @var array $errors Error messages to display (populated if form had errors)
 * @var bool $submitted This is TRUE when the form has been successfully submitted
 * @var string $successMessage The success message defined with the form (populated on success)
 *
 */
?>

<!-- Move styles below to document <head> for pages where this form will appear -->
<link rel='stylesheet' type='text/css' href='<?php echo $config->urls->root; ?>site/modules/FormBuilder/FormBuilder.css' />
<link rel='stylesheet' type='text/css' href='<?php echo $config->urls->root; ?>site/modules/FormBuilder/frameworks/basic/main.css' />
<style type='text/css'> /* Optional responsive adjustments for mobile - can be removed if not using 'Column Width' for fields */ @media only screen and (max-width:479px){.InputfieldFormWidths .Inputfield{clear:both !important;width:100% !important;margin-left:0 !important;margin-bottom:1em !important;} .Inputfield .InputfieldContent,.Inputfield .InputfieldHeader{padding-left:0 !important;padding-right:0 !important;float:none !important;width:100%;} .InputfieldFormWidths .Inputfield .InputfieldHeader{margin-bottom:0;}.InputfieldFormNoWidths .Inputfield .InputfieldHeader{text-align:initial;}}</style>

<!-- Move scripts below to document <head> or before </body> for pages where this form will appear -->
<script type="text/javascript">var _pwfb={ config:<?php echo json_encode(array_merge($config->js(),array("urls"=>array("root"=>$config->urls->root),"debug" => $config->debug)));?>};if(typeof ProcessWire=="undefined"){var ProcessWire=_pwfb;}else{for(var _pwfbkey in _pwfb.config) ProcessWire.config[_pwfbkey] = _pwfb.config[_pwfbkey];}if(typeof config=="undefined"){var config=ProcessWire.config;}_pwfb=null;</script>
<script src='<?php echo $config->urls->root; ?>wire/modules/Jquery/JqueryCore/jquery-1.11.1.js'></script>
<script src='<?php echo $config->urls->root; ?>wire/templates-admin/scripts/inputfields.min.js'></script>
<!-- This next script (form-builder-d.js) must go either in the document head or somewhere before the <form> -->
<script src='<?php echo $config->urls->FormBuilder; ?>form-builder-d.js'></script>

<?php if($submitted): /* When form submitted, show success message */ ?>

	<div id="FormBuilderSubmitted">
		<h3><?php echo $successMessage; ?></h3>
	</div>

<?php else: /* Render the form markup */ ?>

<form id="FormBuilder_lien-he" class="FormBuilderFrameworkBasic FormBuilder InputfieldNoFocus InputfieldFormWidths InputfieldForm" name="lien-he" method="post" action="./" data-colspacing="0">

	<?php 
	// output error messages
	if(count($errors)) {
		$form->getErrors(true); // reset
		foreach($errors as $error) {
			echo '<p class="error">' . $error . '</p>';
		}
	}
	?>

	<div class="Inputfields">
		<div class="Inputfield Inputfield_full_name InputfieldText" id="wrap_Inputfield_full_name">
			<label class="InputfieldHeader" for="Inputfield_full_name">
				<?php echo $labels['full_name']; ?><!-- Tên -->
			</label>
			<div class="InputfieldContent">
				<input id="Inputfield_full_name" name="full_name" type="text" maxlength="2048" />
			</div>
		</div>
		<div class="Inputfield Inputfield_email InputfieldEmail" id="wrap_Inputfield_email">
			<label class="InputfieldHeader" for="Inputfield_email">
				<?php echo $labels['email']; ?><!-- Email -->
			</label>
			<div class="InputfieldContent">
				<input id="Inputfield_email" name="email" type="email" maxlength="512" />
			</div>
		</div>
		<div class="Inputfield Inputfield_subject InputfieldText" id="wrap_Inputfield_subject">
			<label class="InputfieldHeader" for="Inputfield_subject">
				<?php echo $labels['subject']; ?><!-- Tiêu Đề -->
			</label>
			<div class="InputfieldContent">
				<input id="Inputfield_subject" name="subject" type="text" maxlength="2048" />
			</div>
		</div>
		<div class="Inputfield Inputfield_message InputfieldTextarea" id="wrap_Inputfield_message">
			<label class="InputfieldHeader" for="Inputfield_message">
				<?php echo $labels['message']; ?><!-- Nội Dung -->
			</label>
			<div class="InputfieldContent">
				<textarea id="Inputfield_message" name="message" rows="5"></textarea>
			</div>
		</div>
		<div class="Inputfield Inputfield_lien-he_submit InputfieldSubmit" id="wrap_lien-he_submit">
			<div class="InputfieldContent">
				<button  class="uk-button uk-button-primary" type="submit" name="lien-he_submit" value="<?php echo $labels['lien-he_submit']; ?><!-- Gởi đi -->">
					<?php echo $labels['lien-he_submit']; ?><!-- Gởi đi -->
				</button>
			</div>
		</div>
	</div>
	<?php echo $session->CSRF->renderInput(); ?>
	<input type="hidden" name="_submitKey" value="5:lien-he:rfbeJZoCRYCMeakBp5cViReMwt6:2392365" />
</form>

<?php 
if(count($values)) {
	// populate existing values to fields
	echo "<script>FormBuilderD.populate('$form->id', " . json_encode($values) . ");</script>";
}

endif;
?>