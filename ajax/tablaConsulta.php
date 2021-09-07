<?php
//CONEXION A LA BASE DE DATOS SERVIDOR
$conexion=mysqli_connect("PMYSQL132.dns-servicio.com:3306",  "marlon", "031132","7775862_abnorm");
//CONEXION POR MEDIO DE BS LOCAL
//$conexion=mysqli_connect('localhost','root','','abnorm');

//CONSULTA A LA BASE DE DATOS
$comment=$conexion->query("select * from comments order by id DESC LIMIT 10");


///TABLA DONDE SE DESPLIEGAN LOS REGISTROS //////////////////////////////
echo '<table class="table table-striped table-dark" style="font-size:12px; margin-top:-1%;">

				<tr class="active" style="color:green;">
					<th>ID Comment</th>
					<th>Name</th>
					<th>Description</th>
                                        <th>Date</th>
                                        <th>Time</th>
					
				</tr>';

				while ($filacomments = $comment->fetch_array(MYSQLI_BOTH))
				{
					echo'<tr>
						 <td>'.$filacomments['id'].'</td>
						<td>'.$filacomments['name'].'</td>
						<td>'.$filacomments['description'].'</td>
                                                 <td>'.$filacomments['date'].'</td>
                                                      <td>'.$filacomments['time'].'</td>
						
						 </tr>';
				}
				echo '</table>';
?>