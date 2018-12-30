/*$(document).ready(function(){
	alert("hello");
});*/

$(function(){
	$('#rollno').on('blur',function(){
		if(!/(^\d{2}((CO)|(DCO)|(EE)|(DEE)|(EX)|(DEX)|(CE)|(DCE)|(ME)|(DME)|(CES)|(DCES))\d{2,3}$)+/gi.test(this.value)){
			alert("invalid rollnumber must start with digit and contain proper dept code");
			this.value="";
			return false;
		}
	});

	$('#sname').on('keypress',function(e){
		if(/^[^a-zA-Z ]/.test(e.key)){
			alert("Invalid name. only alphabet and space is allowed.");
			this.value="";
			return false;
		}
		if(this.value.length==40){
			alert("name length must be should not be beyond 40 characters");
			this.value="";
			return false;
		}
	});
	$('#sname').on('blur',function(e){
		if(this.value.length<3){
			alert("name must be alteast 3 character long");
			this.value="";
			return false;
		}
	});
	$('#address').on('keypress',function(e){
		if(!/[a-zA-Z \d\.\/\,\(\)\-]/.test(e.key)){
			alert("Invalid address. valid inputs are alphanumeric values . / ( ) - only.");
			this.value="";
			return false;
		}
		if(this.value.length==100){
			alert("address max length reached");
			return false;
		}
	});
	$('#semail').on('blur',function(){
		if(/[^a-zA-Z0-9@._]/.test(this.value)){
			alert("email is not valid only char from a-z A-Z 0-9 @ . _");
			this.value="";
			return false;
		}
		if(!/[a-zA-Z]/.test(this.value)){
			alert("email is not valid a-z or A-Z is must");
			this.value="";
			return false;
		}
		if(!/[@]/.test(this.value)){
			alert("email is not valid @ is must");
			this.value="";
			return false;
		}
		if(!/[.]/.test(this.value)){
			alert("email is not valid . is must");
			this.value="";
			return false;
		}
		if(!/^\w+@[a-zA-Z]+?\.[a-zA-Z]{2,3}$/.test(this.value)){
			alert("email is not valid. It should start with word letters, followed by @, followed by string, followed by a period and must end with a string between 2 to 3 character only");
			this.value="";
			return false;
		}
	});
});
