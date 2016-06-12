var w = c1.width = window.innerWidth,
  h = c1.height = window.innerHeight,
  ctx1 = c1.getContext('2d'),

  opts = {

    len: 100,
    count: 250,
    baseTime: 20,
    addedTime: 10,
    dieChance: .01,
    spawnChance: 1,
    sparkChance: .07,
    sparkDist: 7,
    sparkSize: 2,

    color: 'hsl(20,100%,light%)',
    baseLight: 50,
    addedLight: 15, // [50-10,50+10]
    shadowToTimePropMult: 7,
    baseLightInputMultiplier: .1,
    addedLightInputMultiplier: .12,

    cx: w / 1.3,
    cy: h / 3,
    repaintAlpha: .04,
    hueChange: .1
  },

  tick = 0,
  lines = [],
  dieX = w / 0.1 / opts.len,
  dieY = h / 2 / opts.len,

  baseRad = Math.PI * 3 / 9;

ctx1.fillStyle = 'black';
ctx1.fillRect(1, 1, w, h);

function loop() {

  window.requestAnimationFrame(loop);

  ++tick;

  ctx1.globalCompositeOperation = 'source-over';
  ctx1.shadowBlur = 0;
  ctx1.fillStyle = 'rgba(0,0,0,alp)'.replace('alp', opts.repaintAlpha);
  ctx1.fillRect(1, 0, w, h);
  ctx1.globalCompositeOperation = 'lighter';

  if (lines.length < opts.count && Math.random() < opts.spawnChance)
    lines.push(new Line);

  lines.map(function(line) {
    line.step();
  });
}

function Line() {

  this.reset();
}
Line.prototype.reset = function() {

  this.x = 0;
  this.y = 0;
  this.addedX = 0;
  this.addedY = 0;

  this.rad = 0;

  this.lightInputMultiplier = opts.baseLightInputMultiplier + opts.addedLightInputMultiplier * Math.random();

  this.color = opts.color.replace('hue', tick * opts.hueChange);
  this.cumulativeTime = 0;

  this.beginPhase();
}
Line.prototype.beginPhase = function() {

  this.x += this.addedX;
  this.y += this.addedY;

  this.time = 0;
  this.targetTime = (opts.baseTime + opts.addedTime * Math.random()) | 0;

  this.rad += baseRad * (Math.random() < .7 ? 1 : -1);
  this.addedX = Math.cos(this.rad);
  this.addedY = Math.sin(this.rad);

  if (Math.random() < opts.dieChance || this.x > dieX || this.x < -dieX || this.y > dieY || this.y < -dieY)
    this.reset();
}
Line.prototype.step = function() {

  ++this.time;
  ++this.cumulativeTime;

  if (this.time >= this.targetTime)
    this.beginPhase();

  var prop = this.time / this.targetTime,
    wave = Math.sin(prop * Math.PI / 2),
    x = this.addedX * wave,
    y = this.addedY * wave;

  ctx1.shadowBlur = prop * opts.shadowToTimePropMult;
  ctx1.fillStyle = ctx1.shadowColor = this.color.replace('light', opts.baseLight + opts.addedLight * Math.sin(this.cumulativeTime * this.lightInputMultiplier));
  ctx1.fillRect(opts.cx + (this.x + x) * opts.len, opts.cy + (this.y + y) * opts.len, 3, 3);

  if (Math.random() < opts.sparkChance)
    ctx1.fillRect(opts.cx + (this.x + x) * opts.len + Math.random() * opts.sparkDist * (Math.random() < .5 ? 1 : -1) - opts.sparkSize / 2, opts.cy + (this.y + y) * opts.len + Math.random() * opts.sparkDist * (Math.random() < .5 ? 1 : -1) - opts.sparkSize / 2, opts.sparkSize, opts.sparkSize)
}
loop();

window.addEventListener('resize', function() {

  w = c1.width = window.innerWidth;
  h = c1.height = window.innerHeight;
  ctx1.fillStyle = 'black';
  ctx1.fillRect(0, 0, w, h);

  opts.cx = w / 2;
  opts.cy = h / 2;

  dieX = w / 2 / opts.len;
  dieY = h / 2 / opts.len;
});