<?php

if (isset($_POST['submitted'])) {
// include ('connection.php');
// $dbcon='trial';
 $db = mysqli_connect('localhost','root','123','trial')
 or die('Error connecting to MySQL server.');


 

 $query="SELECT * FROM cropid "; 
mysqli_query($db, $query) or die('Error querying database.');


$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);

//while ($row = mysqli_fetch_array($result)) {
 //echo $row['crop_name'] .'<br />';
//}



if(!mysqli_query($db,$query))  {

die('error displaying');

}





 }

?>



<!doctype html><html class="a-no-js" data-19ax5a9jf="dingo">
  <head>

<script type='text/javascript'>var ue_t0=ue_t0||+new Date();</script>
<script type='text/javascript'>
var ue_csm = window,
    ue_hob = +new Date();
(function(d){var e=d.ue=d.ue||{},f=Date.now||function(){return+new Date};e.d=function(b){return f()-(b?0:d.ue_t0)};e.stub=function(b,a){if(!b[a]){var c=[];b[a]=function(){c.push([c.slice.call(arguments),e.d(),d.ue_id])};b[a].replay=function(b){for(var a;a=c.shift();)b(a[0],a[1],a[2])};b[a].isStub=1}};e.exec=function(b,a){return function(){if(1==window.ueinit)try{return b.apply(this,arguments)}catch(c){ueLogError(c,{attribution:a||"undefined",logLevel:"WARN"})}}}})(ue_csm);


    var ue_err_chan = 'jserr-rw';
(function(d,e){function h(f,b){if(!(a.ec>a.mxe)&&f){a.ter.push(f);b=b||{};var c=f.logLevel||b.logLevel;c&&c!==k&&c!==m&&c!==n&&c!==p||a.ec++;c&&c!=k||a.ecf++;b.pageURL=""+(e.location?e.location.href:"");b.logLevel=c;b.attribution=f.attribution||b.attribution;a.erl.push({ex:f,info:b})}}function l(a,b,c,e,g){d.ueLogError({m:a,f:b,l:c,c:""+e,err:g,fromOnError:1,args:arguments},g?{attribution:g.attribution,logLevel:g.logLevel}:void 0);return!1}var k="FATAL",m="ERROR",n="WARN",p="DOWNGRADED",a={ec:0,ecf:0,
pec:0,ts:0,erl:[],ter:[],mxe:50,startTimer:function(){a.ts++;setInterval(function(){d.ue&&a.pec<a.ec&&d.uex("at");a.pec=a.ec},1E4)}};l.skipTrace=1;h.skipTrace=1;h.isStub=1;d.ueLogError=h;d.ue_err=a;e.onerror=l})(ue_csm,window);


var ue_id = '60CZDDVJD67DZBSVZVA2',
    ue_url = '/ap/uedata',
    ue_navtiming = 1,
    ue_mid = 'A21TJRUUN4KGV',
    ue_sid = '257-2130578-9981535',
    ue_sn = 'www.amazon.in',
    ue_furl = 'fls-eu.amazon.com',
    ue_surl = '//unagi-eu.amazon.com/1/events/com.amazon.csm.nexusclient.prod',
    ue_fcsn = 1,
    ue_urt = 3,
    ue_rpl_ns = 'cel-rpl',
    ue_fpf = '//fls-eu.amazon.com/1/batch/1/OP/A21TJRUUN4KGV:257-2130578-9981535:60CZDDVJD67DZBSVZVA2$uedata=s:',

    ue_swi = 1;
function ue_viz(){(function(c,e,a){function k(b){if(c.ue.viz.length<p&&!l){var a=b.type;b=b.originalEvent;/^focus./.test(a)&&b&&(b.toElement||b.fromElement||b.relatedTarget)||(a=e[m]||("blur"==a||"focusout"==a?"hidden":"visible"),c.ue.viz.push(a+":"+(+new Date-c.ue.t0)),"visible"==a&&(ue.isl&&uex("at"),l=1))}}for(var l=0,f,g,m,n=["","webkit","o","ms","moz"],d=0,p=20,h=0;h<n.length&&!d;h++)if(a=n[h],f=(a?a+"H":"h")+"idden",d="boolean"==typeof e[f])g=a+"visibilitychange",m=(a?a+"V":"v")+"isibilityState";
k({});d&&e.addEventListener(g,k,0);c.ue&&d&&(c.ue.pageViz={event:g,propHid:f})})(ue_csm,document,window)};

(function(a,g){function v(a){return a&&a.replace&&a.replace(/^\s+|\s+$/g,"")}function p(a){return"undefined"===typeof a}function t(d,c,e,h){var g=h||+new Date,m;a.ueam&&a.ueam(c,d,h);if(c||p(e)){if(d)for(m in h=c?f("t",c)||f("t",c,{}):a.ue.t,h[d]=g,e)e.hasOwnProperty(m)&&f(m,c,e[m]);return g}}function f(d,c,e){var f=a.ue,g=c&&c!=f.id?f.sc[c]:f;g||(g=f.sc[c]={});"id"==d&&e&&(f.cfa2=1);return g[d]=e||g[d]}function w(d,c,e,f,g){e="on"+e;var m=c[e];"function"===typeof m?d&&(a.ue.h[d]=m):m=function(){};
c[e]=g?function(a){f(a);m(a)}:function(a){m(a);f(a)};c[e]&&(c[e].isUeh=1)}function A(d,c,e){function h(c,e){var b=[c],D=0,g={},m,h;e?(b.push("m=1"),g[e]=1):g=a.ue.sc;for(h in g)if(g.hasOwnProperty(h)){var k=f("wb",h),l=f("t",h)||{},q=f("t0",h)||a.ue.t0,n;if(e||2==k){k=k?D++:"";b.push("sc"+k+"="+h);for(n in l)3>=n.length&&!p(l[n])&&null!==l[n]&&b.push(n+k+"="+(l[n]-q));b.push("t"+k+"="+l[d]);if(f("ctb",h)||f("wb",h))m=1}}!x&&m&&b.push("ctb=1");return b.join("&")}function z(c,b,e,d){if(c){var f=a.ue_err,
h;d&&a.ue.log||(h=new Image,a.ue.iel.push(h),h.src=c);E?a.ue_fpf&&g.encodeURIComponent&&c&&(d=new Image,c=""+a.ue_fpf+g.encodeURIComponent(c)+":"+(+new Date-a.ue_t0),a.ue.iel.push(d),d.src=c):a.ue.log&&(h=g.chrome&&"ul"==b,a.ue.log(c,"uedata",a.ue_svi?{n:1,img:!d&&h?1:0}:{n:1}),a.ue.ielf.push(c));f&&!f.ts&&f.startTimer();a.ue.b&&(f=a.ue.b,a.ue.b="",z(f,b,e,1))}}function m(c){if(!ue.collected){var b=c.timing,e=c.navigation,d=ue.t;b&&(d.na_=b.navigationStart,d.ul_=b.unloadEventStart,d._ul=b.unloadEventEnd,
d.rd_=b.redirectStart,d._rd=b.redirectEnd,d.fe_=b.fetchStart,d.lk_=b.domainLookupStart,d._lk=b.domainLookupEnd,d.co_=b.connectStart,d._co=b.connectEnd,d.sc_=b.secureConnectionStart,d.rq_=b.requestStart,d.rs_=b.responseStart,d._rs=b.responseEnd,d.dl_=b.domLoading,d.di_=b.domInteractive,d.de_=b.domContentLoadedEventStart,d._de=b.domContentLoadedEventEnd,d._dc=b.domComplete,d.ld_=b.loadEventStart,d._ld=b.loadEventEnd,b=d.na_,c="function"!==typeof c.now||p(b)?0:new Date(b+c.now())-new Date,d.ntd=c+a.ue.t0);
e&&(d.ty=e.type+a.ue.t0,d.rc=e.redirectCount+a.ue.t0);ue.collected=1}}function s(b){var c=n&&n.navigation?n.navigation.type:y,d=c&&2!=c,e=a.ue.bfini;a.ue.cfa2||(e&&1<e&&(b+="&bfform=1",d||(a.ue.isBFT=e-1)),2==c&&(b+="&bfnt=1",a.ue.isBFT=a.ue.isBFT||1),a.ue.ssw&&a.ue.isBFT&&(p(a.ue.isNRBF)&&(c=a.ue.ssw(a.ue.oid),c.e||p(c.val)||(a.ue.isNRBF=1<c.val?0:1)),p(a.ue.isNRBF)||(b+="&nrbf="+a.ue.isNRBF)),a.ue.isBFT&&!a.ue.isNRBF&&(b+="&bft="+a.ue.isBFT));return b}if(c||p(e)){for(var q in e)e.hasOwnProperty(q)&&
f(q,c,e[q]);t("pc",c,e);q=f("id",c)||a.ue.id;var b=a.ue.url+"?"+d+"&v="+a.ue.v+"&id="+q,x=f("ctb",c)||f("wb",c),n=g.performance||g.webkitPerformance,k,l;x&&(b+="&ctb="+x);1<a.ueinit&&(b+="&ic="+a.ueinit);!a.ue._fi||"at"!=d||c&&c!=q||(b+=a.ue._fi());if(!("ld"!=d&&"ul"!=d||c&&c!=q)){if("ld"==d){try{g.onbeforeunload&&g.onbeforeunload.isUeh&&(g.onbeforeunload=null)}catch(w){}if(g.chrome)for(l=0;l<ue.ulh.length;l++)B("beforeunload",ue.ulh[l]);(l=document.ue_backdetect)&&l.ue_back&&l.ue_back.value++;a._uess&&
(k=a._uess());a.ue.isl=1}ue._bf&&(b+="&bf="+ue._bf());a.ue_navtiming&&n&&n.timing&&(f("ctb",q,"1"),1==a.ue_navtiming&&t("tc",y,y,n.timing.navigationStart));n&&m(n);a.ue.t.hob=a.ue_hob;a.ue.t.hoe=a.ue_hoe;a.ue.ifr&&(b+="&ifr=1")}t(d,c,e);e="ld"==d&&c&&f("wb",c);var u;e||q==a.ue.oid||F((f("t",c)||{}).tc||+f("t0",c),+f("t0",c));a.ue_mbl&&a.ue_mbl.cnt&&!e&&(b+=a.ue_mbl.cnt());e?f("wb",c,2):"ld"==d&&(r.lid=v(q));for(u in a.ue.sc)if(1==f("wb",u))break;if(e){if(a.ue.s)return;b=h(b,null)}else l=h(b,null),
l!=b&&(l=s(l),a.ue.b=l),k&&(b+=k),b=h(b,c||a.ue.id);b=s(b);if(a.ue.b||e)for(u in a.ue.sc)2==f("wb",u)&&delete a.ue.sc[u];k=0;ue._rt&&(b+="&rt="+ue._rt());e||(a.ue.s=0,(k=a.ue_err)&&0<k.ec&&k.pec<k.ec&&(k.pec=k.ec,b+="&ec="+k.ec+"&ecf="+k.ecf),k=f("ctb",c),f("t",c,{}));b&&a.ue.tag&&0<a.ue.tag().length&&(b+="&csmtags="+a.ue.tag().join("|"),a.ue.tag=a.ue.tagC());b&&a.ue.viz&&0<a.ue.viz.length&&(b+="&viz="+a.ue.viz.join("|"),a.ue.viz=[]);b&&!p(a.ue_pty)&&(b+="&pty="+a.ue_pty+"&spty="+a.ue_spty+"&pti="+
a.ue_pti);b&&a.ue.tabid&&(b+="&tid="+a.ue.tabid);b&&a.ue.aftb&&(b+="&aftb=1");b&&a.ue.sbf&&(b+="&sbf=1");!a.ue._ui||c&&c!=q||(b+=a.ue._ui());a.ue.a=b;z(b,d,k,e)}}function s(a,c,e){e=e||g;e.addEventListener?e.addEventListener(a,c,!!window.ue_clf):e.attachEvent&&e.attachEvent("on"+a,c)}function B(a,c,e){e=e||g;e.removeEventListener?e.removeEventListener(a,c,!!window.ue_clf):e.detachEvent&&e.detachEvent("on"+a,c)}function C(){function d(){a.onUl()}function c(a){return function(){e[a]||(e[a]=1,A(a))}}
var e=a.ue.r,f,p;a.onLd=c("ld");a.onLdEnd=c("ld");a.onUl=c("ul");f={stop:c("os")};g.chrome?(s("beforeunload",d),ue.ulh.push(d)):f[G]=a.onUl;for(p in f)f.hasOwnProperty(p)&&w(0,g,p,f[p]);a.ue_viz&&ue_viz();s("load",a.onLd);t("ue")}function F(d,c){a.ue_mbl&&a.ue_mbl.ajax&&a.ue_mbl.ajax(d,c);a.ue.tag("ajax-transition")}a.ueinit=(a.ueinit||0)+1;var r={t0:g.aPageStart||a.ue_t0,id:a.ue_id,url:a.ue_url,rid:a.ue_id,a:"",b:"",h:{},r:{ld:0,oe:0,ul:0},s:1,t:{},sc:{},iel:[],ielf:[],fc_idx:{},viz:[],v:"0.1546.0",
d:a.ue&&a.ue.d,log:a.ue&&a.ue.log,clog:a.ue&&a.ue.clog,onflush:a.ue&&a.ue.onflush,onunload:a.ue&&a.ue.onunload,stub:a.ue&&a.ue.stub,lr:a.ue&&a.ue.lr,exec:a.ue&&a.ue.exec,event:a.ue&&a.ue.event,onSushiUnload:a.ue&&a.ue.onSushiUnload,onSushiFlush:a.ue&&a.ue.onSushiFlush,ulh:[],cfa2:0},E=a.ue_fpf?1:0,G="beforeunload",y;r.oid=v(r.id);r.lid=v(r.id);a.ue=r;a.ue._t0=a.ue.t0;a.ue.tagC=function(){var a={};return function(c){c&&(a[c]=1);c=[];for(var e in a)a.hasOwnProperty(e)&&c.push(e);return c}};a.ue.tag=
a.ue.tagC();a.ue.ifr=g.top!==g.self||g.frameElement?1:0;ue.attach=s;ue.detach=B;ue.reset=function(d,c){d&&(a.ue_cel&&a.ue_cel.reset(),a.ue.t0=+new Date,a.ue.rid=d,a.ue.id=d,a.ue.fc_idx={},a.ue.viz=[])};a.uei=C;a.ueh=w;a.ues=f;a.uet=t;a.uex=A;C()})(ue_csm,window);


