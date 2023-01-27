<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="ddd.css">
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<title>
  Sign in
  Welcome
</title>
</head>
<body>
    <body style="background-image: url('background\ login.jpg');">
  <div class="main">
    <p class="Welcome" align="center">Welcome</p>
    <p class="sign" align="center">Sign in</p>
    
    <form form name="f1" class="form1" action="welcome.php" onsubmit = "return validation()"  method="post">
      <input class="un " type="text" align="center" placeholder="Username" name="username">
      <input class="pass" type="password" align="center" placeholder="Password" name="password">
      <input class="submit" type="submit" value="Sign in" align="center">
    </form>
    <form class="form1" action="signup.php" method="post">
    <input class="submit" type="submit" value="Sign up" align="center">
    </form>
    
  </div> 
  <?php
  $queries = array();
  parse_str($_SERVER['QUERY_STRING'], $queries);
  if($queries['login'] != null && $queries['login'] == 0){
    echo "<script type=\"text/javascript\">".
    "alert('Login faild');".
    "</script>"; 
  }
  
  ?>
  <script>  
            function validation()  
            {  
                var id=document.f1.username.value;  
                var ps=document.f1.password.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
        
</body>
</html>
