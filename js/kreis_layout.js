function addMobile(target, parent, sideCont) {
  // Content sichtbar machen
  const info = parent.parentNode.querySelector('.flick');
  const hr = parent.parentNode.querySelector('.hr');
  const outerElement = sideCont.parentNode;


  outerElement.style.position = "relative";

  // Kreis und hr deaktivieren
  target.style.display = "none";
  hr.style.display = "none";
  
  // Inhalt sichtbar machen und positionieren
  info.style.opacity = "1";
  info.style.position = "absolute";
  info.style.top = "0";
  info.style.left = "0";
  info.style.width = "70%";
  info.classList.add("centerMobile");

  // Inhalt formatieren
  info.style.backgroundColor = "var(--lightColor)";
}

function removeMobile(target, parent, sideCont) {


}

function addDesk(target, sideCont) {
  // sideCont-Klasse sichtbar machen
  sideCont.style.opacity = "1";
  
  // Kreis verkleinern
  target.style.height = "var(--shrinkingCircle)";
  target.style.width = "var(--shrinkingCircle)";
  target.style.backgroundColor = "#364635";
  target.style.overflow = "hidden";
  
}

function removeDesk(target, sideCont) {
  // Füge der timeConSide-Klasse das sichtbare Attribut hinzu
  sideCont.style.opacity = "0";

  // Kreis vergrößern
  target.style.height = "var(--diameterCircle)";
  target.style.width = "var(--diameterCircle)";
  target.style.backgroundColor = "#f2f0e1";
}




function hoverRot(event) {

  const target = event.currentTarget;
  const parent = event.currentTarget.parentNode;
  const sideCont = parent.parentNode.querySelector('.flick');

  if (window.innerWidth > 1225) {
    addDesk(target, sideCont);
  } else {
    addMobile(target, parent, sideCont);
  }
  
}

function hoverRotStop(event){
	// Unsichtbares Element auswählen
  const target = event.currentTarget;
  const parent = event.currentTarget.parentNode;
  const sideCont = parent.parentNode.querySelector('.flick');

  if (window.innerWidth > 1225) {
    removeDesk(target, sideCont);
  } else {
    removeMobile(target, parent, sideCont);
  }
 
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

