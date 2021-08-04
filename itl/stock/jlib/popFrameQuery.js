$(document).ready(function(){
	$("#ser1").click(function(){
		$("#loader_httpFeed").show();
		$.ajax({    
        type: "POST",
		url: "stock/pawnPurchase/search.jsp",
		cache: false,
        success: function(msg){
			new top.PopLayes({ 
                "title": "Select GL No. & A/C No.", 
                "content": msg
             });
			$("#loader_httpFeed").hide();
		 }	
	   });
	})
})