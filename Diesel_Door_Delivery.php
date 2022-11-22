<?php include('include/header.php') ;
  include('db.php');
?>

<?php

 try{
 $db=connect();
 $qus1=$db->query('SELECT * FROM ddd_section_1');
 $rows1=$qus1->fetch(PDO::FETCH_ASSOC);
 $db=null;
 }
 catch(Exception $e){
     echo $e->getMessage();

 }

 ?>



 
 <div class='page-wrap' id='fullpage'>

<section class='backgroundcontct'>
    <h1 class="text-white">Diesel Door Delivery</h1>
</section>

      	
	<section class="section_start_opara safar-sec">
        <div class="container contaibner">
          <div class="row mt-5">
   
            <div class="col-md-6 mt-5">
              <a href="Digital_Menu_Boards.php">
                <div class="content-inner fl-wrap">
                <div class="content-front">
                  <div class="cf-inner">
                    <div class="bg" style="background-image: url(images/<?= $rows1['image'] ?>);"></div>
                    <div class="overlay"></div>
                    <div class="inner">
                      <h2><?= $rows1['image_head'] ?></h2>
                 
                    </div>
                  </div>
                </div>
                <div class="content-back" style="background-image: url(images/cathedral-7353781__340.webp);">
                  <div class="cf-inner">
                    <div class="inner">
                      <div class="dec-icon">
                       
                      </div>
                      <?= $rows1['image_content'] ?>
              
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
     $rows1b=$qus1->fetch(PDO::FETCH_ASSOC);
     
     ?>
   
        	
	<section class="section_start_opara pb-5">
        <div class="container contaibner">
          <div class="row mt-5">
   
        <div class="col-md-6 mt-5">
                <?= $rows1b['side_content']?>

            </div>
        
   
            <div class="col-md-6 mt-5">
              <a href="Digital_Menu_Boards.php">
                <div class="content-inner fl-wrap">
                <div class="content-front">
                  <div class="cf-inner">
                    <div class="bg" style="background-image: url(images/<?= $rows1b['image']?>);"></div>
                    <div class="overlay"></div>
                    <div class="inner">
                    <h2><?= $rows1b['image_head'] ?></h2>
                 
                 
                    </div>
                  </div>
                </div>
                <div class="content-back" style="background-image: url(images/cathedral-7353781__340.webp);">
                  <div class="cf-inner">
                    <div class="inner">
                      <div class="dec-icon">
                       
                      </div>
                      <h2><?= $rows1b['image_content'] ?></h2>   
                   </div>
                  </div>
                </div>
              </div>
              </a>
            </div>
            
       
          
          </div>
        </div>    
                  
	   </section>  




<section class="h--timeline js-h--timeline">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="deasil_rockin">FAQ & Information</h2>
        </div>
        
    </div>
    
</div>


<?php

 try{
 $db=connect();
 $qus2=$db->query('SELECT * FROM ddd_section_2');
 $rows2=$qus2->fetch(PDO::FETCH_ASSOC);
 $db=null;
 }
 catch(Exception $e){
     echo $e->getMessage();

 }

 ?>


<div class="h--timeline-container">
  <div class="h--timeline-dates">
	<div class="h--timeline-line">
	  <ol>
    <li class="right_now"><a href="#0" data-date="<?= $rows2['date'] ?>" class="h--timeline-date h--timeline-date--selected">1</a></li>
		<?php 
		$i=1;
		while($rows2b=$qus2->fetch(PDO::FETCH_ASSOC)){
			$i++;
			echo '<li class="right_now"><a href="#0" data-date="'.$rows2b['date'].'" class="h--timeline-date">'.$i.'</a></li>';
		}
		?>
		
	  </ol>

	  <span class="h--timeline-filling-line" aria-hidden="true"></span>
	</div> <!-- .h--timeline-line -->
  </div> <!-- .h--timeline-dates -->

  <nav class="h--timeline-navigation-container">
	  <ul>
		<li><a href="#0" class="text-replace h--timeline-navigation h--timeline-navigation--prev h--timeline-navigation--inactive">Prev</a></li>
		<li><a href="#0" class="text-replace h--timeline-navigation h--timeline-navigation--next">Next</a></li>
	  </ul>
  </nav>
</div> <!-- .h--timeline-container -->

<div class="h--timeline-events">
  <ol>

	

	<li class="h--timeline-event text-component">
	  <div class="h--timeline-event-content container">
		<h2 class="h--timeline-event-title"><?= $rows2['timeline_head'] ?></h2>
		
		<p class="get_desil">
	<?= $rows2['timeline_content'] ?>
		</p>
	  </div>
	</li>
  <?php
  try{
	$db=connect();
	$qus2b=$db->query('SELECT * FROM ddd_section_2');
	$rows2b=$qus2b->fetch(PDO::FETCH_ASSOC);
	$db=null;
	}
	catch(Exception $e){
		echo $e->getMessage();
	}

while($rows2b=$qus2b->fetch(PDO::FETCH_ASSOC)){
   
  echo '<li class="h--timeline-event text-component">
  <div class="h--timeline-event-content container">
  <h2 class="h--timeline-event-title">'.$rows2b['timeline_head'].'</h2>

  <p class="get_desil">
  '.$rows2b['timeline_content'].'
  </p>
  </div>
</li>
';
}
?>

 
  </ol>
</div> <!-- .h--timeline-events -->
</section>


<?php

 try{
 $db=connect();
 $qus3=$db->query('SELECT * FROM ddd_section_3');
 $db=null;
 }
 catch(Exception $e){
     echo $e->getMessage();
 }

 ?>

<section class="blog">
        <div class="container">
          <div class="row">
          <?php   
          while($rows3=$qus3->fetch(PDO::FETCH_ASSOC)){

           echo '  <div class="col-md-4">
           <div class="item animated wow fadeIn">
               <img src="images/'.$rows3['image'].'" alt="">
               <div class="overlay title-overlay">
 <div class="text">'.$rows3['heading'].'</div>
</div>
           </div>
         </div>';
          };
           ?>         

        </div>
        </div>
      </section>

<section class="form-sec">
    <div class="container">
	<div class="row">
			<h1 class="safar-heading">Get Diesel Delivered</h1>
	</div>

	<div class="row " >
    <form method="post" action="contact_form.php">
			<div class="col-xs-12">
				<div class="styled-input wide">
					<input type="text" required name="name" style="color: black !important; font-size: 15px;" />
					<label>Name</label> 
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input">
					<input type="email" required  name="email" style="color: black !important; font-size: 15px;" />
					<label>Email</label> 
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="styled-input" style="float:right;">
					<input type="number" required name="phone" style="color:black !important; font-size: 15px;" />
					<label>Phone Number</label> 
				</div>
			</div>
			<div class="col-xs-12">
				<div class="styled-input wide">
					<textarea name="message" style="color:black !important; font-size: 15px;" required></textarea>
					<label>Query</label>
				</div>
			</div>
			<div class="col-xs-12">
      <button class="btn-lrg submit-btn" type="submit" name="contactsub">Send Message </button>	
			</div>
    </form>
	</div>
</div>
</section>	   
	   
 


<?php include('include/footer.php') ;?>