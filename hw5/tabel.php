
<?php
include("config.php");
$tbl_stdinfo="CREATE TABLE IF NOT EXISTS std_info(
s_id INT (11) NOT NULL,
PRIMARY KEY (s_id),
name VARCHAR (20) NOT NULL,
email VARCHAR (20) NOT NULL,
uname VARCHAR  (10) NOT NULL,
password VARCHAR (20) NOT NULL)";
$result1=mysqli_query($myconn,$tbl_stdinfo);
if($result1===TRUE)
{ 
echo"student information tabel created  ";
}
else{
echo"student information tabel not  created  ";
}
/// REGISTRTION TABEL
$tbl_reg="CREATE TABLE IF NOT EXISTS std_reg(
s_id INT (11) NOT NULL,
det VARCHAR (20) NOT NULL,
course VARCHAR (20) NOT NULL,
FOREIGN KEY (s_id) REFERENCES std_info (s_id)
)";
$result2=mysqli_query($myconn,$tbl_reg);
if($result1===TRUE)
{ 
echo"student registration  tabel created  ";
}
else{
echo"student registration tabel not  created  ";
}
/// COURSE TABEL
$std_course="CREATE TABLE IF NOT EXISTS std_course(
s_id INT (11) NOT NULL,
dept VARCHAR (20) NOT NULL,
course_name VARCHAR (20) NOT NULL,
FOREIGN KEY (s_id) REFERENCES std_info (s_id)
)";
$result2=mysqli_query($myconn,$std_course);
if($result1===TRUE)
{ 
echo"student course  tabel created  ";
}
else{
echo"student course tabel not  created  ";
}
/// RESULT TABEL
$std_result="CREATE TABLE IF NOT EXISTS std_result(
s_id INT (11) NOT NULL,
det VARCHAR (20) NOT NULL,
result VARCHAR (20) NOT NULL,
FOREIGN KEY (s_id) REFERENCES std_info (s_id)
)";
$result2=mysqli_query($myconn,$std_result);
if($result1===TRUE)
{ 
echo"student result  tabel created  ";
}
else{
echo"student result tabel not  created  ";
}
?>