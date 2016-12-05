<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
		<script type="text/javascript" src="jquery-1.12.0.min.js"></script>
	<script type="text/javascript" src="dist/Chart.bundle.min.js"></script>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">



</head>
<body>

<nav class="navbar navbar-inverse" >
 
</nav>

<div class="container">	
	<div id="canvas-container" style="width:50%;">
		<canvas id="chart" width="500" height="350"></canvas>
	</div>
</div>





<div class="container">
<button onclick="myFunction()">promedio precio de gasolina</button>
	
    <table class="col s12" id="tabla">
        
        <tbody>
           
             <?php
             	$url = $_POST["url"];
             	$var1=$_POST["var1"];
             	$var2=$_POST["var2"];
             	$var3=$_POST["var3"];
             	$var4=$_POST["var4"];
				$data = file_get_contents($url);
				$_id=1;

				$data_array = json_decode($data,true);
				$promedio=0;
				$sum=0;
				$i=0;  

                    foreach($data_array as $fila) {

                    	$sum=$fila[$var3]+$sum;
				 		// $promedio=floor($sum/3);
 						$array_ids[$i]=$fila[$var3];
 						$array_promedio[$i]=$promedio;

 						$array_departamentos[$i]=$fila[$var1];

                        echo "<tr>";
                        echo "<td>".$_id."</td>";
                        echo "<td>".$fila[$var1]."</td>";
                        echo "<td>".$fila[$var2]."</td>";
                        echo "<td>".$fila[$var3]."</td>";
                        echo "<td>".$fila[$var4]."</td>";
                        echo '</tr>';

                        $_id=$_id+1;
                        // $promedio=0;
                        // $sum=0;
                        $i=$i+1;
                    }
              ?>
            
        </tbody>
        <thead>
            <tr>
                <th>Id</th>
                <th><?php echo $var1; ?></th>
                <th><?php echo $var2; ?></th>
                <th><?php echo $var3; ?></th>
                <th><?php echo $var4; ?></th>
            </tr>
        </thead>
        
      </table>
</div>
<script type="text/javascript">
	$(document).ready(function(){


		var array_ids=<?php echo json_encode($array_ids);  ?>;
		var array_departamentos=<?php echo json_encode($array_departamentos);  ?>;

		var num1 = array_ids[0];
		var num2 = array_ids[1];
		var num3 = array_ids[2];
		var num4 = array_ids[3];

		var datos = {
			labels : [ array_departamentos[0], array_departamentos[1], array_departamentos[2], array_departamentos[3]],
			datasets : [{
				label : "Precio gasolina",
				backgroundColor : "rgba(108, 52, 131,0.5)",
				data : [num1,num2,num3,num4]
			}]
		}; 

		


		var canvas = document.getElementById('chart').getContext('2d');

		window.bar = new Chart(canvas, {
			type : "bar",
			data : datos,
			options : {
				scales: {
		            yAxes: [{
		                ticks: {
		                    beginAtZero:true
		                }
		            }]
		        },
				responsive : true,
				title : {
					display : true,
					text : "Prueba de grafico de barras"
				}
			}
		});
		
		function getRandom(){
			return Math.round(Math.random() * 100);
		}


	});
	</script>
<script>
		function myFunction() {
			<?php $promedio=$sum/$i; ?>
		    alert("<?php echo $promedio; ?>");
		}
</script>


	<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</body>
</html>