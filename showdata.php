<meta charset="UTF-8">
<?php
//1. เชื่อมต่อ database: 
include('dbconnect.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
 
//2. query ข้อมูลจากตาราง tb_member: 
$query = "SELECT * FROM student_information ORDER BY id asc" or die("Error:" . mysqli_error()); 
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result . 
$result = mysqli_query($con, $query); 
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล: 
 
echo "<table border='1' align='center' width='500'>";
//หัวข้อตาราง
echo "<tr align='center' bgcolor='#CCCCCC'><td>รหัส</td><td>Uername</td><td>ชื่อ</td><td>นามสกุล</td><td>อีเมล์</td><td>แก้ไข</td><td>ลบ</td></tr>";
if($result){
while($row = mysqli_fetch_array($result)) { 
  echo "<tr>";
  echo "<td>" .$row["id"] .  "</td> "; 
  echo "<td>" .$row["name"] .  "</td> ";  
  echo "<td>" .$row["degree"] .  "</td> ";
  echo "<td>" .$row["school"] .  "</td> ";
  echo "<td>" .$row["phone"] .  "</td> ";
  //แก้ไขข้อมูล
  echo "<td><a href='UserUpdateForm.php?ID=$row[0]'>edit</a></td> ";
  
  //ลบข้อมูล
  echo "<td><a href='UserDelete.php?ID=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\">del</a></td> ";
  echo "</tr>";
}
}
else{
    "fail";
}
echo "</table>";
//5. close connection
mysqli_close($con);
?>
