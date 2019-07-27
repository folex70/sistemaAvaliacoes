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
	
	var fragment3 = create('<div style="display:block;background:#fff5d2;padding:10px 20px;border:1px solid #fac444;font-size:14px;color:#2c2c2c;font-weight:bold;-webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px; margin:5px 0px 20px 0px">Use o código "CARTAO5" nos próximos <span id="time"></span> minutos e Ganhe 5% de Desconto  - <font style="color: #B30000;">DESCONTO VÁLIDO APENAS PARA COMPRAS COM CARTÃO! <br><br>(PROMOÇÃO | PARCELE EM ATÉ 12x)</font> <br></div>');
	document.getElementsByClassName('main__header')[0].appendChild(fragment3);
	
	var fragment2 = create('');
	document.getElementsByClassName('main__header')[0].appendChild(fragment2);

	var ten = 60 * 10,
	display = document.querySelector('#time');
	startTimer(ten, display);
};
//var buttonClick = 0; document.getElementById("continue_button").onclick = function(){buttonClick = buttonClick +1; alert(buttonClick;)};

var buttonClick = 0;
 document.getElementById("continue_button").onclick = function(){
	 buttonClick = buttonClick +1; alert(buttonClick);
	 };
//------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------	 
   var divAviso = document.getElementById("divAviso");
   var divAviso2 = document.getElementById("divAviso2");
   divAviso.style.display = "none";
   divAviso2.style.display = "none";
  var divTestClick = 0;
  var divpaymentClick = 0;
  document.getElementsByClassName("payment")[0].onclick = function(){
	divpaymentClick = divpaymentClick +1;   
	if(divTestClick > 1 || divpaymentClick > 0 || window.document.location.href.indexOf("payment_method")> -1 ){
		 //exibir o popup
		  divAviso.style.display = "block";
		  divAviso2.style.display = "block";
	 }
  }
 document.getElementsByClassName("teste")[0].onclick = function(){
 divTestClick = divTestClick +1; 
	 if(divTestClick > 1 || divpaymentClick > 0 || window.document.location.href.indexOf("payment_method")> -1 ){
		 //exibir o popup
		  divAviso.style.display = "block";
		  divAviso2.style.display = "block";
	 }
	 
	 };