<?php
$class = $_GET["class"];
$use = 'root';
$pass = '123456';
$s = 'localhost';
$conn = new PDO("mysql:host=$s;dbname=glxy",$use,$pass);
if($conn){
    $sql = "select * from all_plan where class=$class";
    $conn->query("SET NAMES UTF8");
    $res = $conn->query($sql);
    $array=[];
    $i = 0;
    while($next=$res->fetch()){
        $array[$i] = $next["plan"];
        $i++;
    }
    echo json_encode($array);
}
?>