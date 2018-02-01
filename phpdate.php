<?php 
// Learn more https://www.w3schools.com/php/php_date.asp
date_default_timezone_set('Asia/Bangkok'); // ตั้งค่าเขคตวันเวลาให้เป็นของประเทศ "ไทย"
$date = strtotime('2018-01-01'); //เปลี่ยน String ให้อยู่ในรูปแบบวันที่หรือเวลา
$day = strtotime('Monday');
//date 
echo "The day is " . date("d  F  Y"). "<br>"; // 14 February 2017
echo "The day is " . date("D  d  F  Y"). "<br>"; // Tue February 2017 
echo "The day is " . date("Y/m/d") . "<br>"; // 2017/02/14 แบบรับค่าวันปัจจุบัน
echo "The day is " . date("Y/m/d",$date) . "<br>"; // 2017/02/14 แบบกำหนดค่า
echo "The day is " . date("d/m/Y") . "<br>"; // 14/01/2017 แบบรับค่าวันปัจจุบัน
echo "The day is " . date("d/m/Y",$date) . "<br>"; // 14/02/2017 แบบกำหนดค่า
echo "The day is " . date("Y.m.d") . "<br>"; // 2017.02.14 แบบรับค่าวันปัจจุบัน
echo "The day is " . date("Y.m.d",$date) . "<br>"; // 2017.02.14 แบบกำหนดค่า
echo "The day is " . date("d.m.Y") . "<br>"; // 14.02.2017 แบบรับค่าวันปัจจุบัน
echo "The day is " . date("d.m.Y",$date) . "<br>"; // 14.02.2017 แบบรับค่าวันปัจจุบัน
echo "The day is " . date("Y-m-d") . "<br>"; // 2017-02-14
echo "The day is " . date("Y-m-d",$date) . "<br>"; // 2017-02-14
echo "The day is " . date("d-m-Y") . "<br>"; // 14-02-2017
echo "The day is " . date("d-m-Y",$date) . "<br>"; // 14-02-2017
echo "The day is " . date("l"). "<br>"; // แสดงวันปัจจุบัน เป็นข้อความ เช่น วันจันทร์ ผลจากการใช้ฟังก์ชันนี้ คือ  Monday
echo "The day is " . date("l",$day). "<br>"; // Monday
 
$strStartDate = "2013-04-21";
$strNewDate = date ("d", strtotime("+6 Month - 2 day", strtotime($strStartDate)));
echo "New Date = ".$strNewDate."<br>"; // 19 

// Times
echo "The time is " . date("h:i:sa")."<br>"; // The time is 09:44:36pm
echo "The time is " . date("h:i")." น.<br>"; // The time is 09:44 แบบ 12
echo "The time is " . date("H:i")." น.<br>"; // The time is 21:44 แบบ 24

$now = new DateTime();
echo $now->format('Y-m-d H:i:s')."<br>";    // MySQL datetime format  2018-02-01 22:54:20
//echo $now->getTimestamp(); 
?>