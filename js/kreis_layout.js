function hoverRot() {
	document.getElementById("side1").classList.add("visible");
}

function hoverRotStop(){
	document.getElementById("side1").classList.remove("visible");
}


function hoverRot2() {
	document.getElementById("side2").classList.add("visible");
}

function hoverRotStop2(){
	document.getElementById("side2").classList.remove("visible");
}


function hoverRot3() {
	document.getElementById("side3").classList.add("visible");
}

function hoverRotStop3(){
	document.getElementById("side3").classList.remove("visible");
}

function hoverRot4() {
	document.getElementById("side4").classList.add("visible");
}

function hoverRotStop4(){
	document.getElementById("side4").classList.remove("visible");
}

function setup(){

    	document.getElementById("circle1").addEventListener("mouseover", hoverRot);
        document.getElementById("circle1").addEventListener("mouseout", hoverRotStop);

        document.getElementById("circle2").addEventListener("mouseover", hoverRot2);
        document.getElementById("circle2").addEventListener("mouseout", hoverRotStop2);

        document.getElementById("circle3").addEventListener("mouseover", hoverRot3);
        document.getElementById("circle3").addEventListener("mouseout", hoverRotStop3);

        document.getElementById("circle4").addEventListener("mouseover", hoverRot4);
        document.getElementById("circle4").addEventListener("mouseout", hoverRotStop4);
    
  }
	

window.addEventListener("load", setup);

