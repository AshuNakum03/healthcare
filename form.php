<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "pr";
// Create a connection
$conn = mysqli_connect($servername,$username,$password,$database);

if (!$conn) {
    die("Sorry We Failed to connet: ".mysqli_connect_error());
    }
    else{
    // echo "Connection Was Successful <br>";
    } 
if($_SERVER["REQUEST_METHOD"] == "POST"){
     $name = $_POST["name"];
     $email = $_POST["email"];
     $phone = $_POST["phone"];
     $date = $_POST["date"];
     $age = $_POST["age"];
     $doctor = $_POST["doctor"];
     $message = $_POST["message"];
   
     $sql = "INSERT INTO `care` ( `name`, `email`, `phone`, `date`, `age`, `doc`, `msg`) VALUES ('$name', '$email', '$phone', '$date', '$age', '$doctor', '$message')";
     $result = mysqli_query($conn,$sql);
     if($result){

    //    echo "S";
         // header("location: login.php");  
     }
     else{
     die("Sorry We Failed to connet: ".mysqli_connect_error());
     }
   
   }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <title>Welcome</title>
</head>

<body>


    <div class="container my-4">
        <div class="alert alert" style="background-color: #73a8ec;" role="alert">

            <h2 class="text-center" style="color: #fff;">Thank you for Contacting us</h2>

        </div>
    </div>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
</body>

</html>