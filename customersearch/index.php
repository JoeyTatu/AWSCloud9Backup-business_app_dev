<!DOCTYPE html>

<!-- This page is only created so that a user cannot go to ../account/index.php , as it will redirect them to the Login. -->

<html>
<head>
<meta http-equiv="refresh" content="0; url=../../customersearch/search.php" />


</head>

<body>
<!-- @ref https://forums.adobe.com/thread/480963 & edited by Feeney, K -->
<div id="redirect_link" style="visibility: hidden"><a href="../../customersearch/search.php">Click here if you're not redirected</a></div>  <!-- This is used, in case the above refresh doesn't work. It will show after 5 seconds -->
<script type="text/javascript">  
function showIt() {  
  document.getElementById("redirect_link").style.visibility = "visible";  
}  
setTimeout("showIt()", 5000); // after 5 sec  
</script>  
</body>

</html>