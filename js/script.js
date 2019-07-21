 $(function () { $('#modalExemplo').on('hide.bs.modal', function () {
      })
   });


function sendData(data){
		
		document.getElementById("nota").value = data;
}

function sendData2(data){
		
		document.getElementById("fale_mais_hide").value = document.getElementById("fale_mais").value;
		
}

$(document).ready(function(){
	 $('#myModal').modal('hide');
	 $('#myModa2').modal('hide');
	 $('#myModa3').modal('hide');
	 $('#myModa4').modal('hide');
	//upload
	$(document).on('change', '#file', function(){
		var property = document.getElementById("file").files[0];
		var image_name = property.name;
		var image_extension = image_name.split('.').pop().toLowerCase();
		
		if(jQuery.inArray(image_extension, ['gif','png','png','jpeg']) == -1){
			alert("formato invalido");
		}
		var image_size = property.size;
		if(image_size > 2000000){
			alert("Imagem maior que 2mb!");
		}
		else{
			var form_data = new FormData();
			form_data.append("file",property);
			$.ajax({
				url:"upload.php",
				method:"POST",
				data:form_data,
				contentType:false,
				cache:false,
				processData:false,
				beforeSend:function(){
					$('#uploaded_image').html("label class='text-success'>Fazendo o Upload...</label>");
				},
				success:function(data){
					$('#uploaded_image').html(data);
					document.getElementById("imageupload_hide").value = document.getElementById("imageupload_name").value;
				}
			});
		}
	});
	
	
	$('.star.rating').click(function(){
	  console.log( $(this).parent().data('stars') + ", " + $(this).data('rating'));
	  $(this).parent().attr('data-stars', $(this).data('rating'));
	});
		
})
