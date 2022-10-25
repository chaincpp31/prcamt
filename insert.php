<!DOCTYPE html>
<html lang="en">
<body onpageshow="myFunction()">


<?php
require('dbconnect.php');
mysqli_query( $con, "SET NAMES UTF8" );
$sql = " SELECT * FROM student_information ";
$q = mysqli_query( $con, $sql );
$num = mysqli_num_rows( $q );

$check_ani_morning = " SELECT morning FROM student_information WHERE morning = 'ani' ";
$an_m = mysqli_query( $con, $check_ani_morning );
$num_ani_m = mysqli_num_rows( $an_m );
$check_ani_affternoon = " SELECT affternoon FROM student_information WHERE affternoon = 'ani' ";
$an_a = mysqli_query( $con, $check_ani_affternoon );
$num_ani_a = mysqli_num_rows( $an_a );

$check_dg_morning = " SELECT morning FROM student_information WHERE morning = 'dg' ";
$dg_m = mysqli_query( $con, $check_dg_morning );
$num_dg_m = mysqli_num_rows( $dg_m );
$check_dg_affternoon = " SELECT affternoon FROM student_information WHERE affternoon = 'dg' ";
$dg_a = mysqli_query( $con, $check_dg_affternoon );
$num_dg_a = mysqli_num_rows( $dg_a );

$check_mmit_morning = " SELECT morning FROM student_information WHERE morning = 'mmit' ";
$mmit_m = mysqli_query( $con, $check_mmit_morning );
$num_mmit_m = mysqli_num_rows( $mmit_m );
$check_mmit_affternoon = " SELECT affternoon FROM student_information WHERE affternoon = 'mmit' ";
$mmit_a = mysqli_query( $con, $check_mmit_affternoon );
$num_mmit_a = mysqli_num_rows( $mmit_a );

$check_se_morning = " SELECT morning FROM student_information WHERE morning = 'se' ";
$se_m = mysqli_query( $con, $check_se_morning );
$num_se_m = mysqli_num_rows( $se_m );
$check_se_affternoon = " SELECT affternoon FROM student_information WHERE affternoon = 'se' ";
$se_a = mysqli_query( $con, $check_se_affternoon );
$num_se_a = mysqli_num_rows( $se_a );

$check_dii_morning = " SELECT morning FROM student_information WHERE morning = 'dii' ";
$dii_m = mysqli_query( $con, $check_dii_morning );
$num_dii_m = mysqli_num_rows( $dii_m );
$check_dii_affternoon = " SELECT affternoon FROM student_information WHERE affternoon = 'dii' ";
$dii_a = mysqli_query( $con, $check_dii_affternoon );
$num_dii_a = mysqli_num_rows( $dii_a );

if($num_ani_m >= 30 || $num_ani_a >= 30 || $num_dg_m >= 30 || $num_dg_a >= 30 || $num_mmit_m >= 30 || $num_mmit_a >= 30 || $num_se_m >= 30 || $num_se_a >= 30 || $num_dii_m >= 30 || $num_dii_a >= 30) {
?>
    <script>
        function myFunction() {
        alert("ขออภัยผู้สมัครครบตามจำนวนแล้ว");
        }
    </script>
<?php
    echo"<head><meta http-equiv='Refresh'content = '0; URL = index.php'></head>"; 
}else{
$position = $_POST["position"];
$fname = $_POST["name"];
$degree = $_POST["degree"];
$school = $_POST["school"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$facebook = $_POST["facebook"];
$morning = $_POST["morning"];
$affternoon = $_POST["affternoon"];
$province = $_POST["province"];


$sql = "INSERT INTO student_information(position,name,degree,school,phone,email,facebook,morning,affternoon,province) VALUE ('$position','$fname','$degree','$school','$phone','$email','$facebook','$morning','$affternoon','$province')";

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
}
mysqli_close( $con );
?>

</body>
</html>