
<!DOCTYPE html>
<html>
<head><meta charset="utf-8">
<title>Diamonds Sending</title>

<meta name='theme-color' content='black'/>
<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Acme&display=swap' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Bree Serif'
rel='stylesheet'>
</head>

<style>
html{
background-color: #262626;
}
body{
color: lime;
font-family: Courier;
margin-top: 50%;
margin-left: 50;
text-align: center;
content-position: relative;
font-size: 28px;
font-weight: bold;
}
a{
color: lime;
font-family: Courier;
text-align: center;
font-size: 100%;
content-position: relative;
font-weight: bold;
text-decoration: none;
}

</style>

<h1> <a href="" class="typewrite" data-period="2000" data-type='[ "Wait 30 Min Diamonds Sending To Your Free Fire Account" ]'> <span class="wrap"></span> </a> </h1>

<script>
var TxtType = function(el, toRotate, period) { 
this.toRotate = toRotate; 
this.el = el; 
this.loopNum = 0; 
this.period = parseInt(period, 10) || 2000; 
this.txt = ''; 
this.tick(); 
this.isDeleting = false; }; TxtType.prototype.tick = function() { 
var i = this.loopNum % this.toRotate.length; 
var fullTxt = this.toRotate[i]; 
if (this.isDeleting) { 
this.txt = fullTxt.substring(0, this.txt.length - 1); } 
else { 
this.txt = fullTxt.substring(0, this.txt.length + 1); 
} 
this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>'; 
var that = this; 
var delta = 200 - Math.random() * 100; 
if (this.isDeleting) { 
delta /= 2; } 
if (!this.isDeleting && this.txt === fullTxt) { 
delta = this.period; this.isDeleting = true; } 
else if (this.isDeleting && this.txt === '') { 
this.isDeleting = false; this.loopNum++; 
delta = 500; } 
setTimeout(function() { 
that.tick(); }, delta); }; 
window.onload = function() { 
var elements = document.getElementsByClassName('typewrite'); 
for (
var i=0; i<elements.length; i++) { 
var toRotate = elements[i].getAttribute('data-type'); 
var period = elements[i].getAttribute('data-period'); 
if (toRotate) { 
new TxtType(elements[i], JSON.parse(toRotate), period); } }
var css = document.createElement("style"); css.type = "text/css"; css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid white}"; document.body.appendChild(css); };
</script>
</html>