<?
try{
    $pdo = new PDO("mysql:host=localhost;dbname=portfoliodb", "root", "");

}catch(PDOException $pdo){
    die("Lidhja deshtoi!");
}

?>