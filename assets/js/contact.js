$(document).ready(function(){
	$("#add").click(function(){
		name=$("#name").val();
		phone=$("#phone").val();
		mail=$("#mail").val();
		title=$("#title").val();
		detail=$('#detail').val();
		emailAddress = strchr(mail,'@');
		dotmail = strchr(emailAddress,'.');
		alert(dotmail);
	  	if(name==""||title==""||detail==""||phone==""||mail==""){
			alert('กรุณากรอกข้อมูลให้ครบถ้วน.');
			if(detail=="")
				document.getElementById('detail').focus();
			if(title=="")
				document.getElementById('title').focus();
			if(mail=="")
				document.getElementById('mail').focus();
			if(phone=="")
				document.getElementById('phone').focus();
			if(name=="")
				document.getElementById('name').focus();
		}if(phone.length<9){
			alert('กรุณากรอกเบอร์โทรศัพท์ให้ครบถ้วนให้ครบถ้วน.');
			document.getElementById('phone').focus();
		}
		if(dotmail.length()<2){
			alert('กรุณากรอกอีเมลให้ครบถ้วนให้ครบถ้วน.');
			document.getElementById('mail').focus();
		}else{
			alert('เรียบร้อย.');
			return true;
		}
	return false;
	});
});