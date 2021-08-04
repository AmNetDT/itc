$(document).ready(function(){
	$("#popDifInRate").click(function(){
		$("#loader_httpFeed").show();
		$.ajax({    
        type: "POST",
		url: "administration/discountInstrumentSettings/diferentInterestRate.jsp",
		cache: false,
        success: function(msg){
			new top.PopLayes({ 
                "title": "Different Interest Rates", 
                "content": msg
             });
			$("#loader_httpFeed").hide();
		 }	
	   });
	})
	
	
	$("#popDifInRates").click(function(){
		$("#loader_httpFeed").show();
		$.ajax({    
        type: "POST",
		url: "administration/bankplacementSettings/diferentInterestRate.jsp",
		cache: false,
        success: function(msg){
			new top.PopLayes({ 
                "title": "Different Interest Rates", 
                "content": msg
             });
			$("#loader_httpFeed").hide();
		 }	
	   });
	})
	
	
	$("#popDifInRat").click(function(){
		$("#loader_httpFeed").show();
		$.ajax({    
        type: "POST",
		url: "administration/PenaltySettings/diferentInterestRate.jsp",
		cache: false,
        success: function(msg){
			new top.PopLayes({ 
                "title": "Different Penalty Rates", 
                "content": msg
             });
			$("#loader_httpFeed").hide();
		 }	
	   });
	})
	
	
	$("#sRat").click(function(){
		$("#loader_httpFeed").show();
		$.ajax({    
        type: "POST",
		url: "administration/SavingsProductSettings/diferentInterestRate.jsp",
		cache: false,
        success: function(msg){
			new top.PopLayes({ 
                "title": "Different Interest Rates", 
                "content": msg
             });
			$("#loader_httpFeed").hide();
		 }	
	   });
	})
	
	$("#TRat").click(function(){
		$("#loader_httpFeed").show();
		$.ajax({    
        type: "POST",
		url: "administration/SavingsProductSettings/taxRate.jsp",
		cache: false,
        success: function(msg){
			new top.PopLayes({ 
                "title": "Different Witholding Tax Rates", 
                "content": msg
             });
			$("#loader_httpFeed").hide();
		 }	
	   });
	})
	
	$("#WcOM").click(function(){
		$("#loader_httpFeed").show();
		$.ajax({    
        type: "POST",
		url: "administration/SavingsProductSettings/commision.jsp",
		cache: false,
        success: function(msg){
			new top.PopLayes({ 
                "title": "Set Withdrawal Commission", 
                "content": msg
             });
			$("#loader_httpFeed").hide();
		 }	
	   });
	})
	
	$("#sa00c").click(function(){
		$("#loader_httpFeed").show();
		$.ajax({    
        type: "POST",
		url: "administration/SavingsProductSettings/feeNcharges.jsp",
		cache: false,
        success: function(msg){
			new top.PopLayes({ 
                "title": "Transactions Exceeded Fee", 
                "content": msg
             });
			$("#loader_httpFeed").hide();
		 }	
	   });
	})
	
	$("#liml").click(function(){
		$("#loader_httpFeed").show();
		$.ajax({    
        type: "POST",
		url: "administration/LoanProductSettings/loanlimi.jsp",
		cache: false,
        success: function(msg){
			new top.PopLayes({ 
                "title": "Set Loan Limit Per Loan Cycle", 
                "content": msg
             });
			$("#loader_httpFeed").hide();
		 }	
	   });
	})
	
	$("#liml").click(function(){
		 alert(1);
	})
	
	
})