// Grand Finale

function Bird() { }

Bird.prototype.fly = function() {
			 return "I am flying!"; 
			};

function Penguin() { }
Penguin.prototype = Object.create(Bird.prototype);
Penguin.prototype.constructor = Penguin;

// Only change code below this line
Penguin.prototype.fly = function(){
    return "Alas, this is a flightless bird";
}

// Only change code above this line

let penguin = new Penguin();
console.log(penguin.fly());


// another one
let flyMixin = function(obj) {
  obj.fly = function() {
    console.log("Flying, wooosh!");
  }
};
let bird = {
  name: "Donald",
  numLegs: 2
};

let plane = {
  model: "777",
  numPassengers: 524

};

flyMixin(bird);
flyMixin(plane);

console.log(bird.fly);	
console.log(plane.fly);


var frank = new Date(). getYear();
console.log(frank);
// alert(frank);

// another

(function () {
  console.log("Chirp, chirp!");
})();

(function () {

  console.log("A cozy nest is ready");
})();

// makeNest();

let funModule = (function(){
  return{
    isCuteMixin:function(obj) {
  obj.isCute = function() {
    return true;
  };
},
 singMixin: function(obj) {
  obj.sing = function() {
    console.log("Singing to an awesome tune");
  };
}
  }
})();