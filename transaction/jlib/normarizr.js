// JavaScript Document
$(document).ready(function(){
	
	
	
    $(".signatory").click(function(){
        $("#loader_httpFeed").show();
	var regKey     = $(".regKey").val();
        var dataString =  "regKey="+ regKey ;
	 $.ajax({    
        type: "POST",
		url: "customerManagement/similarClass/signatoris.jsp",
		data: dataString,
		cache: false,
        success: function(msg){
			 new top.PopLayer({ 
                "title": "Signatories", 
                "content": msg
             });
              $("#loader_httpFeed").hide();
		 }		
	   });
	}); 
	
	   $(".mems").click(function(){	
               $("#loader_httpFeed").show();
	   var regKey = $(".regKey").val();
       var dataString =  "regKey="+ regKey ;
	   $.ajax({
        type: "POST",
		url: "customerManagement/similarClass/members.jsp",
		data: dataString,
		cache: false,
        success: function(msg){
			 new top.PopMem({ 
                "title": "Members", 
                "content": msg
             });
             $("#loader_httpFeed").hide();
		 }		
	   });
	});  
	
	
	$(".cusSet").click(function(){	
	 $.ajax({
                
        type: "POST",
		url: "customerManagement/similarClass/search.jsp",
		cache: false,
        success: function(msg){
			 new top.CustomerSepop({ 
                "title": "Select GL No. & A/C No.", 
                "content": msg
             });
		 }		
	   });
	});
	
	
	
	
});