<!doctype html>
<html>
  <head>
		<title>Teste Sistema de avaliação</title>
		<link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/album/">
		<link rel="canonical" href="https://getbootstrap.com/docs/4.0/components/modal/">
		<!-- Bootstrap core CSS -->
		<link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link href="./css/bootstrap.min.css" rel="stylesheet">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
		<script src="./js/bootstrap.min.js"></script>
		<!-- Custom styles for this template -->
		<link href="album.css" rel="stylesheet">
		
		<link rel="stylesheet" href="./css/style.css" />	
		<script src="./js/script.js"></script>
  </head>
  <body>
    <header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">Teste</h4>
          <p class="text-muted">Teste.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container d-flex justify-content-between">
      <a href="#" class="navbar-brand d-flex align-items-center">
        
        <strong><a href="./admin.php" >Sistema em desenvolvimento</a></strong>
      </a>
     
    </div>
  </div>
</header>

		<!--<p><a class="btn" href="#div-1" rel="modal:open" >Avalie</a></p> -->
		
		<!-- Modal -->
		<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Título do modal</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">
			  <div id="div-1" name="div-1" >	
				<p><b>O QUE ACHOU DESSE PRODUTO?</b></p>
				
				<a href="" class="btn btn-secondary my-2 cemporcento text-left"  onclick="sendData(5);"  data-toggle="modal" data-dismiss="modal" data-target="#modal2" >				
				<div class="stars" data-stars="1">
				<svg height="25" width="23" class="star rating text-left"  data-rating="1">
					<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
				</svg>
				<svg height="25" width="23" class="star rating text-left" data-rating="2">
					<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
				</svg>
				<svg height="25" width="23" class="star rating text-left" data-rating="2">
					<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
				</svg>
				<svg height="25" width="23" class="star rating text-left" data-rating="2">
					<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
				</svg>
				<svg height="25" width="23" class="star rating text-left" data-rating="2">
					<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
				</svg>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adoro!		
				</div></a><br />
				<a href="" class="btn btn-secondary my-2 cemporcento text-left"  onclick="sendData(4);"  data-toggle="modal" data-dismiss="modal" data-target="#modal2" >				
				<div class="stars" data-stars="1">
				<svg height="25" width="23" class="star rating text-left" data-rating="1">
					<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
				</svg>
				<svg height="25" width="23" class="star rating text-left" data-rating="2">
					<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
				</svg>
				<svg height="25" width="23" class="star rating text-left" data-rating="2">
					<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
				</svg>
				<svg height="25" width="23" class="star rating text-left" data-rating="2">
					<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
				</svg>
				<svg height="25" width="23" class="star rating text-left" data-rating="2" fill="white">
					<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
				</svg>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gosto
				</div></a><br />
				
				<a href="" class="btn btn-secondary my-2 cemporcento text-left"  onclick="sendData(3);"  data-toggle="modal" data-dismiss="modal" data-target="#modal2" >				
				<svg height="25" width="23" class="star rating text-left" data-rating="1">
					<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
				</svg>
				<svg height="25" width="23" class="star rating text-left" data-rating="2">
					<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
				</svg>
				<svg height="25" width="23" class="star rating text-left" data-rating="2">
					<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
				</svg>
				<svg height="25" width="23" class="star rating text-left" data-rating="2" fill="white">
					<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
				</svg>
				<svg height="25" width="23" class="star rating text-left" data-rating="2" fill="white">
					<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
				</svg>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;É Satisfatório</a>		<br />
				<a href="" class="btn btn-secondary my-2 cemporcento text-left"  onclick="sendData(2);"  data-toggle="modal" data-dismiss="modal" data-target="#modal2" >				
				<svg height="25" width="23" class="star rating" data-rating="1">
					<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
				</svg>
				<svg height="25" width="23" class="star rating" data-rating="2" fill="white" >
					<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
				</svg>
				<svg height="25" width="23" class="star rating" data-rating="2" fill="white">
					<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
				</svg>
				<svg height="25" width="23" class="star rating" data-rating="2" fill="white">
					<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
				</svg>
				<svg height="25" width="23" class="star rating" data-rating="2" fill="white">
					<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
				</svg>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Não Gostei</a>		<br />
				<a href="" class="btn btn-secondary my-2 cemporcento text-left"  onclick="sendData(1);"  data-toggle="modal" data-dismiss="modal" data-target="#modal2" >				
				<svg height="25" width="23" class="star rating" data-rating="1" fill="white">
					<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
				</svg>
				<svg height="25" width="23" class="star rating" data-rating="2" fill="white">
					<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
				</svg>
				<svg height="25" width="23" class="star rating" data-rating="2" fill="white">
					<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
				</svg>
				<svg height="25" width="23" class="star rating" data-rating="2" fill="white">
					<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
				</svg>
				<svg height="25" width="23" class="star rating" data-rating="2" fill="white">
					<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
				</svg>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Odeio</a><br />				
			</div>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				
			  </div>
			</div>
		  </div>
		</div>
		
		<!-- Modal -->
		<div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Título do modal</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">
				<div id="div-2"> 	
					<p><b>MOSTRA PRA GENTE</b></p>
					<p class="lead text-muted">Nos mostre o produto em ação</p>
					</br></br>
					<form method="POST" action="/-/post/img-update" target="fileuploader" enctype="multipart/form-data" style="margin-top:40px;">
					<input type="hidden" name="hash" value="E1TgZU7Zw.4d35d7eea875c2de6aee00dae55a21cb"><label for="imageupload" class="button btn btn-secondary my-2">Escolher foto</label>
					<input type="file" name="img" id="imageupload" style="display:none;" accept="image/x-png,image/jpeg,image/jpg">
					</form>

					<!--<label for="imageupload" class="button btn btn-secondary my-2">Escolher foto</label>
					<input type="file" name="img" id="imageupload" style="display:none;" accept="image/x-png,image/jpeg,image/jpg"></input>-->
				
			</div>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-dismiss="modal" data-target="#modal3" >Próximo</button>
				
			  </div>
			</div>
		  </div>
		</div>
		
			<!-- Modal -->
		<div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Título do modal</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">
					<p><b>FALE MAIS!</b></p>
					<p><textarea width="500"  id="fale_mais" name="fale_mais" class="cemporcento" placeholder="Nos diga o que achou do produto" ></textarea></p>						
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
				<button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="modal" data-dismiss="modal" data-target="#modal4" onclick="sendData2(1);"  >Próximo</button>
				
			  </div>
			</div>
		  </div>
		</div>
		
					<!-- Modal -->
		<div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Título do modal</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
			  <div class="modal-body">
					<div id="div-4">	
					<form method="post" action="index.php"  style="margin-top:40px;">
					<p><b>SOBRE VOCÊ!</b></p>
					<!-- inputs ocultos-->
					<p><input type="hidden" name="imageupload_hide" 		id="imageupload_hide" 		 ></input></p> 
					<p><input type="hidden" name="nota" 					id="nota" 					 ></input></p>
					<p><input type="hidden" name="fale_mais" 				id="fale_mais_hide" 	 	 ></input></p>
					
					<p><input type="text"   name="nome" 				class="cemporcento" 	id="nome" 		placeholder="Primeiro Nome" ></input></p>
					<p><input type="text"   name="ultimo_nome"  		class="cemporcento" 	id="ultimo_nome"  placeholder="Segundo Nome" ></input></p>
					<p><input  type="email"	name="mail" 				class="cemporcento" 	id="mail" 		placeholder="Email" ></input></p>
					<input type="submit" value="Feito!" class="btn btn-secondary my-2" > 	
					</form>
					
			</div>			
								
			  </div>
			  <div class="modal-footer">
				
				
			  </div>
			</div>
		  </div>
		</div>
		
		
	

		

