<!-- 
    ชนิดข้อมูลของตัวแปร
1. Integer คือเลขจำนวนเต็ม เช่น 1, 2, 3...(ฐาน 10, 8, 16) เป็นต้น
2. Float/Double คือเลขจำนวนจริง เช่น 1.23, 3,14,... เป็นต้น
3. Boolean คือข้อมูลทางตรรกศาสตร์มีค่า จริง (True), เท็จ (False)
4. String คือตัวอักษรหรือชุดข้อความเขียนภายในเครื่องหมาย
5. Array คือชุดหรือกลุ่มของข้อมูลที่มีชนิดข้อมูลเดียวกัน
6. Object คือการกำหนดให้ตัวแปรนั้นเก็บคุณสมบัติของ Object (Attribute &
Method) โดยการประกาศใช้งานผ่าน Class (OOP) 

gettype() => check type => gettype('somchai'), gettype(2)
settype() => set type => settype(90.58,"integer")
-->
<?php
$price=50; //integer
$score=90.58; // double
$name = "somsri studio"; //string

$isvaild=false;

$price = $price+100; //50+100; =>price

echo $name."<br>";
echo $isvaild."<br>";
echo $price."<br>";
echo $score."<br>";

echo "<hr>";

echo gettype($name)."<br>";
echo gettype($isvaild)."<br>";
echo gettype($score)."<br>";
echo gettype($price)."<br>";

echo"<hr>";
echo "ก่อนเปลี่ยน = ".gettype($score)."<br>";
settype($score,"integer");
echo "หลังเปลี่ยน = ".gettype($score)."<br>";

// echo"<hr>";
// echo "<h1>Test</h1>";
// $aa = 100;
// $aa1 = 10.10;
// $aa2 = 'name99';
// $aa3 = '888';

// echo "aa  = ".$aa ."check type = ".gettype($aa)."<br>";
// echo "aa1 = ".$aa1."check type = ".gettype($aa1)."<br>";
// echo "aa2 = ".$aa2."check type = ".gettype($aa2)."<br>";
// echo "aa3 = ".$aa3."check type = ".gettype($aa3)."<br>";

?>