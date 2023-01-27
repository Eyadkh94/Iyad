<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="signup.css">
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<title>
  sign up
</title>
</head>
<body>
    <body style="background-image: url('background\ login.jpg');">
  <div class="main">
    <p class="sign" align="center"> sign up
</p>
    
    <form form name="f1" class="form1" action="signupsuccessfuly.php" onsubmit = "return validation()"  method="post">
      <input class="un " type="text" align="center" placeholder="Username" name="username">
      <input class="pass" type="password" align="center" placeholder="Password" name="password">
      <input class="submit" type="submit" value="sign up" align="center">
    
  </div>
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
    </html>