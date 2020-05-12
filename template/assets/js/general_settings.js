//https://wordpress.stackexchange.com/questions/129955/using-standard-backend-elements-in-plugin
jQuery(document).ready( function($) {
$("#save-settings").hide();
$("#add-settings").show();
$("#edit-settings").hide();
$("#update-settings").hide();
$("#finish-settings").hide();
$("#email_notifications").prop("disabled",true);
$("#email_paypal").prop("disabled",true);
$("#reserve_fee").prop("disabled",true);
$("#starthour").prop("disabled",true);
$("#finishhour").prop("disabled",true);
$("#starthour").timepicker({ 'timeFormat': 'H:i:s'});
$("#finishhour").timepicker({ 'timeFormat': 'H:i:s'});
$("#schoolsetting").prop("disabled",true);
$("#roomsetting").prop("disabled",true);
$("#save-settings").click(function() {
	var email_notifications=$("#email_notifications").val();
	var email_paypal=$("#email_paypal").val();
	var reserve_fee=$("#reserve_fee").val();
	var starthour=$("#starthour").val();
	var finishhour=$("#finishhour").val();
	var schoolsetting=$("#schoolsetting").val();
	var roomsetting=$("#roomsetting").val();
	var err=0;
	if(!email_notifications) err=1;
	if(!email_paypal) err=1;
	if(!starthour) err=1;
	if(!finishhour) err=1;
	if(!comprueba(schoolsetting)) err=1;
	if(!comprueba(roomsetting)) err=1;	
	if(!validateEmails(email_notifications)) err=1;
	if(!validateEmails(email_paypal)) err=1;
	if(err==1){
		if(!email_notifications) jQuery("#msg_emailnot").html(("Indirizzo errato"));
		if(!email_paypal) jQuery("#msg_emailpay").html(("Indirizzo errato"));
		if(!starthour) jQuery("#msg_starthour").html(("Devi inserire ora da"));
		if(!finishhour) jQuery("#msg_finishhour").html(("Devi inserire ora a"));
		if(!comprueba(schoolsetting)) jQuery("#msg_school").html(("Devi inserire scuola"));
		if(!comprueba(roomsetting)) jQuery("#msg_room").html(("Devi inserire aula"));	
		if(!validateEmails(email_notifications)) jQuery("#msg_emailnot").html(("Indirizzo errato"));
		if(!validateEmails(email_paypal)) jQuery("#msg_emailpay").html(("Indirizzo errato"));
	}
	else {
	var data= {
		action:'savesettings',
		email_notifications: email_notifications,
		email_paypal: email_paypal,
		reserve_fee: reserve_fee,
		starthour: starthour,
		finishhour: finishhour,
		school: schoolsetting,
		room: roomsetting
	};
	$.post('admin-ajax.php', data, function(response) {
		$("#cont_settings").html((response));
		$("#save-settings").hide();
		$("#edit-settings").hide();
		$("#add-settings").hide();
		$("#update-settings").hide();
		$("#finish-settings").show();
		$("#email_notifications").prop("disabled",true);
		$("#email_paypal").prop("disabled",true);
		$("#reserve_fee").prop("disabled",true);
		$("#starthour").prop("disabled",true);
		$("#finishhour").prop("disabled",true);
		$("#schoolsetting").prop("disabled",true);
		$("#roomsetting").prop("disabled",true);
		jQuery("#msg_emailnot").html((""));
		jQuery("#msg_emailpay").html((""));
		jQuery("#msg_starthour").html((""));
		jQuery("#msg_finishhour").html((""));
		jQuery("#msg_school").html((""));
		jQuery("#msg_room").html((""));	
		jQuery("#msg_emailnot").html((""));
		jQuery("#msg_emailpay").html((""));					
	});
	return false;
	}
});
$("#update-settings").click(function() {
	var id=$("#idsetting").val();
	var email_notifications=$("#email_notifications").val();
	var email_paypal=$("#email_paypal").val();
	var reserve_fee=$("#reserve_fee").val();
	var starthour=$("#starthour").val();
	var finishhour=$("#finishhour").val();
	var schoolsetting=$("#schoolsetting").val();
	var roomsetting=$("#roomsetting").val();
	var err=0;
	if(!email_notifications) err=1;
	if(!email_paypal) err=1;
	if(!starthour) err=1;
	if(!finishhour) err=1;
	if(!comprueba(schoolsetting)) err=1;
	if(!comprueba(roomsetting)) err=1;	
	if(!validateEmails(email_notifications)) err=1;
	if(!validateEmails(email_paypal)) err=1;
	if(err==1){
		if(!email_notifications) jQuery("#msg_emailnot").html(("Indirizzo errato"));
		if(!email_paypal) jQuery("#msg_emailpay").html(("Indirizzo errato"));
		if(!starthour) jQuery("#msg_starthour").html(("Devi inserire ora da"));
		if(!finishhour) jQuery("#msg_finishhour").html(("Devi inserire ora a"));
		if(!comprueba(schoolsetting)) jQuery("#msg_school").html(("Devi inserire scuola"));
		if(!comprueba(roomsetting)) jQuery("#msg_room").html(("Devi inserire aula"));	
		if(!validateEmails(email_notifications)) jQuery("#msg_emailnot").html(("Indirizzo errato"));
		if(!validateEmails(email_paypal)) jQuery("#msg_emailpay").html(("Indirizzo errato"));
	}
	else {
	var data= {
		action:'updatesettings',
		id:id,
		email_notifications: email_notifications,
		email_paypal: email_paypal,
		reserve_fee: reserve_fee,
		starthour: starthour,
		finishhour: finishhour,
		schoolsetting: schoolsetting,
		roomsetting: roomsetting
	};
	$.post('admin-ajax.php', data, function(response) {
		$("#cont_settings").html((response));
		$("#save-settings").hide();
		$("#edit-settings").hide();
		$("#add-settings").hide();
		$("#update-settings").hide();
		$("#finish-settings").show();
		$("#email_notifications").prop("disabled",true);
		$("#email_paypal").prop("disabled",true);
		$("#reserve_fee").prop("disabled",true);
		$("#starthour").prop("disabled",true);
		$("#finishhour").prop("disabled",true);
		$("#schoolsetting").prop("disabled",true);
		$("#roomsetting").prop("disabled",true);			
		jQuery("#msg_emailnot").html((""));
		jQuery("#msg_emailpay").html((""));
		jQuery("#msg_starthour").html((""));
		jQuery("#msg_finishhour").html((""));
		jQuery("#msg_school").html((""));
		jQuery("#msg_room").html((""));	
		jQuery("#msg_emailnot").html((""));
		jQuery("#msg_emailpay").html((""));

	});
	return false;
	}
});
$("#finish-settings").click(function() {
	$("#update-settings").hide();
	$("#edit-settings").hide();
	$("#add-settings").show();
	$("#save-settings").hide();
	$("#finish-settings").show();
	$("#schools_settings").val('');
	$("#rooms_settings").val('');
	$("#email_notifications").val('');
	$("#email_paypal").val('');
	$("#starthour").val('');
	$("#finishhour").val('');
	$("#name").val('');
	$("#surname").val('');
	$("#phone").val('');
	$("#email").val('');
	$("#email_notifications").prop("disabled",false);
	$("#email_paypal").prop("disabled",false);
	$("#reserve_fee").prop("disabled",false);
	$("#starthour").prop("disabled",false);
	$("#finishhour").prop("disabled",false);
	finishschool();
	finishroom();
});	
$("#add-settings").click(function() {
	$("#save-settings").show();
	$("#edit-settings").hide();
	$("#add-settings").hide();
	$("#update-settings").hide();
	$("#finish-settings").hide();
	$("#email_notifications").prop("disabled",false);
	$("#email_paypal").prop("disabled",false);
	$("#reserve_fee").prop("disabled",false);
	$("#starthour").prop("disabled",false);
	$("#finishhour").prop("disabled",false);
	$("#schoolsetting").prop("disabled",false);
	$("#roomsetting").prop("disabled",false);
});
$("#edit-settings").click(function() {
	$("#update-settings").show();
	$("#edit-settings").hide();
	$("#add-settings").hide();
	$("#save-settings").hide();
	$("#finish-settings").show();
	$("#email_notifications").prop("disabled",false);
	$("#email_paypal").prop("disabled",false);
	$("#reserve_fee").prop("disabled",false);
	$("#starthour").prop("disabled",false);
	$("#finishhour").prop("disabled",false);
	$("#schoolsetting").prop("disabled",false);
	$("#roomsetting").prop("disabled",false);
});	
});
function recordsettings(id){
	var data= {
		action:'recordsettings',
		id: id
	};
	jQuery.post('admin-ajax.php', data, function(response) {
		var res = response.split("|");
		id=res[0];
		email_notifications=res[1];
		email_paypal=res[2];
		reserve_fee=res[3];
		starthour=res[4];
		finishhour=res[5];
		school=res[6];
		room=res[7];
		jQuery("#idsetting").val(id);
		jQuery("#email_notifications").val(email_notifications);
		jQuery("#email_paypal").val(email_paypal);
		jQuery("#reserve_fee").val(reserve_fee);
		jQuery("#starthour").val(starthour);
		jQuery("#finishhour").val(finishhour);
		selectedschool(school);
		selectedroom(room);
		jQuery("#update-settings").hide();
		jQuery("#edit-settings").show();
		jQuery("#add-settings").hide();
		jQuery("#save-settings").hide();
		jQuery("#finish-settings").show();
		jQuery("#email_notifications").prop("disabled",true);
		jQuery("#email_paypal").prop("disabled",true);
		jQuery("#reserve_fee").prop("disabled",true);
		jQuery("#starthour").prop("disabled",true);
		jQuery("#finishhour").prop("disabled",true);
		jQuery("#schoolsetting").prop("disabled",true);
		jQuery("#roomsetting").prop("disabled",true);				
	});
}
function deletesettings(id){
	if (confirm("Are you sure?")) {
	var data= {
		action:'deletesettings',
		id: id
	};
	jQuery.post('admin-ajax.php', data, function(response) {
	jQuery("#cont_settings").html((response));
	});
	}
	return false;
}
function changeroom(){
	var schoolsetting=jQuery("#schoolsetting").val();
	var data= {
		action:'changeroom',
		school: schoolsetting
	};
	jQuery.post('admin-ajax.php', data, function(response) {
	jQuery("#controom").html((response));
	});	
}
function selectedroom(room){
	var data= {
		action:'selectedroom',
		room: room
	};
	jQuery.post('admin-ajax.php', data, function(response) {
	jQuery("#controom").html((response));
	});	
}
function selectedschool(school){
	var data= {
		action:'selectedschool',
		school: school
	};
	jQuery.post('admin-ajax.php', data, function(response) {
	jQuery("#contschool").html((response));
	});	
}
function finishroom(){
	var data= {
		action:'finishroom'
	};
	jQuery.post('admin-ajax.php', data, function(response) {
	jQuery("#controom").html((response));
	});	
}
function finishschool(){
	var data= {
		action:'finishschool'
	};
	jQuery.post('admin-ajax.php', data, function(response) {
	jQuery("#contschool").html((response));
	});	
}
function validateEmails(email) {
  var emailReg = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$/;
  return emailReg.test(email);
}
function comprueba(obj){
  if (obj=='0'){
    return false;
  }
  else {
    return true;
  }
} 