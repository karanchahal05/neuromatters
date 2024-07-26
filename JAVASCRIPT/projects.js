Element.prototype.appendBefore = function(element) {
  element.parentNode.insertBefore(this, element);
}, false;

Element.prototype.appendAfter = function(element) {
  element.parentNode.insertBefore(this, element.nextSibling);
}, false;

function removeElementsByClass(className) {
  var elements = document.getElementsByClassName(className);
  while(elements.length > 0){
      elements[0].parentNode.removeChild(elements[0]);
  }
}

function projectDes() {
  if (y.matches) {
    var projectHrefs = [];
    var projectHref = document.getElementsByClassName('projectsbutton');
    for (let i = 0; i < projectHref.length; i++) {
      projectHrefs.push(projectHref[i].href);
    }
    removeElementsByClass('projectsbutton');
    for (let i = 0; i < projectHrefs.length; i++) {
      var projectButton = document.createElement('a');
      projectButton.href = projectHrefs[i];
      projectButton.classList.add('linkstyleremove');
      projectButton.classList.add('basictext');
      projectButton.classList.add('center');
      projectButton.classList.add('highlightbackground');
      projectButton.classList.add('sidetosidepadding');
      projectButton.classList.add('toppadding');
      projectButton.classList.add('bottompadding');
      projectButton.classList.add('buttonclickbackdark');
      projectButton.classList.add('projectsbutton');
      projectButton.textContent = "See More";
      var desImg = "img" + String(i);
      projectButton.appendAfter(document.getElementById(desImg));
      var space = document.createElement('br');
      space.classList.add('space');
      space.appendAfter(document.getElementById(desImg));
    }
  }
  else {
    var projectHrefs = [];
    var projectHref = document.getElementsByClassName('projectsbutton');
    for (let i = 0; i < projectHref.length; i++) {
      projectHrefs.push(projectHref[i].href);
    }
    removeElementsByClass('projectsbutton');
    for (let i = 0; i < projectHrefs.length; i++) {
      var projectButton = document.createElement('a');
      projectButton.href = projectHrefs[i];
      projectButton.classList.add('linkstyleremove');
      projectButton.classList.add('basictext');
      projectButton.classList.add('center');
      projectButton.classList.add('highlightbackground');
      projectButton.classList.add('sidetosidepadding');
      projectButton.classList.add('toppadding');
      projectButton.classList.add('bottompadding');
      projectButton.classList.add('buttonclickbackdark');
      projectButton.classList.add('projectsbutton');
      projectButton.textContent = "See More";
      var desPara = "projectdes" + String(i);
      projectButton.appendAfter(document.getElementById(desPara));
      removeElementsByClass('space');
    }
  }
}

var y = window.matchMedia("(max-width: 990px)");
projectDes(y);
y.addListener(projectDes);