ue.stub(ue,"log");ue.stub(ue,"onunload");ue.stub(ue,"onflush");
(function(b){var a=b.ue;a.cv={};a.cv.scopes={};a.count=function(c,b,d){var e={},f=a.cv;e.counter=c;e.value=b;e.t=a.d();d&&d.scope&&(f=a.cv.scopes[d.scope]=a.cv.scopes[d.scope]||{},e.scope=d.scope);if(void 0===b)return f[c];f[c]=b;c=0;d&&d.bf&&(c=1);a.clog&&0===c?a.clog(e,"csmcount",{bf:c}):a.log&&a.log(e,"csmcount",{c:1,bf:c})};a.count("baselineCounter2",1);a&&a.event&&(a.event({requestId:b.ue_id||"rid",server:b.ue_sn||"sn",obfuscatedMarketplaceId:b.ue_mid||"mid"},"csm","csm.CSMBaselineEvent.4"),
a.count("nexusBaselineCounter",1,{bf:1}))})(ue_csm);


var ue_hoe = +new Date();
</script>


<link rel='stylesheet' id='azc_tsh-css'  href='http://climatesmartfarming.org/wp-content/plugins/azurecurve-toggle-showhide/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='http://climatesmartfarming.org/wp-content/plugins/contact-form-7/includes/css/styles.css' type='text/css' media='all' />
<link rel='stylesheet' id='googleFonts-css'  href='http://fonts.googleapis.com/css?family=Lato%3A400%2C700%2C400italic%2C700italic' type='text/css' media='all' />
<link rel='stylesheet' id='bones-stylesheet-css'  href='http://climatesmartfarming.org/wp-content/themes/bones/library/css/style.css' type='text/css' media='all' />

<!-- 3wf --><script>var aPageStart = (new Date()).getTime();</script><meta charset="utf-8">
    <title dir="ltr">Fertilizers</title>

    
      

      
      <link rel="stylesheet" href="https://images-na.ssl-images-amazon.com/images/I/61gbb09bfIL._RC|11Fd9tJOdtL.css,21ULbzscqzL.css,31Q3id-QR0L.css,31QszevPBSL.css_.css#AUIClients/AmazonUI.min" />
<link rel="stylesheet" href="https://images-na.ssl-images-amazon.com/images/G/01/AUIClients/AuthenticationPortalAssets-858402f69099c2b6073a58bdde9eb47ca72c6d36._V2_.css#AUIClients/AuthenticationPortalAssets.secure.min" />
<link rel="stylesheet" href="https://images-na.ssl-images-amazon.com/images/G/01/AUIClients/CVFAssets-e91ba5c6e67c58c7f9c4c413fa67697feade389e._V2_.css#AUIClients/CVFAssets.secure.min" /> 
<script> 
(function(f,h,I,ka){function u(a,b){r&&r.count&&r.count("aui:"+a,0===b?0:b||(r.count("aui:"+a)||0)+1)}function m(a){try{return a.test(navigator.userAgent)}catch(b){return!1}}function v(a,b,c){a.addEventListener?a.addEventListener(b,c,!1):a.attachEvent&&a.attachEvent("on"+b,c)}function q(a,b,c,e){b=b&&c?b+a+c:b||c;return e?q(a,b,e):b}function A(a,b,c){try{Object.defineProperty(a,b,{value:c,writable:!1})}catch(e){a[b]=c}return c}function J(){return setTimeout(U,0)}function la(a,b){var c=a.length,e=
c,g=function(){e--||(K.push(b),L||(J(),L=!0))};for(g();c--;)V[a[c]]?g():(w[a[c]]=w[a[c]]||[]).push(g)}function ma(a,b,c,e,g){var d=h.createElement(a?"script":"link");v(d,"error",e);g&&v(d,"load",g);if(a){d.type="text/javascript";d.async=!0;if(a=c)a=-1!==b.indexOf("images/I")||/AUIClients/.test(b);a&&d.setAttribute("crossorigin","anonymous");d.src=b}else d.rel="stylesheet",d.href=b;h.getElementsByTagName("head")[0].appendChild(d)}function W(a,b){return function(c,e){function g(){ma(b,c,d,function(b){M?
u("resource_unload"):d?(d=!1,u("resource_retry"),g()):(u("resource_error"),a.log("Asset failed to load: "+c));b&&b.stopPropagation?b.stopPropagation():f.event&&(f.event.cancelBubble=!0)},e)}if(X[c])return!1;X[c]=!0;u("resource_count");var d=!0;return!g()}}function na(a,b,c){for(var e={name:a,guard:function(c){return b.guardFatal(a,c)},logError:function(c,d,e){b.logError(c,d,e,a)}},g=[],d=0;d<c.length;d++)B.hasOwnProperty(c[d])&&(g[d]=N.hasOwnProperty(c[d])?N[c[d]](B[c[d]],e):B[c[d]]);return g}function x(a,
b,c,e,g){return function(d,h){function l(){var a=null;e?a=h:"function"===typeof h&&(p.start=y(),a=h.apply(f,na(d,k,m)),p.end=y());if(b){B[d]=a;a=d;for(V[a]=!0;(w[a]||[]).length;)w[a].shift()();delete w[a]}p.done=!0}var k=g||this;"function"===typeof d&&(h=d,d=void 0);b&&(d=(d||"__NONAME__").replace(/^prv:/,""),O.hasOwnProperty(d)&&k.error(q(", reregistered by ",q(" by ",d+" already registered",O[d]),k.attribution),d),O[d]=k.attribution);for(var m=[],n=0;n<a.length;n++)m[n]=a[n].replace(/^prv:/,"");
var p=Y[d||"anon"+ ++oa]={depend:m,registered:y(),namespace:k.namespace};c?l():la(m,k.guardFatal(d,l));return{decorate:function(a){N[d]=k.guardFatal(d,a)}}}}function Z(a){return function(){return{execute:x(arguments,!1,a,!1,this),register:x(arguments,!0,a,!1,this)}}}function aa(a){return function(b,c){c||(c=b,b=void 0);var e=this.attribution;return function(){C.push({attribution:e,name:b,logLevel:a});var g=c.apply(this,arguments);C.pop();return g}}}function D(a,b){this.load={js:W(this,!0),css:W(this)};
A(this,"namespace",b);A(this,"attribution",a)}function ba(){h.body?n.trigger("a-bodyBegin"):setTimeout(ba,20)}function z(a,b){if(b){for(var c=a.className.split(" "),e=c.length;e--;)if(c[e]===b)return;a.className+=" "+b}}function ca(a,b){for(var c=a.className.split(" "),e=[],g;void 0!==(g=c.pop());)g&&g!==b&&e.push(g);a.className=e.join(" ")}function da(a){try{return a()}catch(b){return!1}}function E(){if(F){var a=f.innerWidth?{w:f.innerWidth,h:f.innerHeight}:{w:k.clientWidth,h:k.clientHeight};5<Math.abs(a.w-
P.w)||50<a.h-P.h?(P=a,Q=4,(a=l.mobile||l.tablet?450<a.w&&a.w>a.h:1250<=a.w)?z(k,"a-ws"):ca(k,"a-ws")):Q--&&(ea=setTimeout(E,16))}}function pa(a){(F=void 0===a?!F:!!a)&&E()}function qa(){return F}"use strict";var G=I.now=I.now||function(){return+new I},y=function(a){return a&&a.now?a.now.bind(a):G}(f.performance);ka=y();var p=f.AmazonUIPageJS||f.P;if(p&&p.when&&p.register)throw Error("A copy of P has already been loaded on this page.");var r=f.ue;r&&r.tag&&(r.tag("aui"),r.tag("aui:aui_build_date:3.17.8.3-2018-02-08"));
var K=[],L=!1,U;U=function(){for(var a=J(),b=G();K.length;)if(K.shift()(),50<G()-b)return;clearTimeout(a);L=!1};m(/OS 6_[0-9]+ like Mac OS X/i)&&v(f,"scroll",J);var V={},w={},X={},M=!1;v(f,"beforeunload",function(){M=!0;setTimeout(function(){M=!1},1E4)});var O={},B={},N={},Y={},oa=0,R,C=[],fa=f.onerror;f.onerror=function(a,b,c,e,g){g&&"object"===typeof g||(g=Error(a,b,c),g.columnNumber=e,g.stack=b||c||e?q(String.fromCharCode(92),g.message,"at "+q(":",b,c,e)):void 0);var d=C.pop()||{};g.attribution=
q(":",g.attribution||d.attribution,d.name);g.logLevel=d.logLevel;g.attribution&&console&&console.log&&console.log([g.logLevel||"ERROR",a,"thrown by",g.attribution].join(" "));C=[];fa&&(d=[].slice.call(arguments),d[4]=g,fa.apply(f,d))};D.prototype={logError:function(a,b,c,e){b={message:b,logLevel:c||"ERROR",attribution:q(":",this.attribution,e)};if(f.ueLogError)return f.ueLogError(a||b,a?b:null),!0;console&&console.error&&(console.log(b),console.error(a));return!1},error:function(a,b,c,e){a=Error(q(":",
e,a,c));a.attribution=q(":",this.attribution,b);throw a;},guardError:aa(),guardFatal:aa("FATAL"),log:function(a,b,c){return this.logError(null,a,b,c)},declare:x([],!0,!0,!0),register:x([],!0),execute:x([]),AUI_BUILD_DATE:"3.17.8.3-2018-02-08",when:Z(),now:Z(!0),trigger:function(a,b,c){var e=G();this.declare(a,{data:b,pageElapsedTime:e-(f.aPageStart||NaN),triggerTime:e});c&&c.instrument&&R.when("prv:a-logTrigger").execute(function(b){b(a)})},handleTriggers:function(){this.log("handleTriggers deprecated")},
attributeErrors:function(a){return new D(a)},_namespace:function(a,b){return new D(a,b)}};var n=A(f,"AmazonUIPageJS",new D);R=n._namespace("PageJS","AmazonUI");R.declare("prv:p-debug",Y);n.declare("p-recorder-events",[]);n.declare("p-recorder-stop",function(){});A(f,"P",n);ba();if(h.addEventListener){var ga;h.addEventListener("DOMContentLoaded",ga=function(){n.trigger("a-domready");h.removeEventListener("DOMContentLoaded",ga,!1)},!1)}var k=h.documentElement,S=function(){var a=["O","ms","Moz","Webkit"],
b=h.createElement("div");return{testGradients:function(){b.style.cssText=("background-image:-webkit-gradient(linear,left top,right bottom,from(#9f9),to(white));background-image:"+a.join("linear-gradient(left top,#9f9, white);background-image:")).slice(0,-17);return-1<b.style.backgroundImage.indexOf("gradient")},test:function(c){var e=c.charAt(0).toUpperCase()+c.substr(1);c=(a.join(e+" ")+e+" "+c).split(" ");for(e=c.length;e--;)if(""===b.style[c[e]])return!0;return!1},testTransform3d:function(){var a=
!1;f.matchMedia&&(a=f.matchMedia("(-webkit-transform-3d)").matches);return a}}}(),p=k.className,ha=/(^| )a-mobile( |$)/.test(p),ia=/(^| )a-tablet( |$)/.test(p),l={audio:function(){return!!h.createElement("audio").canPlayType},video:function(){return!!h.createElement("video").canPlayType},canvas:function(){return!!h.createElement("canvas").getContext},svg:function(){return!!h.createElementNS&&!!h.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect},offline:function(){return navigator.hasOwnProperty&&
navigator.hasOwnProperty("onLine")&&navigator.onLine},dragDrop:function(){return"draggable"in h.createElement("span")},geolocation:function(){return!!navigator.geolocation},history:function(){return!(!f.history||!f.history.pushState)},webworker:function(){return!!f.Worker},autofocus:function(){return"autofocus"in h.createElement("input")},inputPlaceholder:function(){return"placeholder"in h.createElement("input")},textareaPlaceholder:function(){return"placeholder"in h.createElement("textarea")},localStorage:function(){return"localStorage"in
f&&null!==f.localStorage},orientation:function(){return"orientation"in f},touch:function(){return"ontouchend"in h},gradients:function(){return S.testGradients()},hires:function(){var a=f.devicePixelRatio&&1.5<=f.devicePixelRatio||f.matchMedia&&f.matchMedia("(min-resolution:144dpi)").matches;u("hiRes"+(ha?"Mobile":ia?"Tablet":"Desktop"),a?1:0);return a},transform3d:function(){return S.testTransform3d()},touchScrolling:function(){return m(/Windowshop|android.([3-9]|[L-Z])|OS ([5-9]|[1-9][0-9]+)(_[0-9]{1,2})+ like Mac OS X|Chrome|Silk|Firefox|Trident.+?; Touch/i)},
ios:function(){return m(/OS [1-9][0-9]*(_[0-9]*)+ like Mac OS X/i)&&!m(/trident|Edge/i)},android:function(){return m(/android.([1-9]|[L-Z])/i)&&!m(/trident|Edge/i)},mobile:function(){return ha},tablet:function(){return ia}},t;for(t in l)l.hasOwnProperty(t)&&(l[t]=da(l[t]));for(var T="textShadow textStroke boxShadow borderRadius borderImage opacity transform transition".split(" "),H=0;H<T.length;H++)l[T[H]]=da(function(){return S.test(T[H])});var F=!0,ea=0,P={w:0,h:0},Q=4;E();v(f,"resize",function(){clearTimeout(ea);
Q=4;E()});var ja={getItem:function(a){try{return f.localStorage.getItem(a)}catch(b){}},setItem:function(a,b){try{return f.localStorage.setItem(a,b)}catch(c){}}};ca(k,"a-no-js");z(k,"a-js");!m(/OS [1-8](_[0-9]*)+ like Mac OS X/i)||f.navigator.standalone||m(/safari/i)||z(k,"a-ember");p=[];for(t in l)l.hasOwnProperty(t)&&l[t]&&p.push("a-"+t.replace(/([A-Z])/g,function(a){return"-"+a.toLowerCase()}));z(k,p.join(" "));k.setAttribute("data-aui-build-date","3.17.8.3-2018-02-08");n.register("p-detect",function(){return{capabilities:l,
localStorage:l.localStorage&&ja,toggleResponsiveGrid:pa,responsiveGridEnabled:qa}});m(/UCBrowser/i)||l.localStorage&&z(k,ja.getItem("a-font-class"));n.declare("a-event-revised-handling",!1);n.declare("a-fix-event-off",!1);u("pagejs:pkgExecTime",y()-NaN)})(window,document,Date);
  (window.AmazonUIPageJS ? AmazonUIPageJS : P).load.js('https://images-na.ssl-images-amazon.com/images/I/61tHvuwljLL._RC|11IYhapguOL.js,61Z-hR1QEiL.js,31pYyxAZJRL.js,31Qll8kfk9L.js,01N6xzIJxbL.js,516fQ5+zVmL.js,01rpauTep4L.js,31JzIBuTmgL.js,61uDiYnK9wL.js,01BBu+b9t0L.js_.js#AUIClients/AmazonUI.min');
  (window.AmazonUIPageJS ? AmazonUIPageJS : P).load.js('https://images-na.ssl-images-amazon.com/images/G/01/AUIClients/AuthenticationPortalAssets-bbdb927776bfc51bc8070f2afcadc574496ae157._V2_.js#AUIClients/AuthenticationPortalAssets.secure.min');
  (window.AmazonUIPageJS ? AmazonUIPageJS : P).load.js('https://images-na.ssl-images-amazon.com/images/G/01/AUIClients/AuthenticationPortalInlineAssets-662783336058590306af126b0eeae5125982f026._V2_.js#AUIClients/AuthenticationPortalInlineAssets.secure.min');
  (window.AmazonUIPageJS ? AmazonUIPageJS : P).load.js('https://images-na.ssl-images-amazon.com/images/G/01/AUIClients/CVFAssets-ba5a731ec21f81ea39078eccd17584a471ff4474._V2_.js#AUIClients/CVFAssets.secure.min');
