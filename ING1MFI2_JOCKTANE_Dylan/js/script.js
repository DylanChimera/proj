// function change_onglet(name) {
//     console.log("name"+ name)
//     console.log('oo',"onglet_" + anc_onglet)
//   document.getElementById("onglet_" + anc_onglet).className = "onglet_0 onglet";
//   document.getElementById("onglet_" + name).className = "onglet_1 onglet";
//   document.getElementById("commentaire_onglet_" + anc_onglet).style.display =
//     "none";
//   document.getElementById("commentaire_onglet_" + name).style.display = "block";
//   anc_onglet = name;
// }

// var anc_onglet = "un";
// change_onglet(anc_onglet);

tabs = document.querySelectorAll('.tabs a')
console.log(tabs)
for (var i = 0; i<tabs.length; i++){

    tabs[i].addEventListener('click', function(e){
        var li = this.parentNode
        
        if(li.classList.contains('active')){return false}
        var div =  this.parentNode.parentNode.parentNode
        console.log(div)
        div.querySelector('.tabs .active').classList.remove('active')
        li.classList.add('active')
        
        div.querySelector('.tab-content.active').classList.remove('active')
        div.querySelector(this.getAttribute('href')).classList.add('active')
    })
}


function envMail() {
    var link = 'mailto:avidagrasto@fit.com?subject= '
             +document.getElementById('sujet').value
             +'&body='+document.getElementById('commentaire').value + ' | ' +'Ce message à été envoyer par : '
             +document.getElementById('prenom').value+ ' '
             +document.getElementById('nom').value+ ' '
             +document.getElementById('metier').value; 

             console.log(link)
    window.location.href = link;
}

function maFonction(a,b) {
    var div = document.getElementById(a);
    var div2 = document.getElementById(b);

    if (div.style.display === "none") {
      div.style.display = "block";
    } else {
      div.style.display = "none";
    }
    if (div2.style.display === "none") {
        div2.style.display = "block";
      } else {
        div2.style.display = "none";
      }
  }

  /*function zoom(img){
    img.style.width = (img.width*1.5)+"px";
    img.style.height = (img.weight*1.5)+"px";
  } fonction pour zoomer à revoir */


function modifier(increment,idValeur,idPlus,idStock,idMinus) {
       
var valeur = parseInt(document.getElementById(idValeur).value);
var stock = parseInt(document.getElementById(idStock).value);
if(valeur < stock && increment == 1){
  valeur += increment;
  document.getElementById(idValeur).value = valeur;
  Showminus(idMinus);
  if(valeur == stock){
  Hideplus(idPlus);
  }else{
  Showplus(idPlus);
  }
}
if(valeur > 0 && increment == -1){
  valeur += increment;
  document.getElementById(idValeur).value = valeur;
  Showplus(idPlus);
  if(valeur == 0){
  Hideminus(idMinus);
  }else{
  Showminus(idMinus);
  }
}
}


function Hideminus(idMinus){
    var div = document.getElementById(idMinus);
    div.style.visibility ='hidden';
}
function Showminus(idMinus){
    var div = document.getElementById(idMinus);
    div.style.visibility ='visible';
}
function Hideplus(idPlus){
    var div = document.getElementById(idPlus);
    div.style.visibility ='hidden';
}

function Showplus(idPlus){
    var div = document.getElementById(idPlus);
    div.style.visibility ='visible';
}


const form = document.getElementById('form');
const nom = document.getElementById('nom');
const prenom = document.getElementById('prenom');
const email = document.getElementById('email');
const sujet = document.getElementById('sujet');
const birthday = document.getElementById('birthday');
const commentaire = document.getElementById('commentaire');


var selectElmt = document.getElementById("metier");



form.addEventListener('input submit', e => {
	e.preventDefault();
	
	checkInputs();



});
function checkInputs() {
	// trim to remove the whitespace
	const nomValue = nom.value.trim();
	const prenomValue = prenom.value.trim();
	const emailValue = email.value.trim();
	const sujetValue = sujet.value.trim();
	const birthdayValue = ndate.value.trim();
	const commentaireValue = commentaire.value.trim();



	
const valeurselectionnee = selectElmt.options[selectElmt.selectedIndex].value.trim();
const textselectionne = selectElmt.options[selectElmt.selectedIndex].text.trim();


	if(nomValue === '') {
		setErrorFor(nom, 'Le nom ne peut pas être vide');
	} else {
		setSuccessFor(nom);
	}

	if(prenomValue === '') {
		setErrorFor(prenom, 'Le prenom ne peut pas être vide');
	} else {
		setSuccessFor(prenom);
	}
	
	
	if(emailValue === '') {
		setErrorFor(email, 'Email pas correct');
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'Email pas correct');
	} else {
		setSuccessFor(email);
	}


	if(sujetValue === '') {
		setErrorFor(sujet, "Votre message n'a pas de sujet");
	} else {
		setSuccessFor(sujet);
	}

	if(commentaireValue === '') {
		setErrorFor(commentaire, 'Le commentaire est vide');
	} else {
		setSuccessFor(commentaire);
	}

	if(textselectionne === '--Choisissez une option--') {
		setErrorFor(metier, 'Veuillez selectionner une profession');
	} else {
		setSuccessFor(metier);
	}

	if(birthdayValue === 'mm/dd/yyyy') {
		setErrorFor(ndate, 'Veuillez entrer votre date de naissance');
	} else {
		setSuccessFor(ndate);
	}


}



function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'puerror';
	small.innerText = message;
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'pu';
}
	
function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}

