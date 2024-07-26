Element.prototype.appendBefore = function(element) {
  element.parentNode.insertBefore(this, element);
}, false;

Element.prototype.appendAfter = function(element) {
  element.parentNode.insertBefore(this, element.nextSibling);
}, false;

var slideQue = document.getElementById('slideQue');
var speciAnswer = document.getElementById('answer');
var title = document.getElementById('title');
var input = document.getElementById('user');

var amountofQues = 4
var codingamountofQues = amountofQues - 1
var ques = ['At what age does the brain fully form? (give an age, i.e. 22)', 'What percentage of the human brain is made up of fat? (give a percentage, i.e. 30%)', 'How many neurons are there present in the adult human brain? (give a number, i.e. 1 billion)', 'What is the rate at which neurons develop in early pregnancy (give a number per minute, i.e. 1,060 per minute)'];
var answers = ['The brain fully develops at 25.', '60% of the human brain is made up of fat.', 'There are 100 billion neurons in the adult human brain.', 'In early pregnancy, neurons develop at an alarming rate of 250,000 per minute.'];
var realanswers = ['25', '60%', '100 billion', '250,000 per minute'];

var buttonNames = ['Cool!', 'I want to know more!', 'Continue', 'Thats Interesting'];
nameIndex = Math.floor(Math.random() * 4) + 1;

var score = 0;

var queansIndex = 0

slideQue.textContent = ques[queansIndex];

function score() {
  score = score/amountofQues;
  title.textContent = score;
}

function game() {
  var useranswer = input.value;
  if (useranswer == realanswers[queansIndex]) {
    var correct = "Your right!";
    score = score + 1;
  }
  else {
    var correct = "Your incorrect!";
  }
  input.value = "";

  var title2 = document.getElementById('title2');
  if (typeof(title2) != 'undefined' && title2 != null) {
    title2.remove();
  }

  title.textContent = "Answer";
  speciAnswer.textContent = correct + " " + answers[queansIndex];
  queansIndex = queansIndex + 1;
  document.getElementById('quetitle').textContent = "Question";
  slideQue.textContent = ques[queansIndex];
  document.getElementById('buttonName').textContent = buttonNames[nameIndex];
  nameIndex = Math.floor(Math.random() * 4) + 1;

  if (queansIndex > 3) {
    title.textContent = "Thank you for Completing the Quiz";
    var breaktag = document.createElement('br');
    breaktag.appendAfter(document.getElementById('title'));
    speciAnswer.textContent = "You got " + score + " out of " + amountofQues + " correct and your accuracy rate is " + (score/amountofQues) * 100 + "%";
    document.getElementById('quetitle').remove();
    document.getElementById('slideQue').remove();
    input.remove();
    document.getElementById('button').remove();
    var title2 = document.getElementById('title2');
    if (typeof(title2) != 'undefined' && title2 != null) {
      title2.remove();
    }
    for (let i = 1; i < 4; i++) {
      var br = 'br';
      var breakElement = br + String(i);
      document.getElementById(breakElement).remove();
    }
  }
}

function gameTitle() {
  if (z.matches) {
    title.textContent = "Learn About Neuroscience";
    var textTitle2 = "by Testing Yourself"
    var title2 = document.createElement('div');
    title2.setAttribute('id', 'title2');
    title2.classList.add('highlight');
    title2.classList.add('titleminitext');
    title2.classList.add('center');
    title2.appendAfter(title);
    title2.textContent = textTitle2
  }
  else {
    var titleElement = document.getElementById('title2');
    if (typeof(titleElement) != 'undefined' && titleElement != null) {
      titleElement.remove();
    }
    title.textContent = "Learn About Neuroscience" + " " + "by Testing Yourself"
  }
}

var z = window.matchMedia("(max-width:580px)");
gameTitle(z);
z.addListener(gameTitle);
