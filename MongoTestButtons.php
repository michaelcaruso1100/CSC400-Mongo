 <?php 
 $Query1 = '{
	"userID" : "1000",   
	"type" : "scsu",  
	"email" : "mikep@gmail.com",
	"password" : "password", 
	"companyName" : "Apple",
	"companyAddr" : {
			"street" : "1234 Main Street",
			"city" : "New York",
			"State" : "NY",
			"zip" : "00000" 
		},
	"companyCeo" : "John Smith",
	"contactName" : "John Doe",
	"contactNum" :"123456790",
	"contactEmail" :"mikep@gmail.com"
}';
 $Query2 = '{
		"email" : "mikep@gmail.com",
		"password" : "password"
		}';
 $Query3 = "";
 $Query4 = "";
/*
include 'MongoClassFile.php';
MongoInsert($Query1);
*/
 echo' <!DOCTYPE html>  
  <html lang="en"> 
  <head> 
  <title>Test Buttons</title>
  <meta charset="utf-8">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

 </head>
 <body>
 <h3>Query1</h3> <br />
 ';
echo $Query1;
?>
<br />
<button type="button" id="CustInsert" name="CustInsert">Customer Insert</button>
  <script>
 
    $("#CustInsert").click(function() {
	  var Query1 = JSON.stringify(<?php echo $Query1 ?>);	  
      $.ajax({
	  type: "POST",
      url: "CustomerInsert.php",
      data: {'Query1':Query1},
	  success: function(data){
            console.log(data);
        }
     }).done(function(){
		alert("Data Saved");
	 });
});
  </script>
 <br />
 <?php echo $Query2 ?>
 <button type="button" id="CustLogin" name="CustLogin">Login</button>
  <script>
    $("#CustLogin").click(function() {
	  var Query2 = JSON.stringify(<?php echo $Query2 ?>);	  
      $.ajax({
	  type: "POST",
      url: "CustomerLogin.php",
      data: {'Query2':Query2},
	  success: function(data){
            alert("Your ID is:" + data);
        }
     });
});
  </script>
 </body>
 </html> 
