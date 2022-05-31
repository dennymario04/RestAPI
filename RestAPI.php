<?php 
require_once 'Database.php';

if(function_exists($_GET['function'])){
    $_GET['function']();
}

function getSiswa()
{
    global $conf;
    $result = $conf -> query("SELECT * FROM calon_siswa");
    while($row = mysqli_fetch_object($result)){
        $data[] = $row;
    }
    $response = array(
        'Status'=> 1,
        'Message' => 'Success',
        'Data' => $data
    );
    header('Content-Type : application/json');
    echo json_encode($response);
}

function getIDSiswa(){

}
function insertSiswa(){

}
function removeSiswa(){

}


?>