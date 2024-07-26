var menu = document.getElementById('menu');

function dropper(w) {
  if (w.matches){
    menu.onclick = scrolldown;
  }
  else {
    menu.onclick = toggleMenu;
  }
}

var w = window.matchMedia("(max-width: 1285px)");
dropper(w);
w.addListener(dropper);

function scrolldown() {
  if (globindicator === 0) {
    var maingrid = document.getElementById('maingrid');
    var menuenclosure = document.getElementById('menuenclosure');
    maingrid.classList.remove('maingrid');
    maingrid.classList.add('menugrid1');

    menuenclosure.classList.remove('none');

    var filler = document.getElementById('filler');
    filler.style.height = '30px';

    globindicator = 1;
    nomenu = document.getElementById('nomenu');
    nomenu.onclick = scrolldown;

    disableScroll();
  }
  else {
    var maingrid = document.getElementById('maingrid');
    var menuenclosure = document.getElementById('menuenclosure');
    var filler = document.getElementById('filler');
    maingrid.classList.remove('menugrid1');
    maingrid.classList.add('maingrid');

    menuenclosure.classList.add('none');

    filler.style.height = '0px';

    globindicator = 0;
    enableScroll();
  }
}

var nomenu = 0;

var globindicator = 0;

var screenH = window.innerHeight;
var head = document.getElementById('headbar');
var headH = head.offsetHeight;

var percenthead = 0;


var x = [];
var y = 0;
do {
  y = y +0.01;
  x.push(y);
}
while (y<1);


const options1 = {
  threshold: x,
  rootMargin: '0px'
};

const observer1 = new IntersectionObserver(callback1, options1);

function callback1(entries1, observer1) {
  entries1.forEach(entry1 =>{
    percenthead = entry1.intersectionRatio;
  })
}

observer1.observe(head);



function toggleMenu() {
  if (globindicator === 0) {
    var maingrid = document.getElementById('maingrid');
    var menuenclosure = document.getElementById('menuenclosure');
    maingrid.classList.remove('maingrid');
    maingrid.classList.add('menugrid');

    menuenclosure.classList.remove('none');

    var menuH = menuenclosure.offsetHeight;

    var totalH = menuH + percenthead*headH;
    console.log(totalH);


    var diffH = screenH - totalH;

    var filler = document.getElementById('filler');

    var stringdiffH1 = diffH.toString();
    var stringdiffH = stringdiffH1.concat('px');

    console.log(stringdiffH);

    filler.style.height = stringdiffH;

    globindicator = 1;
    nomenu = document.getElementById('nomenu');
    nomenu.onclick = toggleMenu;

    disableScroll();
  }

  else {
    var maingrid = document.getElementById('maingrid');
    var menuenclosure = document.getElementById('menuenclosure');
    var filler = document.getElementById('filler');
    maingrid.classList.remove('menugrid');
    maingrid.classList.add('maingrid');

    menuenclosure.classList.add('none');

    filler.style.height = '0px';

    globindicator = 0;
    enableScroll();
  }
}

var keys = {32: 1, 37: 1, 38: 1, 39: 1, 40: 1};

function preventDefault(e) {
  e.preventDefault();
}

function preventDefaultForScrollKeys(e) {
  if (keys[e.keyCode]) {
    preventDefault(e);
    return false;
  }
}

var supportsPassive = false;
try {
  window.addEventListener("test", null, Object.defineProperty({}, 'passive', {
    get: function () { supportsPassive = true; }
  }));
} catch(e) {}

var wheelOpt = supportsPassive ? { passive: false } : false;
var wheelEvent = 'onwheel' in document.createElement('div') ? 'wheel' : 'mousewheel';


function disableScroll() {
  window.addEventListener('DOMMouseScroll', preventDefault, false); // older FF
  window.addEventListener(wheelEvent, preventDefault, wheelOpt); // modern desktop
  window.addEventListener('touchmove', preventDefault, wheelOpt); // mobile
  window.addEventListener('keydown', preventDefaultForScrollKeys, false);
}

function enableScroll() {
  window.removeEventListener('DOMMouseScroll', preventDefault, false);
  window.removeEventListener(wheelEvent, preventDefault, wheelOpt);
  window.removeEventListener('touchmove', preventDefault, wheelOpt);
  window.removeEventListener('keydown', preventDefaultForScrollKeys, false);
}
