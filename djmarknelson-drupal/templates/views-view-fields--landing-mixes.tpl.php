<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>

	
	<article class="landing-mix" role="article listitem">

		<figure class="field mix-cover"> <?php print $fields['field_mix_cover']->content; ?> </figure>

	    <section class="mix-info">
	        <h2 class="field mix-name" role="heading">
	           <a href="<?php print $fields['path']->content; ?>"><?php print $fields['field_mix_name']->content; ?><?php if ($fields['field_mix_episode']->content != ''): ?>&nbsp;Episode&nbsp;<?php print $fields['field_mix_episode']->content; ?><?php endif; ?></a>
	        </h2>
	      <div class="field mix-length">
	        <label>Length</label>
	        <span><?php print $fields['field_mix_length']->content; ?></span>
	      </div>
	      <?php if ($fields['field_mix_aired_date']->content != ''): ?>
		      <div class="field mix-date">
		        <label>Aired</label>
		        <span><?php print $fields['field_mix_aired_date']->content; ?></span>
		      </div>
		  <?php endif ?>
	      <div class="field mix-links">
	        <label>Links</label>

	        <a  data-src="<?php print $fields['field_mix_upload']->content; ?>" 
          		data-name="<?php print $fields['field_mix_name']->content; ?>"
            	data-ep="<?php print $fields['field_mix_episode']->content; ?>"
            	data-url="<?php print $fields['path']->content; ?>"
            	data-tracks="{<?php print $fields['field_mix_track_list']->content; ?>}"
            	data-cover='{<?php print $fields["field_mix_cover"]->content; ?>}'
          		href="#" class="mix-play">play</a>

	        <a href="<?php print $fields['field_mix_upload']->content; ?>" class="mix-download" download="">download</a>

	        <?php if ($fields['field_mix_futurefm_link']->content != ''): ?>
	        	<a href="<?php print $fields['field_mix_futurefm_link']->content; ?>" target="_blank" class="futurefm-link">futurefm</a>
	        <?php endif ?>

	        <?php if ($fields['field_mix_mixcloud_link']->content != ''): ?>
	        	<a href="<?php print $fields['field_mix_mixcloud_link']->content; ?>" target="_blank" class="mixcloud-link">mixcloud</a>
	        <?php endif ?>
	        
	        <a href="#" class="show-tracklist">tracklist</a>

       	   </div>

     		<div class="field mix-tracklist"><?php print $fields['field_mix_track_list']->content; ?></div>

	    </section>

	</article>
