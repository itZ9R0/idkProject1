<?php 
				 $connect = mysqli_connect("127.0.0.1", "root", "", "vidoe");                                           
                 $query = mysqli_query($connect, "SELECT * FROM users WHERE name='{$_POST['name']}' AND password='{$_POST['password']}'");  
				$num = mysqli_num_rows($query);
				$stroka = $query->fetch_assoc();
				if($num > 0){									
					header("Location: home.php?number={$stroka['id']}");					
				}else{					
					header("location:index.php");					
				}
 ?>

 	