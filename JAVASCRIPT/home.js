var screenH = window.innerHeight;
var head = document.getElementById('headbar');
var headH = head.offsetHeight;



function mentalhealth() {
  var total1H = screenH - headH;
  total1H = total1H.toString();
  total1H = total1H.concat('px');

  var mentalhealth = document.getElementById('freepik_stories-mental-health');
  mentalhealth.style.height = total1H;
  mentalhealth.style.width = '100%';

}

window.onload = mentalhealth;

const impact = document.getElementById('impact');
const options = {
  threshold: 0.9,
  rootMargin: '0px'
};

const observer = new IntersectionObserver(callback, options);


function callback(entries, observer) {
  entries.forEach(entry => {
    if (entry.isIntersecting == true) {
      counterUp();
    }
  })
}

observer.observe(impact);

var counters = document.querySelectorAll('.counter');
var speed = 200;

function counterUp() {
  counters.forEach(counter => {
    var num = parseInt(counter.innerHTML);
    var target = parseInt(counter.getAttribute('data-target'));
    var increment = target/speed;



    if (num < target) {
      num = parseInt(num + increment);
      counter.innerHTML = num.toString();
    }
    else {
      counter.innerHTML = target.toString();
      return
    }

    setTimeout(counterUp, 200);

  })
}
