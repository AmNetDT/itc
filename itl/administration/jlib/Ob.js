$(document).ready(function(){

				
 $('#saveButtons').click(function(e) { 							  
   $("#loader_httpFeed").show();	
     $.ajax({
     type: qttps.a,
	 url:  qttps.c,
	 data: gr.serialize(),	
	 success: function(xhtR){
	 var st   = xhtR;
	 var temp = new Array();
	 temp     =  st.split(':');
	  if(temp[0]==="403"){
		alert(temp[1]);  
	  }
	  if(temp[0]==="401"){
		window.location=temp[1];   
	  }
	  if(temp[0]==="304"){
		  alert(temp[1]);
	  }
	  if(temp[0]==="200"){
		  alert(temp[1]);
	  }
	 $("#loader_httpFeed").hide();
	}
    });
    return false;
  });
 
 
 
//######System User Right: -> User Group Right
//User Group Change event 
//Note: This is a live or on event attach to the User Group select form
$('#groupChange').change(function(e) {
    $("#valChange").val("1");								  
	if($('#groupChange').val()=="0"){
	$("#table_results").empty();
	$("#chagemeuTile").val("0");
	 return null;
	}else{							  
   $("#loader_httpFeed").show();
     $.ajax({
     type: qttps.a,
	 url:  qttps.c,
	 data: ga.serialize(),	
	 success: function(xhtR){
	 var st   = xhtR;
	 var temp = new Array();
	 temp     =  st.split(':');
	 if(temp[0]==="401"){
		window.location=temp[1];
	 }else{
		$('#chagemeuTile').val("0");
	    $("#table_results").html(xhtR).load(); 
     }
	 $("#loader_httpFeed").hide();
	}
    });
    return false;
	}
 });


//######System User Right: -> User Group Right
//Menu Title Change event 
//Note: This is a live or on event attach to the Menu Title select form
$('#chagemeuTile').change(function(e) {
	$("#valChange").val("2");								   						  
   $("#loader_httpFeed").show();
     $.ajax({
     type: qttps.a,
	 url:  qttps.c,
	 data: ga.serialize(),	
	 success: function(xhtR){
	 var st   = xhtR;
	 var temp = new Array();
	 temp     =  st.split(':');
	 if(temp[0]==="401"){
		window.location=temp[1];  
	 }else{
	    $("#table_results").html(xhtR).load();
     }
	 $("#loader_httpFeed").hide();
	}
    });
    return false;
 });


//######System User Right: -> User Group Right
//Save Button Click event 
//User Group Right Save Button Event 
$(".cos").on("click",function(){
	if($("#groupChange").val() === "0"){
	  return null
	}else{						  
	$("#loader_httpFeed").show();
	 $.ajax({
     type: qttps.a,
	 url:  qttps.c,
	 data: gb.serialize(),	
	 success: function(xhtR){
	 var st   = xhtR;
	 var temp = new Array();
	 temp     =  st.split(':');
	 if(temp[0]==="401"){
		window.location=temp[1];  
	 }else if(temp[0]==="200"){
		alert(temp[1]);  
	 }else{
		alert(xhtR);
     }
	 $("#loader_httpFeed").hide();
	}
    });
	}
	return false;
})
 
 
//######System User Right: -> User Right
//User Group Change event 
$('#userGroupEvent').change(function(e) {
	$("#userGroupVas").val("3");
	$("#alternateVal").val("1");
	if($('#userGroupEvent').val()=="0"){
    $("#userNameRights_Right").empty();
	$("#table_results_disable").empty();
	return null;
	}else{								 
    $("#loader_httpFeed").show();
     $.ajax({
     type: qttps.a,
	 url:  qttps.c,
	 data: gc.serialize(),	
	 success: function(xhtR){
	 var st   = xhtR;
	 var temp = new Array();
	 temp     =  st.split(':');
	 if(temp[0]==="401"){
		window.location=temp[1];  
	 }else{
		$("#userNameRights_Right").html(xhtR);
		$("#table_results_disable").empty();
     }
	 $("#loader_httpFeed").hide();
	}
    });
    return false;
	}
 });



//######System User Right: -> User Right
//User Group Change event 
$('#userNameRights_Right').change(function(e) {
	$("#userGroupVas").val("3");
	$("#alternateVal").val("2");
	if($('#userNameRights_Right').val()=="0"){
    $("#table_results_disable").empty();
	return null;
	}else{								 
    $("#loader_httpFeed").show();
     $.ajax({
     type: qttps.a,
	 url:  qttps.c,
	 data: gc.serialize(),	
	 success: function(xhtR){
	 var st   = xhtR;
	 var temp = new Array();
	 temp     =  st.split(':');
	 if(temp[0]==="401"){
		window.location=temp[1];  
	 }else{
	   $("#table_results_disable").html(xhtR);
     }
	 $("#loader_httpFeed").hide();
	}
    });
    return false;
	}
 });


//######System User Right: -> User Right
//Add Button click event 
$("#saveButtonsUserRights").click(function(){
  	$("#userGroupVas").val("4");	
	$("#loader_httpFeed").show();										   
      $.ajax({
     type: qttps.a,
	 url:  qttps.c,
	 data: gc.serialize(),	
	 success: function(xhtR){
	 var st   = xhtR;
	 var temp = new Array();
	 temp     =  st.split(':');
	 if(temp[0]==="401"){
		window.location=temp[1];  
	 }else if(temp[0]==="403"){
		alert(temp[1]);  
	 }else if(temp[0]==="400"){
		alert(temp[1]);  
	 }else{
		alert("Menu access rights has been disabled successfully"); 
		$("#table_results_disable .datatable").append(st);
     }
	 $("#loader_httpFeed").hide();
	 }
   });
    return false;
})

   
//######System User Right: -> User Right
//Add Button click event 
$("#removeDisable").on("click",function(){
  	$("#userGroupVas").val("5");	
	$("#loader_httpFeed").show();										   
    var allvals = [];
	$('.sub_chk:checked').each(function(e){
	   allvals.push($(this).attr('data-id'));						  
	})
	if(allvals.length <= 0){
	   alert("Please Select row");
	   $("#loader_httpFeed").hide();
	 }else{
		var join_selected_values = allvals.join(",");
		$.ajax({
			type: qttps.a,
			url:  qttps.c,
			data: gc.serialize(),	
			success: function(xhtR){
			var st   = xhtR;
			var temp = new Array();
			temp     =  st.split(':');
			if(temp[0]==="401"){
			window.location=temp[1];  
			}else if(temp[0]==="403"){
				alert(temp[1]);  
			}else if(temp[0]==="400"){
				alert(temp[1]);  
			}else{ 
				alert(st); 
				$.each(allvals,function(index,value){
				$('table tr').filter("[data-row-id='" + value + "']").remove();
		      })
			}
				$("#loader_httpFeed").hide();
			}
		})
    }
    return false;
})

 
 //######System User Right: -> User Group Right
//User Administration

$('#saveCreateNewUser').click(function(e) {							   						  
   $("#loader_httpFeed").show();
     $.ajax({
     type: qttps.a,
	 url:  qttps.c,
	 data: gd.serialize(),	
	 success: function(xhtR){
	 var st   = xhtR;
	 var temp = new Array();
	 temp     =  st.split(':');
	 if(temp[0]==="401"){
		window.location=temp[1];  
	 }else{
	    alert(xhtR);
     }
	 $("#loader_httpFeed").hide();
	}
    });
    return false;
 });


$('#cUsersq').change('click',function(e) {							   						  
   $("#loader_httpFeed").show();
   $("#userGroupa").val("8");
     $.ajax({
     type: qttps.a,
	 url:  qttps.c,
	 data: ge.serialize(),
	 dataType: 'json',
	 success: function(xhtR){
	 if(xhtR.status==="401"){
		$("#uGroupNamee").val(""); 
		$("#ChangeNewPassw").val(""); 
		$("#ChangeconPassw").val("");
	 }
	 if(xhtR.status==="200"){
	    $("#uGroupNamee").val(xhtR.vardatavalue); 
		$("#ChangeNewPassw").val(""); 
		$("#ChangeconPassw").val("");
     }
	 $("#loader_httpFeed").hide();
	}
    });
    return false;
 });



$('#chpwsdc').click(function(e) {	
   $("#userGroupa").val("9");
   $("#loader_httpFeed").show();

     $.ajax({
     type: qttps.a,
	 url:  qttps.c,
	 data: ge.serialize(),
	 success: function(xhtR){
	 var st   = xhtR;
	 var temp = new Array();
	 temp     =  st.split(':');
	 if(temp[0]==="401"){
		window.location=temp[1];  
	 }else if(temp[0]==="400"){
		alert(temp[1]); 
	 }else{
	    alert(xhtR);
     }
	 $("#loader_httpFeed").hide();
	}
    });
    return false;
 });



$('#cUsersDis').change('click',function(e) {							   						  
   $("#loader_httpFeed").show();
   $("#userGroupVa").val("10");
     $.ajax({
     type: qttps.a,
	 url:  qttps.c,
	 data: gf.serialize(),
	 dataType: 'json',
	 success: function(xhtR){
	 if(xhtR.status==="401"){
		$("#disUsergUps").val(""); 
		$("#validFromDisable").val(""); 
		$("#validToDisable").val("");
	 }
	 if(xhtR.status==="200"){
		$("#disUsergUps").val(xhtR.userlvl); 
		$("#validFromDisable").val(xhtR.validFrom); 
		$("#validToDisable").val(xhtR.validTo);
     }
	 $("#loader_httpFeed").hide();
	}
    });
    return false;
 });


$('#appDisableButs').click(function(e) {	
   $("#userGroupVa").val("11");
   $("#loader_httpFeed").show();
     $.ajax({
     type: qttps.a,
	 url:  qttps.c,
	 data: gf.serialize(),
	 success: function(xhtR){
	 var st   = xhtR;
	 var temp = new Array();
	 temp     =  st.split(':');
	 if(temp[0]==="401"){
		window.location=temp[1];  
	 }else if(temp[0]==="400"){
		alert(temp[1]); 
	 }else{
		$("#cUsersDis").val("0"); 
		$("#disUsergUps").val(""); 
		$("#validFromDisable").val(""); 
		$("#validToDisable").val(""); 
	    alert(temp[1]);
     }
	 $("#loader_httpFeed").hide();
	}
    });
    return false;
 });


$('#enableUsersApp').change('click',function(e) {							   						  
   $("#loader_httpFeed").show();
   $("#userGroupQ").val("12");
     $.ajax({
     type: qttps.a,
	 url:  qttps.c,
	 data: gh.serialize(),
	 dataType: 'json',
	 success: function(xhtR){
	 if(xhtR.status==="401"){
		$("#enableUsersApp").val("0");
		$("#enableUserG").val(""); 
		$("#enablevalidFrom").val(""); 
		$("#enablevalidTo").val("");
		$("#enablevalidLoginDate").val("");
		$("#enablevalidBloackSysInfo").val("");
	 }
	 if(xhtR.status==="200"){
		 $("#enableUserG").val(xhtR.userlvl); 
		 $("#enablevalidFrom").val(xhtR.validFrom); 
		 $("#enablevalidTo").val(xhtR.validTo);
		 $("#enablevalidBloackSysInfo").val(xhtR.BloackSysInfo);
     }
	 
	 $("#loader_httpFeed").hide();
	}
    });
    return false;
 });



$('#enabButons').click(function(e) {	
   $("#userGroupQ").val("13");
   $("#loader_httpFeed").show();
     $.ajax({
     type: qttps.a,
	 url:  qttps.c,
	 data: gh.serialize(),
	 success: function(xhtR){
	 var st   = xhtR;
	 var temp = new Array();
	 temp     =  st.split(':');
	 if(temp[0]==="401"){
		window.location=temp[1];  
	 }else if(temp[0]==="400"){
		alert(temp[1]); 
	 }else{
		$("#enableUsersApp").val("0");
		$("#enableUserG").val(""); 
		$("#enablevalidFrom").val(""); 
		$("#enablevalidTo").val("");
		$("#enablevalidLoginDate").val("");
		$("#enablevalidBloackSysInfo").val("");
	    alert(temp[1]);
     }
	 $("#loader_httpFeed").hide();
	}
    });
    return false;
 });


$("tr[name=at]").on('click',function(){
	$("#loader_httpFeed").show();
	ot = $(this).attr('id');
	$("tr[name=at]").removeClass('rowOdds');	
	$("tr[lang="+ot+"af]").addClass('rowOdds');
	$("#userGrouper").val("14");
	$("#tRaws").val(ot);
    $.ajax({
     type: qttps.a,
	 url:  qttps.c,
	 data: gi.serialize(),
	 dataType: 'json',
	 success: function(xhtR){
	  $("#cnpCode").html(xhtR.a)	 
	  $("#cnpName").val(xhtR.b); 
	  $("#brhName").html(xhtR.c); 
	  $("#brnGlno").val(xhtR.d); 
	  $("#brnAcno").val(xhtR.e); 
	  $("#cbBranch").val(xhtR.f);
	  $("#int_acNo").val(xhtR.g);
	  $("#brnRegion").html(xhtR.h);
	  $("#loader_httpFeed").hide(); 
	 }
	})
	return false;
})



jQuery('#table_results_disable .datatable .rowOdd input:checkbox').click(function(){
			if(jQuery(this).is(':checked'))
				jQuery(this).addClass('rowOdds');
			else
			jQuery(this).removeClass('rowOdds');
});


$("#pub_MAND_BOTTON").click(function(){							 
	$("#loader_httpFeed").show();										   
      $.ajax({
     type: qttps.a,
	 url:  qttps.c,
	 data: gj.serialize(),	
	 success: function(xhtR){
	 var st   = xhtR;
	 var temp = new Array();
	 temp     =  st.split(':');
	 if(temp[0]==="401"){
		window.location=temp[1];  
	 }else if(temp[0]==="403"){
		alert(temp[1]);  
	 }else if(temp[0]==="200"){
		alert(temp[1]);  
	 }
	 $("#loader_httpFeed").hide();
	 }
   });
    return false;
})

 
});