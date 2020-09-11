<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">


  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Kirby Marquez is a voice-over actor based in Los Angeles.">
    <title>Kirby Marquez | Official Website</title>
    <script src="./app.js" defer></script>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">

  </head>

  <body>
    <header class="jumbotron">
      <div class="overlay">
        <div class="header-container">
          <div class="name-container-small">
            <h1 class="name-default">
              Kirby Marquez
            </h1>
          </div>
          <div class="player-container">
            <button class="play-button animate" id="play-button" title="Play demo"></button>
            <button class="hidden pause-button" id="pause-button" title="Pause demo"></button>

            <div class="name-container" id="name-container">
              <h1 class="name-default">
                Kirby Marquez
              </h1>
              <h1 class="name-progress" id="name-progress">
                Kirby Marquez
              </h1>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="main">
      <div class="bio">
        <p>
          Hello, my name is Kirby Marquez.
        </p>

        <p>
          I am a voice talent based in Los Angeles. After graduating from Rutgers University in NJ to begin a career in psychology, I have been able to use the knowledge I’ve gained to tap into a wide range of personalities and tones. Whether you need a friendly, intelligent neighbor or an obnoxious teenager who's a touch manic, I can get there. I have studied improv and commercial voice over in Los Angeles to continue honing my craft and still learn more every day.
        </p>

        <p>
          For fun, I enjoy photography, music, and cheering on my NFL, NBA, and fantasy teams.
        </p>

        <p>
          If you are in need of a professional and reliable voice talent, please let me know! Whether you’re a small business, an advertising agency, or a large company, just contact me and we can chat.
        </p>
      </div>
      <aside class="social">
        <a href="https://twitter.com/KirbyMarquezVO" class="twitter"></a>
        <a href="mailto:kirbymarquezvo@gmail.com" class="email"></a>
        <a href="https://www.instagram.com/kirbimrqz/" class="instagram"></a>
      </aside>
    </div>
    <audio controls="controls" class="audio-player" id="audio-player">
      <source src="/audio/demo.mp3" type="audio/mpeg" />
    </audio>
  </body>

  <script>
  var audio = document.getElementById('audio-player');
var interval = null
var progressBar = document.getElementById('name-progress')
var playButton = document.getElementById('play-button')
var pauseButton = document.getElementById('pause-button')
var progressSlider = document.getElementById('name-container')

var getProgress = function() {
  return (audio.currentTime / audio.duration) * 100
}

var onPlay = function() {
  playButton.classList.add('hidden')
  playButton.classList.remove('animate')
  pauseButton.classList.remove('hidden')

  interval = setInterval(function() {
    progressBar.style.width = getProgress() + '%'
  }, 200)
}

var onPause = function() {
  playButton.classList.remove('hidden')
  pauseButton.classList.add('hidden')

  clearInterval(interval)
}

var startPlayback = function() {
  audio.play()
}

var stopPlayback = function() {
  audio.pause()
}

var setPlayback = function(e) {
  var rect = progressSlider.getBoundingClientRect()

  var durationZero = rect.left
  var endDuration = rect.right - durationZero

  var desiredDuration = (e.clientX - durationZero) / endDuration

  audio.currentTime = Math.round(desiredDuration * audio.duration)

  stopPlayback()
  startPlayback()
}

var checkFinished = function() {
  if (getProgress() === 100) {
    stopPlayback()
    audio.currentTime = 0
  }
}

playButton.addEventListener('click', startPlayback)
pauseButton.addEventListener('click', stopPlayback)
progressSlider.addEventListener('click', setPlayback)
audio.addEventListener('timeupdate', checkFinished)
audio.addEventListener('play', onPlay)
audio.addEventListener('pause', onPause)

  </script>
</html>

<?php /**PATH /home/vagrant/code/resources/views/welcome.blade.php ENDPATH**/ ?>
