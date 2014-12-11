function insertcustomers(){
var gender= '';
if($('#genderMale').prop('checked')==true){
gender='Male';
}else{
	gender='Female';
}


	var obj=new Object();
	obj.fname= $('#firstname').val();
	obj.lname=$('#lastname').val();
	obj.address=$('#address').val();
	obj.fathersname=$('#fathersname').val();
	obj.mothersname=$('#mothersname').val();
	obj.month=$('#month').val();
	obj.day=$('#day').val();
	obj.year=$('#year').val();
	obj.gender=gender;


	$.ajax({
		url: '/registernewcustomer',
		type: 'POST',
		datatype: 'json',
		data: {
			customer : obj
		},
		success: function(response){

			console.log(response);

		},
		error: function(err){
			console.log(err);
		}
	});
}