




const form = document.getElementById('form');
const nom = document.getElementById('nom');
const prenom = document.getElementById('prenom');
const email = document.getElementById('email');
const sujet = document.getElementById('sujet');
const birthday = document.getElementById('ndate');
const commentaire = document.getElementById('commentaire');


var selectElmt = document.getElementById("metier");



form.addEventListener('submit', e => {
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
		setErrorFor(nom, 'Le nom est vide');
	} else {
		setSuccessFor(nom);
	}

	if(prenomValue === '') {
		setErrorFor(prenom, 'Le prenom est vide');
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

	if(birthdayValue === '') {
		setErrorFor(ndate, 'Veuillez entrer votre date de naissance');
	} else {
		setSuccessFor(ndate);
	}


}

alert("ok");


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
