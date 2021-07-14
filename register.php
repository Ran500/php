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
        <h1>Register</h1>  
        <form action = "ChekerRig.php"  method = "POST">  
            <p>  
                <label> UserName </label>  
                <input type = "text"  name  = "UserName" />  
            </p>  
            <p>  
                <label> FirstName </label>  
                <input type = "text" name  = "FirstName" />  
            </p>  
            <p>  
                <label> LastName  </label>  
                <input type = "text"  name  = "LastName" />  
            </p> 
            <p>  
                <label>  Email </label>  <br>
                <input type = "text"   name  = "Email" />  
            </p> 
            <p>  
                <label> PhoneNumber </label>  
                <input type ="text"   name = "PhoneNumber" />  
            </p> 
            <p>  
                <label> Password </label>  
                <input type = "password"  name  = "Password" />  
            </p> 
            <p>     
                <input type = "submit"   value = "Login" /> 
                <a href="Login.php">Login</a>
            </p>  
        </form>  
    </div>  

 
</body>     
</html>  