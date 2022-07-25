<script type="text/javascript">

  var navLists = document.getElementsByClassName("§rtea-nav-list");

  for (var i = 0; i < navLists.length; i++) {
    var navList = navLists[i];
    var links = navList.getElementsByTagName('a');
    for (var i = 0; i < links.length; i++) {
      var link = links[i];
      var linkName = link.textContent;
      link.textContent = '';

      var emoji = document.createElement('i');
      emoji.classList.add('far');
      emoji.dataset['linkname'] = linkName;

      if (linkName == 'Accueil') {
        emoji.classList.remove('far');
        emoji.classList.add('§rtea-favicon');
      }
      else if (linkName == 'À Propos') {
        emoji.classList.add('fa-address-card');
      }
      else if (linkName == 'Portfolio') {
        emoji.classList.remove('far');
        emoji.classList.add('fas');
        emoji.classList.add('fa-photo-video');
      }
      else if (linkName == 'History') {
        emoji.classList.remove('far');
        //emoji.classList.add('fas');
        //emoji.classList.add('fa-archive');
        emoji.classList.add('§rtea-cartoon-favicon');
      }
      else if (linkName == 'Contactez-Nous') {
        emoji.classList.add('fa-envelope');
      }
      else if (linkName == 'Professionnel') {
        emoji.classList.remove('far');
        emoji.classList.add('fa');
        emoji.classList.add('fa-video-camera');
      }
      else {
        emoji.classList.add('fa-bars');
      }

      link.appendChild(emoji);
    }
  }

</script>
