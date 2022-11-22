<?php include('include/header.php') ;
include('db.php');
?>
  <?php

try{
$db=connect();
$qus1=$db->query('SELECT * FROM csr');
$db=null;
}
catch(Exception $e){
    echo $e->getMessage();

}

?>

 
 <div class='page-wrap' id='fullpage'>

<section class='backgroundcontct'>
    <h1 class="text-white">CSR</h1>
</section>

<section style="margin-bottom:26px;">
    <div class="container-fluid">
        <div class="row">

       <?php
       
       while($rows1=$qus1->fetch(PDO::FETCH_ASSOC)){
        echo'<div class="col-md-4 col-sm-4">
        <div class="box">
            <img src="images/'.$rows1['image'].'" alt="image_hover" />
            <div class="box-content">
                <h3>'.$rows1['heading'].'</h3>
                <p>'.$rows1['description'].'</p>
           <a class="btn btn-outline" href="'.$rows1['link'].'">
          More Details
        </a>
            </div>
        </div>
    </div>';
       }
       
       
       ?>

            
        </div>
    </div>
</section>



 


<?php include('include/footer.php') ;?>