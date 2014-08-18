<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8"> 
    <meta http-equiv="refresh" content="60">

    <meta name="viewport" content="width=device-width, initial-scale=1">
<title>Night Hawk results</title>

<link href="/emmanh/css/bootstrap.min.css" rel="stylesheet">
<link href="/emmanh/nh/local.css" rel="stylesheet">
</head>

<script>
function doit() {
 var nr = document.getElementById("teamid").value;
 var url;
 if (nr>0 && nr<100) {
   url="http://timing.spjelkavik.net/emmanh/nh2014/10012/NightHawk%20Herrer/teamsmall/"+nr;
 } else if (nr>199 && nr<300) {
   url="http://timing.spjelkavik.net/emmanh/nh2014/10012/NightHawk%20Women/teamsmall/"+nr;
 } else if (nr>300 && nr<330) {
   url="http://timing.spjelkavik.net/emmanh/nh2014/10012/Boys1113/teamsmall/"+nr;
 } else if (nr>330 && nr<400) {
   url="http://timing.spjelkavik.net/emmanh/nh2014/10012/Girls1113/teamsmall/"+nr;
 } else {
   url="http://www.bofh.no/";
 }
// url=url+"#teamheading";
 document.getElementById("teamres").src=url;
}
</script>

<body>

<div class="container"><img height="100" src="/emmanh/nh2014/images/nighthawk-750.png"></div>

<div class="container">
<form>
<label for="teamid">Team number</label>
<input type="number" id="teamid" placeholder="team number" name="teamid" autofocus="true">
<input type="submit" id="teambutton" value="Go" onclick="doit(); return false;">
</form>
</div>

<div class="container">
<iframe id="teamres" width="100%" height="1000">
</div>



<!-- //netdna.bootstrapcdn.com/bootstrap/3.1.1 -->

<script src="/emmanh/js/bootstrap.min.js"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-366767-16', 'auto');
  ga('send', 'pageview');

</script>
</body>