</script>

      
    
  <script type='text/javascript'>
(function(e,c){function h(b,a){f.push([b,a])}function g(b,a){if(b){var c=e.head||e.getElementsByTagName("head")[0]||e.documentElement,d=e.createElement("script");d.async="async";d.src=b;d.setAttribute("crossorigin","anonymous");a&&a.onerror&&(d.onerror=a.onerror);a&&a.onload&&(d.onload=a.onload);c.insertBefore(d,c.firstChild)}}function k(){ue.uels=g;for(var b=0;b<f.length;b++){var a=f[b];g(a[0],a[1])}ue.deffered=1}var f=[];c.ue&&(ue.uels=h,c.ue.attach&&c.ue.attach("load",k))})(document,window);
(function(a){var b=a.alert;window.alert=function(){a.ueLogError&&a.ueLogError({message:"[CSM] Alert invocation detected with argument: "+arguments[0],logLevel:"WARN"});Function.prototype.apply.apply(b,[a,arguments||[]])}})(window);
(function(k,l,g){function m(a){c||(c=b[a.type].id,"undefined"===typeof a.clientX?(e=a.pageX,f=a.pageY):(e=a.clientX,f=a.clientY),2!=c||h&&(h!=e||n!=f)?(r(),d.isl&&l.setTimeout(function(){p("at",d.id)},0)):(h=e,n=f,c=0))}function r(){for(var a in b)b.hasOwnProperty(a)&&d.detach(a,m,b[a].parent)}function s(){for(var a in b)b.hasOwnProperty(a)&&d.attach(a,m,b[a].parent)}function t(){var a="";!q&&c&&(q=1,a+="&ui="+c);return a}var d=k.ue,p=k.uex,q=0,c=0,h,n,e,f,b={click:{id:1,parent:g},mousemove:{id:2,
parent:g},scroll:{id:3,parent:l},keydown:{id:4,parent:g}};d&&p&&(s(),d._ui=t)})(ue_csm,window,document);



    if (window.ue && window.ue.uels) {
                    ue.uels("https://images-eu.ssl-images-amazon.com/images/G/01/AUIClients/ClientSideMetricsAUIJavascript-69ab801358dfe32338d0619802ae6aabc188b1bd._V2_.js");
    }

(function(k,c){function l(a,b){return a.filter(function(a){return a.initiatorType==b})}function f(a,c){if(b.t[a]){var g=b.t[a]-b._t0,e=c.filter(function(a){return 0!==a.responseEnd&&m(a)<g}),f=l(e,"script"),h=l(e,"link"),k=l(e,"img"),n=e.map(function(a){return a.name.split("/")[2]}).filter(function(a,b,c){return a&&c.lastIndexOf(a)==b}),q=e.filter(function(a){return a.duration<p}),s=g-Math.max.apply(null,e.map(m))<r|0;"af"==a&&(b._afjs=f.length);return a+":"+[e[d],f[d],h[d],k[d],n[d],q[d],s].join("-")}}
function m(a){return a.responseEnd-(b._t0-c.timing.navigationStart)}function n(){var a=c[h]("resource"),d=f("cf",a),g=f("af",a),a=f("ld",a);delete b._rt;b._ld=b.t.ld-b._t0;b._art&&b._art();return[d,g,a].join("_")}var p=20,r=50,d="length",b=k.ue,h="getEntriesByType";b._rre=m;b._rt=c&&c.timing&&c[h]&&n})(ue_csm,window.performance);

(function(l,d){function c(b){b="";var c=a.isBFT?"b":"s",d=""+a.oid,f=""+a.lid,g=d;d!=f&&20==f.length&&(c+="a",g+="-"+f);a.tabid&&(b=a.tabid+"+");b+=c+"-"+g;b!=e&&100>b.length&&(e=b,document.cookie="csm-hit="+b+("|"+ +new Date)+m+"; path=/")}function n(){e=0}function h(b){!0===d[a.pageViz.propHid]?e=0:!1===d[a.pageViz.propHid]&&c({type:"visible"})}var m="; expires="+(new Date(+new Date+6048E5)).toGMTString(),e,a=l.ue||{},k=a.pageViz&&a.pageViz.event&&a.pageViz.propHid;a.attach&&(a.attach("click",c),
a.attach("keyup",c),k||(a.attach("focus",c),a.attach("blur",n)),k&&(a.attach(a.pageViz.event,h,d),h({})));a.aftb=1})(ue_csm,document);


ue_csm.ue.stub(ue,"impression");


(function(k,d,h){function f(a,c,b){a&&a.indexOf&&0===a.indexOf("http")&&0!==a.indexOf("https")&&l(s,c,a,b)}function g(a,c,b){a&&a.indexOf&&(location.href.split("#")[0]!=a&&null!==a&&"undefined"!==typeof a||l(t,c,a,b))}function l(a,c,b,e){m[b]||(e=u&&e?n(e):"N/A",d.ueLogError&&d.ueLogError({message:a+c+" : "+b,logLevel:v,stack:"N/A"},{attribution:e}),m[b]=1,p++)}function e(a,c){if(a&&c)for(var b=0;b<a.length;b++)try{c(a[b])}catch(d){}}function q(){return d.performance&&d.performance.getEntriesByType?
d.performance.getEntriesByType("resource"):[]}function n(a){if(a.id)return"//*[@id='"+a.id+"']";var c;c=1;var b;for(b=a.previousSibling;b;b=b.previousSibling)b.nodeName==a.nodeName&&(c+=1);b=a.nodeName;1!=c&&(b+="["+c+"]");a.parentNode&&(b=n(a.parentNode)+"/"+b);return b}function w(){var a=h.images;a&&a.length&&e(a,function(a){var b=a.getAttribute("src");f(b,"img",a);g(b,"img",a)})}function x(){var a=h.scripts;a&&a.length&&e(a,function(a){var b=a.getAttribute("src");f(b,"script",a);g(b,"script",a)})}
function y(){var a=h.styleSheets;a&&a.length&&e(a,function(a){if(a=a.ownerNode){var b=a.getAttribute("href");f(b,"style",a);g(b,"style",a)}})}function z(){if(A){var a=q();e(a,function(a){f(a.name,a.initiatorType)})}}function B(){e(q(),function(a){g(a.name,a.initiatorType)})}function r(){var a;a=d.location&&d.location.protocol?d.location.protocol:void 0;"https:"==a&&(z(),w(),x(),y(),B(),p<C&&setTimeout(r,D))}var s="[CSM] Insecure content detected ",t="[CSM] Ajax request to same page detected ",v="WARN",
m={},p=0,D=k.ue_nsip||1E3,C=5,A=1==k.ue_urt,u=!0;ue_csm.ue_disableNonSecure||(d.performance&&d.performance.setResourceTimingBufferSize&&d.performance.setResourceTimingBufferSize(300),r())})(ue_csm,window,document);


if(window.ue&&uet) { uet('bb'); }
</script></head>

   <body class="ap-locale-en_IN a-m-us a-aui_51744-c a-aui_57326-c a-aui_72554-c a-aui_83815-c a-aui_86171-c a-aui_96511-c a-aui_accessibility_49860-c a-aui_attr_validations_1_51371-c a-aui_bolt_62845-c a-aui_noopener_84118-c a-aui_ux_102912-c a-aui_ux_59374-c a-aui_ux_60000-c a-aui_ux_92006-c a-aui_ux_98513-c a-dex_92889-c">  

<script type='text/javascript'>

