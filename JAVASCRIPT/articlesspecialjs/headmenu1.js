Element.prototype.appendBefore = function(element) {
  element.parentNode.insertBefore(this, element);
}, false;

Element.prototype.appendAfter = function(element) {
  element.parentNode.insertBefore(this, element.nextSibling);
}, false;

function menu(x) {
  if (x.matches){
    var menudropdown = document.createElement('a');
    menudropdown.href = "#";
    menudropdown.setAttribute('id', 'menudropdown');
    menudropdown.setAttribute('onclick', 'dropDown()');
    menudropdown.appendAfter(document.getElementById('titlewrap'));
    var menusymbol = document.createElement('img');
    menusymbol.src = "../IMG/head/menu.jpeg";
    menusymbol.setAttribute('id','menusymbol');
    menudropdown.appendChild(menusymbol);
  }
  else {
    var menuelement = document.getElementById('menudropdown');
    if (typeof(menuelement) != 'undefined' && menuelement != null) {
      menuelement.remove();
    }
  }
}

var x = window.matchMedia("(max-width:900px)");
menu(x);
x.addListener(menu);

function dropDown() {
  document.getElementById('dropdownmenu').classList.toggle('drop')
}

for (let i = 0; i < 3; i++) {
  setTimeout(function () {
    var headerHeight = $('#header').outerHeight();
    var properHeaderHeight = String(headerHeight) + 'px'
    document.getElementById('height').style.height = properHeaderHeight;
    document.getElementById('height0').style.height = properHeaderHeight;
  }, 500);
}

$(window).resize(function(){
  var headerHeight1 = $('#header').outerHeight();
  var properHeaderHeight1 = String(headerHeight1) + 'px'
  document.getElementById('height0').style.height = properHeaderHeight1;
  document.getElementById('height').style.height = properHeaderHeight1;
});
