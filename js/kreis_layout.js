function hoverRot(event) {
	// Unsichtbares Element auswählen
  const target = event.currentTarget;
  const parent = event.currentTarget.parentNode;
  const sideCont = parent.parentNode.querySelector('.flick');
  
  // Füge der sideCont-Klasse das sichtbare Attribut hinzu
  sideCont.classList.add("visible");
  
  // Kreis verkleinern
  target.style.height = "var(--shrinkingCircle)";
  target.style.width = "var(--shrinkingCircle)";
  target.style.backgroundColor = "#364635";
  target.style.overflow = "hidden";
}

function hoverRotStop(event){
	// Unsichtbares Element auswählen
  const target = event.currentTarget;
  const parent = event.currentTarget.parentNode;
  const sideCont = parent.parentNode.querySelector('.flick');
  // Füge der timeConSide-Klasse das sichtbare Attribut hinzu
  sideCont.classList.remove("visible");


  // Kreis vergrößern
  target.style.height = "var(--diameterCircle)";
  target.style.width = "var(--diameterCircle)";
  target.style.backgroundColor = "#f2f0e1";
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

