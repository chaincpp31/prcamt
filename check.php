<?php
require('dbconnect.php');
mysqli_query( $con, "SET NAMES UTF8" );

$sql = " SELECT * FROM student_information ";
$q = mysqli_query( $con, $sql );
$num = mysqli_num_rows( $q );
echo "จํานวน record คือ ".$num;
mysqli_close( $con );

if($num > 60){
    echo'ผู้สมัครเต็มจำนวน';
}
else{
    header('Location:'.'insert.php');
}
?>