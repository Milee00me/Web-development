function checkEmail(e){
	var element=e.target;
	if(/[^a-zA-Z0-9@._]/.test(element.value)){
		alert("email is not valid only char from a-z A-Z 0-9 @ . _");
		element.value="";
		return false;
	}
	if(!/[a-zA-Z]/.test(element.value)){
		alert("email is not valid a-z or A-Z is must");
		element.value="";
		return false;
	}
	if(!/[@]/.test(element.value)){
		alert("email is not valid @ is must");
		element.value="";
		return false;
	}
	if(!/[.]/.test(element.value)){
		alert("email is not valid . is must");
		element.value="";
		return false;
	}
	if(!/^\w+@[a-zA-Z]+?\.[a-zA-Z]{2,3}$/.test(element.value)){
		alert("email is not valid. It should start with word letters, followed by @, followed by string, followed by a period and must end with a string between 2 to 3 character only");
		element.value="";
		return false;
	}
	
	return true;
}

function checkSubject(e){
	var element=e.target;
	if(!/[a-zA-Z\s]/.test(element.value)){
		alert("subject must have alphabets");
		element.value="";
		return false;
	}
	if(!/[a-zA-Z]/.test(element.value)){
		alert("subject cant contain only spaces");
		element.value="";
		return false;
	}
	if(!/([a-zA-Z]).{7,30}/.test(element.value)){
		alert("subject must contain atleast 8 character and max 30 charcater");
		element.value="";
		return false;
	}
	
	return true;
}

var email=document.getElementById('useremail');
email.addEventListener('blur',checkEmail,false);

var subject=document.getElementById('subject');
subject.addEventListener('change',checkSubject,false);
