function sendData(data){
		alert(data);
		document.getElementById("nota").value = data;
}

function sendData2(data){
		alert(data);
		document.getElementById("fale_mais_hide").value = document.getElementById("fale_mais").value;
}

$(document).ready(function(){
    $("#div-1").hide();
	$("#div-2").hide();
	$("#div-3").hide();
	$("#div-4").hide();
	$("#div-5").hide();
	
	
	
	$('.star.rating').click(function(){
	  console.log( $(this).parent().data('stars') + ", " + $(this).data('rating'));
	  $(this).parent().attr('data-stars', $(this).data('rating'));
	});
		
})
