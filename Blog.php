<?php include('include/header.php') ;
      include('db.php');
?>

<?php

 try{
 $db=connect();
 $qus1=$db->query('SELECT * FROM blog_section_1');
 $rows1=$qus1->fetch(PDO::FETCH_ASSOC);
 $db=null;
 }
 catch(Exception $e){
     echo $e->getMessage();

 }

 ?>

  

 
 <div class='page-wrap' id='fullpage'>

<section class='backgroundcontct'>
    <h1 class="text-white">Blogs</h1>
</section>
  	
	<section class="section_start_opara safar-sec">
        <div class="container contaibner">
          <div class="row mt-5">
   
            <div class="col-md-6 mt-5">
              <a href="Digital_Menu_Boards.php">
                <div class="content-inner fl-wrap">
                <div class="content-front">
                  <div class="cf-inner">
                    <div class="bg" style="background-image: url('images/<?= $rows1['image'] ?>');"></div>
                    <div class="overlay"></div>
                    <div class="inner">
                      <h2><?= $rows1['img_heading'] ?> </h2>
                 
                    </div>
                  </div>
                </div>
                <div class="content-back" >
                  <div class="cf-inner">
                    <div class="inner">
                      <div class="dec-icon">
                       
                      </div>
                      <?= $rows1['img_content'] ?>
                    </div>
                  </div>
                </div>
              </div>
              </a>
            </div>
            
            <div class="col-md-6 mt-5">
            <?= $rows1['side_content'] ?>
        
            </div>
        
          
          </div>
        </div>    
                  
	   </section> 


       <?php

try{
$db=connect();
$qus2=$db->query('SELECT * FROM blog_section_2');
$db=null;
}
catch(Exception $e){
    echo $e->getMessage();

}

?>



	   
	   
<section style="margin-bottom:26px;">
    <div class="container-fluid">
        <div class="row">
            <?php  
            while($rows2=$qus2->fetch(PDO::FETCH_ASSOC)){
                echo ' <div class="col-md-6 col-sm-6">
                <div class="box">
                    <img src="images/'.$rows2['image'].'" alt="image_hover" />
                    <div class="box-content">
                        <h3>'.$rows2['heading'].'</h3>
                        <p>'.$rows2['description'].'</p>
                   <a class="btn btn-outline" href="'.$rows2['link'].'">
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