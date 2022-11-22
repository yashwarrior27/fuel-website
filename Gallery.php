<?php include('include/header.php') ;
include('db.php');
?>

<?php

try{
$db=connect();
$qus1=$db->query('SELECT * FROM gallery');
$db=null;
}
catch(Exception $e){
    echo $e->getMessage();

}

?>


 
 <div class='page-wrap' id='fullpage'>

<section class='backgroundcontct'>
    <h1 class="text-white">Gallery</h1>
</section>

<section class="blog">
        <div class="container">
    
          <div class="row">

    <?php 
    while($rows1=$qus1->fetch(PDO::FETCH_ASSOC)){

    echo '
    <div class="col-md-4">
    <div class="item animated wow fadeIn">
        <img src="images/'.$rows1['image'].'" alt="">
        <div class="overlay title-overlay">
<div class="text">'.$rows1['description'].'</div>
</div>
    </div>
  </div>
    
    ';
    }
    ?>
       </div>
        </div>
      </section>   

 


<?php include('include/footer.php') ;?>