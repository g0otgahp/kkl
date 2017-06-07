<?php
    // Localhost
    $host = "localhost"; // ส่วนมากมักเป็น localhost
    $user = "root"; // Username
    $pass = ""; // Password
    $dbname = "kkl"; // ชื่อฐานข้อมูล

    // // OnWeb
    // $host = "localhost"; // ส่วนมากมักเป็น localhost
    // $user = "admin_kkl"; // Username
    // $pass = "1q2w3e4r5t"; // Password
    // $dbname = "admin_kkl"; // ชื่อฐานข้อมูล


    function conndb() {
        global $conn;
        global $host;
        global $user;
        global $pass;
        global $dbname;
        $conn = mysql_connect($host,$user,$pass);

    mysql_query("SET NAMES 'utf8'");
    mysql_select_db($dbname) ;
      if (!$conn)
        die("ไม่สามารถติดต่อกับฐานข้อมูลได้");

      mysql_select_db($dbname,$conn)
        or die("ไม่สามารถเลือกใช้งานฐานข้อมูลได้");
    }

    function closedb() {
      global $conn;
      mysql_close($conn);
    }
?>
