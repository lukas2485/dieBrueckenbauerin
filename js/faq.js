function clickMore(event) {
  // Unsichtbares Element auswählen
  const target = event.currentTarget;
  const parent = event.currentTarget.parentNode;
  const answer = parent.parentNode.querySelector('.answer');
  const child  = target.firstChild;
  
  
  // Füge der sideCont-Klasse das sichtbare Attribut hinzu
  if (answer.style.display == "none") {
    answer.style.display='block';
    child.innerHTML = "⋀";
  } else {
    answer.style.display='none';
    child.innerHTML = "⋁";
  }
  
}


function setup(){
      
        const fragen = document.querySelectorAll('.more_faq_btn');
        
        fragen.forEach(fragen => {
          fragen.addEventListener('click', clickMore);
          
            console.log('Eventlistener click');

        });
        
        
  }
	

window.addEventListener("load", setup);

