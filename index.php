  <?php
   
   include('db.php');

   include('include/header.php') ;

   if(isset($_POST['emailsub'])){
     
    $email=$_POST['email'];

try{
   
  $db=connect();
  $que=$db->prepare('INSERT INTO email_subscribe(email) VALUES (:email)');
  $ch=$que->execute(['email'=>$email]);
   $db=null;
}
catch(Exception $e){
   
  echo $e->getMessage();

}

}


   ?>

<?php

 try{
 $db=connect();
 $qus1=$db->query('SELECT * FROM home_section_1');
 $rows1=$qus1->fetch(PDO::FETCH_ASSOC);
 $db=null;
 }
 catch(Exception $e){
     echo $e->getMessage();

 }

 ?>


    
    <div class='page-wrap' id='fullpage'>

<section class='listokdemofont'>
<video autoplay="" muted="" loop="" id="myVideo" width="100%">
<source src="images/<?= $rows1['video'] ?>" type="video/mp4">
</video>
</section>
<?php
try{
$db=connect();
$qus2=$db->query('SELECT * FROM home_section_2');
$rows2=$qus2->fetch(PDO::FETCH_ASSOC);
$db=null;
}
catch(Exception $e){
     echo $e->getMessage();

}



?>




<!-- Start Welcome -->
<section class='welcome section-content section background-parallax ' style="background-image: url(./images/<?= $rows2['img'] ?>);">
  <div class='overlay body-background'></div>
  <div class='container'>
    <div class='row'>
      <div class='col-sm-12'>
      <h4 class="mt-4 text-white"><?= $rows2['sub_heading'] ?></h4>
        <h1 class='section-title highlight f-bold'>
        <?= $rows2['heading'] ?>
        </h1>
        <div class='mg-t'>
          <a class='btn btn-color btn-lg js-to-slide animated onstart' data-animation-delay='300' data-animation='fadeInUp' data-slide='4' href='<?= $rows2['link'] ?>'>
            Order Diesel
          </a>
         
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Welcome -->


<?php

try{
  $db=connect();
 $qus3=$db->query('SELECT * FROM home_section_3');
 $rows3=$qus3->fetch(PDO::FETCH_ASSOC);
 $db=null;
}
catch(Exception $e){

  echo $e->getMessage();

}

?>



      
      <!-- Start About -->
      <section class='about section background-parallax '  style="background-image: url(./images/<?= $rows3['img'] ?>);">
        <div class='overlay body-background'></div>
        <div class='container'>
          <div class='row'>
            <div class='col-sm-12'>
              <div class='hero-content'>
                <h1 class='section-title text-left animated' data-animation-delay='0' data-animation='fadeInUp'>
                  <?= $rows3['heading'] ?>
                </h1>
              </div>
              <div class='row'>
                <div class='col-sm-6'>
                  <div class='mg-b'>
                    <p class='animated' data-animation-delay='100' data-animation='fadeInUp'>
                    <?= $rows3['description'] ?>
                    </p>
                  </div>
                  <a class='btn btn-outline btn-lg' href="<?= $rows3['link'] ?>">
                    About Us
                    <i class="fa fa-play" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      
<?php

try{
  $db=connect();
 $qus4=$db->query('SELECT * FROM home_section_4');
 $rows4=$qus4->fetch(PDO::FETCH_ASSOC);
 $db=null;
}
catch(Exception $e){

  echo $e->getMessage();

}

