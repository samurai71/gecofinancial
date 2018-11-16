function MM_preloadImages() { //v3.0
  var d = document;
  if (d.images) {
    if (!d.MM_p) d.MM_p = new Array();
    var i, j = d.MM_p.length,
      a = MM_preloadImages.arguments;
    for (i = 0; i < a.length; i++)
      if (a[i].indexOf("#") != 0) {
        d.MM_p[j] = new Image;
        d.MM_p[j++].src = a[i];
      }
  }
}

function MM_swapImgRestore() { //v3.0
  var i, x, a = document.MM_sr;
  for (i = 0; a && i < a.length && (x = a[i]) && x.oSrc; i++) x.src = x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p, i, x;
  if (!d) d = document;
  if ((p = n.indexOf("?")) > 0 && parent.frames.length) {
    d = parent.frames[n.substring(p + 1)].document;
    n = n.substring(0, p);
  }
  if (!(x = d[n]) && d.all) x = d.all[n];
  for (i = 0; !x && i < d.forms.length; i++) x = d.forms[i][n];
  for (i = 0; !x && d.layers && i < d.layers.length; i++) x = MM_findObj(n, d.layers[i].document);
  if (!x && d.getElementById) x = d.getElementById(n);
  return x;
}

function MM_swapImage() { //v3.0
  var i, j = 0,
    x, a = MM_swapImage.arguments;
  document.MM_sr = new Array;
  for (i = 0; i < (a.length - 2); i += 3)
    if ((x = MM_findObj(a[i])) != null) {
      document.MM_sr[j++] = x;
      if (!x.oSrc) x.oSrc = x.src;
      x.src = a[i + 2];
    }
}

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-8007953-13']);
_gaq.push(['_trackPageview']);

(function() {
  var ga = document.createElement('script');
  ga.type = 'text/javascript';
  ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
  var s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(ga, s);
})();

var monthtext=['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sept','Oct','Nov','Dec'];

function populatedropdown(dayfield, monthfield, yearfield){
var today=new Date()
var dayfield=document.getElementById(dayfield)
var monthfield=document.getElementById(monthfield)
var yearfield=document.getElementById(yearfield)
for (var i=0; i<31; i++)
dayfield.options[i]=new Option(i, i+1)
dayfield.options[today.getDate()]=new Option(today.getDate(), today.getDate(), true, true) //select today's day
for (var m=0; m<12; m++)
monthfield.options[m]=new Option(monthtext[m], monthtext[m])
monthfield.options[today.getMonth()]=new Option(monthtext[today.getMonth()], monthtext[today.getMonth()], true, true) //select today's month
var thisyear=today.getFullYear()
for (var y=0; y<20; y++){
yearfield.options[y]=new Option(thisyear, thisyear)
thisyear+=1
}
yearfield.options[0]=new Option(today.getFullYear(), today.getFullYear(), true, true) //select today's year
}
