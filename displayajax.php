<?php


$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'ajaxfeedback');


$q = " select * from ajaxfeedtable ";
$query = mysqli_query($con,$q);

if(mysqli_num_rows($query)>0){
	while($result = mysqli_fetch_array($query)){
		?>


		<tr>
			<td> <?php echo $result['Id'] ?> </td>
			<td> <?php echo $result['Name'] ?> </td>
			<td> <?php echo $result['Email'] ?> </td>
			<td> <?php echo $result['Message'] ?> </td>
			<td> <?php echo $result['Rating'] ?> </td>
		</tr>



<?php
	}
}


?>