let player;
let playerImg;
let backgroundImg;
let ballImg;
let balls = [];
let soundClassifier;
let rightaudio=new Audio("GameMusic.mp3");
let wrongaudio=new Audio("Game Over Sound Effect.mp3");
var interval = null;
var playerScore = 0;
var gameOver=document.querySelector("#gameOver");


function preload() {
  const options = {probabilityThreshold: 0.95};
  soundClassifier = ml5.soundClassifier('SpeechCommands18w', options);
  playerImg = loadImage('player.png');
  ballImg = loadImage('ball.png');
  backgroundImg=loadImage("background.jpg")

}

function setup() {
  createCanvas(1535, 752);
  player = new Player();
  soundClassifier.classify(gotCommand);
}

function gotCommand(error, results) {
  if (error) {
    console.error(error);
  }
  console.log(results[0].label, results[0].confidence);
  if (results[0].label == 'up') {
    player.jumpplayer();
  }
}

function keyPressed() {
  if (key == ' ') {
    player.jumpplayer();
   
  }
}

var scoreCounter = () => {
  playerScore++;
  score.innerHTML = `Score <b>${playerScore}</b>`;
}

interval = setInterval(scoreCounter,200);

  function draw() {
    rightaudio.play();
    if (random(1) < 0.005) {
      balls.push(new Ball());
    }
    background(backgroundImg);
    gameOver.style.display = "none";
    for (let b of balls) {
      b.moveball();
      b.showball();
      if (player.hits(b)) {
        rightaudio.pause();
        wrongaudio.play();
        gameOver.style.display = "block";
        clearInterval(interval);
        noLoop();
      }
    
    }
    player.showplayer();
    player.moveplayer();
    
  }