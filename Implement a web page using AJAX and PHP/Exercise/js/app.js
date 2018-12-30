$(document).ready(function(){
	$("#form1").submit(function(event){
		event.preventDefault(); 
		$.ajax({
			type: "POST",
			url: "query.php",
			data: new FormData(this),
			 contentType: false,
			 cache: false,
			 processData:false,
			success: function(result){
				if(result=="false")
				{					
					$('#regmsg').html('<div class="alert alert-danger">Register was not successful</div>').fadeIn().delay(1000).fadeOut();
				}
				else
				{
					$('#regmsg').html('<div class="alert alert-info">Successfully Registered!!!Click here to be redirected to login page</div>');
					
				}
			}
			});
		return false;
	});
});