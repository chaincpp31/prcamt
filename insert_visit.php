<!DOCTYPE html>
<html lang="en">
<body onpageshow="myFunction()">


<?php
require('dbconnect.php');
mysqli_query( $con, "SET NAMES UTF8" );
$sql = " SELECT * FROM visit_information ";
$q = mysqli_query( $con, $sql );
$num = mysqli_num_rows( $q );

$position = $_POST["position"];
$fname = $_POST["name"];
$degree = $_POST["degree"];
$school = $_POST["school"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$facebook = $_POST["facebook"];
$visit = $_POST["visit"];
$province = $_POST["province"];


$sql = "INSERT INTO visit_information(position,name,degree,school,phone,email,facebook,visit,province) VALUE ('$position','$fname','$degree','$school','$phone','$email','$facebook','$visit','$province')";

$result = mysqli_query($con,$sql);

if($result){
    ?>
    <script>
        function myFunction() {
        alert("บันทึกข้อมูลสำเร็จ");
        }
    </script>
<?php
    echo"<head><meta http-equiv='Refresh'content = '0; URL = index.php'></head>"; 
}
mysqli_close( $con );
?>

</body>
</html>