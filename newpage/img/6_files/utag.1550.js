//tealium universal tag - utag.1550 ut4.0.201709271059, Copyright 2017 Tealium.com Inc. All Rights Reserved.
try{(function(id,loader){var u={};utag.o[loader].sender[id]=u;if(utag===undefined){utag={};}if(utag.ut===undefined){utag.ut={};}if(utag.ut.loader===undefined){u.loader=function(o){var a,b,c,l;a=document;if(o.type==="iframe"){b=a.createElement("iframe");b.setAttribute("height","1");b.setAttribute("width","1");b.setAttribute("style","display:none");b.setAttribute("src",o.src);}else if(o.type==="img"){utag.DB("Attach img: "+o.src);b=new Image();b.src=o.src;return;}else{b=a.createElement("script");b.language="javascript";b.type="text/javascript";b.async=1;b.charset="utf-8";b.src=o.src;}if(o.id){b.id=o.id;}if(typeof o.cb==="function"){if(b.addEventListener){b.addEventListener("load",function(){o.cb();},false);}else{b.onreadystatechange=function(){if(this.readyState==="complete"||this.readyState==="loaded"){this.onreadystatechange=null;o.cb();}};}}l=o.loc||"head";c=a.getElementsByTagName(l)[0];if(c){utag.DB("Attach to "+l+": "+o.src);if(l==="script"){c.parentNode.insertBefore(b,c);}else{c.appendChild(b);}}};}else{u.loader=utag.ut.loader;}
u.ev={'view':1,'link':1};u.initialized=false;u.map={"infectious_media_ctx":"ctx","utagPageName":"page_name","lob.domain":"line_of_business","tuid":"customer_id","guid":"guid","checkInDate":"generic_start_date","checkOutDate":"generic_end_date","destination_full":"generic_destination","numberOfGuests":"generic_number_of_travellers","hotelId":"hotel_id","destinationAirportCode":"airport_code","lt_channel_subchannel":"lt_chanel_subchannel","adults":"no_of_adults","childrenCount":"no_of_children","starRating":"star_rating","numberOfRooms":"no_of_rooms","cabinClass":"cabin_class","carrierCodes":"carrier_name","tripType":"direct_indirect_flight","lengthOfFlight":"length_of_flight","guestRating":"guest_rating","rlt_channel_subchannel":"rlt_chanel_subchannel","currencyCode":"order_currency","checkout.cartTotal.amount":"order_value","checkout.trl":"order_id","roomType":"room_type"};u.extend=[function(a,b){if(b['ut.profile']=="lastminute"&&typeof b.siteId!="undefined"&&b.siteId==70151){return false;}}];u.send=function(a,b){if(u.ev[a]||u.ev.all!==undefined){var c,d,e,f,i;u.data={"page_name":"","line_of_business":"","customer_id":"","generic_start_date":"","generic_end_date":"","generic_destination":"","generic_number_of_travellers":"","order_value":"","order_id":"","order_currency":"","ctx":"","guid":"","base_url":"//cp.impdesk.com/smartpix/v1.js"};for(c=0;c<u.extend.length;c++){try{d=u.extend[c](a,b);if(d==false)return}catch(e){}};c=[];for(d in utag.loader.GV(u.map)){if(b[d]!==undefined&&b[d]!==""){e=u.map[d].split(",");for(f=0;f<e.length;f++){u.data[e[f]]=b[d];}}}
u.data.ctx=u.data.ctx||"";if(window["__IM_smartpix"]){window.__IM_smartpix.a=[];}else{window["__IM_smartpix"]=function(){for(var n=[],r=0;r<arguments.length;r++)n.push(arguments[r]);window["__IM_smartpix"].a=(window["__IM_smartpix"].a||[]).concat(n),window["__IM_smartpix"].u=document.location.href;}}
var obj={};for(key in u.data){if(key=="base_url"){}else{obj[key]=u.data[key];}}
try{omg.pixel.fireTagPixel({id:id,name:'infectiousmedia',label:'InfectiousMedia',context:{u:u,b:b}});}catch(error){}
window.__IM_smartpix(obj);u.loader({"type":"script","src":u.data.base_url,"cb":u.loader_cb,"loc":"script","id":'utag_1550'});}};utag.o[loader].loader.LOAD(id);})("1550","expedia.main");}catch(error){utag.DB(error);}
