$(document).ready(function(){
	
	
	$("#login").on("submit",function(event){
		event.preventDefault();
		$(".overlay").show();
		$.ajax({
			url	:	"login.php",
			method:	"POST",
			data	:$("#login").serialize(),
			success	:function(data){
				if(data == "login_success"){
					window.location.href = "profile.php";
                }
				else{
					window.location.href = "profile.php";
				}
			}
		})
	})
	
	
})