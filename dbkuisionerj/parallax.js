
let layer_3 = document.querySelector('.layer-3');
let layer_5 = document.querySelector('.layer-5');
window.addEventListener('scroll', function()  {
      let Y = window.scrollY;

      layer_3.style.transfrom = Y * 1.5 + 'px';
      layer_5.style.top = Y * -1.0 + 'px';
}
);