function hoverRot(event) {
	// Unsichtbares Element auswählen
  const target = event.currentTarget;
  const parent = event.currentTarget.parentNode;
  const sideCont = parent.parentNode.querySelector('.flick');
  
  // Füge der sideCont-Klasse das sichtbare Attribut hinzu
  sideCont.classList.add("visible");
  
  // Kreis verkleinern
  target.style.height = "140px";
  target.style.width = "140px";
}

function hoverRotStop(event){
	// Unsichtbares Element auswählen
  const target = event.currentTarget;
  const parent = event.currentTarget.parentNode;
  const sideCont = parent.parentNode.querySelector('.flick');
  // Füge der timeConSide-Klasse das sichtbare Attribut hinzu
  sideCont.classList.remove("visible");


  // Kreis verkleinern
  target.style.height = "160px";
  target.style.width = "160px";
}


function setup(){
      
        const kreise = document.querySelectorAll('.circle');
        
        kreise.forEach(kreis => {
          kreis.addEventListener('mouseover', hoverRot);
          kreis.addEventListener('mouseout', hoverRotStop);
          
            console.log('Eventlistener angelegt');

        });
        
        
  }
	

window.addEventListener("load", setup);

