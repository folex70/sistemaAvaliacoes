if (typeof Checkout === 'object') {
    if (typeof Checkout.$ === 'function') {

        if (document.getElementsByClassName("page--thank-you")[0] == null && window.location.href.indexOf("processing") == -1 && window.location.href.indexOf("step=review") == -1) {

            head = document.head || document.getElementsByTagName('head')[0],
                style = document.createElement('style');

            style.type = 'text/css';
            if (style.styleSheet) {
                style.styleSheet.cssText = css;
            } else {
                style.appendChild(document.createTextNode(css));
            }

            head.appendChild(style);

            var css = document.createElement("link");
            css.type = "text/css";
            css.rel = "stylesheet";
            css.href = "https://jossimages.azurewebsites.net/Content/moip.css";
            document.getElementsByTagName('head')[0].appendChild(css);

            var css = document.createElement("link");
            css.type = "text/css";
            css.rel = "stylesheet";
            css.href = "https://use.fontawesome.com/1aafd1f005.css";
            document.getElementsByTagName('head')[0].appendChild(css);


            var js = document.createElement("script");
            js.type = "text/javascript";

			js.src = "https://jossimages.azurewebsites.net/Content/moip.js";
            document.getElementsByTagName('body')[0].appendChild(js);

            window.favicon = false;
            window.faviconPath = "https://cdn.shopify.com/s/files/1/0013/0698/4500/files/FT_-_Favicon_D_32ps_small.png?v=1523453555";

window.hasVendor = false;

        }
    }
}
//--
window.mobilecheck = function() {
  var check = false;
  (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
  return check;
};
//--
function detectmob() { 
 if( navigator.userAgent.match(/Android/i)
 || navigator.userAgent.match(/webOS/i)
 || navigator.userAgent.match(/iPhone/i)
 || navigator.userAgent.match(/iPad/i)
 || navigator.userAgent.match(/iPod/i)
 || navigator.userAgent.match(/BlackBerry/i)
 || navigator.userAgent.match(/Windows Phone/i)
 ){
	 window.addEventListener('pageshow', function(event) {
	  if (event.persisted) {
		console.log('Page was loaded from cache.');
		location.reload();
	  }
	});
    return true;
  }
 else {
    return false;
  }
}

//--
function wait(ms){
   var start = new Date().getTime();
   var end = start;
   while(end < start + ms) {
     end = new Date().getTime();
  }
}

window.addEventListener("load", function(){
	//por algum motivo essa div aparece apos 1 reload
	if (document.getElementsByClassName("payment")[0]=== undefined || document.getElementsByClassName("payment")[0]=== null) {
				location.reload();
	} 
	//if(mobilecheck() == true){
	var pSettings={
		progressBg: '#FF9501',
		progressBg2: '#c8c8c8',
		 
		 
		highDemandText: "Este produto está se esgotando! Não se preocupe, reservamos o seu pedido.",
		discountText: "Coloque seu código de desconto aqui",
		 
		whyUsImg1: 'https://cdn.shopify.com/s/files/1/1319/2435/t/4/assets/money-back.png',
		whyUsTitle1: "Garantia de satisfação de 30 dias ou devolução do dinheiro",
		whyUsText1: "Se você não estiver satisfeito com seus produtos, emitiremos um reembolso total, sem questionar.",
		 
		whyUsImg2: 'https://cdn.shopify.com/s/files/1/1319/2435/t/4/assets/mail-truck.png',
		whyUsTitle2: "Mais de 8.635 Encomendas enviadas com sucesso",
		whyUsText2: "Fizemos tantos clientes satisfeitos, quanto muitos pedidos que enviamos. Você simplesmente tem que se juntar à nossa grande família.",
	}
	
	function criaDiv(){

		document.getElementsByClassName("payment")[0].insertAdjacentHTML("afterbegin",'<div><div id="divAviso" style="display:block;background:#fff5d2;padding:10px 20px;border:1px solid #fac444;font-size:14px;color:#2c2c2c;font-weight:bold;-webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px; margin:5px 0px 20px 0px">Use o código "CARTAO5" nos próximos <span id="time"></span> minutos e Ganhe 5% de Desconto  - <font style="color: #B30000;">DESCONTO VÁLIDO APENAS PARA COMPRAS COM CARTÃO! <br><br>(PROMOÇÃO | PARCELE EM ATÉ 12x sem juros)</font> <br></div></div><br/>');

		document.getElementsByClassName("payment")[0].insertAdjacentHTML("afterbegin",'<div id="divAviso2" style="width:100%;display:table"><div style="display:table-cell;vertical-align:middle"><img src="https://cdn.shopify.com/s/files/1/1319/2435/t/4/assets/flame_24.png?10413921915994220473"></div><div style="font-weight:bold;padding-left:5px">'+pSettings.highDemandText+"</div>");

		var divAviso = document.getElementById("divAviso");
		var divAviso2 = document.getElementById("divAviso2");
		divAviso.style.display = "none";
		divAviso2.style.display = "none";
		startTimer(60*10,document.querySelector('#time'));
	}

	document.getElementsByClassName("order-summary__sections")[0].insertAdjacentHTML("beforeend",'<div style="position:relative;padding:10px 0px"><div class="wyustit" style="position:relative;z-index:1;text-align:center"><span style="background: #fafafa;">&nbsp;&nbsp;PORQUE COMPRAR CONOSCO?&nbsp;&nbsp;</span></div><div style="display:table;vertical-align:middle;width:100%;border-spacing:0px 20px"><div class="wyuscs"><div class="wyuscs1"><img src="'+pSettings.whyUsImg1+'"></div><div class="wyuscs2"><span>'+pSettings.whyUsTitle1+"</span><p>"+pSettings.whyUsText1+'</p></div></div><div class="wyuscs"><div class="wyuscs1"><img src="'+pSettings.whyUsImg2+'"></div><div class="wyuscs2"><span>'+pSettings.whyUsTitle2+"</span><p>"+pSettings.whyUsText2+"</p></div></div></div></div>")
	var divTestClick = 0;
	var divpaymentClick = 0;
	var divCriada = false;


	document.getElementsByClassName("payment")[0].onclick = function(){
		divpaymentClick = divpaymentClick +1;   
		if(!divCriada){
		criaDiv();
		divCriada = true;
		}
			if(divTestClick > 1 || divpaymentClick > 0 || window.document.location.href.indexOf("payment_method")> -1 ){
				 //exibir o popup
				  divAviso.style.display = "block";
				  divAviso2.style.display = "block";
			 }
	}
	document.getElementsByClassName("teste")[0].onclick = function(){
	if(!divCriada){
	criaDiv();
	divCriada = true;
	}
	 divTestClick = divTestClick +1; 
		 if(divTestClick > 1 || divpaymentClick > 0 || window.document.location.href.indexOf("payment_method")> -1 ){
			 //exibir o popup
			  divAviso.style.display = "block";
			  divAviso2.style.display = "block";
		 }
		}
	function startTimer(duration,display){
		var start=Date.now(),
		diff,
		minutes,
		seconds;
		function timer(){
			diff=duration-(((Date.now()-start)/1000)|0);
			minutes=(diff/60)|0;
			seconds=(diff%60)|0;
			minutes=minutes<10?"0"+minutes:minutes;
			seconds=seconds<10?"0"+seconds:seconds;
			display.textContent=minutes+":"+seconds;if(diff<=0){start=Date.now()+1000;}};
			timer();		
			setInterval(timer,1000);
			}
		 
});