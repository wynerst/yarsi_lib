/* Page Transition */

$(document).ready(function() {
	
	$("body").css("display", "none");

    $("body").fadeIn(1000);
    
	$("a.transition").click(function(event){
		event.preventDefault();
		linkLocation = this.href;
		$("body").fadeOut(500, redirectPage);		
	});
		
	function redirectPage() {
		window.location = linkLocation;
	}
	
});

/* Clock */

window.setTimeout("waktu()",1000);  
			function waktu() {   
			var tanggal = new Date();  
			setTimeout("waktu()",1000);  
			document.getElementById("jam-menit").innerHTML = tanggal.getHours()+":"+tanggal.getMinutes();
			document.getElementById("detik").innerHTML = tanggal.getSeconds();
}

/* Slidshow */

var timer = null; 
function openContent(trigger,divID){ 
	$('#divImage div').hide();
	$('#'+divID).fadeIn('slow');
	if(timer != null) clearTimeout(timer);
	timer = setTimeout( 
		function(){		
		var nextAnchor = ($(trigger).next('a').text() == '') ? $('#divTrigger a:first') : $(trigger).next('a');
		nextAnchor.click();
		}, 10000
	);
}	 
$(document).ready(
	function(){
	openContent($('#firstSlide'),'div1');			
	}
)