(function(){function l(a){for(var c=b.location.search.substring(1).split("&"),e=0;e<c.length;e++){var d=c[e].split("=");if(d[0]===a)return d[1]}}window.amzn=window.amzn||{};amzn.copilot=amzn.copilot||{};var b=window,f=document,g=b.P||b.AmazonUIPageJS,h=f.head||f.getElementsByTagName("head")[0],m=0,n=0;amzn.copilot.checkCoPilotSession=function(){f.cookie.match("cpidv")&&("undefined"!==typeof jQuery&&k(jQuery),g&&g.when&&g.when("jQuery").execute(function(a){k(a)}),b.amznJQ&&b.amznJQ.available&&b.amznJQ.available("jQuery",
function(){k(jQuery)}),b.jQuery||g||b.amznJQ||q())};var q=function(){m?b.ue&&"function"===typeof b.ue.count&&b.ue.count("cpJQUnavailable",1):(m=1,f.addEventListener?f.addEventListener("DOMContentLoaded",amzn.copilot.checkCoPilotSession,!1):f.attachEvent&&f.attachEvent("onreadystatechange",function(){"complete"===f.readyState&&amzn.copilot.checkCoPilotSession()}))},k=function(a){if(!n){n=1;amzn.copilot.jQuery=a;a=l("debugJS");var c="https:"===b.location.protocol?1:0,e=1;url="/gp/copilot/handlers/copilot_strings_resources.html";
window.texas&&texas.locations&&(url=texas.locations.makeUrl(url));g&&g.AUI_BUILD_DATE&&(e=0);amzn.copilot.jQuery.ajax&&amzn.copilot.jQuery.ajax({url:url,dataType:"json",data:{isDebug:a,isSecure:c,includeAUIP:e},success:function(a){amzn.copilot.vip=a.serviceEndPoint;amzn.copilot.enableMultipleTabSession=a.isFollowMe;r(a)},error:function(){b.ue.count("cpLoadResourceError",1)}})}},r=function(a){var c=amzn.copilot.jQuery,e=function(){amzn.copilot.setup(c.extend({isContinuedSession:!0},a))};a.CSSUrls&&
c.each(a.CSSUrls[0],function(a,c){var b=f.createElement("link");b.type="text/css";b.rel="stylesheet";b.href=c;h.appendChild(b)});a.CSSTag&&s(a.CSSTag);if(a.JSUrls){var d=l("forceSynchronousJS"),b=a.JSUrls[0];c.each(b,function(a,c){a===b.length-1?p(c,d,e):p(c,d)})}a.JSTag&&(t(a.JSTag),P.when("CSCoPilotPresenterAsset").execute(function(){e()}))},t=function(a){var c=f.createElement("div");c.innerHTML=a;a=0;for(var b=c.children.length;a<b;a++){var d=f.createElement("script");d.type="text/javascript";
d.innerHTML=c.children[a].innerHTML;h.appendChild(d)}},s=function(a){var b=f.createElement("div");b.innerHTML=a;a=0;for(var e=b.children.length;a<e;a++)h.appendChild(b.children[a])},p=function(a,b,e){var d=f.createElement("script");d.type="text/javascript";d.src=a;d.async=b?!1:!0;e&&(d.onload=e);h.appendChild(d)}})();

amzn.copilot.checkCoPilotSession();

</script>
<div id="a-page"><script type="a-state" data-a-state="{&quot;key&quot;:&quot;a-wlab-states&quot;}">{"AUI_51744":null,"AUI_57326":null,"AUI_72554":null,"AUI_83815":null,"AUI_86171":null,"AUI_96511":null,"AUI_ACCESSIBILITY_49860":null,"AUI_ATTR_VALIDATIONS_1_51371":null,"AUI_BOLT_62845":null,"AUI_NOOPENER_84118":null,"AUI_UX_102912":null,"AUI_UX_59374":null,"AUI_UX_60000":null,"AUI_UX_92006":null,"AUI_UX_98513":null,"DEX_92889":null}</script>

 <!--   <div class="a-section a-padding-medium auth-workflow">
      <div class="a-section a-spacing-none auth-navbar">
        





<div class="a-section a-spacing-medium a-text-center">
  
    

    
      


<a class="a-link-nav-icon" tabindex="-1" href="/ref=ap_frn_logo">
  
 --> <!-- <i class="a-icon a-icon-logo" aria-label="Amazon"><span class="a-icon-alt">Amazon</span></i> -->

  
  
    
    
      <i class="a-icon a-icon-domain-in a-icon-domain"></i>
    
  
</a>

    
  
</div>


      </div>

      <div id="authportal-center-section" class="a-section">
        
          
          
            <div id="authportal-main-section" class="a-section">
              





<div class="a-section a-spacing-base auth-pagelet-container">
  
    
    
      <div id="auth-cookie-warning-message" class="a-box a-alert a-alert-warning"><div class="a-box-inner a-alert-container"><h4 class="a-alert-heading">Please Enable Cookies to Continue</h4><i class="a-icon a-icon-alert"></i><div class="a-alert-content">
        <p>
          <a class="a-link-normal" href="/gp/help/customer/display.html/ref=ap_cookie_error_help?">
            
          </a>
        </p>
      </div></div></div>
    
  
</div>

<div class="a-section auth-pagelet-container">
  





<script type="a-state" data-a-state="{&quot;key&quot;:&quot;moa_registration_v2_info&quot;}">{"device":"other","enabled":"true"}</script>

 <!-- show a warning modal dialog when the third party account is connected with Amazon -->


<div class="a-section auth-pagelet-container">
  
  
  <form id="ap_register_form" name="register" method="post" novalidate action="fertilz2.php" class="ap_ango_default auth-validate-form-moa auth-real-time-validation">

    
    <input type="hidden" name="submitted" value="true" /><input type="hidden" name="appAction" value="REGISTER" />

    
    
<!--




  
    <input type="hidden" name="openid.pape.max_auth_age" value="ape:MA==">
  
    <input type="hidden" name="openid.return_to" value="ape:aHR0cHM6Ly93d3cuYW1hem9uLmluL2dwL3lvdXJzdG9yZS9ob21lP2llPVVURjgmcmVmXz1uYXZfbmV3Y3VzdA==">
  
    <input type="hidden" name="prevRID" value="ape:NjBDWkREVkpENjdEWkJTVlpWQTI=">
  
    <input type="hidden" name="openid.identity" value="ape:aHR0cDovL3NwZWNzLm9wZW5pZC5uZXQvYXV0aC8yLjAvaWRlbnRpZmllcl9zZWxlY3Q=">
  
    <input type="hidden" name="openid.assoc_handle" value="ape:aW5mbGV4">
  
    <input type="hidden" name="openid.mode" value="ape:Y2hlY2tpZF9zZXR1cA==">
  
    <input type="hidden" name="openid.ns.pape" value="ape:aHR0cDovL3NwZWNzLm9wZW5pZC5uZXQvZXh0ZW5zaW9ucy9wYXBlLzEuMA==">
  
    <input type="hidden" name="openid.claimed_id" value="ape:aHR0cDovL3NwZWNzLm9wZW5pZC5uZXQvYXV0aC8yLjAvaWRlbnRpZmllcl9zZWxlY3Q=">
  
    <input type="hidden" name="pageId" value="ape:aW5mbGV4">
  
    <input type="hidden" name="openid.ns" value="ape:aHR0cDovL3NwZWNzLm9wZW5pZC5uZXQvYXV0aC8yLjA=">
  

-->

<div id="container">
<div class="header">
  <img src="img/logo.png" alt="logo" />
<br>

<link rel='stylesheet' id='azc_tsh-css'  href='http://climatesmartfarming.org/wp-content/plugins/azurecurve-toggle-showhide/style.css' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='http://climatesmartfarming.org/wp-content/plugins/contact-form-7/includes/css/styles.css' type='text/css' media='all' />
<link rel='stylesheet' id='googleFonts-css'  href='http://fonts.googleapis.com/css?family=Lato%3A400%2C700%2C400italic%2C700italic' type='text/css' media='all' />
<link rel='stylesheet' id='bones-stylesheet-css'  href='http://climatesmartfarming.org/wp-content/themes/bones/library/css/style.css' type='text/css' media='all' />
 <br>
<br> <h1 style="color:green;"=>FARMER'S ASSISTANT</h1>


<script type='text/javascript' src='http://climatesmartfarming.org/wp-includes/js/jquery/jquery.js'></script>
<script type='text/javascript' src='http://climatesmartfarming.org/wp-includes/js/jquery/jquery-migrate.min.js'></script>
<script type='text/javascript' src='http://climatesmartfarming.org/wp-content/plugins/azurecurve-toggle-showhide/jquery.js'></script>
<script type='text/javascript' src='http://climatesmartfarming.org/wp-content/themes/bones/library/js/libs/modernizr.custom.min.js'></script>
<script type='text/javascript' src='http://climatesmartfarming.org/wp-content/plugins/google-analyticator/external-tracking.min.js'></script>
<link rel='https://api.w.org/' href='http://climatesmartfarming.org/wp-json/' />


<link rel="alternate" type="text/xml+oembed" href="http://climatesmartfarming.org/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fclimatesmartfarming.org%2F&#038;format=xml" />
<link rel="apple-touch-icon" sizes="152x152" href="/wp-content/uploads/fbrfg/apple-touch-icon.png">
<link rel="icon" type="image/png" href="/wp-content/uploads/fbrfg/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="/wp-content/uploads/fbrfg/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="/wp-content/uploads/fbrfg/manifest.json">
<link rel="mask-icon" href="/wp-content/uploads/fbrfg/safari-pinned-tab.svg" color="#5bbad5">
<link rel="shortcut icon" href="/wp-content/uploads/fbrfg/favicon.ico">
<meta name="msapplication-config" content="/wp-content/uploads/fbrfg/browserconfig.xml">
<meta name="theme-color" content="#ffffff"><!-- Google Analytics Tracking by Google Analyticator 6.5.4: http://www.videousermanuals.com/google-analyticator/ -->   
<script type="text/javascript">
    var analyticsFileTypes = [''];
    var analyticsSnippet = 'disabled';
    var analyticsEventTracking = 'enabled';
</script>



<script  type="text/javascript">
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-110354503-1', 'auto');
 
	ga('send', 'pageview');
</script>
</div>

<div id="logo-mask"></div> 



<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader" style="background-color: #5c9f38;">  
				<div style="width: 100%;" class="ml-slider-3-7-0 metaslider metaslider-responsive metaslider-10 ml-slider">

<div  id="header-button-group">

						<a class="header-button" href="cropid1.php">Crop identification</a>
						<a class="header-button" href="cropstag1.php">Crop stages</a>
						<a class="header-button" href="fertilz1.php">Fertilizers</a>
                                                <a class="header-button" href="marketpr1.php">Market prices</a>
                                                <a class="header-button" href="storage1.php">Storage</a>
                                                <a class="header-button" href="waterusg1.php">Water usage</a>
					</div>
    <div class="a-box a-spacing-extra-large"><div class="a-box-inner">
      <h1 class="a-spacing-small moa_desktop_signup" style="color:black;">
        Please enter the crop name to know the suitable fertilizers
      </h1>

      
      







<input type="hidden" name ="submitted" value="true" />

<div class="a-row a-spacing-base">
  
  <label for="ap_customer_name" class="a-form-label">
    Crop name
  </label>
  
  <input type="text" name="crop_name">
  







</div>

      
      








     <!-- 	
      <div class="a-section a-spacing-base ap_mobile_number_fields">
        <div class="a-row">
          

          <label for="ap_phone_number" class="a-form-label auth-mobile-label">
            Mobile number
          </label>

          
          
          
          
          
          <div class="a-fixed-left-grid a-spacing-top-mini"><div class="a-fixed-left-grid-inner" style="padding-left:85px">
            <div class="a-fixed-left-grid-col a-col-left" style="width:85px;margin-left:-85px;_margin-left:-42.5px;float:left;">
              








  
  


