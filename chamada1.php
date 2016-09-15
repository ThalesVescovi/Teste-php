<!DOCTYPE html>
<html>
<head>
<title>Bootstrap basic table example</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="container">



<form action="inserirChamada.php" method="POST">

  <p><label for="cNome">Data:</label><input type="text" name="data"  id="cNome" size="6"/></p>
  <p><label for="cNome">QTD Aulas:</label><input type="text" name="qtdAula"  id="cNome" size="6"/></p>
 
  <table class="table table-bordered table-striped">
    


    <tr>
        <th>Nome</th>
        <th>Total Faltas</th>
        <th>Faltas</th>
    </tr>
   
   <?php 
	$host = "localhost:3307";
	$user = "root";
	$pass = "usbw";
	$banco = "academico";
	$con = mysqli_connect($host, $user, $pass, $banco) or die("Connection Failed");
	if (mysqli_connect_errno()){
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	    $arr = array( 
	      array("20131bsi0584",8, "Joao Pandofi"),
	      array("20122bsi9856",6, "Matheus Martins"),
	      array("20132bsi0045",4, "Juliana Braga"),
	    );
  	
  	    foreach ($arr as $value) {
  		
  		    
        echo "<tr>
       	     <td>$value[2]</td>
             <td>$value[1]</td>
             <td><input type='text' lenght='10' name = '$value[0]'></td>
       	   </tr>";
  	
  	}
  ?>
  </table>
  <input type="submit" value="Enviar" />
</form>


</div><br /><br />

</body>
</html>