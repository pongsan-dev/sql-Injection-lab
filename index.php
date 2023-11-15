<?php
include 'connect.php';


// Make a SQL query
$username=$_POST["username"];
$password = $_POST["password"];

$sql = "SELECT * FROM userinfo WHERE username ='$username' AND password ='$password'"; //' OR 1='1
// echo $sql;
$result = mysqli_query($conn, $sql);


if ($result){
    // output data of each row
    echo "<br><h1>Here is your personal info we do not share it with anyone</h1><br>
    <center><a href ='index.html'>Return to Sign In</a></center><br>";
    $bank_info ="";
    $row_check =array();
    while ($row = mysqli_fetch_array($result)) {
        
        if (!in_array($row["username"], $row_check)){
        $bank_info = "<div id='bankinfo'><br><p id='name'>Username: ". $row["username"]. " </p><br><p id='password'> Password: ". $row["password"]. "  </p><br><p id='money'> Balance: $" . $row["amount"] . "</p><br></div><br>".$bank_info;
        array_push($row_check, $row["username"]);
        }
        else{
            echo "<br>";
        }
    }
} else {
    $bank_info = "    <style>
    body{
width: 100%;
height: -webkit-fill-available;
min-height: 100%;
background-image: url('https://i.giphy.com/media/9SJ0zZnGVQSajeSMZ2/giphy.webp');
background-size: cover;
background-position-x: center;
color: #f0f0f0;
font-family: 'Fira Sans', sans-serif;
box-shadow: 0 20000px rgba(15, 15, 15, .96)  inset;

}
    </style><br><p>Sorry This Account does not exsist<br><a href ='index.html'>Return to Sign In</a></p>";
}


?>
<!DOCTYPE html>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>
    *Your* Secure Info
    </title>
</head>
<body>

<?php



echo $bank_info;

?>
</body>
</html>