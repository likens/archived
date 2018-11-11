  <div class="info">
    <div class="cover">
        <?php print $fields['field_mix_cover']->content; ?>
    </div>
    <div class="title">
      <ul>
        <li class="now">Now Playing</li>
        <li class="name">
        	<a data-latest="<?php print $fields['field_mix_upload']->content; ?>" href="<?php print $fields['path']->content; ?>"><?php print $fields['field_mix_name']->content; ?><?php if ($fields['field_mix_episode']->content != ''): ?>&nbsp;Episode&nbsp;<?php print $fields['field_mix_episode']->content; ?><?php endif; ?></a>
        </li>
        <li class="artist">Mark Nelson</li>
      </ul>
    </div>
  </div>

  <div id="djmnAudio" class="jplayer"></div>

    <div class="gui interface">

      <a href="javascript:;" class="play" tabindex="1">play</a>
      <a href="javascript:;" class="pause" tabindex="1">pause</a>
      <a href="javascript:;" class="stop" tabindex="1">stop</a>
          
      <div class="current time"></div>
      <div class="progress">
          <div class="seek-bar">
              <div class="play-bar"></div>
          </div>
      </div>
      <div class="duration time"></div>

      <a href="javascript:;" class="mute" tabindex="1" title="mute"><span>mute</span></a>
      <a href="javascript:;" class="unmute" tabindex="1" title="unmute"><span>unmute</span></a>
      <div class="volume-bar">
          <div class="volume-bar-value"></div>
      </div>
      <a href="javascript:;" class="volume-max" tabindex="1" title="max volume"><span>max volume</span></a>

    </div>

  <div class="tracks-btn">
    <a href="#">
      <span>tracklist</span>
    </a>
  </div>

  <div class="tracks">
    <div class="list">
      <?php print $fields['field_mix_track_list']->content; ?>
    </div>
  </div>

  