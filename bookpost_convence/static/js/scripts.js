var pin =0;
var fb = 0;
var insta  = 0;
var youtube = 0;
var sum = 0;
function select(element) {
	if(element.id == "marked-mark"){
		element.setAttribute("style", "border-top: 0.5px solid black");
		document.getElementById("publicacoes-mark").setAttribute("style", "border-top: none; float: right; margin-right: 38px;");
	}else{
		console.log(element.id);
		element.setAttribute("style", "border-top: 0.5px solid black; float: right; margin-right: 38px;");
		document.getElementById("marked-mark").setAttribute("style", "border-top: none");
	}
}

function show_details(element) {
	if (pin==0){
		$(element).children("div.post-details").fadeIn(200);
	}
}

function hide_details(element) {
	if(pin == 0){
		$(element).children("div.post-details").fadeOut(200);
	}

}

function fix_details(element) {
	pin = !pin;
	$(element).toggleClass("fa-2x");
	$(element).parent().toggleClass("fix-this");
}

function change_color(color, i) {
	switch (color) {
		case "green":
			$("#status"+i).val("ok");
			break;
		case "yellow":
			$("#status"+i).val("nsee");
			break;
		case "red":
			$("#status"+i).val("nok");
			break;
	}

}

function select_rs(element, c) {
	$(element).children().toggleClass('bg-yellow');
	switch (c) {
		case "insta":
			if(insta == 0){
				insta = 1;
				sum = sum + 1;
				console.log(sum);
			}else{
				insta = 0;
				sum = sum - 1;
				console.log(sum);
			}
			break;
		case 'fb':
			if(fb == 0){
				fb = 1;
				sum = sum + 10;
				console.log(sum);
			}else{
				fb = 0;
				sum = sum - 10;
				console.log(sum);
			}
			break;
		case 'youtube':
			if(youtube == 0){
				youtube = 1;
				sum = sum + 100;
				console.log(sum);
			}else{
				youtube = 0;
				sum = sum - 100;
				console.log(sum);
			}
			break;
	}
	$("#rs").val(sum);
}

function pay_attention() {
	if($("#rs").val() == 0){
		$("#pay_attention").fadeIn('fast');
		event.preventDefault();
		return false;
	}

}

function breakline(doc) {
	var key = window.event.keyCode;

	// If the user has pressed enter
	if (key === 13) {
		console.log("Ola Mundo");
		$(doc).val($(doc).val() + "<br>");
		console.log($(doc).val())
		return false;
	}
	else {
		return true;
	}
}

function delete_post() {
	if (confirm("Você tem certeza que quer apagar o post ?")) {
		return 1;
	} else {
		event.preventDefault();
	}
}

function delete_bookpost() {
	if (confirm("Você tem certeza que quer apagar o Bookpost ?")) {
		return 1;
	} else {
		event.preventDefault();
	}
}
