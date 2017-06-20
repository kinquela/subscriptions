var JSON=JSON||{};JSON.stringify=JSON.stringify||function(a){var b=typeof a;if("object"!=b||null===a)return"string"==b&&(a='"'+a+'"'),String(a);var c,d,e=[],f=a&&a.constructor==Array;for(c in a)d=a[c],b=typeof d,"string"==b?d='"'+d+'"':"object"==b&&null!==d&&(d=JSON.stringify(d)),e.push((f?"":'"'+c+'":')+String(d));return(f?"[":"{")+String(e)+(f?"]":"}")},document.querySelectorAll||!function(){document.querySelectorAll=function(a){var d,b=document.createElement("style"),c=[];for(document.documentElement.firstChild.appendChild(b),document._qsa=[],b.styleSheet.cssText=a+"{x-qsa:expression(document._qsa && document._qsa.push(this))}",window.scrollBy(0,0),b.parentNode.removeChild(b);document._qsa.length;)d=document._qsa.shift(),d.style.removeAttribute("x-qsa"),c.push(d);return document._qsa=null,c}}(),document.querySelector||!function(){document.querySelector=function(a){var b=document.querySelectorAll(a);return b.length?b[0]:null}}(),function(){var a,c,d,e="https://api.mercadolibre.com/checkout/custom",f={}.hasOwnProperty,g=function(a,b){function d(){this.constructor=a}for(var c in b)f.call(b,c)&&(a[c]=b[c]);return d.prototype=b.prototype,a.prototype=new d,a.__super__=b.prototype,a},h=this;for(this.Checkout=function(){function a(){}return a.version="1.2.6custom",a.deviceProfileId=null,a.setPublishableKey=function(b){a.key=b},a}.call(this),a=this.Checkout,this.Checkout.trackErrors=function(b){var c=e+"/track_error?public_key="+a.key+"&js_version="+a.version;if(window.XDomainRequest){var d=new XDomainRequest;d.open("post",c),d.onload=function(){},d.onprogress=function(){},d.ontimeout=function(){},d.onerror=function(){},setTimeout(function(){d.send(JSON.stringify(b))},0)}else jQuery.support.cors=!0,jQuery.ajax({url:c,type:"POST",dataType:"json",timeout:1e4,data:b})},this.Checkout.createMeliDevice=function(b,c){if(200==b||201==b){a.deviceProfileId=c.id;var d=document.createElement("iframe");d.style.display="none",d.src="https://mldp.mercadopago.com/device_profile?public_key="+a.key+"&session_id="+c.id,document.body.appendChild(d)}},this.Checkout.token=function(){function b(){}return b.cardTokenUrl="https://api.mercadopago.com/v1/card_tokens",b.formatData=function(b,c,d){a.utils.isElement(b)?(b=a.utils.paramsFromForm(b),a.card.validate(b,function(c){c.length&&(b=c,a.trackErrors({status:400,type:"validateForm",data:b})),d(b)})):d(b)},b.create=function(c,d){a.utils.validateKey(a.key),c.card.public_key=a.key;var e=document.querySelectorAll("[data-checkout]");if("https:"!=window.location.protocol&&e&&e.length>0&&!/^TEST/.test(a.key))throw a.trackErrors({status:200,type:"referer-"+window.location.host,data:{referer:window.location.host,user_agent:window.navigator.userAgent,public_key:a.key}}),new Error("Your payment cannot be processed because the website contains credit card data and is not using a secure connection.SSL certificate is required to operate.");b.post(c,d)},b.mappingCard=function(b){var c={};return a.deviceProfileId&&(c.device={meli:{session_id:a.deviceProfileId}}),c.card_number=b.cardNumber,c.security_code=b.securityCode,c.expiration_month=parseInt(b.cardExpirationMonth,10),c.expiration_year=parseInt(b.cardExpirationYear,10),c.cardholder={name:b.cardholderName},c.cardholder.identification={type:""==b.docType||void 0==b.docType?null:b.docType,subtype:""==b.subDocType||void 0==b.subDocType?null:b.subDocType,number:""==b.docNumber||void 0==b.docNumber?null:b.docNumber},c},b.post=function(c,d){var e=null==a.tokenId?"POST":"PUT",f=b.cardTokenUrl;f+=null==a.tokenId?"?":"/"+a.tokenId+"?",f+="_method="+e+"&public_key="+a.key+"&js_version="+a.version,jQuery.support.cors=!0,jQuery.ajax({url:f,type:"POST",data:JSON.stringify(b.mappingCard(c.card)),contentType:"application/json",crossDomain:!0,timeout:1e4,error:function(b,c,e){var f=b.responseText?jQuery.parseJSON(b.responseText):{},g=b.status?b.status:400;a.trackErrors({status:g,type:"cardForm",data:f}),"function"==typeof d?d(g,{status:g,error:c,cause:[]}):null},success:function(a,b,c){var f=c.status?c.status:"POST"==e?201:200;"function"==typeof d?d(f,a):null}})},b}.call(this),this.Checkout.card=function(b){function c(){return c.__super__.constructor.apply(this,arguments)}return g(c,b),c.tokenName="card",c.whitelistedAttrs=["cardNumber","securityCode","cardExpirationMonth","cardExpirationYear","cardExpiration","cardIssuerId"],c.docTypes={MLB:[{id:"CPF",name:"CPF"}],MLA:[{id:"DNI",name:"DNI"},{id:"CI",name:"C\xe9dula"},{id:"LC",name:"L.C."},{id:"LE",name:"L.E."},{id:"Otro",name:"Otro"}],MCO:[{id:"CC",name:"C.C."},{id:"CE",name:"C.E."},{id:"NIT",name:"NIT"},{id:"Otro",name:"Otro"}],MLV:[{id:"CI",name:"CI"},{id:"RIF",name:"RIF"},{id:"Pasaporte",name:"Pasaporte"}]},c.subDocTypes={MLV:{CI:["V","E"],RIF:["J","P","V","E","G"],Pasaporte:["P"]}},c.lengthByDocType={CPF:{min:11,max:11},DNI:{min:7,max:8},CI:{min:1,max:9},LC:{min:6,max:7},LE:{min:6,max:7},NIT:{min:5,max:20},CC:{min:5,max:20},CE:{min:5,max:20},RIF:{min:1,max:9},Pasaporte:{min:1,max:20},Otro:{min:5,max:20}},c.requiredParamsCodes={cardholderName:{code:"221",description:"parameter cardholderName can not be null/empty"},docNumber:{code:"214",description:"parameter docNumber can not be null/empty"},docType:{code:"212",description:"parameter docType can not be null/empty"},subDocType:{code:"213",description:"The parameter cardholder.document.subtype can not be null or empty"},cardNumber:{code:"205",description:"parameter cardNumber can not be null/empty"},securityCode:{code:"224",description:"parameter securityCode can not be null/empty"},cardExpirationMonth:{code:"208",description:"parameter cardExpirationMonth can not be null/empty"},cardExpirationYear:{code:"209",description:"parameter cardExpirationYear can not be null/empty"},cardIssuerId:{code:"220",description:"parameter cardIssuerId can not be null/empty"}},c.invalidParamsCode={cardholderName:{code:"316",description:"invalid parameter cardholderName"},docNumber:{code:"324",description:"invalid parameter docNumber"},docType:{code:"322",description:"invalid parameter docType"},subDocType:{code:"323",description:"Invalid parameter cardholder.document.subtype"},cardNumber:{code:"E301",description:"invalid parameter cardNumber"},securityCode:{code:"E302",description:"invalid parameter securityCode"},cardExpirationMonth:{code:"325",description:"invalid parameter cardExpirationMonth"},cardExpirationYear:{code:"326",description:"invalid parameter cardExpirationYear"}},c.createToken=function(b,d){var e={};a.token.formatData(b,c.whitelistedAttrs,function(b){return e[c.tokenName]=b,e[c.tokenName][0]?d(400,{error:"bad_request",message:"invalid parameters",cause:e[c.tokenName]}):a.token.create(e,d)})},c.validateCardNumber=function(b,d,e){b=a.utils.clear(b),void 0==e&&"function"==typeof d&&(e=d),a.paymentMethods.getPaymentMethod("function"!=typeof d?d:b,function(a,d){var g,f=!1;if(200==a)for(var h=0;h<d.length&&!f;h++){g=d[h].card_configuration;for(var i=0;i<g.length&&!f;i++)f=b.length==g[i].card_number_length&&c.validateBin(b,g[i])&&("none"==g[i].luhn_algorithm||c.luhnCheck(b))}"function"==typeof e?e(a,f):null})},c.validateSecurityCode=function(b,c,d){return b=a.utils.clear(b),/^\d+$/.test(b)?void a.paymentMethods.getPaymentMethod(c,function(a,c){var e=!1;if(200==a)for(var f=c[0]?c[0].card_configuration:[],g=0;g<f.length&&!e;g++)e=!f[g].security_code_length||b.length==f[g].security_code_length;else e=!0;"function"==typeof d?d(a,e):null}):"function"==typeof d?d(200,!1):null},c.validateAdditionalInfoNeeded=function(b,d,e){var f=d.length;a.paymentMethods.getPaymentMethod(b.cardNumber,function(a,g){if(200==a)for(var h=g[0]?g[0].card_configuration:[],i=0;i<h.length;i++)for(var j=0;j<h[i].additional_info_needed.length;j++)switch(h[i].additional_info_needed[j]){case"cardholder_name":b.cardholderName&&""!=b.cardholderName?c.validateCardHolderName(b.cardholderName)||(d[f++]=c.invalidParamsCode.cardholderName):d[f++]=c.requiredParamsCodes.cardholderName;break;case"cardholder_identification_type":b.docType&&""!=b.docType?void 0==c.lengthByDocType[b.docType]&&(d[f++]=c.invalidParamsCode.docType):d[f++]=c.requiredParamsCodes.docType;break;case"cardholder_identification_sub_type":b.subDocType&&""!=b.subDocType?b.docType&&!c.validateSubDocType(g[0].site_id,b.docType,b.subDocType)&&(d[f++]=c.invalidParamsCode.subDocType):d[f++]=c.requiredParamsCodes.subDocType;break;case"cardholder_identification_number":b.docNumber&&""!=b.docNumber?c.validateDocNumber(b.docType,b.docNumber)||(d[f++]=c.invalidParamsCode.docNumber):d[f++]=c.requiredParamsCodes.docNumber}"function"==typeof e?e(a,d):null})},c.validateExpiry=function(b,c){var d,e;if(b=a.utils.trim(b),void 0==c){if(1==b.split("/").length)return!1;c=b.split("/")[1],b=b.split("/")[0]}return c=a.utils.trim(c),2==c.length&&(c="20"+c),/^\d+$/.test(b)&&/^\d+$/.test(c)&&parseInt(b,10)<=12?(e=new Date(c,b),d=new Date,e.setMonth(e.getMonth()-1),e.setMonth(e.getMonth()+1,1),e>d):!1},c.validateCardHolderName=function(a){var b="^[a-zA-Z\xe3\xc3\xe1\xc1\xe0\xc0\xe2\xc2\xe4\xc4\u1ebd\u1ebc\xe9\xc9\xe8\xc8\xea\xca\xeb\xcb\u0129\u0128\xed\xcd\xec\xcc\xee\xce\xef\xcf\xf5\xd5\xf3\xd3\xf2\xd2\xf4\xd4\xf6\xd6\u0169\u0168\xfa\xda\xf9\xd9\xfb\xdb\xfc\xdc\xe7\xc7\u2019\xf1\xd1 .']*$";return a.match(b)?!0:!1},c.validateDocNumber=function(b,d){return d=a.utils.clear(d),b&&d&&c.lengthByDocType[b]&&c.lengthByDocType[b].min<=d.length&&d.length<=c.lengthByDocType[b].max},c.validateSubDocType=function(a,b,d){return b&&d&&c.subDocTypes[a][b]&&-1!=c.subDocTypes[a][b].indexOf(d)},c.getDocTypes=function(a){return c.docTypes[a]},c.getSubDocTypes=function(a){return c.subDocTypes[a]},c.luhnCheck=function(a){var b,c,d,e,f,g;for(d=!0,e=0,c=(a+"").split("").reverse(),f=0,g=c.length;g>f;f++)b=c[f],b=parseInt(b,10),(d=!d)&&(b*=2),b>9&&(b-=9),e+=b;return e%10===0},c.validateBin=function(a,b){var c=a.slice(0,6);return c.match(b.bin_card_pattern)?!0:!1},c.getErrorCause=function(a){return c.requiredParamsCodes[a]},c.validate=function(b,d){var e,f=0,g=[];void 0==b.cardExpiration||void 0!=b.cardExpirationMonth&&void 0!=b.cardExpirationYear?b.cardExpiration=b.cardExpirationMonth+"/"+b.cardExpirationYear:(b.cardExpirationMonth=b.cardExpiration.split("/")[0],b.cardExpirationYear=b.cardExpiration.split("/")[1]),b.cardExpirationYear&&2==b.cardExpirationYear.length&&(b.cardExpirationYear="20"+b.cardExpirationYear),b.docNumber=a.utils.clear(b.docNumber);for(var i=0;i<c.whitelistedAttrs.length;i++)e=c.whitelistedAttrs[i],("cardNumber"==e||"securityCode"==e)&&(b[e]=a.utils.clear(b[e])),b[e]&&""!=b[e]||"cardIssuerId"==e||(g[f++]=c.requiredParamsCodes[e]);c.validateExpiry(b.cardExpirationMonth,b.cardExpirationYear)||(g[f++]=c.invalidParamsCode.cardExpirationMonth,g[f++]=c.invalidParamsCode.cardExpirationYear),c.validateCardNumber(b.cardNumber,b.cardNumber.slice(0,6),function(a,e){e||(g[f++]=c.invalidParamsCode.cardNumber),c.validateSecurityCode(b.securityCode,b.cardNumber.slice(0,6),function(a,e){e||(g[f++]=c.invalidParamsCode.securityCode),c.validateAdditionalInfoNeeded(b,g,function(a,b){d(b)})})})},c}.call(this,this.Checkout.token),exports=["createToken","validateExpiry","validateSecurityCode","validateCardNumber","validateCardHolderName","validateDocNumber","validateSubDocType","getDocTypes","getSubDocTypes"],c=0,d=exports.length;d>c;c++)key=exports[c],this.Checkout[key]=this.Checkout.card[key];for(this.Checkout.clearSession=function(){a.tokenId=null,a.deviceProfileId=null,a.createToken({},function(b,c){getPixels(b,c),a.createMeliDevice(b,c)})},this.Checkout.paymentMethods=function(b){function c(){return c.__super__.constructor.apply(this,arguments)}return g(c,b),c.guessedPaymentMethods={},c.acceptedPaymentMethods=[],c.acceptedCardIssuers=[],c.fullCardIssuers=[],c.paymentMethodsCodesError={400:{status:400,error:"bad_request",cause:{code:"400",description:"There is more than one payment method available"}},404:{status:404,error:"not_found",cause:{code:"404",description:"Not found paymentMethod"}}},c.setPaymentMethods=function(a){c.acceptedPaymentMethods=a},c.getPaymentMethods=function(){return c.acceptedPaymentMethods},c.getPaymentMethod=function(a,b,d,e){var f;"function"==typeof b&&(void 0!=d&&(e=d),d=b,b=null);var g=c.getPaymentMethods();if(0!=g.length&&(f=g.filter(function(b){return b.id==a})),(!f||f&&0==f.length)&&void 0!=c.guessedPaymentMethods&&(f=c.guessedPaymentMethods[a]),!f||f&&0==f.length)c.searchPaymentMethods(a,b,d,e);else{if("function"!=typeof d)return f;d(200,f)}},c.getAllPaymentMethods=function(b){var d=e+"/payment_methods?public_key="+a.key+"&js_version="+a.version,f=function(a){c.setPaymentMethods(a),"function"==typeof b?b(200,a):null};if(window.XDomainRequest){var g=new XDomainRequest;g.open("get",d),g.onload=function(){var a=jQuery.parseJSON(g.responseText);(null==a||"undefined"==typeof a)&&(a=jQuery.parseJSON(a.firstChild.textContent)),f(a)},g.onprogress=function(){},g.ontimeout=function(){},g.onerror=function(){a.trackErrors({status:"error",type:"getAllPaymentMethods",data:{user_agent:window.navigator.userAgent}}),"function"==typeof b?b(404,{status:404,error:"not_found",cause:[]}):null},setTimeout(function(){g.send()},0)}else jQuery.support.cors=!0,jQuery.ajax({url:d,type:"GET",timeout:1e4,error:function(c,d,e){a.trackErrors({status:c.status,type:"getAllPaymentMethods",data:jQuery.parseJSON(c.responseText)}),"function"==typeof b?b(c.status,jQuery.parseJSON(c.responseText)):null},success:function(a){f(a)}})},c.searchPaymentMethods=function(b,d,f,g){var h=e+"/payment_methods/search?public_key="+a.key+"&js_version="+a.version;if(b=a.utils.clear(b),void 0!=this.guessedPaymentMethods&&this.guessedPaymentMethods[b])return"function"==typeof f?f(200,this.guessedPaymentMethods[b]):null;if(!b||null==b||void 0==b||"null"==b)return"function"==typeof f?f(404,{status:404,error:"not_found",cause:[]},{id:b,amount:d}):null;/^([a-zA-Z])*$/.test(b)||(b=b.replace(/[^0-9]/g,"").slice(0,6)),/^([0-9])*$/.test(b)?(h+="&bin="+b,void 0!=g&&(h+="&payment_method="+g)):h+="&payment_method="+b,void 0!=d&&(h+="&amount="+d);var i=function(a){c.guessedPaymentMethods[b]=a,/^([0-9])*$/.test(b)&&a[0]&&a[0].id&&(c.guessedPaymentMethods[a[0].id]=a),"function"==typeof f?f(200,a,{id:b,amount:d}):null};if(window.XDomainRequest){var j=new XDomainRequest;j.open("get",h),j.onload=function(){var a=jQuery.parseJSON(j.responseText);(null==a||"undefined"==typeof a)&&(a=jQuery.parseJSON(a.firstChild.textContent)),i(a)},j.onprogress=function(){},j.ontimeout=function(){},j.onerror=function(){a.trackErrors({status:"error",type:"searchPaymentMethods",data:{user_agent:window.navigator.userAgent}}),"function"==typeof f?f(404,{status:404,error:"not_found",cause:[]},{id:b,amount:d}):null},setTimeout(function(){j.send()},0)}else jQuery.support.cors=!0,jQuery.ajax({url:h,type:"GET",timeout:1e4,error:function(c,e,g){a.trackErrors({status:c.status,type:"searchPaymentMethods",data:jQuery.parseJSON(c.responseText)}),"function"==typeof f?f(c.status,jQuery.parseJSON(c.responseText),{id:b,amount:d}):null},success:function(a){i(a)}})},c.getAcceptedCardIssuers=function(b){var d=e+"/card_issuers?public_key="+a.key+"&js_version="+a.version;if(c.acceptedCardIssuers.length>0)return"function"==typeof b?b(200,c.acceptedCardIssuers):null;var f=function(a){c.acceptedCardIssuers=a,"function"==typeof b?b(200,a):null};if(window.XDomainRequest){var g=new XDomainRequest;g.open("get",d),g.onload=function(){var a=jQuery.parseJSON(g.responseText);(null==a||"undefined"==typeof a)&&(a=jQuery.parseJSON(a.firstChild.textContent)),f(a)},g.onprogress=function(){},g.ontimeout=function(){},g.onerror=function(){a.trackErrors({status:"error",type:"cardIssuers",data:{user_agent:window.navigator.userAgent}}),"function"==typeof b?b(404,{status:404,error:"not_found",cause:[]}):null},setTimeout(function(){g.send()},0)}else jQuery.support.cors=!0,jQuery.ajax({url:d,type:"GET",timeout:1e4,error:function(c,d,e){a.trackErrors({status:c.status,type:"cardIssuers",data:jQuery.parseJSON(c.responseText)}),"function"==typeof b?b(c.status,jQuery.parseJSON(c.responseText)):null},success:function(a){f(a)}})},c.getCardIssuers=function(a,b){c.getPaymentMethod(a,function(a,d){if(200!=a||d.length>1){var e=200==a?c.paymentMethodsCodesError[400]:d;return"function"==typeof b?b(a,e):null}c.getAcceptedCardIssuers(function(a,c){if(200==a){var e=c[d[0].payment_type_id][d[0].id];return"function"==typeof b?b(200,e):null}return"function"==typeof b?b(a,c):null})})},c.getCustomizedCardIssuers=function(a,b){c.getPaymentMethod(a,function(a,d){if(200!=a||d.length>1){var e=200==a?c.paymentMethodsCodesError[400]:d;return"function"==typeof b?b(200==a?400:a,e):null}c.getFullCardIssuers(d[0].site_id,function(a,c){if(200==a){var e=c.filter(function(a){return a.payment_type_id==d[0].payment_type_id});if(0==e.length)return"function"==typeof b?b(404,[]):null;var f=e[0].payment_methods.filter(function(a){return a.id==d[0].id});return"function"==typeof b?b(200,f[0].issuers):null}return"function"==typeof b?b(a,c):null})})},c.getFullCardIssuers=function(b,d){var e="https://api.mercadolibre.com/sites/"+b+"/card_issuers/search?public_key="+a.key+"&js_version="+a.version;if(c.fullCardIssuers.length>0)return"function"==typeof d?d(200,c.fullCardIssuers):null;var f=function(a){c.fullCardIssuers=a.results,"function"==typeof d?d(200,a.results):null};if(window.XDomainRequest){var g=new XDomainRequest;g.open("get",e),g.onload=function(){var a=jQuery.parseJSON(g.responseText);(null==a||"undefined"==typeof a)&&(a=jQuery.parseJSON(a.firstChild.textContent)),f(a)},g.onprogress=function(){},g.ontimeout=function(){},g.onerror=function(){a.trackErrors({status:"error",type:"cardIssuersSearch",data:{user_agent:window.navigator.userAgent}}),"function"==typeof d?d(404,{status:404,error:"not_found",cause:[]}):null},setTimeout(function(){g.send()},0)}else jQuery.support.cors=!0,jQuery.ajax({url:e,type:"GET",timeout:1e4,error:function(b,c,e){a.trackErrors({status:b.status,type:"cardIssuersSearch",data:jQuery.parseJSON(b.responseText)}),"function"==typeof d?d(b.status,jQuery.parseJSON(b.responseText)):null},success:function(a){f(a)}})},c.getInstallments=function(a,b,d){c.getPaymentMethod(a,function(a,e){if(200!=a||e.length>1){var f=200==a?c.paymentMethodsCodesError[400]:e;return"function"==typeof d?d(a,f):null}"function"==typeof d?d(200,c.fillInstallments(e[0].payer_costs,b)):null})},c.getInstallmentsByIssuerId=function(a,b,d,e){c.getPaymentMethod(a,function(a,f){if(200!=a||f.length>1){var g=200==a?c.paymentMethodsCodesError[400]:f;return"function"==typeof e?e(a,g):null}var h=function(a){for(var f=a.payer_costs,g=0;g<a.exceptions_by_card_issuer.length;g++)a.exceptions_by_card_issuer[g].card_issuer.id==b&&(f=a.exceptions_by_card_issuer[g].payer_costs);"function"==typeof e?e(200,c.fillInstallments(f,d)):null},i=c.getPaymentMethods();if(0!=i.length){var j=i.filter(function(a){return a.id==f[0].id});h(j?j[0]:f[0])}else c.getAllPaymentMethods(function(a,b){var c;200==a&&(c=b.filter(function(a){return a.id==f[0].id})),h(c?c[0]:f[0])})})},c.fillInstallments=function(a,b){for(var c,d,e=parseFloat(b),f=[],g=0;g<a.length;g++)c=parseFloat(a[g].min_allowed_amount),d=parseFloat(a[g].max_allowed_amount),e>=c&&d>=e&&(share=(e*(1+a[g].installment_rate/100)/a[g].installments).toFixed(2),f[g]={installments:a[g].installments,installment_rate:a[g].installment_rate,share_amount:share,total_amount:(a[g].installment_rate>0?share*a[g].installments:e).toFixed(2)});return f},c}.call(this,this.Checkout.token),exports=["setPaymentMethods","getPaymentMethods","getAllPaymentMethods","getPaymentMethod","getInstallments","getCardIssuers","getInstallmentsByIssuerId","getAcceptedCardIssuers","getCustomizedCardIssuers"],c=0,d=exports.length;d>c;c++)key=exports[c],this.Checkout[key]=this.Checkout.paymentMethods[key];"undefined"!=typeof module&&null!==module&&(module.exports=this.Checkout),"function"==typeof define&&define("checkout",[],function(){return h.Checkout})}.call(this),function(){[].indexOf||function(a){for(var b=0,c=this.length;c>b;b++)if(b in this&&this[b]===a)return b;return-1};this.Checkout.utils=function(){function a(){}return a.trim=function(a){return(a+"").replace(/^\s+|\s+$/g,"")},a.clear=function(b){return a.trim(b).replace(/\s+|-/g,"")},a.isElement=function(a){return"object"!=typeof a?!1:"undefined"!=typeof jQuery&&null!==jQuery&&a instanceof jQuery?!0:1===a.nodeType},a.paramsFromForm=function(a){var b,c,d,e,f,g,h,i,j,k;for("undefined"!=typeof jQuery&&null!==jQuery&&a instanceof jQuery&&(a=a[0]),d=a.getElementsByTagName("input"),f=a.getElementsByTagName("select"),g={},h=0,j=d.length;j>h;h++)c=d[h],b=c.getAttribute("data-checkout"),g[b]=c.value;for(i=0,k=f.length;k>i;i++)e=f[i],b=e.getAttribute("data-checkout"),null!=e.selectedIndex&&-1!=e.selectedIndex&&(g[b]=e.options[e.selectedIndex].value);return g},a.validateKey=function(a){if(!a||"string"!=typeof a)throw new Error("You did not set a valid publishable key. Call Checkout.setPublishableKey() with your public_key.");if(/\s/g.test(a))throw new Error("Your key is invalid, as it contains whitespacCheckout.")},a}()}.call(this);var getPixels=function(a,b){var c=b.id;Checkout.tokenId=c;var d=function(a,b,c){var d,e,f,g,h=b||{},i=c||{};h.type="application/x-shockwave-flash",window.ActiveXObject?(h.classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000",i.movie=a):h.data=a,e="<object";for(d in h)e+=" "+d+'="'+h[d]+'"';e+=">";for(d in i)e+='<param name="'+d+'" value="'+i[d]+'" />';return e+="</object>",f=document.createElement("div"),f.innerHTML=e,g=f.firstChild,f.removeChild(g),g};(new Image).src="https://content.mercadopago.com/fp/clear.png?org_id=jk96mpy0&session_id="+c+"&m=1",(new Image).src="https://content.mercadopago.com/fp/clear.png?org_id=jk96mpy0&session_id="+c+"&m=2";var e=document.createElement("script");e.type="text/javascript",e.src="https://content.mercadopago.com/fp/check.js?org_id=jk96mpy0&session_id="+c,document.body.appendChild(e);var f=d("https://content.mercadopago.com/fp/fp.swf?org_id=jk96mpy0&session_id="+c,{id:"obj_id",width:1,height:1},{movie:"https://content.mercadopago.com/fp/fp.swf?org_id=jk96mpy0&session_id="+c});document.body.appendChild(f)},trackPixels=function(){Checkout.createToken({},function(a,b){getPixels(a,b),Checkout.createMeliDevice(a,b)}),0==Checkout.getPaymentMethods().length&&Checkout.getAllPaymentMethods(),function(){for(var a=document.querySelectorAll("[data-checkout]"),b=0,c=[],d=0;a&&d<a.length;d++){var e=a[d];null===e.name||void 0===e.name||""===e.name||"cardNumber"!=e.getAttribute("data-checkout")&&"securityCode"!=e.getAttribute("data-checkout")||(c[b++]=e.getAttribute("data-checkout"))}c.length>0&&Checkout.trackErrors({status:200,type:"DSS-"+window.location.host,data:{inputNames:c,user_agent:window.navigator.userAgent,public_key:Checkout.key}})}()};window.addEventListener?window.addEventListener("load",trackPixels,!1):window.attachEvent&&window.attachEvent("onload",trackPixels);