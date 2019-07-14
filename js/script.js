 $(function () { $('#modalExemplo').on('hide.bs.modal', function () {
      })
   });


function sendData(data){
		alert(data);
		document.getElementById("nota").value = data;
}

function sendData2(data){
		alert(data);
		document.getElementById("fale_mais_hide").value = document.getElementById("fale_mais").value;
		document.getElementById("imageupload_hide").value = document.getElementById("imageupload").value;
}

$(document).ready(function(){
	 $('#myModal').modal('hide');
	 $('#myModa2').modal('hide');
	 $('#myModa3').modal('hide');
	 $('#myModa4').modal('hide');

	
	
	
	$('.star.rating').click(function(){
	  console.log( $(this).parent().data('stars') + ", " + $(this).data('rating'));
	  $(this).parent().attr('data-stars', $(this).data('rating'));
	});
		
})
