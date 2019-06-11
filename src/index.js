import './style.css';

const $menuButton = document.querySelector('.toggle_menu');

$menuButton.addEventListener('click', toggle);

function toggle() {
  const $menu = document.querySelector('.admin_header');
  const $top = document.querySelector('.admin__top_header');
  const $main = document.querySelector('.dashboard_main');

  if ($menu.style.display === 'none' || $menu.style.display === '') {
    $menu.style.display = 'block';
    // $top.style.marginLeft = '30rem';
    // $main.style.marginLeft = '30rem';
    // $top.style.width = 'calc(100% - 30rem)';
    // $main.style.width = 'calc(100% - 30rem)';
  } else {
    $menu.style.display = 'none';
    // $top.style.marginLeft = '0';
    // $main.style.marginLeft = '0';
    // $top.style.width = '100%';
    // $main.style.width = '100%';
  }
}

document.getElementsByTagName('body')[0].onresize = function () {
  myFunction();
};

function myFunction() {
  const $menu = document.querySelector('.admin_header');
  const w = window.innerWidth;

  if (w >= 1030) {
    $menu.style.display = 'block';
  } else {
    $menu.style.display = 'none';
  }
}



const $sound = document.querySelector('.waveform_content').textContent;

// Store the 3 buttons in some object
const buttons = {
  play: document.getElementById('btn-play')
};

let play = false;

// Create an instance of wave surfer with its configuration
const Spectrum = WaveSurfer.create({
  container: '#audio-spectrum',
  progressColor: '#ef4352',
  cursorWidth: '0',
  barWidth: '1',
  interact: true,
  responsive: true

}
);

// Handle Play button
buttons.play.addEventListener('click', function () {
  if (play === true) {
    Spectrum.pause();
    play = false;
    buttons.play.style.backgroundImage = "url('./assets/images/play-btn.png')";
  } else {
    Spectrum.play();
    play = true;
    buttons.play.style.backgroundImage = "url('./assets/images/pause-btn.png')";
  }

}, false);


// Add a listener to enable the play button once it's ready
Spectrum.on('ready', function () {
  buttons.play.disabled = false;
});

// If you want a responsive mode (so when the user resizes the window)
// the spectrum will be still playable
window.addEventListener('resize', function () {
  // Get the current progress according to the cursor position
  const currentProgress = Spectrum.getCurrentTime() / Spectrum.getDuration();

  // Reset graph
  Spectrum.empty();
  Spectrum.drawBuffer();
  // Set original position
  Spectrum.seekTo(currentProgress);

  // Enable/Disable respectively buttons
  buttons.pause.disabled = true;
  buttons.play.disabled = false;
  buttons.stop.disabled = false;
}, false);

// Load the audio file from your domain !
Spectrum.load(`./assets/audio/stories/${$sound}`);

// Load the audio file from your own domain !

