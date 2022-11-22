<?php include('include/header.php') ;
include('db.php');

?>
  
  <?php

try{
$db=connect();
$qus1=$db->query('SELECT * FROM media_press');
$db=null;
}
catch(Exception $e){
    echo $e->getMessage();

}

?>





 
 <div class='page-wrap' id='fullpage'>

<section class='backgroundcontct'>
    <h1 class="text-white">Media</h1>
</section>

	<section>
    <div class="container-fluid">
        <div class="row">
    <?php
     while($rows1=$qus1->fetch(PDO::FETCH_ASSOC)){
     
echo'

<div class="col-md-3 col-sm-6">
<div class="our-team">
    <div class="team-img">
        <img src="images/'.$rows1['image'].'">
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