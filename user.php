 <html>
 <head>
<style>
table {
    width:100%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}
table#t01 th {
    background-color: black;
    color: white;
}
</style>
 </head>
 <body>
 
 <br> <br> <br>
 <div>
 <h>ENTER UR NAME HERE FOR MORE INFO</h>
  <br> <br>
 <form action="http://localhost/form/user.php" method="POST" >
  NAME <input type= "text" name="name1" placeholder="enter ur name for info">
 <br><br>
 
   <input type="submit" value="click here">
  </form>
  </div>
<?php
  $cn=mysqli_connect("localhost", "root" , "" ,"db" );

  if (isset($_POST['name1']))
  {
	  $nam=$_POST['name1'];
	  $name=mysqli_real_escape_string($cn,$nam); //to filter from sql query or prevent frm hacking
	   $qry= "select * from `student` where `name`= '{$name}' ";
     $c =mysqli_query($cn,$qry);
	 $res=mysqli_fetch_assoc($c);
   if(!empty($res))
   {
	    echo "<h2>data obtained</h2><br>";
	  /*  $name=$res[0];
		$rollno=$res[1];
		$branch=$res[2];
		$email=$res[3];  */
		// print_r ($res);
		
	/*  for($i=0;$i<4;$i++)
		{
			   if($i==0)
				echo "NAME: ".$res["name"]."<br>";
						if($i==1)
				echo "ROLL NO: ".$res["rollno"]."<br>";
						if($i==2)
				echo "BRANCH: ".$res["branch"]."<br>";
						if($i==3)
				echo "EMAIL ID: ".$res["email"]."<br>";
		}  
		   */
	    echo '<table id="t01"><tr><th>NAME</th>
		<th>ROLL NO</th><th>BRANCH</th><th>EMAIL ID</th></tr>';
	echo "<tr><td>". $res['name']." </td>";
   echo "<td>".$res['rollno']." </td>";
    echo "<td> ".$res['branch']."</td>";
	 echo "<td>".$res['email']."</td>";
  echo "</tr></table>";	
   }
   else{
	   echo "data not obtained"."<br>";
      }
		
  } 
 /* 
 <html>
<style>
table {
    width:100%;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color:#fff;
}
table#t01 th {
    background-color: black;
    color: white;
}
</style>
<table id="t01">
  <tr>
    <th>NAME</th>
    <th>ROLL NO</th> 
    <th>BRANCH</th>
	<th>EMAIL ID</th>
  </tr>
  <tr>
    <td><?php echo $name; ?></td>
    <td><?php echo $rollno; ?></td>
    <td><?php echo $branch; ?></td>
	  <td><?php echo $email; ?></td>
  </tr>

</table>
</html>
  */
?>


  </body>
 </html>