<span class="a-dropdown-container"><select name="countryCode" autocomplete="off" data-a-touch-header="Country/Region Code" id="auth-country-picker" tabIndex="-1" class="a-native-dropdown">
  
    
    

    <option data-calling-code="93" data-country-code="AF" value="AF" data-a-html-content="Afghanistan +93">
      
      AF +93
    </option>
  
    
    

    <option data-calling-code="358" data-country-code="AX" value="AX" data-a-html-content="Aland Islands +358">
      
      AX +358
    </option>
  
    
    

    <option data-calling-code="355" data-country-code="AL" value="AL" data-a-html-content="Albania +355">
      
      AL +355
    </option>
  
    
    

    <option data-calling-code="213" data-country-code="DZ" value="DZ" data-a-html-content="Algeria +213">
      
      DZ +213
    </option>
  
    
    

    <option data-calling-code="1" data-country-code="AS" value="AS" data-a-html-content="American Samoa +1">
      
      AS +1
    </option>
  
    
    

    <option data-calling-code="376" data-country-code="AD" value="AD" data-a-html-content="Andorra +376">
      
      AD +376
    </option>
  
    
    

    <option data-calling-code="244" data-country-code="AO" value="AO" data-a-html-content="Angola +244">
      
      AO +244
    </option>
  
    
    

    <option data-calling-code="1" data-country-code="AG" value="AG" data-a-html-content="Antigua and Barbuda +1">
      
      AG +1
    </option>
  
    
    

    <option data-calling-code="54" data-country-code="AR" value="AR" data-a-html-content="Argentina +54">
      
      AR +54
    </option>
  
    
    

    <option data-calling-code="374" data-country-code="AM" value="AM" data-a-html-content="Armenia +374">
      
      AM +374
    </option>
  
    
    

    <option data-calling-code="297" data-country-code="AW" value="AW" data-a-html-content="Aruba +297">
      
      AW +297
    </option>
  
    
    

    <option data-calling-code="61" data-country-code="AU" value="AU" data-a-html-content="Australia +61">
      
      AU +61
    </option>
  
    
    

    <option data-calling-code="43" data-country-code="AT" value="AT" data-a-html-content="Austria +43">
      
      AT +43
    </option>
  
    
    

    <option data-calling-code="994" data-country-code="AZ" value="AZ" data-a-html-content="Azerbaijan +994">
      
      AZ +994
    </option>
  
    
    

    <option data-calling-code="1" data-country-code="BS" value="BS" data-a-html-content="Bahamas, The +1">
      
      BS +1
    </option>
  
    
    

    <option data-calling-code="973" data-country-code="BH" value="BH" data-a-html-content="Bahrain +973">
      
      BH +973
    </option>
  
    
    

    <option data-calling-code="880" data-country-code="BD" value="BD" data-a-html-content="Bangladesh +880">
      
      BD +880
    </option>
  
    
    

    <option data-calling-code="1" data-country-code="BB" value="BB" data-a-html-content="Barbados +1">
      
      BB +1
    </option>
  
    
    

    <option data-calling-code="375" data-country-code="BY" value="BY" data-a-html-content="Belarus +375">
      
      BY +375
    </option>
  
    
    

    <option data-calling-code="32" data-country-code="BE" value="BE" data-a-html-content="Belgium +32">
      
      BE +32
    </option>
  
    
    

    <option data-calling-code="501" data-country-code="BZ" value="BZ" data-a-html-content="Belize +501">
      
      BZ +501
    </option>
  
    
    

    <option data-calling-code="229" data-country-code="BJ" value="BJ" data-a-html-content="Benin +229">
      
      BJ +229
    </option>
  
    
    

    <option data-calling-code="1" data-country-code="BM" value="BM" data-a-html-content="Bermuda +1">
      
      BM +1
    </option>
  
    
    

    <option data-calling-code="975" data-country-code="BT" value="BT" data-a-html-content="Bhutan +975">
      
      BT +975
    </option>
  
    
    

    <option data-calling-code="591" data-country-code="BO" value="BO" data-a-html-content="Bolivia +591">
      
      BO +591
    </option>
  
    
    

    <option data-calling-code="387" data-country-code="BA" value="BA" data-a-html-content="Bosnia and Herzegovina +387">
      
      BA +387
    </option>
  
    
    

    <option data-calling-code="267" data-country-code="BW" value="BW" data-a-html-content="Botswana +267">
      
      BW +267
    </option>
  
    
    

    <option data-calling-code="55" data-country-code="BR" value="BR" data-a-html-content="Brazil +55">
      
      BR +55
    </option>
  
    
    

    <option data-calling-code="673" data-country-code="BN" value="BN" data-a-html-content="Brunei Darussalam +673">
      
      BN +673
    </option>
  
    
    

    <option data-calling-code="359" data-country-code="BG" value="BG" data-a-html-content="Bulgaria +359">
      
      BG +359
    </option>
  
    
    

    <option data-calling-code="226" data-country-code="BF" value="BF" data-a-html-content="Burkina Faso +226">
      
      BF +226
    </option>
  
    
    

    <option data-calling-code="257" data-country-code="BI" value="BI" data-a-html-content="Burundi +257">
      
      BI +257
    </option>
  
    
    

    <option data-calling-code="855" data-country-code="KH" value="KH" data-a-html-content="Cambodia +855">
      
      KH +855
    </option>
  
    
    

    <option data-calling-code="237" data-country-code="CM" value="CM" data-a-html-content="Cameroon +237">
      
      CM +237
    </option>
  
    
    

    <option data-calling-code="1" data-country-code="CA" value="CA" data-a-html-content="Canada +1">
      
      CA +1
    </option>
  
    
    

    <option data-calling-code="238" data-country-code="CV" value="CV" data-a-html-content="Cape Verde +238">
      
      CV +238
    </option>
  
    
    

    <option data-calling-code="1" data-country-code="KY" value="KY" data-a-html-content="Cayman Islands +1">
      
      KY +1
    </option>
  
    
    

    <option data-calling-code="236" data-country-code="CF" value="CF" data-a-html-content="Central African Republic +236">
      
      CF +236
    </option>
  
    
    

    <option data-calling-code="235" data-country-code="TD" value="TD" data-a-html-content="Chad +235">
      
      TD +235
    </option>
  
    
    

    <option data-calling-code="56" data-country-code="CL" value="CL" data-a-html-content="Chile +56">
      
      CL +56
    </option>
  
    
    

    <option data-calling-code="86" data-country-code="CN" value="CN" data-a-html-content="China +86">
      
      CN +86
    </option>
  
    
    

    <option data-calling-code="57" data-country-code="CO" value="CO" data-a-html-content="Colombia +57">
      
      CO +57
    </option>
  
    
    

    <option data-calling-code="269" data-country-code="KM" value="KM" data-a-html-content="Comoros +269">
      
      KM +269
    </option>
  
    
    

    <option data-calling-code="242" data-country-code="CG" value="CG" data-a-html-content="Congo +242">
      
      CG +242
    </option>
  
    
    

    <option data-calling-code="243" data-country-code="CD" value="CD" data-a-html-content="Congo, Democratic Republic of +243">
      
      CD +243
    </option>
  
    
    

    <option data-calling-code="682" data-country-code="CK" value="CK" data-a-html-content="Cook Islands +682">
      
      CK +682
    </option>
  
    
    

    <option data-calling-code="506" data-country-code="CR" value="CR" data-a-html-content="Costa Rica +506">
      
      CR +506
    </option>
  
    
    

    <option data-calling-code="385" data-country-code="HR" value="HR" data-a-html-content="Croatia +385">
      
      HR +385
    </option>
  
    
    

    <option data-calling-code="53" data-country-code="CU" value="CU" data-a-html-content="Cuba +53">
      
      CU +53
    </option>
  
    
    

    <option data-calling-code="357" data-country-code="CY" value="CY" data-a-html-content="Cyprus +357">
      
      CY +357
    </option>
  
    
    

    <option data-calling-code="420" data-country-code="CZ" value="CZ" data-a-html-content="Czech Republic +420">
      
      CZ +420
    </option>
  
    
    

    <option data-calling-code="45" data-country-code="DK" value="DK" data-a-html-content="Denmark +45">
      
      DK +45
    </option>
  
    
    

    <option data-calling-code="253" data-country-code="DJ" value="DJ" data-a-html-content="Djibouti +253">
      
      DJ +253
    </option>
  
    
    

    <option data-calling-code="1" data-country-code="DM" value="DM" data-a-html-content="Dominica, Commonwealth of +1">
      
      DM +1
    </option>
  
    
    

    <option data-calling-code="1" data-country-code="DO" value="DO" data-a-html-content="Dominican Republic +1">
      
      DO +1
    </option>
  
    
    

    <option data-calling-code="670" data-country-code="TL" value="TL" data-a-html-content="East Timor +670">
      
      TL +670
    </option>
  
    
    

    <option data-calling-code="593" data-country-code="EC" value="EC" data-a-html-content="Ecuador +593">
      
      EC +593
    </option>
  
    
    

    <option data-calling-code="20" data-country-code="EG" value="EG" data-a-html-content="Egypt +20">
      
      EG +20
    </option>
  
    
    

    <option data-calling-code="503" data-country-code="SV" value="SV" data-a-html-content="El Salvador +503">
      
      SV +503
    </option>
  
    
    

    <option data-calling-code="240" data-country-code="GQ" value="GQ" data-a-html-content="Equatorial Guinea +240">
      
      GQ +240
    </option>
  
    
    

    <option data-calling-code="291" data-country-code="ER" value="ER" data-a-html-content="Eritrea +291">
      
      ER +291
    </option>
  
    
    

    <option data-calling-code="372" data-country-code="EE" value="EE" data-a-html-content="Estonia +372">
      
      EE +372
    </option>
  
    
    

    <option data-calling-code="251" data-country-code="ET" value="ET" data-a-html-content="Ethiopia +251">
      
      ET +251
    </option>
  
    
    

    <option data-calling-code="500" data-country-code="FK" value="FK" data-a-html-content="Falkland Islands +500">
      
      FK +500
    </option>
  
    
    

    <option data-calling-code="298" data-country-code="FO" value="FO" data-a-html-content="Faroe Islands +298">
      
      FO +298
    </option>
  
    
    

    <option data-calling-code="679" data-country-code="FJ" value="FJ" data-a-html-content="Fiji +679">
      
      FJ +679
    </option>
  
    
    

    <option data-calling-code="358" data-country-code="FI" value="FI" data-a-html-content="Finland +358">
      
      FI +358
    </option>
  
    
    

    <option data-calling-code="33" data-country-code="FR" value="FR" data-a-html-content="France +33">
      
      FR +33
    </option>
  
    
    

    <option data-calling-code="594" data-country-code="GF" value="GF" data-a-html-content="French Guiana +594">
      
      GF +594
    </option>
  
    
    

    <option data-calling-code="689" data-country-code="PF" value="PF" data-a-html-content="French Polynesia +689">
      
      PF +689
    </option>
  
    
    

    <option data-calling-code="241" data-country-code="GA" value="GA" data-a-html-content="Gabon +241">
      
      GA +241
    </option>
  
    
    

    <option data-calling-code="220" data-country-code="GM" value="GM" data-a-html-content="Gambia, The +220">
      
      GM +220
    </option>
  
    
    

    <option data-calling-code="995" data-country-code="GE" value="GE" data-a-html-content="Georgia +995">
      
      GE +995
    </option>
  
    
    

    <option data-calling-code="49" data-country-code="DE" value="DE" data-a-html-content="Germany +49">
      
      DE +49
    </option>
  
    
    

    <option data-calling-code="233" data-country-code="GH" value="GH" data-a-html-content="Ghana +233">
      
      GH +233
    </option>
  
    
    

    <option data-calling-code="350" data-country-code="GI" value="GI" data-a-html-content="Gibraltar +350">
      
      GI +350
    </option>
  
    
    

    <option data-calling-code="30" data-country-code="GR" value="GR" data-a-html-content="Greece +30">
      
      GR +30
    </option>
  
    
    

    <option data-calling-code="299" data-country-code="GL" value="GL" data-a-html-content="Greenland +299">
      
      GL +299
    </option>
  
    
    

    <option data-calling-code="1" data-country-code="GD" value="GD" data-a-html-content="Grenada +1">
      
      GD +1
    </option>
  
    
    

    <option data-calling-code="590" data-country-code="GP" value="GP" data-a-html-content="Guadeloupe +590">
      
      GP +590
    </option>
  
    
    

    <option data-calling-code="1" data-country-code="GU" value="GU" data-a-html-content="Guam +1">
      
      GU +1
    </option>
  
    
    

    <option data-calling-code="502" data-country-code="GT" value="GT" data-a-html-content="Guatemala +502">
      
      GT +502
    </option>
  
    
    

    <option data-calling-code="224" data-country-code="GN" value="GN" data-a-html-content="Guinea +224">
      
      GN +224
    </option>
  
    
    

    <option data-calling-code="245" data-country-code="GW" value="GW" data-a-html-content="Guinea-Bissau +245">
      
      GW +245
    </option>
  
    
    

    <option data-calling-code="592" data-country-code="GY" value="GY" data-a-html-content="Guyana +592">
      
      GY +592
    </option>
  
    
    

    <option data-calling-code="509" data-country-code="HT" value="HT" data-a-html-content="Haiti +509">
      
      HT +509
    </option>
  
    
    

    <option data-calling-code="504" data-country-code="HN" value="HN" data-a-html-content="Honduras +504">
      
      HN +504
    </option>
  
    
    

    <option data-calling-code="852" data-country-code="HK" value="HK" data-a-html-content="Hong Kong +852">
      
      HK +852
    </option>
  
    
    

    <option data-calling-code="36" data-country-code="HU" value="HU" data-a-html-content="Hungary +36">
      
      HU +36
    </option>
  
    
    

    <option data-calling-code="354" data-country-code="IS" value="IS" data-a-html-content="Iceland +354">
      
      IS +354
    </option>
  
    
    

    <option data-calling-code="91" data-country-code="IN" value="IN" data-a-html-content="India +91" selected>
      
      IN +91
    </option>
  
    
    

    <option data-calling-code="62" data-country-code="ID" value="ID" data-a-html-content="Indonesia +62">
      
      ID +62
    </option>
  
    
    

    <option data-calling-code="98" data-country-code="IR" value="IR" data-a-html-content="Iran, Islamic Republic of +98">
      
      IR +98
    </option>
  
    
    

    <option data-calling-code="964" data-country-code="IQ" value="IQ" data-a-html-content="Iraq +964">
      
      IQ +964
    </option>
  
    
    

    <option data-calling-code="353" data-country-code="IE" value="IE" data-a-html-content="Ireland, Republic of +353">
      
      IE +353
    </option>
  
    
    

    <option data-calling-code="972" data-country-code="IL" value="IL" data-a-html-content="Israel +972">
      
      IL +972
    </option>
  
    
    

    <option data-calling-code="39" data-country-code="IT" value="IT" data-a-html-content="Italy +39">
      
      IT +39
    </option>
  
    
    

    <option data-calling-code="225" data-country-code="CI" value="CI" data-a-html-content="Ivory Coast (C&ocirc;te D'ivoire) +225">
      
      CI +225
    </option>
  
    
    

    <option data-calling-code="1" data-country-code="JM" value="JM" data-a-html-content="Jamaica +1">
      
      JM +1
    </option>
  
    
    

    <option data-calling-code="81" data-country-code="JP" value="JP" data-a-html-content="Japan +81">
      
      JP +81
    </option>
  
    
    

    <option data-calling-code="962" data-country-code="JO" value="JO" data-a-html-content="Jordan +962">
      
      JO +962
    </option>
  
    
    

    <option data-calling-code="7" data-country-code="KZ" value="KZ" data-a-html-content="Kazakhstan +7">
      
      KZ +7
    </option>
  
    
    

    <option data-calling-code="254" data-country-code="KE" value="KE" data-a-html-content="Kenya +254">
      
      KE +254
    </option>
  
    
    

    <option data-calling-code="686" data-country-code="KI" value="KI" data-a-html-content="Kiribati +686">
      
      KI +686
    </option>
  
    
    

    <option data-calling-code="850" data-country-code="KP" value="KP" data-a-html-content="Korea, Democratic People's Republic of +850">
      
      KP +850
    </option>
  
    
    

    <option data-calling-code="82" data-country-code="KR" value="KR" data-a-html-content="Korea, Republic of +82">
      
      KR +82
    </option>
  
    
    

    <option data-calling-code="965" data-country-code="KW" value="KW" data-a-html-content="Kuwait +965">
      
      KW +965
    </option>
  
    
    

    <option data-calling-code="996" data-country-code="KG" value="KG" data-a-html-content="Kyrgyzstan +996">
      
      KG +996
    </option>
  
    
    

    <option data-calling-code="856" data-country-code="LA" value="LA" data-a-html-content="Lao, People's Democratic Republic +856">
      
      LA +856
    </option>
  
    
    

    <option data-calling-code="371" data-country-code="LV" value="LV" data-a-html-content="Latvia +371">
      
      LV +371
    </option>
  
    
    

    <option data-calling-code="961" data-country-code="LB" value="LB" data-a-html-content="Lebanon +961">
      
      LB +961
    </option>
  
    
    

    <option data-calling-code="266" data-country-code="LS" value="LS" data-a-html-content="Lesotho +266">
      
      LS +266
    </option>
  
    
    

    <option data-calling-code="231" data-country-code="LR" value="LR" data-a-html-content="Liberia +231">
      
      LR +231
    </option>
  
    
    

    <option data-calling-code="218" data-country-code="LY" value="LY" data-a-html-content="Libya +218">
      
      LY +218
    </option>
  
    
    

    <option data-calling-code="423" data-country-code="LI" value="LI" data-a-html-content="Liechtenstein +423">
      
      LI +423
    </option>
  
    
    

    <option data-calling-code="370" data-country-code="LT" value="LT" data-a-html-content="Lithuania +370">
      
      LT +370
    </option>
  
    
    

    <option data-calling-code="352" data-country-code="LU" value="LU" data-a-html-content="Luxembourg +352">
      
      LU +352
    </option>
  
    
    

    <option data-calling-code="853" data-country-code="MO" value="MO" data-a-html-content="Macao +853">
      
      MO +853
    </option>
  
    
    

    <option data-calling-code="389" data-country-code="MK" value="MK" data-a-html-content="Macedonia, The Former Yugoslav Republic of +389">
      
      MK +389
    </option>
  
    
    

    <option data-calling-code="261" data-country-code="MG" value="MG" data-a-html-content="Madagascar +261">
      
      MG +261
    </option>
  
    
    

    <option data-calling-code="265" data-country-code="MW" value="MW" data-a-html-content="Malawi +265">
      
      MW +265
    </option>
  
    
    

    <option data-calling-code="60" data-country-code="MY" value="MY" data-a-html-content="Malaysia +60">
      
      MY +60
    </option>
  
    
    

    <option data-calling-code="960" data-country-code="MV" value="MV" data-a-html-content="Maldives +960">
      
      MV +960
    </option>
  
    
    

    <option data-calling-code="223" data-country-code="ML" value="ML" data-a-html-content="Mali +223">
      
      ML +223
    </option>
  
    
    

    <option data-calling-code="356" data-country-code="MT" value="MT" data-a-html-content="Malta +356">
      
      MT +356
    </option>
  
    
    

    <option data-calling-code="692" data-country-code="MH" value="MH" data-a-html-content="Marshall Islands +692">
      
      MH +692
    </option>
  
    
    

    <option data-calling-code="596" data-country-code="MQ" value="MQ" data-a-html-content="Martinique +596">
      
      MQ +596
    </option>
  
    
    

    <option data-calling-code="222" data-country-code="MR" value="MR" data-a-html-content="Mauritania +222">
      
      MR +222
    </option>
  
    
    

    <option data-calling-code="230" data-country-code="MU" value="MU" data-a-html-content="Mauritius +230">
      
      MU +230
    </option>
  
    
    

    <option data-calling-code="52" data-country-code="MX" value="MX" data-a-html-content="Mexico +52">
      
      MX +52
    </option>
  
    
    

    <option data-calling-code="691" data-country-code="FM" value="FM" data-a-html-content="Micronesia, Federated States of +691">
      
      FM +691
    </option>
  
    
    

    <option data-calling-code="373" data-country-code="MD" value="MD" data-a-html-content="Moldova, Republic of +373">
      
      MD +373
    </option>
  
    
    

    <option data-calling-code="377" data-country-code="MC" value="MC" data-a-html-content="Monaco +377">
      
      MC +377
    </option>
  
    
    

    <option data-calling-code="976" data-country-code="MN" value="MN" data-a-html-content="Mongolia +976">
      
      MN +976
    </option>
  
    
    

    <option data-calling-code="382" data-country-code="ME" value="ME" data-a-html-content="Montenegro +382">
      
      ME +382
    </option>
  
    
    

    <option data-calling-code="1" data-country-code="MS" value="MS" data-a-html-content="Montserrat +1">
      
      MS +1
    </option>
  
    
    

    <option data-calling-code="212" data-country-code="MA" value="MA" data-a-html-content="Morocco +212">
      
      MA +212
    </option>
  
    
    

    <option data-calling-code="258" data-country-code="MZ" value="MZ" data-a-html-content="Mozambique +258">
      
      MZ +258
    </option>
  
    
    

    <option data-calling-code="95" data-country-code="MM" value="MM" data-a-html-content="Myanmar +95">
      
      MM +95
    </option>
  
    
    

    <option data-calling-code="264" data-country-code="NA" value="NA" data-a-html-content="Namibia +264">
      
      NA +264
    </option>
  
    
    

    <option data-calling-code="674" data-country-code="NR" value="NR" data-a-html-content="Nauru +674">
      
      NR +674
    </option>
  
    
    

    <option data-calling-code="977" data-country-code="NP" value="NP" data-a-html-content="Nepal +977">
      
      NP +977
    </option>
  
    
    

    <option data-calling-code="31" data-country-code="NL" value="NL" data-a-html-content="Netherlands +31">
      
      NL +31
    </option>
  
    
    

    <option data-calling-code="0" data-country-code="AN" value="AN" data-a-html-content="Netherlands Antilles +0">
      
      AN +0
    </option>
  
    
    

    <option data-calling-code="687" data-country-code="NC" value="NC" data-a-html-content="New Caledonia +687">
      
      NC +687
    </option>
  
    
    

    <option data-calling-code="64" data-country-code="NZ" value="NZ" data-a-html-content="New Zealand +64">
      
      NZ +64
    </option>
  
    
    

    <option data-calling-code="505" data-country-code="NI" value="NI" data-a-html-content="Nicaragua +505">
      
      NI +505
    </option>
  
    
    

    <option data-calling-code="227" data-country-code="NE" value="NE" data-a-html-content="Niger +227">
      
      NE +227
    </option>
  
    
    

    <option data-calling-code="234" data-country-code="NG" value="NG" data-a-html-content="Nigeria +234">
      
      NG +234
    </option>
  
    
    

    <option data-calling-code="683" data-country-code="NU" value="NU" data-a-html-content="Niue +683">
      
      NU +683
    </option>
  
    
    

    <option data-calling-code="672" data-country-code="NF" value="NF" data-a-html-content="Norfolk Island +672">
      
      NF +672
    </option>
  
    
    

    <option data-calling-code="47" data-country-code="NO" value="NO" data-a-html-content="Norway +47">
      
      NO +47
    </option>
  
    
    

    <option data-calling-code="968" data-country-code="OM" value="OM" data-a-html-content="Oman +968">
      
      OM +968
    </option>
  
    
    

    <option data-calling-code="92" data-country-code="PK" value="PK" data-a-html-content="Pakistan +92">
      
      PK +92
    </option>
  
    
    

    <option data-calling-code="680" data-country-code="PW" value="PW" data-a-html-content="Palau +680">
      
      PW +680
    </option>
  
    
    

    <option data-calling-code="970" data-country-code="PS" value="PS" data-a-html-content="Palestinian Territories +970">
      
      PS +970
    </option>
  
    
    

    <option data-calling-code="507" data-country-code="PA" value="PA" data-a-html-content="Panama +507">
      
      PA +507
    </option>
  
    
    

    <option data-calling-code="675" data-country-code="PG" value="PG" data-a-html-content="Papua New Guinea +675">
      
      PG +675
    </option>
  
    
    

    <option data-calling-code="595" data-country-code="PY" value="PY" data-a-html-content="Paraguay +595">
      
      PY +595
    </option>
  
    
    

    <option data-calling-code="51" data-country-code="PE" value="PE" data-a-html-content="Peru +51">
      
      PE +51
    </option>
  
    
    

    <option data-calling-code="63" data-country-code="PH" value="PH" data-a-html-content="Philippines +63">
      
      PH +63
    </option>
  
    
    

    <option data-calling-code="48" data-country-code="PL" value="PL" data-a-html-content="Poland +48">
      
      PL +48
    </option>
  
    
    

    <option data-calling-code="351" data-country-code="PT" value="PT" data-a-html-content="Portugal +351">
      
      PT +351
    </option>
  
    
    

    <option data-calling-code="1" data-country-code="PR" value="PR" data-a-html-content="Puerto Rico +1">
      
      PR +1
    </option>
  
    
    

    <option data-calling-code="974" data-country-code="QA" value="QA" data-a-html-content="Qatar +974">
      
      QA +974
    </option>
  
    
    

    <option data-calling-code="262" data-country-code="RE" value="RE" data-a-html-content="Reunion +262">
      
      RE +262
    </option>
  
    
    

    <option data-calling-code="40" data-country-code="RO" value="RO" data-a-html-content="Romania +40">
      
      RO +40
    </option>
  
    
    

    <option data-calling-code="7" data-country-code="RU" value="RU" data-a-html-content="Russian Federation +7">
      
      RU +7
    </option>
  
    
    

    <option data-calling-code="250" data-country-code="RW" value="RW" data-a-html-content="Rwanda +250">
      
      RW +250
    </option>
  
    
    

    <option data-calling-code="1" data-country-code="KN" value="KN" data-a-html-content="Saint Kitts and Nevis +1">
      
      KN +1
    </option>
  
    
    

    <option data-calling-code="1" data-country-code="LC" value="LC" data-a-html-content="Saint Lucia +1">
      
      LC +1
    </option>
  
    
    

    <option data-calling-code="508" data-country-code="PM" value="PM" data-a-html-content="Saint Pierre and Miquelon +508">
      
      PM +508
    </option>
  
    
    

    <option data-calling-code="1" data-country-code="VC" value="VC" data-a-html-content="Saint Vincent and the Grenadines +1">
      
      VC +1
    </option>
  
    
    

    <option data-calling-code="685" data-country-code="WS" value="WS" data-a-html-content="Samoa +685">
      
      WS +685
    </option>
  
    
    

    <option data-calling-code="378" data-country-code="SM" value="SM" data-a-html-content="San Marino +378">
      
      SM +378
    </option>
  
    
    

    <option data-calling-code="239" data-country-code="ST" value="ST" data-a-html-content="Sao Tome and Principe +239">
      
      ST +239
    </option>
  
    
    

    <option data-calling-code="966" data-country-code="SA" value="SA" data-a-html-content="Saudi Arabia +966">
      
      SA +966
    </option>
  
    
    

    <option data-calling-code="221" data-country-code="SN" value="SN" data-a-html-content="Senegal +221">
      
      SN +221
    </option>
  
    
    

    <option data-calling-code="381" data-country-code="RS" value="RS" data-a-html-content="Serbia +381">
      
      RS +381
    </option>
  
    
    

    <option data-calling-code="248" data-country-code="SC" value="SC" data-a-html-content="Seychelles +248">
      
      SC +248
    </option>
  
    
    

    <option data-calling-code="232" data-country-code="SL" value="SL" data-a-html-content="Sierra Leone +232">
      
      SL +232
    </option>
  
    
    

    <option data-calling-code="65" data-country-code="SG" value="SG" data-a-html-content="Singapore +65">
      
      SG +65
    </option>
  
    
    

    <option data-calling-code="421" data-country-code="SK" value="SK" data-a-html-content="Slovakia +421">
      
      SK +421
    </option>
  
    
    

    <option data-calling-code="386" data-country-code="SI" value="SI" data-a-html-content="Slovenia +386">
      
      SI +386
    </option>
  
    
    

    <option data-calling-code="677" data-country-code="SB" value="SB" data-a-html-content="Solomon Islands +677">
      
      SB +677
    </option>
  
    
    

    <option data-calling-code="252" data-country-code="SO" value="SO" data-a-html-content="Somalia +252">
      
      SO +252
    </option>
  
    
    

    <option data-calling-code="27" data-country-code="ZA" value="ZA" data-a-html-content="South Africa +27">
      
      ZA +27
    </option>
  
    
    

    <option data-calling-code="211" data-country-code="SS" value="SS" data-a-html-content="South Sudan +211">
      
      SS +211
    </option>
  
    
    

    <option data-calling-code="34" data-country-code="ES" value="ES" data-a-html-content="Spain +34">
      
      ES +34
    </option>
  
    
    

    <option data-calling-code="94" data-country-code="LK" value="LK" data-a-html-content="Sri Lanka +94">
      
      LK +94
    </option>
  
    
    

    <option data-calling-code="249" data-country-code="SD" value="SD" data-a-html-content="Sudan +249">
      
      SD +249
    </option>
  
    
    

    <option data-calling-code="597" data-country-code="SR" value="SR" data-a-html-content="Suriname +597">
      
      SR +597
    </option>
  
    
    

    <option data-calling-code="268" data-country-code="SZ" value="SZ" data-a-html-content="Swaziland +268">
      
      SZ +268
    </option>
  
    
    

    <option data-calling-code="46" data-country-code="SE" value="SE" data-a-html-content="Sweden +46">
      
      SE +46
    </option>
  
    
    

    <option data-calling-code="41" data-country-code="CH" value="CH" data-a-html-content="Switzerland +41">
      
      CH +41
    </option>
  
    
    

    <option data-calling-code="963" data-country-code="SY" value="SY" data-a-html-content="Syria +963">
      
      SY +963
    </option>
  
    
    

    <option data-calling-code="886" data-country-code="TW" value="TW" data-a-html-content="Taiwan +886">
      
      TW +886
    </option>
  
    
    

    <option data-calling-code="992" data-country-code="TJ" value="TJ" data-a-html-content="Tajikistan +992">
      
      TJ +992
    </option>
  
    
    

    <option data-calling-code="255" data-country-code="TZ" value="TZ" data-a-html-content="Tanzania, United Republic of +255">
      
      TZ +255
    </option>
  
    
    

    <option data-calling-code="66" data-country-code="TH" value="TH" data-a-html-content="Thailand +66">
      
      TH +66
    </option>
  
    
    

    <option data-calling-code="228" data-country-code="TG" value="TG" data-a-html-content="Togo +228">
      
      TG +228
    </option>
  
    
    

    <option data-calling-code="676" data-country-code="TO" value="TO" data-a-html-content="Tonga +676">
      
      TO +676
    </option>
  
    
    

    <option data-calling-code="1" data-country-code="TT" value="TT" data-a-html-content="Trinidad and Tobago +1">
      
      TT +1
    </option>
  
    
    

    <option data-calling-code="216" data-country-code="TN" value="TN" data-a-html-content="Tunisia +216">
      
      TN +216
    </option>
  
    
    

    <option data-calling-code="90" data-country-code="TR" value="TR" data-a-html-content="Turkey +90">
      
      TR +90
    </option>
  
    
    

    <option data-calling-code="993" data-country-code="TM" value="TM" data-a-html-content="Turkmenistan +993">
      
      TM +993
    </option>
  
    
    

    <option data-calling-code="1" data-country-code="TC" value="TC" data-a-html-content="Turks and Caicos Islands +1">
      
      TC +1
    </option>
  
    
    

    <option data-calling-code="688" data-country-code="TV" value="TV" data-a-html-content="Tuvalu +688">
      
      TV +688
    </option>
  
    
    

    <option data-calling-code="256" data-country-code="UG" value="UG" data-a-html-content="Uganda +256">
      
      UG +256
    </option>
  
    
    

    <option data-calling-code="380" data-country-code="UA" value="UA" data-a-html-content="Ukraine +380">
      
      UA +380
    </option>
  
    
    

    <option data-calling-code="971" data-country-code="AE" value="AE" data-a-html-content="United Arab Emirates +971">
      
      AE +971
    </option>
  
    
    

    <option data-calling-code="44" data-country-code="GB" value="GB" data-a-html-content="United Kingdom +44">
      
      GB +44
    </option>
  
    
    

    <option data-calling-code="1" data-country-code="US" value="US" data-a-html-content="United States +1">
      
      US +1
    </option>
  
    
    

    <option data-calling-code="598" data-country-code="UY" value="UY" data-a-html-content="Uruguay +598">
      
      UY +598
    </option>
  
    
    

    <option data-calling-code="998" data-country-code="UZ" value="UZ" data-a-html-content="Uzbekistan +998">
      
      UZ +998
    </option>
  
    
    

    <option data-calling-code="678" data-country-code="VU" value="VU" data-a-html-content="Vanuatu +678">
      
      VU +678
    </option>
  
    
    

    <option data-calling-code="58" data-country-code="VE" value="VE" data-a-html-content="Venezuela +58">
      
      VE +58
    </option>
  
    
    

    <option data-calling-code="84" data-country-code="VN" value="VN" data-a-html-content="Vietnam +84">
      
      VN +84
    </option>
  
    
    

    <option data-calling-code="1" data-country-code="VG" value="VG" data-a-html-content="Virgin Islands, British +1">
      
      VG +1
    </option>
  
    
    

    <option data-calling-code="1" data-country-code="VI" value="VI" data-a-html-content="Virgin Islands, US +1">
      
      VI +1
    </option>
  
    
    

    <option data-calling-code="967" data-country-code="YE" value="YE" data-a-html-content="Yemen +967">
      
      YE +967
    </option>
  
    
    

    <option data-calling-code="260" data-country-code="ZM" value="ZM" data-a-html-content="Zambia +260">
      
      ZM +260
    </option>
  
    
    

    <option data-calling-code="263" data-country-code="ZW" value="ZW" data-a-html-content="Zimbabwe +263">
      
      ZW +263
    </option>
  
