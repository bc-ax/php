<?php
  $conn = new mysqli('localhost','root','root','db_estate');

   mysqli_query($conn,"set character set gb2312");
   /*mysqli_query($conn,"set names utf8");*/
   if($conn->connect_error){
       die('���ݿ�����ʧ��'.$conn->connect_error);
   }else{
       // echo "�ɹ�";
   }

   $gm = 'es_parking_space';
// ���������ֶ���Ϣ
$sql = mysqli_query ($conn,"SHOW FULL COLUMNS FROM $gm");
//print_r($sql);
echo $gm."<br>";
$col = mysqli_num_rows ($sql);

// print_r($name);
for ($i=0; $i < $col; $i++) { 
  $name = mysqli_fetch_array($sql);
  // print_r($name);
  echo "<table><tr style='height:50px;'>";
  echo "<td style='width:200px'>".$name[0]."</td><td style='width:200px'>".$name[1]."</td><td style='width:200px'>".$name[8]."</td>";
  echo "</tr></table>";
}
?>