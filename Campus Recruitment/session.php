<?php
// include("includes/database.php");
$con=mysqli_connect('localhost','root','','campus_recruitment');
// mysql_select_db('campus_recruitment',$con);
session_start();
if (!isset($_SESSION['id'])){
header('location:login.php');
}
$id = $_SESSION['id'];
$s="select * from students where s_id ='$id'";
$isSelected="select * from application where sid='$id' and status='Accepted'";
$Selectedcheck=mysqli_query($con,$isSelected);
$selected_row=mysqli_num_rows($Selectedcheck);
$selected=mysqli_fetch_array($Selectedcheck);
if($selected_row>0){
    $j_id=$selected['j_id'];
    $cmpquery="select * from company where id IN (select c_id from jobs where job_id='$j_id')";
    $cmpque=mysqli_query($con,$cmpquery);
    $company=mysqli_fetch_array($cmpque);
    $C_Name=$company['Company_Name'];
}
$res=mysqli_query($con,$s);
$r=mysqli_fetch_array($res);
$firstname=$r['fname'];
$lastname=$r['lname'];
$email=$r['email'];
$dob=$r['dob'];
$gender=$r['gender'];
$mobile=$r['mobile_no'];
$course=$r['course'];
$s_id=$r['s_id'];
$passing_year=$r['passing_year'];
?>
