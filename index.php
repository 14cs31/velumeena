<?php
$host = 'localhost';
$username = 'id2491660_velu';
$password = 'velumeena';
$db = 'id2491660_admin';
$conn = mysqli_connect($host, $username, $password)or die("Unable to connect");
mysqli_select_db($conn,$db)or die("Unable to select");
if(isset($_POST['btn']))
{
                    $username= $_POST['name'];
                    $password =$_POST['pass'];  
                    $sql="SELECT * FROM test WHERE username ='$username' AND password='$password'   " ;  
                    $result=mysqli_query($conn,$sql)or die("Records not found !!!");
                    $count=mysqli_num_rows($result);
                    if($count>0){                        
                        header('location:resume.html');                       
                    }                
                    else{
                        echo "Invalid Credentials";
                    }
                    
            
}


 mysqli_close($conn);
?>

<html>
<head>
<title>Best Login Page design in html and css</title>
</head>
<body>
<h1> LOGIN</h1>
<form action="" method="post">
<p><input type="text" name="name"  placeholder="Username" ></p>
<p><input type="password" name="pass"  placeholder="password" ></p>
<p><input type="submit" name="btn" value="Login"></p>
</form>


</div>

</body>
</html>
