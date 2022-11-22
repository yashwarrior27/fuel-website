<?php
 include('include/header.php');
 include('db.php'); 

?>



<?php

 try{
 $db=connect();
 $qus1=$db->query('SELECT * FROM partnership_section_1');
 $rows1=$qus1->fetchAll(PDO::FETCH_ASSOC);
 $db=null;
 }
 catch(Exception $e){
     echo $e->getMessage();

 }

 ?>



 <div class='page-wrap' id='fullpage'>

<section class='backgroundcontct'>
    <h1 class="text-white">Partnership</h1>
</section>

<section>
 <div class="we-are-block">

  <div id="about-us-section">

    <div class="about-us-image">

      <img src="images/<?= $rows1[0]['image'] ?>" width="808" height="458" alt="Lobby Image">

    </div>

    <div class="about-us-info">
       
	<?= $rows1[0]['content'] ?>

      </div>

  </div>

  <div id="history-section" class="partnership-sec">

    <div class="history-image">

      <img src="images/<?= $rows1[1]['image'] ?>" width="951" height="471" alt="Building Pic">

    </div>

    <div class="history-info">
         
	<?= $rows1[1]['content'] ?>

      </div>

  </div>

</div>   
</section>    


<section class="h--timeline js-h--timeline">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="deasil_rockin">Our Advisory Includes</h2>
        </div>
        
    </div>
    
</div>

<?php

 try{
 $db=connect();
 $qus2=$db->query('SELECT * FROM partnership_section_2');
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
		<h2 class="h--timeline-event-title"><?= $rows2['timeline_data'] ?></h2>
	  </div>
	</li>


<?php 


try{
	$db=connect();
	$qus2b=$db->query('SELECT * FROM partnership_section_2');
	$rows2b=$qus2b->fetch(PDO::FETCH_ASSOC);
	$db=null;
	}
	catch(Exception $e){
		echo $e->getMessage();
   
	}
while($rows2b=$qus2b->fetch(PDO::FETCH_ASSOC)){
	
	echo '<li class="h--timeline-event text-component">
	<div class="h--timeline-event-content container">
	  <h2 class="h--timeline-event-title">'.$rows2b['timeline_data'].'</h2>
	</div>
  </li>';
}
?>
 
  </ol>
</div> <!-- .h--timeline-events -->
</section>


<?php

 try{
 $db=connect();
 $qus3=$db->query('SELECT * FROM partnership_section_3');
 $rows3=$qus3->fetch(PDO::FETCH_ASSOC);
 $db=null;
 }
 catch(Exception $e){
     echo $e->getMessage();

 }

 ?>


<section>
    <div class="img-wrapper">
	<div class="photobanner">
  <img class="first" src="images/<?= $rows3['image'] ?>" alt="" />

<?php 
while($rows3=$qus3->fetch(PDO::FETCH_ASSOC)){
echo '<img src="images/'.$rows3['image'].'" alt="" />';
};
?>
</div>
</div>
</section>



</div>



<?php include('include/footer.php') ;?>