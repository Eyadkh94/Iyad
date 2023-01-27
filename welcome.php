<!-- main container -->
<link rel="stylesheet" href="welcome.css">
<main>
				<!-- navbar -->
				<nav class="navbar">
					<ul>
						<li><a href="welcome.php?s=1">Home</a></li>
						<li><a href="download.php">Blogs</a></li>
						<li><a href="upload.php">upload</a></li>
					</ul>
				</nav>
				<!-- navbar -->
		</main>
<h1 align="center">
    Welcome to our library System
</h1>
        <?php   
        $queries = array();
        parse_str($_SERVER['QUERY_STRING'], $queries);
        if($queries == null || $queries['s'] != 1){
            include('connection.php');  
            $username = $_POST['username']; 
            $password = $_POST['password']; 
              
               
                $username = stripcslashes($username);  
                $password = stripcslashes($password);  
                $username = mysqli_real_escape_string($con, $username);  
                $password = mysqli_real_escape_string($con, $password);  
                
              
                $sql = "select *from users where username = '$username' and password = '$password'";  
                $result = mysqli_query($con, $sql);  
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                $count = mysqli_num_rows($result);  
                  
                if($count == 1){  
                    echo "<script type=\"text/javascript\">".
                "alert('Login successful');".
                "</script>";
                }  
                else{  
                    echo "<script type=\"text/javascript\">".
                "alert('Login faild');".
                "</script>";  
                    header('Location: done.php?login=0');
                    
                }     
        }   
    
?>  