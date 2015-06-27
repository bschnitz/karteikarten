(function( bs, undefined ){

bs.d3 = bs.d3 || {};

bs.d3.table = (function(){
  var td = {};

  var attributes = {};

  function me(selection){ selection.each( function(data, i){
    var root = this; /* selected node */

    var head = data.shift();

    var table = d3.select(root).append("table");

    table
      .attr(attributes)
      .selectAll("tr")
      .data(data)
      .enter()
      .append("tr")
      .selectAll("td")
      .data( function(d){return d;} )
      .enter()
      .append("td")
      .html( function(d){return d;} )
      .attr(td.attributes);

    table
      .insert("tr", ":first-child")
      .selectAll("th")
      .data(head)
      .enter()
      .append("th")
      .html( function(d){return d;} );
  })}

  me.td = {};

  me.td.attr = function( name, value ){
    td.attributes = td.attributes || {};
    td.attributes[name] = value;

    return me.td;
  };

  me.attr = function( name, value ){
    attributes[name] = value;

    return me;
  }

  return me;
}());

}( window.bs = window.bs || {} ));

/* vim: set tw=80 colorcolumn=+1 : */
