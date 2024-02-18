<!--
    ฟังก์ชั่นที่ทำงานเกี่ยวกับตัวแปร
        isset คือฟังก์ชั่นสำหรับตรวจสอบว่าตัวแปรมีการกำหนดค่าหรือไม่
    ถ้ากําหนดจะมีค่าเป็น True (1) ถ้าไม่กำหนดจะมีค่าเป็น False
        unset ยกเลิกตัวแปรและคืนค่าให้หน่วยความจํา
        empty ฟังก์ชั่นสำหรับตรวจสอบว่าตัวแปรมีค่าว่างหรือเลขศูนย์หรือไม่
    ถ้าเป็นค่าว่างจะเป็น True (1)ถ้าไม่เป็นค่าว่างจะเป็น False
        is_null ฟังก์ชั่นสำหรับตรวจสอบว่าตัวแปรมีค่าว่างหรือไม่
        print_r() ฟังก์ชั่นสำหรับแสดงค่าตัวแปร array
        var_dump() แสดงรายละเอียดตัวแปร ชนิดข้อมูล กี่ตัว อะไรบ้าง

    หลัง unset แล้ว ค่าจะเป็น undefined
    empty check null,"",0 = 1
-->
<?php 
$total1=null;
$total2="";
$total3=0;
$total4="somsri";

// unset($total4);
/*
echo "ค่าตัวแปล total1 =". is_null($total1)."<br>";
echo "ค่าตัวแปล total2 =". is_null($total2)."<br>";
echo "ค่าตัวแปล total3 =". is_null($total3)."<br>";
echo "ค่าตัวแปล total4 =".is_null($total4)."<br>";
*/
echo var_dump($total1)."<br>";
echo var_dump($total2)."<br>";
echo var_dump($total3)."<br>";
echo var_dump($total4)."<br>";


// isset(true=1 false=0) unset empty is_null 
// print_r()  แสดงค่าตัวแปร
// var_dump() แสดงรายละเอรยดตัวแปร
?>