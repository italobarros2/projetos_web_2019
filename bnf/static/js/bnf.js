function select_itens(element){
	var btn = $(element).attr('id');
	console.log(btn);
	for(var i = 1; i<=3; i++){
		var control = "cbtn-"+i;
		if(control == btn){
			// $("#"+control+"c").show("slide", { direction: "left" }, 1000);
			$("."+control+"-c").fadeIn("Slow");
			$("#"+control).addClass("active");
		}else{
			// $("#"+control+"c").hide("slide", { direction: "left" }, 1000);
			$("."+control+"-c").hide();
			$("#"+control).removeClass("active");
		}
	}
}

$(".cbtn-2-c").hide();

function select_itens_sobre(element){
	var btn = $(element).attr('id');
	console.log(btn);
	for(var i = 1; i<=3; i++){
		var control = "cbtn-"+i;
		if(control == btn){
			// $("#"+control+"c").show("slide", { direction: "left" }, 1000);
			$("."+control+"-c").fadeIn("Slow");
			$("#"+control).addClass("active");
		}else{
			// $("#"+control+"c").hide("slide", { direction: "left" }, 1000);
			$("."+control+"-c").hide();
			$("#"+control).removeClass("active");
		}
	}
}
