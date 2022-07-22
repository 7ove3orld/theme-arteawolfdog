<script type="text/javascript">

  var spashScreenVisible = true;

  function removeSplashScreen(classname) {
    if (!spashScreenVisible) {
      return null;
    }

    //console.log("Hey !");
    var splash = document.getElementsByClassName(classname);
    for (var i = 0; i < splash.length; i++) {
      splash[i].classList.add("done");
    }
  }

  setTimeout( function() {
    splashScreenDone();
  }, 2400);

  function splashScreenDone() {
    removeSplashScreen("logo-splash");
    setTimeout( function() {
      removeSplashScreen("title-splash");
      spashScreenVisible = false;
    }, 777);
  }

  function splashScreenDoneForced() {
    splashScreenDone();
    //alert("Les vidéos ne sont pas encore chargées.");
  }

</script>
<div class="title-splash splash-screen left-panel">
  <!-- 2sec max OU click -->
  <a class="btn-img" href="javascript:splashScreenDoneForced();">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/title.webp" alt="Wolfdog Title Left">
  </a>
</div>
<div class="title-splash splash-screen right-panel">
  <!-- 2sec max OU click -->
  <a class="btn-img" href="javascript:splashScreenDoneForced();">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/title.webp" alt="Wolfdog Title Right">
  </a>
</div>
<div class="logo-splash splash-screen left-panel">
  <!-- 2sec max OU click -->
  <a class="btn-img" href="javascript:splashScreenDoneForced();">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.webp" alt="Wolfdog Left">
  </a>
</div>
<div class="logo-splash splash-screen right-panel">
  <!-- 2sec max OU click -->
  <a class="btn-img" href="javascript:splashScreenDoneForced();">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.webp" alt="Wolfdog Right">
  </a>
</div>
