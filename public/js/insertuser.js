function Create(){
	var obj=new Object();
	obj.email= $('#emails').val();
	obj.firstname=$('#firstname').val();
	obj.lastname=$('#lastname').val();
	obj.password=$('#password').val();

	$.ajax({
		url: '/jun',
		type: 'POST',
		datatype: 'json',
		data: {
			user : obj
		},
		success: function(response){

			console.log(response);

		},
		error: function(err){
			console.log(err);
		}
	});
}

function Login(){

	if($('#login-username').val() == ''){
		alert('Please enter username');
		return;
	}
	if($('#login-password').val() == ''){
		alert('Please enter Password');
		return;
	}

	var obj=new Object();
	obj.username= $('#login-username').val();
	obj.password=$('#login-password').val();

	$.ajax({
		url: '/login',
		type: 'POST',
		datatype: 'json',
		data: {
			user : obj
		},
		success: function(response){

			if(response.success == true){
				window.location.href="/home";

			}else{
				window.location.href="/jun";
			}

			console.log(response);

		},
		error: function(err){

			console.log(err);
		}
	});
}