<main role="main">

  <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading" >Teste </h1>
       <p class="lead text-muted">Aqui tem uma descrição desse produto.</p>
      <p>
        
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal1">
			Avalie
		</button>
        <!-- <a href="#" class="btn btn-secondary my-2">Secondary action</a>-->
      </p>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
	  
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="./img/bigmac_v2.png" ></img>
            <div class="card-body">
              <p class="card-text">Muito bom! comprem!!.</p>
              <div class="d-flex justify-content-between align-items-center">
                
				<small class="text-muted"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> </small>
				
				<div class="stars" data-stars="1">
				<svg height="25" width="23" class="star rating" data-rating="1">
					<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
				</svg>
				<svg height="25" width="23" class="star rating" data-rating="2">
					<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
				</svg>
				<svg height="25" width="23" class="star rating" data-rating="3">
					<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
				</svg>
				<svg height="25" width="23" class="star rating" data-rating="4">
					<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
				</svg>
				<svg height="25" width="23" class="star rating" data-rating="5">
					<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
				</svg>
			</div>
				
                <small class="text-muted">13/07/2019</small>
              </div>
            </div>
          </div>
        </div>
       
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="./img/download.JPG" ></img>
            <div class="card-body">
			<p class="card-text"><b>João C</b></p>
              <p class="card-text">Muito bom! comprem!!..</p>
              <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> </small>
				
				<div class="stars" data-stars="1">
				<svg height="25" width="23" class="star rating" data-rating="1">
					<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
				</svg>
				<svg height="25" width="23" class="star rating" data-rating="2">
					<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
				</svg>
				<svg height="25" width="23" class="star rating" data-rating="3">
					<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
				</svg>
				
			</div>
                <small class="text-muted">13/07/2019</small>
              </div>
            </div>
          </div>
        </div>
		
		<div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="./img/bigmac_v2.png" ></img>
            <div class="card-body">
              <p class="card-text">Muito bom! comprem!!. teste texto jfaskdljflçkasdjflksçdafjlasçjflkçsdajflçkasw fjjlaksçjf lçkisajf lkçsadjf lkçsajf lkçsdjf lçksaj flçkdsj </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex justify-content-between align-items-center">
                <small class="text-muted"><span class="glyphicon glyphicon-star" aria-hidden="true"></span> </small>
				
				<div class="stars" data-stars="1">
				<svg height="25" width="23" class="star rating" data-rating="1">
					<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
				</svg>
				<svg height="25" width="23" class="star rating" data-rating="2">
					<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
				</svg>
				
				</div>
			</div>
                <small class="text-muted">13/07/2019</small>
              </div>
            </div>
          </div>
        </div>
       
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="./img/download.JPG" ></img>
            <div class="card-body">
              <p class="card-text">Muito bom! comprem!!..</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  
                  
                </div>
                <small class="text-muted">13/07/2019</small>
								<div class="stars" data-stars="1">
				<svg height="25" width="23" class="star rating" data-rating="1">
					<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
				</svg>
				<svg height="25" width="23" class="star rating" data-rating="2">
					<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
				</svg>
				
				</div>
              </div>
            </div>
          </div>
        </div>
		
		<div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            <div class="card-body">
              <p class="card-text">Muito bom! comprem!!.</p>
              <div class="d-flex justify-content-between align-items-center">
                
                <small class="text-muted">13/07/2019</small>
								<div class="stars" data-stars="1">
				<svg height="25" width="23" class="star rating" data-rating="1">
					<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
				</svg>
				<svg height="25" width="23" class="star rating" data-rating="2">
					<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
				</svg>
				
				</div>
              </div>
            </div>
          </div>
        </div>
       
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>
            <div class="card-body">
              <p class="card-text">Muito bom! comprem!!.</p>
              <div class="d-flex justify-content-between align-items-center">
               				<div class="stars" data-stars="1">
				<svg height="25" width="23" class="star rating" data-rating="1">
					<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
				</svg>
				<svg height="25" width="23" class="star rating" data-rating="2">
					<polygon points="9.9, 1.1, 3.3, 21.78, 19.8, 8.58, 0, 8.58, 16.5, 21.78" style="fill-rule:nonzero;"/>
				</svg>
				
				</div>
                <small class="text-muted">13/07/2019</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>

<footer class="text-muted">
  <div class="container">
    <p class="float-right">
      <a href="#">Voltar ao Topo</a>
    </p>
    <p>Revolution. 2019.</p>

  </div>
</footer>
</body>
</html>

<?php 
 var_dump($_POST);

?>

