
class Ball {
  constructor() {
    this.r = 100;
    this.x = width;
    this.y = height - this.r;
  }

  moveball() {
    this.x -=11;
  }

  showball() {
    image(ballImg, this.x, this.y, this.r, this.r);

  
  }
}
