<script type="text/javascript">
  function playVid(vidId) {
    var vid = document.getElementById(vidId);
    vid.play();
  }
  function pauseVid(vidId) {
    var vid = document.getElementById(vidId);
    vid.pause();
  }
  <?php
    if (wp_is_mobile()) {
      ?>
        function playMobile(vidId) {playVid(vidId)}
      <?php
    }
  ?>
</script>
<div style="opacity:0; position:absolute;">
  Société de production audiovisuel. Vous avez un projet ? Une demande ?
  Un besoin ? Quoi que ce soit à filmer ? À monter ?
  N'hésitez pas à nous contacter.
</div>
<div class="triscreen" onloadeddata="splashScreenDone();">

  <div class="wd-screen">
    <video id="wdVideo1" class="wd-video" height="auto" preload="auto" playsinline loop muted
            poster="<?php echo get_template_directory_uri() ?>/assets/posters/adaptation.webp">
      <source src="<?php echo get_template_directory_uri() ?>/assets/vids/adaptation.webm" alt="Video One" type="video/webm">
      <source src="<?php echo get_template_directory_uri() ?>/assets/vids/adaptation.mp4" alt="Video One" type="video/mp4">
    </video>
    <a class="overlay" onload="playMobile('wdVideo1');" onmouseover="playVid('wdVideo1');" onmouseout="pauseVid('wdVideo1');"
        href="/ladaptabilite/">
      <!-- Etirer X & Y -->
      <h2>
        Adaptation
      </h2>
    </a>
  </div>

  <div class="wd-screen">
    <video id="wdVideo2" class="wd-video" height="auto" preload="auto" playsinline loop muted
            poster="<?php echo get_template_directory_uri() ?>/assets/posters/creation.webp">
      <source src="<?php echo get_template_directory_uri() ?>/assets/vids/creation.webm" alt="Video Two" type="video/webm">
      <source src="<?php echo get_template_directory_uri() ?>/assets/vids/creation.mp4" alt="Video Two" type="video/mp4">
    </video>
    <a class="overlay" onload="playMobile('wdVideo2');" onmouseover="playVid('wdVideo2');" onmouseout="pauseVid('wdVideo2');"
        href="/la-creativite/">
      <!-- Etirer X & Y -->
      <h2>
        Creation
      </h2>
    </a>
  </div>

  <div class="wd-screen">
    <video id="wdVideo3" class="wd-video" height="auto" preload="auto" playsinline loop muted
            poster="<?php echo get_template_directory_uri() ?>/assets/posters/emotion.webp">
      <source src="<?php echo get_template_directory_uri() ?>/assets/vids/emotion.webm" alt="Video Three" type="video/webm">
      <source src="<?php echo get_template_directory_uri() ?>/assets/vids/emotion.mp4" alt="Video Three" type="video/mp4">
    </video>
    <a class="overlay" onload="playMobile('wdVideo3')" onmouseover="playVid('wdVideo3');" onmouseout="pauseVid('wdVideo3');"
        href="/toile-de-lemotion/">
      <!-- Etirer X & Y -->
      <h2>
        Emotion
      </h2>
    </a>
  </div>

</div>
<script type="text/javascript">

  if (typeof splashScreenDone == 'undefined') {} else {

    var wdVids = document.getElementsByClassName('wd-video');
    var wdVidLoaded = 0;

    for (var i = 0; i < wdVids.length; i++) {
      var vid = wdVids[i];
      vid.addEventListener("load", function () {

      });
    }

    $(".wd-video").on("loadeddata", function() {
      wdVidLoaded = wdVidLoaded + 1;
      if (wdVidLoaded == 3) {
        splashScreenDone();
      }
      console.log('Vidéo '+this.id+' chargée');
      console.log(wdVidLoaded);
    });

  }

</script>
