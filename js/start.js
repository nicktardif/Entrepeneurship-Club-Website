$( document ).ready( function() {
	var prevLink = "#home";
	
	$( 'a.dynamicLoad' ).click( function( e ) {
		$(this.parentNode).addClass('active');
		if(prevLink != null) {
			$(prevLink).removeClass("active");
		}
		e.preventDefault();   // prevent the browser from following the link
	  $('#content').load( $( this ).attr( 'href' ) );
		prevLink = this.parentNode;
	});
	
});

function showHome() {
	$("#home").addClass("active");
	$('#content').load( 'home2.php' );		
}
