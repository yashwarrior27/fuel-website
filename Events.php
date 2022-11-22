<?php include('include/header.php') ;
include('db.php');

?>
    <?php

try{
$db=connect();
$qus1=$db->query('SELECT * FROM event');
$db=null;
}
catch(Exception $e){
    echo $e->getMessage();

}

?>

 
 <div class='page-wrap' id='fullpage'>

<section class='backgroundcontct'>
    <h1 class="text-white">Events</h1>
</section>

<section>
    <div class="container-fluid">
        <div class="row">

      <?php  while($rows1=$qus1->fetch(PDO::FETCH_ASSOC)){


echo' <div class="col-md-6 col-lg-4">
<div class="item animated wow fadeIn">
    <img src="images/'.$rows1['image'].'" alt="">
    <div class="overlay left-overlay">
<div class="text">
<h1 class="launch_start">'.$rows1['heading'].'</h1>
<p>'.$rows1['description'].'</p>
</div>
</div>
</div>

</div>';

      }  ?>
        
        </div>
    </div>
<section>



 


<?php include('include/footer.php') ;?>