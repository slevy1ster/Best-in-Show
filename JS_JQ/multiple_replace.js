String.prototype.replaceArray = function( find, replace ) {
  var str = this, regex;
  for ( var i = 0; i < find.length; i++ ){
     regex = new RegExp( find[i], "g" );
     str = str.replace( regex, replace[i] );
  }
  return str;
};
var res = document.getElementById("result");
var find = [",", "\\\\n"];
var replace = ["", "<BR>\n"];
var str = res.innerHTML.replaceArray( find, replace );
res.innerHTML = str;
