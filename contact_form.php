<?php 
include('db.php');

if(isset($_POST['contactsub'])){

    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $msg=$_POST['message']?$_POST['message']:null;
    $queryfor=$_POST['qfor']?$_POST['qfor']:null;

    try{
$db=connect();
$que=$db->prepare("INSERT INTO contact_form(name, phone, email, query_for, message) VALUES (:name,:phone,:email,:queryfor,:msg)");
$res=$que->execute(['name'=>$name,'phone'=>$phone,'email'=>$email,'queryfor'=>$queryfor,'msg'=>$msg]);
if($res){
    header('location:index.php');
}
}
catch(Exception $e){

    echo $e->getMessage();

}
}
?>