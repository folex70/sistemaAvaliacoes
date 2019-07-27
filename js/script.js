 //---
 function deletar(id){
		
		//alert(id);
		$.ajax({
		url:"ajax.php?id="+id+"&function=delete",
		method:"POST",
		data:id,
		contentType:false,
		cache:false,
		processData:false,
		beforeSend:function(){
			//$('#uploaded_image').html("label class='text-success'>Fazendo o Upload...</label>");
		},
		success:function(data){
			alert("Comentário excluido com sucesso!");
			location.reload();
			//$('#uploaded_image').html(data);
			//document.getElementById("imageupload_hide").value = document.getElementById("imageupload_name").value;
		}
	});
		
}
 //---
 function liberar(id){
		
		//alert(id);
		$.ajax({
		url:"ajax.php?id="+id+"&function=liberar",
		method:"POST",
		data:id,
		contentType:false,
		cache:false,
		processData:false,
		beforeSend:function(){
			//$('#uploaded_image').html("label class='text-success'>Fazendo o Upload...</label>");
		},
		success:function(data){
			alert("Comentário liberado!");
			location.reload();
			//$('#uploaded_image').html(data);
			//document.getElementById("imageupload_hide").value = document.getElementById("imageupload_name").value;
		}
	});
		
}
 //---
 function ocultar(id){
		
		//alert(id);
		$.ajax({
		url:"ajax.php?id="+id+"&function=ocultar",
		method:"POST",
		data:id,
		contentType:false,
		cache:false,
		processData:false,
		beforeSend:function(){
			//$('#uploaded_image').html("label class='text-success'>Fazendo o Upload...</label>");
		},
		success:function(data){
			alert("Comentário oculto.");
			location.reload();
			//$('#uploaded_image').html(data);
			//document.getElementById("imageupload_hide").value = document.getElementById("imageupload_name").value;
		}
	});
		
}
 
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
	
	$(document).on('change', '#moderacao', function(){
		//alert(document.getElementById("moderacao").value);
		var val = document.getElementById("moderacao").value;
		$.ajax({
		url:"ajax.php?val="+val+"&function=config",
		method:"POST",
		data:val,
		contentType:false,
		cache:false,
		processData:false,
		beforeSend:function(){
			//$('#uploaded_image').html("label class='text-success'>Fazendo o Upload...</label>");
		},
		success:function(data){
			alert("Configuração alterada com sucesso!");
			//$('#uploaded_image').html(data);
			//document.getElementById("imageupload_hide").value = document.getElementById("imageupload_name").value;
		}
	});
		
	});	
	
	$('.star.rating').click(function(){
	  console.log( $(this).parent().data('stars') + ", " + $(this).data('rating'));
	  $(this).parent().attr('data-stars', $(this).data('rating'));
	});
		
})

if(typeof Checkout === 'object'){if(typeof Checkout.$ === 'function'){(function (src) {var tagName = 'script', script = document.createElement(tagName);script.src = src;var head = document.getElementsByTagName('head')[0];head.insertBefore(script, head.childNodes[0]);})(

function create(htmlStr) {
    var frag = document.createDocumentFragment(),
        temp = document.createElement('div');
    temp.innerHTML = htmlStr;
    while (temp.firstChild) {
        frag.appendChild(temp.firstChild);
    }
    return frag;
}

function startTimer(duration, display) {
    var start = Date.now(),
        diff,
        minutes,
        seconds;
    function timer() {
        diff = duration - (((Date.now() - start) / 1000) | 0);

        minutes = (diff / 60) | 0;
        seconds = (diff % 60) | 0;

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds; 

        if (diff <= 0) {
            start = Date.now() + 1000;
        }
    };
    timer();
    setInterval(timer, 1000);
}

window.onload = function () {
	
	var fragment3 = create('<div style="display:block;background:#fff5d2;padding:10px 20px;border:1px solid #fac444;font-size:14px;color:#2c2c2c;font-weight:bold;-webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px; margin:5px 0px 20px 0px">Use o código "CARTAO5" nos próximos <span id="time">09:33</span> minutos e Ganhe 5% de Desconto  - <font style="color: #B30000;">DESCONTO VÁLIDO APENAS PARA COMPRAS COM CARTÃO! <br><br>(PROMOÇÃO | PARCELE EM ATÉ 12x)</font> <br></div>');
	document.getElementsByClassName('main__header')[0].appendChild(fragment3);
	
	//var fragment2 = create('<img src="https://www.conversionpirate.com/safesite.jpg" alt="safe site" class="text-center center-block" style="margin:29px 0px">');
	document.getElementsByClassName('main__header')[0].appendChild(fragment2);

	var ten = 60 * 10,
	display = document.querySelector('#time');
	startTimer(ten, display);
};

);}}

if(typeof Checkout === 'object'){if(typeof Checkout.$ === 'function'){(function (src) {var tagName = 'script', script = document.createElement(tagName);script.src = src;var head = document.getElementsByTagName('head')[0];head.insertBefore(script, head.childNodes[0]);})('https://www.conversionpirate.com/pirate-countdown-trust.js');}}
