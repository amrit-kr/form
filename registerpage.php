<?php
   $var=mysqli_connect("localhost","root","","db");
   
   $name=($_POST['name1']);
   $roll=($_POST['rollno']);
   $branch=($_POST['branch']);
   $email=($_POST['mail']);
   
   $qry="insert into `student`(`name`,`rollno`,`branch`,`email`)
            VALUES ('{$name}','{$roll}','{$branch}','{$email}')";
			
	 $cna=mysqli_query($var,$qry); // to execute a query
   if($cna)
   {
	    echo "values inserted"."<br>";
   }
   else{
	   echo "values not inserted"."<br>";
  // echo mysqli_error($var);   //to display error in query
   }
?>