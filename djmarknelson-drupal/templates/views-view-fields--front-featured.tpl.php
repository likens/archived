<article class="featured-mix" role="article">

	<figure class="field mix-cover"> <?php print $fields['field_mix_cover']->content; ?> </figure>

    <section class="mix-info">
      <h3 class="field mix-name">
        <a href="<?php print $fields['path']->content; ?>">
          <?php print $fields['field_mix_name']->content; ?>

          <?php if ($fields['field_mix_episode']->content != ''): ?>
            Episode&nbsp;<?php print $fields['field_mix_episode']->content; ?>
          <?php endif; ?>

        </a>
      </h3>
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
	     	<?php endif; ?>

    	 	<?php if ($fields['field_mix_mixcloud_link']->content != ''): ?>	
    	    	<a href="<?php print $fields['field_mix_mixcloud_link']->content; ?>" target="_blank" class="mixcloud-link">mixcloud</a>
	      <?php endif; ?>

        <a href="#" class="show-tracklist">tracklist</a>

      </div>

      <div class="field mix-tracklist"><?php print $fields['field_mix_track_list']->content; ?></div>
    </section>

</article>