?>





      <section class='subscribe section background-parallax ' style="background-image: url(./images/<?= $rows4['img'] ?>);">
        <div class='overlay body-background'></div>
        <div class='container'>
          <div class='row'>
            <div class='col-sm-6'>
              <h1 class='section-title'>
              <?= $rows4['heading'] ?>
              </h1>
       <div class='mg-b'>
                    <p class='animated' data-animation-delay='100' data-animation='fadeInUp'>
                    <?= $rows4['description'] ?>
                    </p>
                  </div>
            </div>
          </div>
          <div class='row'>
            <div class='col-sm-5 animated' data-animation-delay='300' data-animation='fadeInUp'>
              <form action= "#" method="post" > <!-- // onsubmit="emailCheck(event)"-->
                <div class='input-group'>
                  <input class='form-control' name='email' placeholder='Your email' type='email' required>
                  <div class='input-group-btn'>
                    <button class='btn btn-outline btn-inverse' name="emailsub"  type='submit'>
                      Go
                      <i class='fa fa-angle-right'></i>
                    </button>
                  </div>
                </div>
                <p class='error-message'></p>
                <p class='success-message'></p>
              </form>
            </div>
          </div>
        </div>
      </section>
   
      <!-- <script>
        function emailCheck(e){
    e.preventDefault();
    console.log(e);
;}
      </script> -->

      <section class='services section background-parallax section-no-space bg-image-9'>
        <div class='overlay light body-background'></div>
        <div class='owl-carousel full-page-carousel owl-theme'>
          <div class='item'>
            <div class='carousel-item-inner js-vertical-middle text-center'>
              <h1 class='section-title'>
                Services
              </h1>
            </div>
          </div>
          
          <div class='item bg-dark'>
            <div class='carousel-item-inner js-vertical-middle'>
              <div class='text-center'>
                <div class='mg-b'>
                  <span class='ico-box icon-box-lg'> 01 </span>
                  <h3 class='f-thin'>
                    Diesel At Your Doorstep
                  </h3>
                  <p>
                    Humsafar provides doorstep diesel refuelling services for static or heavy equipment. Our convenient solution ensures timely diesel delivery with the assurance of safety, 
                  </p>
                </div>
                <a class='btn btn-outline'>
                  More Details
                </a>
              </div>
            </div>
          </div>
          
		  
          <div class='item color-dark bg-white'>
            <div class='carousel-item-inner js-vertical-middle'>
              <div class='text-center'>
                <div class='mg-b'>
                  <span class='ico-box icon-box-lg'>02</span>
                  <h3 class='f-thin'>
                    HMPP Fabrication
                  </h3>
                  <p>
                    With 75 years of trade experience, belonging to a family of 4th generation retailers, we offer Bowser Fabrication services with the promise of Bowser+. With Bowser+ Humsafar helps dealers boost diesel sales, and gain new customers.
                  </p>
                </div>
                <a class='btn btn-outline-dark'>
                  More Details
                </a>
              </div>
            </div>
          </div>
		  
          <div class='item bg-dark'>
            <div class='carousel-item-inner js-vertical-middle'>
              <div class='text-center'>
                <div class='mg-b'>
                  <span class='ico-box icon-box-lg'>03</span>
                  <h3 class='f-thin'>
                    Partnerships
                  </h3>
                  <p>
                    Leveraging our rich experience in the Oil industry, Humsafar offers special consultancy services to aspiring entrepreneurs to become ‘FuelEnts’ (Fuel Entrepreneurs). 
                  </p>
                </div>
                <a class='btn btn-outline'>
                  More Details
                </a>
              </div>
            </div>
          </div>

     <div class='item color-dark bg-white'>
            <div class='carousel-item-inner js-vertical-middle'>
              <div class='text-center'>
                <div class='mg-b'>
                  <span class='ico-box icon-box-lg'> 04 </span>
                  <h3 class='f-thin'>
                    Safar20
                  </h3>
                  <p>
         Humsafar has endeavored to revolutionize the  doorstep delivery of Diesel with our recently  launched initiative- ‘Safar20’.
                  </p>
                </div>
                <a class='btn btn-outline-dark'>
                  More Details
                </a>
              </div>
            </div>
          </div>
		  
		 <div class='item bg-dark'>
            <div class='carousel-item-inner js-vertical-middle'>
              <div class='text-center'>
                <div class='mg-b'>
                  <span class='ico-box icon-box-lg'>05</span>
                  <h3 class='f-thin'>
                    Safar Smart Storage Tank
                  </h3>
                  <p>
                   The ‘SAFAR Smart Storage Tank’ a diesel delivery solution equipped with automation and remote connectivity has been developed for the benefit of:
                  </p>
                </div>
                <a class='btn btn-outline'>
                  More Details
                </a>
              </div>
            </div>
          </div>
				
        </div>
        
        <!-- Custom Navigation -->
        <div class='owl-carousel-nav'>
          <div class='owl-btn prev'>
            <i class='fa fa-chevron-left'></i>
          </div>
          <div class='owl-btn next'>
            <i class='fa fa-chevron-right'></i>
          </div>
        </div>
      </section>

     <section class='section-content contacts section background-parallax bg-image-4'>
        <div class='overlay body-background'></div>
        <div class='container'>
          <div class="row align-items-center">
              
               <div class='col-sm-6'>
              <h1 class='section-title animated' data-animation-delay='50' data-animation='fadeInUp'>
                Contact us
              </h1>
              <form action='contact_form.php' method="post" >
                <div class='form-wrap'>
                  <div class='form-group animated' data-animation-delay='100' data-animation='fadeInUp'>
                    <input class='form-control form-control-no-space border-bottom'  name='name' placeholder='Name' type='text' required>
                  </div>
				   <div class='form-group animated' data-animation-delay='100' data-animation='fadeInUp'>
                    <input class='form-control form-control-no-space border-bottom'  name='phone' placeholder='Phone' type='tel' required>
                  </div>
                  <div class='form-group animated' data-animation-delay='200' data-animation='fadeInUp'>
                    <input class='form-control form-control-no-space border-bottom'  name='email' placeholder='Email' type='email' required>
                  </div>
                  <div class='form-group animated' data-animation-delay='300' data-animation='fadeInUp'>
                    <textarea class='form-control form-control-no-space border-bottom' cols='30'  name='message' placeholder='Message' rows='5' ></textarea>
                  </div>
                  <div class='form-group mg-t'>
                    <button class='btn btn-color btn-lg btn-submit animated' data-animation-delay='350' data-animation='fadeInUp' name="contactsub" type='submit'>
                      Send Message
                      <i class='fa fa-paper-plane'></i>
                    </button>
                  </div>
                </div>
                <div class='mgs'>
                  <div class='success-message'>
                    <i class='fa fa-check'></i>
                    Your message has been sent successfully.
                  </div>
                  <div class='error-message'>
                    <i class='fa fa-warning'></i>
                    E-mail must be valid
                  </div>
                </div>
              </form>
            </div>
              
            <div class="col-md-6 empoweringbox" style="text-align:center;">
            <h1 class="conta_usfooter contact-title">#Empowering With Energy</h1>
            
               <h4 class="mb-3 text-white">DOWNLOAD FUEL HUMSAFAR APP</h4>
<a href="#"><img src="images/transpate.png" width="60%"></a>
            <div class="sqs-block horizontalrule-block sqs-block-horizontalrule" data-block-type="47" id="block-yui_3_17_2_1_1618466199132_8666">

			</div>
	
            </div>  
            

    

 
 
</div>
        </div>
      </section>
      <!-- End Contacts -->
      
    </div>
  
  <?php include('include/footer.php') ;?>