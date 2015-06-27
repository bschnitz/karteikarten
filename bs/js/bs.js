(function( bs, undefined ){

bs.tools = bs.tools || {};

bs.tools.format_ip = function(ip_address)
{
  ip_address = ip_address.map(function(x, i){
    return "<div class='ip_num num"+i.toString(10)+"'>"
              +x.toString(10)+
           "</div>"
  });

  return ip_address.join("<div class='ip_sep'>.</div>");
}

}( window.bs = window.bs || {} ));

/* vim: set tw=80 colorcolumn=+1 : */
