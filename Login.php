<html>  
<head>  
    <title>PHP login system</title>  
  
    <link rel = "stylesheet" type = "text/css" href = "style.css">   
</head>  
<style>
    body{   
    background: #eee;  
}  
#frm{  
    border: solid gray 1px;  
    width:25%;  
    border-radius: 2px;  
    margin: 120px auto;  
    background: white;  
    padding: 50px;  
}  
#btn{  
    color: #fff;  
    background: #337ab7;  
    padding: 7px;  
    margin-left: 70%;  
}  
</style>
<body>  
    <div id = "frm">  
        <h1>Login</h1>  
        <form action = "Chekerlog.php"  method = "POST">  
            <p>  
                <label> UserName </label>  
                <input type = "text"  name = "user" />  
            </p>  
            <p>  
                <label> Password </label>  
                <input type = "password" name = "pass" />  
            </p>  
            <p>     
                <input type = "submit"  value = "Login" /> 
                <a href="register.php">Register</a>
            </p>  
        </form>  
    </div>  

 
</body>     
</html>  