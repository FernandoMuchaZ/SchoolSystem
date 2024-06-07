// window.addEventListener('DOMContentLoaded', event => {
//     // Simple-DataTables
//     // https://github.com/fiduswriter/Simple-DataTables/wiki

//     const datatablesSimple = document.getElementById('datatablesSimple');
//     if (datatablesSimple) {
//         new simpleDatatables.DataTable(datatablesSimple);
//     }
// });
animation.finished.then(function() {
    console.error(`Error generating audio file:`);
  });

var progressLogEl = document.querySelector('.promise-demo .progress-log');
var promiseEl = document.querySelector('.promise-demo .el');
var finishedLogEl = document.querySelector('.promise-demo .finished-log');
var demoPromiseResetTimeout;

function logFinished() {
  anime.set(finishedLogEl, {value: 'Promise resolved'});
  anime.set(promiseEl, {backgroundColor: '#18FF92'});
}

var animation = anime.timeline({
  targets: promiseEl,
  delay: 400,
  duration: 500,
  endDelay: 400,
  easing: 'easeInOutSine',
  update: function(anim) {
    progressLogEl.value = 'progress : '+Math.round(anim.progress)+'%';
  }
}).add({
  translateX: 250
}).add({
  scale: 2
}).add({
  translateX: 0
});

animation.finished.then(logFinished);