</select><span tabIndex="-1" id="auth-country-picker-container" class="a-button a-button-dropdown"><span class="a-button-inner"><span class="a-button-text a-declarative" data-action="a-dropdown-button" role="button" tabIndex="0" aria-hidden="true"><span class="a-dropdown-prompt">IN +91</span></span><i class="a-icon a-icon-dropdown"></i></span></span></span>

            </div>
            <div class="a-fixed-left-grid-col a-col-right" style="padding-left:2%;*width:97.6%;float:left;">
              <input type="tel" maxlength="50" id="ap_phone_number" placeholder="Mobile number" name="email" tabindex="3" class="a-input-text a-span12 a-spacing-micro auth-required-field auth-require-phone-validation" data-validation-id="phoneNumber">
              














  



<div id="auth-phoneNumber-missing-alert" class="a-box a-alert-inline a-alert-inline-error auth-inlined-error-message a-spacing-top-mini"><div class="a-box-inner a-alert-container"><i class="a-icon a-icon-alert"></i><div class="a-alert-content">
  Enter your mobile number
</div></div></div>

  



<div id="auth-phoneNumber-invalid-phone-alert" class="a-box a-alert-inline a-alert-inline-error auth-inlined-error-message a-spacing-top-mini"><div class="a-box-inner a-alert-container"><i class="a-icon a-icon-alert"></i><div class="a-alert-content">
  The mobile number you entered does not seem to be valid
