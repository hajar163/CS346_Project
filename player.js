
class Player {
  constructor() {
    this.r = 110;
    this.x = 40;
    this.y = height - this.r;
    this.vy = 0;
    this.gravity =1.5;
  }

  jumpplayer() {
    if (this.y == height - this.r) {
      this.vy = -30;
    }
  }

  hits(balls) {
    let x1 = this.x + this.r * 0.5;
    let y1 = this.y + this.r * 0.5;
    let x2 = balls.x + balls.r * 0.5;
    let y2 = balls.y + balls.r * 0.5;
    return collideCircleCircle(x1, y1, this.r, x2, y2, balls.r);
  }

  moveplayer() {
    this.y += this.vy;
    this.vy += this.gravity;
    this.y = constrain(this.y, 0, height - this.r);

  }

  showplayer() {
    image(playerImg, this.x, this.y, this.r, this.r);

  }
}
