<?php include('include/header.php') ;
  include('db.php');
?>
  
  <?php

try{
$db=connect();
$qus1=$db->query('SELECT * FROM safar_smart');
$rows1=$qus1->fetch(PDO::FETCH_ASSOC);
$db=null;
}
catch(Exception $e){
    echo $e->getMessage();
}

?>


 
 <div class='page-wrap' id='fullpage'>

<section class='backgroundcontct'>
    <h1 class="text-white">Safar Smart Storage Tank</h1>
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
                      <h2><?= $rows1['image_heading'] ?></h2>
                 
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
 
 	   
<section class="form-sec">
    <div class="container">
	<div class="row">
			<h1 class="safar-heading">Storage Tank Query Form</h1>
	</div>

  <div class="row" >
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
	   
 
</div>      

<?php include('include/footer.php') ;?>