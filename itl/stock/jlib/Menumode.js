// JavaScript Document
//staff Registration toogle.

$(document).ready(function(){
	$('a[lang="af"]').click(function(e) {
		
		var items = $(this).attr('id');
		
		if(items === 'd1'){
		  $('a[lang="af"]').attr('class','noneactives');
		  $(this).attr('class','actives');
		   $(".dialog").hide();
		   $("#d11").show();
		   $("#contentbar_inner").scrollTop(0);
		   $("#membrs_tables").hide();
		   $(".q2").hide();
		   $(".q3").hide();
		   $(".q4").hide();
		   $(".q5").hide();
		   $(".q6").hide();
		}
		
		if(items === 'd2'){
		  $('a[lang="af"]').attr('class','noneactives');
		  $(this).attr('class','actives');
		  $(".dialog").hide();
		  $("#d14").show();
		  $("#contentbar_inner").scrollTop(0);
		  $("#membrs_tables").hide();
		  $(".q2").show();
		  $(".q3").hide();
		  $(".q4").hide();
		  $(".q5").hide();
		  $(".q6").hide();
		}
		
		
		if(items === 'd3'){
		  $('a[lang="af"]').attr('class','noneactives');
		  $(this).attr('class','actives');
	      $(".dialog").hide();
		  $("#d14").show();
		  $("#contentbar_inner").scrollTop(0);
		  $("#membrs_tables").hide();
		  $(".q2").hide();
		  $(".q3").show();
		  $(".q4").hide();
		  $(".q5").hide();
		  $(".q6").hide();
		}
		
		
		if(items === 'd4'){
		  $('a[lang="af"]').attr('class','noneactives');
		  $(this).attr('class','actives');
	      $(".dialog").hide();
		  $("#d14").show();
		  $("#contentbar_inner").scrollTop(0);
		  $("#membrs_tables").hide();
		  $(".q2").hide();
		  $(".q3").hide();
		  $(".q4").show();
		  $(".q5").hide();
		  $(".q6").hide();
		}
		
		
		if(items === 'd5'){
		  $('a[lang="af"]').attr('class','noneactives');
		  $(this).attr('class','actives');
	      $(".dialog").hide();
		  $("#d14").show();
		  $("#contentbar_inner").scrollTop(0);
		  $("#membrs_tables").hide();
		  $(".q2").hide();
		  $(".q3").hide();
		  $(".q4").hide();
		  $(".q5").show();
		  $(".q6").hide();
		}
		
		
		if(items === 'd6'){
		  $('a[lang="af"]').attr('class','noneactives');
		  $(this).attr('class','actives');
	      $(".dialog").hide();
		  $("#d14").show();
		  $("#contentbar_inner").scrollTop(0);
		  $("#membrs_tables").hide();
		  $(".q2").hide();
		  $(".q3").hide();
		  $(".q4").hide();
		  $(".q5").hide();
		  $(".q6").show();
		}
		
		if(items === 'd7'){
		  $('a[lang="af"]').attr('class','noneactives');
		  $(this).attr('class','actives');
	      $(".dialog").hide();
		  $("#d17").show();
		  $("#contentbar_inner").scrollTop(0);
		  $("#membrs_tables").hide();
		  $(".q2").hide();
		  $(".q3").hide();
		  $(".q4").hide();
		  $(".q5").hide();
		  $(".q6").hide();
		}
	})
	
	$("#close").click(function(){
		 $("#body_general").remove();
	})
	
	
})