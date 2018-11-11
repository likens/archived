
  <article role="article" id="node-<?php print $node->nid; ?>" class="mix-page"<?php print $attributes; ?>>

    <figure class="field mix-cover"> <?php print render($content['field_mix_cover']); ?> </figure>

    <section class="mix-info">

      <h1 class="field mix-name" role="heading"><?php print render($content['field_mix_name']); ?><?php if (render($content['field_mix_episode'])): ?>&nbsp;Episode&nbsp;<?php print render($content['field_mix_episode']); ?><?php endif; ?></h1>

      <div class="field mix-length">
        <label>Length</label>
        <span><?php print render($content['field_mix_length']); ?></span>
      </div>

      <?php if (render($content['field_mix_aired_date'])): ?>
        <div class="field mix-date">
          <label>Aired</label>
          <span><?php print render($content['field_mix_aired_date']); ?></span>
        </div>
      <?php endif ?>

      <div class="field mix-links">
        <label>Links</label>

        <a  data-src="<?php print render($content['field_mix_upload']); ?>"
            data-name="<?php print render($content['field_mix_name']); ?>"
            data-ep="<?php print render($content['field_mix_episode']); ?>"
            data-url=""
            data-tracks="{<?php print render($content['field_mix_track_list']); ?>}"
            data-cover='{<?php print render($content['field_mix_cover']); ?>}'
            href="javascript:;" class="mix-play">play</a>

        <a href="<?php print render($content['field_mix_upload']); ?>" class="mix-download" download="">download</a>

        <?php if (render($content['field_mix_futurefm_link'])): ?>
          <a href="<?php print render($content['field_mix_futurefm_link']); ?>" target="_blank" class="futurefm-link">futurefm</a>
        <?php endif ?>

        <?php if (render($content['field_mix_mixcloud_link'])): ?>
          <a href="<?php print render($content['field_mix_mixcloud_link']); ?>" target="_blank" class="mixcloud-link">mixcloud</a>
        <?php endif ?>

      </div>
    </section>
    <?php if (render($content['field_mix_track_list'])): ?>
      <section class="field track-list">
        <label>Tracklist</label>
        <div class="track-list"><?php print render($content['field_mix_track_list']); ?></div>
      </section>
    <?php endif ?>

  </article>