</div></div></div>

  



<div id="auth-email-missing-alert-ango-phone" class="a-box a-alert-inline a-alert-inline-error auth-inlined-error-message a-spacing-top-mini"><div class="a-box-inner a-alert-container"><i class="a-icon a-icon-alert"></i><div class="a-alert-content">
  Enter your mobile number
</div></div></div>









            </div>
          </div></div>
        </div>
      </div>

      
      <div class="a-section a-spacing-base ap_email_fields">
        <div class="a-row a-spacing-micro">
          <label for="ap_email" class="a-form-label">
            Email address (Optional)
          </label>
          <input type="email" maxlength="64" id="ap_email" name="secondaryLoginClaim" tabindex="4" class="a-input-text a-span12 auth-require-email-validaton" data-validation-id="email">
          










  



<div id="auth-email-missing-alert" class="a-box a-alert-inline a-alert-inline-error auth-inlined-error-message a-spacing-top-mini"><div class="a-box-inner a-alert-container"><i class="a-icon a-icon-alert"></i><div class="a-alert-content">
  Enter your email
</div></div></div>

  



<div id="auth-email-invalid-email-alert" class="a-box a-alert-inline a-alert-inline-error auth-inlined-error-message a-spacing-top-mini"><div class="a-box-inner a-alert-container"><i class="a-icon a-icon-alert"></i><div class="a-alert-content">
  Enter a valid email address
</div></div></div>

  



<div id="auth-email-invalid-claim-alert" class="a-box a-alert-inline a-alert-inline-error auth-inlined-error-message a-spacing-top-mini"><div class="a-box-inner a-alert-container"><i class="a-icon a-icon-alert"></i><div class="a-alert-content">
  Wrong or Invalid email address or mobile phone number. Please correct and try again.
</div></div></div>

  
  



<div id="auth-email-missing-alert-ango-email" class="a-box a-alert-inline a-alert-inline-error auth-inlined-error-message a-spacing-top-mini"><div class="a-box-inner a-alert-container"><i class="a-icon a-icon-alert"></i><div class="a-alert-content">
  Enter your email
</div></div></div>

  



<div id="auth-email-missing-alert-ango-phone" class="a-box a-alert-inline a-alert-inline-error auth-inlined-error-message a-spacing-top-mini"><div class="a-box-inner a-alert-container"><i class="a-icon a-icon-alert"></i><div class="a-alert-content">
  Enter your mobile phone number
</div></div></div>













        </div>
      </div>

      
      <div class="auth-require-fields-match-group">
        







<div class="a-row a-spacing-base">
  
    
  
  
  <label for="ap_password" class="a-form-label">
    Password
  </label>
  <input type="password" maxlength="1024" id="ap_password" autocomplete="off" placeholder="At least 6 characters" name="password" tabindex="5" class="a-input-text a-span12 auth-required-field auth-require-fields-match  auth-require-password-validation">
  
















  



<div id="auth-password-missing-alert" class="a-box a-alert-inline a-alert-inline-error auth-inlined-error-message a-spacing-top-mini"><div class="a-box-inner a-alert-container"><i class="a-icon a-icon-alert"></i><div class="a-alert-content">
  Enter your password
</div></div></div>

  



<div id="auth-password-invalid-password-alert" class="a-box a-alert-inline a-alert-inline-error auth-inlined-error-message a-spacing-top-mini"><div class="a-box-inner a-alert-container"><i class="a-icon a-icon-alert"></i><div class="a-alert-content">
  Passwords must be at least 6 characters.
</div></div></div>







</div>

      </div>

      
      









      
      








      
      <div class="a-section a-spacing-top-large a-text-left ap_mobile_number_fields">
        <div class="a-row">
          We will send you a text to verify your phone.
        </div>
        <div class="a-row">
          Message and Data rates may apply.
        </div>
      </div>
-->
      <input type="submit" value="submit" />
<?php
 $result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result);

while ($row = mysqli_fetch_array($result)) {
 echo $row['crop_name'] ;
}     
      
  ?>    
        
      

      
        <div class="a-divider a-divider-section"><div class="a-divider-inner"></div></div>

        
    <!--    <div class="a-row">
          Already have an account?
          <a class="a-link-emphasis" href="/ap/signin?openid.pape.max_auth_age=0&openid.return_to=https%3A%2F%2Fwww.amazon.in%2Fgp%2Fyourstore%2Fhome%3Fie%3DUTF8%26ref_%3Dnav_newcust&prevRID=60CZDDVJD67DZBSVZVA2&openid.identity=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&openid.assoc_handle=inflex&openid.mode=checkid_setup&openid.ns.pape=http%3A%2F%2Fspecs.openid.net%2Fextensions%2Fpape%2F1.0&openid.claimed_id=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&pageId=inflex&openid.ns=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0">
            Sign in
          </a>
        </div>
      
-->
      
    </div></div>
  </form>

echo $n
</div>


<script>
  function cf() {
    if (typeof window.uet === 'function') {
      uet('cf');
    }
    if (window.embedNotification &&
      typeof window.embedNotification.onCF === 'function') {
      embedNotification.onCF();
    }
  }
</script>

<script type="text/javascript">cf()</script>


