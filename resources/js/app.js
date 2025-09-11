import './bootstrap';

const audio = document.getElementById('audio');
const button = document.getElementById('audio-toggle');

button.addEventListener('click', () => {
  if (audio.paused) {
    audio.play();
    button.innerHTML = '<i class="fas fa-volume-up"></i>';
    button.classList.remove('audio-off');
    button.classList.add('audio-on');
  } else {
    audio.pause();
    button.innerHTML = '<i class="fas fa-volume-off"></i>';
    button.classList.remove('audio-on');
    button.classList.add('audio-off');
  }
});
