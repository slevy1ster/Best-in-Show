$( document ).ready( function() {

	var htmlStr = $( "#result" ).html().replace( /,/g, "" ).split( /\\n/ ).join( "<br>\n" );

	$( "#result" ).html( htmlStr );
 });