</div>
            </div>
          
        
      </div>

      
      <div id="right-2">
      </div>

      <div class="a-section a-spacing-top-extra-large auth-footer">
        



<div class="a-divider a-divider-section"><div class="a-divider-inner"></div></div>

<div class="a-section a-spacing-small a-text-center a-size-mini">
  <span class="auth-footer-seperator"></span>

  
    
      
        
      

      
    

    <a class="a-link-normal" target="_blank" rel="noopener noreferrer" href="/gp/help/customer/display.html/ref=ap_desktop_footer_cou?ie=UTF8&amp;nodeId=200545940">
      Conditions of Use
    </a>
    <span class="auth-footer-seperator"></span>
  
    
      
        
      

      
    

    <a class="a-link-normal" target="_blank" rel="noopener noreferrer" href="/gp/help/customer/display.html/ref=ap_desktop_footer_privacy_notice?ie=UTF8&amp;nodeId=200534380">
      Privacy Notice
    </a>
    <span class="auth-footer-seperator"></span>
  
    
      
        
      

      
    

    <a class="a-link-normal" target="_blank" rel="noopener noreferrer" href="/help">
      Help
    </a>
    <span class="auth-footer-seperator"></span>
  

  
</div>




<div class="a-section a-spacing-none a-text-center">
  



<!--

<span class="a-size-mini a-color-secondary">
  © 1996-2018, Amazon.com, Inc. or its affiliates
</span>

</div>

      </div>
    </div>

    <div id="auth-external-javascript" class="auth-external-javascript" data-external-javascripts="">
    </div>

    
-->



<script id="fwcim-script" crossorigin="anonymous" type="text/javascript" src="https://images-na.ssl-images-amazon.com/images/G/31/x-locale/common/login/fwcim._CB500311760_.js"></script>
<script type="text/javascript">
if (typeof fwcim != "undefined") {

fwcim.useMercury('https://images-na.ssl-images-amazon.com/images/G/31/x-locale/common/login/mercury9._CB372126299_.swf')



fwcim.profile('register');


}
</script>


    
    <!-- cache slot rendered -->
    
  </div><div id='be' style="display:none;visibility:hidden;"><form name='ue_backdetect' action="get"><input type="hidden" name='ue_back' value='1' /></form>


    <script type="text/javascript">
var ue_mbl=ue_csm.ue.exec(function(e,a){function k(f){b=f||{};a.AMZNPerformance=b;b.transition=b.transition||{};b.timing=b.timing||{};e.ue.exec(l,"csm-android-check")()&&b.tags instanceof Array&&(f=-1!=b.tags.indexOf("usesAppStartTime")||b.transition.type?!b.transition.type&&-1<b.tags.indexOf("usesAppStartTime")?"warm-start":void 0:"view-transition",f&&(b.transition.type=f));"reload"===d._nt&&e.ue_orct||"intrapage-transition"===d._nt?a.performance&&performance.timing&&performance.timing.navigationStart?
b.timing.transitionStart=a.performance.timing.navigationStart:delete b.timing.transitionStart:"undefined"===typeof d._nt&&a.performance&&performance.timing&&performance.timing.navigationStart&&a.history&&"function"===typeof a.History&&"object"===typeof a.history&&history.length&&1!=history.length&&(b.timing.transitionStart=a.performance.timing.navigationStart);f=b.transition;var c;c=d._nt?d._nt:void 0;f.subType=c;a.ue&&a.ue.tag&&a.ue.tag("has-AMZNPerformance");d.isl&&a.uex&&uex("at","csm-timing");
m()}function n(b){a.ue&&a.ue.count&&a.ue.count("csm-cordova-plugin-failed",1)}function l(){return a.webclient&&"function"===typeof a.webclient.getRealClickTime?a.cordova&&a.cordova.platformId&&"ios"==a.cordova.platformId?!1:!0:!1}function m(){try{P.register("AMZNPerformance",function(){return b})}catch(a){}}function g(){if(!b)return"";ue_mbl.cnt=null;var a=b.transition,c;c=b.timing.transitionStart;c="undefined"!==typeof c&&"undefined"!==typeof h?c-h:void 0;a=["mts",c,"mtt",a.type,"mtst",a.subType,
"mtlt",a.launchType];c="";for(var d=0;d<a.length;d+=2){var e=a[d],g=a[d+1];"undefined"!==typeof g&&(c+="&"+e+"="+g)}return c}function p(a,c){b&&(h=c,b.timing.transitionStart=a,b.transition.type="view-transition",b.transition.subType="ajax-transition",b.transition.launchType="normal",ue_mbl.cnt=g)}var d=e.ue||{},h=e.ue_t0,b;if(a.P&&a.P.when&&a.P.register)return a.P.when("CSMPlugin").execute(function(a){a.buildAMZNPerformance&&a.buildAMZNPerformance({successCallback:k,failCallback:n})}),{cnt:g,ajax:p}},
"mobile-timing")(ue_csm,window);

(function(d){d._uess=function(){var a="";screen&&screen.width&&screen.height&&(a+="&sw="+screen.width+"&sh="+screen.height);var b=function(a){var b=document.documentElement["client"+a];return"CSS1Compat"===document.compatMode&&b||document.body["client"+a]||b},c=b("Width"),b=b("Height");c&&b&&(a+="&vw="+c+"&vh="+b);return a}})(ue_csm);

(function(a){var b=document.ue_backdetect;b&&b.ue_back&&a.ue&&(a.ue.bfini=b.ue_back.value);a.uet&&a.uet("be");a.onLdEnd&&(window.addEventListener?window.addEventListener("load",a.onLdEnd,!1):window.attachEvent&&window.attachEvent("onload",a.onLdEnd));a.ueh&&a.ueh(0,window,"load",a.onLd,1);a.ue&&a.ue.tag&&(a.ue_furl&&a.ue_furl.split?(b=a.ue_furl.split("."))&&b[0]&&a.ue.tag(b[0]):a.ue.tag("nofls"))})(ue_csm);
(function(g,h){function d(a,d){var b={};if(!e||!f)try{var c=h.sessionStorage;c?a&&("undefined"!==typeof d?c.setItem(a,d):b.val=c.getItem(a)):f=1}catch(g){e=1}e&&(b.e=1);return b}var b=g.ue||{},a="",f,e,c,a=d("csmtid");f?a="NA":a.e?a="ET":(a=a.val,a||(a=b.oid||"NI",d("csmtid",a)),c=d(b.oid),c.e||(c.val=c.val||0,d(b.oid,c.val+1)),b.ssw=d);b.tabid=a})(ue_csm,window);
ue_csm.ue.exec(function(e,f){var a=e.ue||{},b=a._wlo,d;if(a.ssw){d=a.ssw("CSM_previousURL").val;var c=f.location,b=b?b:c&&c.href?c.href.split("#")[0]:void 0;c=(b||"")===a.ssw("CSM_previousURL").val;!c&&b&&a.ssw("CSM_previousURL",b);d=c?"reload":d?"intrapage-transition":"first-view"}else d="unknown";a._nt=d},"NavTypeModule")(ue_csm,window);


(function(b,c){var a=c.images;a&&a.length&&b.ue.count("totalImages",a.length)})(ue_csm,document);


ue_csm.ue._rtn = 1;
(function(e,f){function h(a){a=a.split("?")[0]||a;a=a.replace("http://","").replace("https://","").replace("resource://","").replace("res://","").replace("undefined://","").replace("chrome://","").replace(/\*/g,"").replace(/!/g,"").replace(/~/g,"");var b=a.split("/");a=a.substr(a.lastIndexOf("/")+1);b.splice(-1);b=b.map(function(a){c[a]||(c[a]=(k++).toString(36));return c[a]});b.push(a);return b.join("!")}function l(){return f.getEntriesByType("resource").filter(function(a){return d._rre(a)<d._ld}).sort(function(a,
b){return a.responseEnd-b.responseEnd}).splice(0,m).map(function(a){var b=[],c;for(c in a)g[c]&&a[c]&&b.push(g[c]+Math.max(a[c]|0,-1).toString(36));b.push("i"+a.initiatorType);(1==d._rtn&&d._afjs>n||2==d._rtn)&&b.push("n"+h(a.name));return b.join("_")}).join("*")}function p(){var a="pm",b;for(b in c)c.hasOwnProperty(b)&&(a+="*"+c[b]+"_"+b);return a}function q(){d.log({k:"rtiming",value:l()+"~"+p()},"csm")}if(f&&f.getEntriesByType&&Array.prototype.map&&Array.prototype.filter&&e.ue&&e.ue.log){var g=
{connectStart:"c",connectEnd:"C",domainLookupStart:"d",domainLookupEnd:"D",duration:"z",fetchStart:"f",redirectStart:"r",redirectEnd:"R",requestStart:"q",responseStart:"s",responseEnd:"S",startTime:"a"},d=e.ue,c={},k=1,n=20,m=200;d&&d._rre&&(d._art=function(){d._ld&&window.setTimeout(q,0)})}})(ue_csm||{},window.performance);


(function(c,d){var b=c.ue,a=d.navigator;b&&b.tag&&a&&(a=a.connection||a.mozConnection||a.webkitConnection)&&a.type&&b.tag("netInfo:"+a.type)})(ue_csm,window);


(function(c,d){function h(a,b){for(var c=[],d=0;d<a.length;d++){var e=a[d],f=b.encode(e);if(e[k]){var g=b.metaSep,e=e[k],l=b.metaPairSep,h=[],m=void 0;for(m in e)e.hasOwnProperty(m)&&h.push(m+"="+e[m]);e=h.join(l);f+=g+e}c.push(f)}return c.join(b.resourceSep)}function s(a){var b=a[k]=a[k]||{};b[t]||(b[t]=c.ue_mid);b[u]||(b[u]=c.ue_sid);b[f]||(b[f]=c.ue_id);b.csm=1;a="//"+c.ue_furl+"/1/"+a[v]+"/1/OP/"+a[w]+"/"+a[x]+"/"+h([a],y);if(n)try{n.call(d[p],a)}catch(g){c.ue.sbf=1,(new Image).src=a}else(new Image).src=
a}function q(){g&&g.isStub&&g.replay(function(a,b,c){a=a[0];b=a[k]=a[k]||{};b[f]=b[f]||c;s(a)});l.impression=s;g=null}if(!(1<c.ueinit)){var k="metadata",x="impressionType",v="foresterChannel",w="programGroup",t="marketplaceId",u="session",f="requestId",p="navigator",l=c.ue||{},n=d[p]&&d[p].sendBeacon,r=function(a,b,c,d){return{encode:d,resourceSep:a,metaSep:b,metaPairSep:c}},y=r("","?","&",function(a){return h(a.impressionData,z)}),z=r("/",":",",",function(a){return a.featureName+":"+h(a.resources,
A)}),A=r(",","@","|",function(a){return a.id}),g=l.impression;n?q():(l.attach("load",q),l.attach("beforeunload",q));d.P&&d.P.register&&d.P.register("impression-client",function(){})}})(ue_csm,window);




var ue_pty = "AuthenticationPortal";

var ue_spty = "RegistrationApplication";



var ue_adb = 4;
ue_csm.ue.exec(function(u,a){function q(){b=f;g();if(h)try{d.setItem(k,b)}catch(a){}}function r(){b=1===a.ue_adb_chk?m:f;g();if(h)try{d.setItem(k,b)}catch(c){}}function g(){l.tag(b);l.isl&&a.uex&&uex("at",b);c&&0<c.ec?n():a.ue_adb_rtla&&c&&(c.elh=n)}function n(){a.ue_adb_rtla&&c&&0<c.ec&&!1===p&&(c.elh=null,ueLogError({m:"Hit Info"},{logLevel:"INFO",adb:b}),p=!0)}var l=a.ue,f="adblk_yes",m="adblk_no",s=a.ue_adb_url||"https://m.media-amazon.com/images/G/01/csm/showads.v2.js",b="adblk_unk",d;a:{try{d=
a.localStorage;break a}catch(v){}d=void 0}var k="csm:adb",e=a.ue_adb,c=a.ue_err,h=d&&(3===e||4===e||5===e),e=4!==e&&5!==e,p=!1,t=function(){if(d&&h){var a;a:{try{a=d.getItem(k);break a}catch(c){}a=void 0}if(a)return b=a,!0}return!1}();e||!t?l.uels(s,{onerror:q,onload:r}):g();a.ue_isAdb=function(){return b};a.ue_isAdb.unk="adblk_unk";a.ue_isAdb.no=m;a.ue_isAdb.yes=f},"adb")(document,window);




</script>

</div>

<noscript>
    <img height="1" width="1" style='display:none;visibility:hidden;' src='//fls-eu.amazon.com/1/batch/1/OP/A21TJRUUN4KGV:257-2130578-9981535:60CZDDVJD67DZBSVZVA2$uedata=s:%2Fap%2Fuedata%3Fnoscript%26id%3D60CZDDVJD67DZBSVZVA2:0' alt=""/>
</noscript>
</body>
</html>

