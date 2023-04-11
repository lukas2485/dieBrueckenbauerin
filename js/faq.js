function changeStyle(element, backgroundColor, color) {
  element.style.background = backgroundColor;
  element.style.color = color;
}

function changeButtonStyle(element, color) {
  element.style.borderColor  = color;
}


function clickMore(event) {
  // Unsichtbares Element auswählen
  const target = event.currentTarget;
  const parent = event.currentTarget.parentNode;
  const answer = parent.parentNode.querySelector('.answer');
  const question = parent.parentNode.querySelector('.box_top');
  const child  = target.firstChild;
  
  
  // Füge der sideCont-Klasse das sichtbare Attribut hinzu
  if (answer.style.display == "none") {
    answer.style.display='block';
    answer.style.marginBottom = "40px";
    answer.style.padding = "20px";
    child.innerHTML = "⋀";
    changeStyle(question, "var(--mainColorheadline)", "var(--lightColor)");
    changeButtonStyle(target, "var(--lightColor)");
  } else {
    answer.style.display='none';
    answer.style.marginBottom = "0";
    child.innerHTML = "⋁";
    changeStyle(question, "none", "var(--mainColorheadline)");
    changeButtonStyle(target, "var(--mainColorheadline)");
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

