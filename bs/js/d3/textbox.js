(function( bs, undefined ){

bs.d3 = bs.d3 || {};

// svg textbox with foreign div element
bs.d3.textbox = (function(){
  function me(selection){
    root = selection
      .enter()
      .append("svg");

    textbox = root
      .append("foreignObject")
      .attr("width", function(d){return d.width;} )
      .attr("height", "100%");

    textbox
      .append("xhtml:body")
      .attr("xmlns", "http://www.w3.org/1999/xhtml")
      .style("width", function(d){return d.width;} )
      .append("div")
      .html( function(d){return d.text} );

    var x = 0;
    function calc_x(data){
      matches = data.width.match(/(.+\d)(\D*)/)
      xtmp = x;
      x = x + parseInt(matches[1]);
      return xtmp.toString() + matches[2];
    }

    textbox
      .attr("x", calc_x)
      .attr("width", function(d){return d.width;} );

    x = 0;
    root
      .append("rect")
      .attr("x", calc_x)
      .attr("width", function(d){return d.width;} )
      .attr("height", "100%" )
      .attr("fill", "none" );
  }

  return me;
}());

}( window.bs = window.bs || {} ));

/* vim: set tw=80 colorcolumn=+1 : */
