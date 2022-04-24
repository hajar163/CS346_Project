var container=document.querySelector("#container");
var dino=document.querySelector("#dino");
var block=document.querySelector("#block");
var road=document.querySelector("#road");
var cloud=document.querySelector("#cloud");
var score=document.querySelector("#score");
var gameOver=document.querySelector("#gameOver");

//declaring variable for score
var interval = null;
var playerScore = 0;


//function for score
var scoreCounter = () => {
    playerScore++;

    score.innerHTML = `Score <b>${playerScore}</b>`;
}
//start game
//interval=setInterval(scoreCounter,200);

window.addEventListener("keydown", (start) => {
      //console.log(start);
      if (start.code == "Space") {
        gameOver.style.display = "none";
        block.classList.add("blockActive");
        road.firstElementChild.style.animation = "roadAnimate 1.5s linear infinite";
        cloud.firstElementChild.style.animation = "cloudAnimate 50s linear infinite";

        //score
        var playerScore = 0;
        interval = setInterval(scoreCounter, 200);
    }
   
});
//jump Your Character
window.addEventListener("keydown", (e) => {
       //console.log(e);
       if (e.key == "ArrowUp")
       if (dino.classList != "dinoActive") {
           dino.classList.add("dinoActive");

           //                remove class after 0.5 seconds
           setTimeout(() => {
               dino.classList.remove("dinoActive");
           }, 500);
       }

    
});
//'Game Over' if 'Character' hit The 'Block' 
var result = setInterval(() => {
    var dinoBottom = parseInt(getComputedStyle(dino).getPropertyValue("bottom"));
    //    console.log("dinoBottom" + dinoBottom);

    var blockLeft = parseInt(getComputedStyle(block).getPropertyValue("left"));
    //    console.log("BlockLeft" + blockLeft);

    if (dinoBottom <= 90 && blockLeft >= 20 && blockLeft <= 145) {
        //        console.log("Game Over");

        gameOver.style.display = "block";
        block.classList.remove("blockActive");
        road.firstElementChild.style.animation = "none";
        cloud.firstElementChild.style.animation = "none";
        clearInterval(interval);
        playerScore = 0;
    }
}, 10);



