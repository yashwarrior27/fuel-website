  <?php
   include('include/header.php');
   include('db.php');  
   try{

    $db=connect();
    $quesi=$db->query('SELECT * FROM about_images');
    $rowsi=$quesi->fetch(PDO::FETCH_ASSOC);
    $db=null;
    }
    catch(Exception $e){
    
    echo $e->getMessage();
    
    }
  ?>


<div class='page-wrap' id='fullpage'>

<section class='backgroundcontct text-center' style="background-image: url(./Home/<?= $rowsi['header_bg'] ?>);">
<h1 class="text-white">Why Humsafar</h1>
<a href="#">Home | Why Humsafar</a>
</section>

<?php

try{

$db=connect();
$ques1=$db->query('SELECT * FROM about_section_1');
$rows1=$ques1->fetch(PDO::FETCH_ASSOC);
$db=null;
}
catch(Exception $e){

echo $e->getMessage();

}

?>

<section class="mt-5 aboutusmargin">
<div class="container">
<div class="row align-items-center">

<div class="col-md-6 text-dark">  
<h2 class="text-dark">About us</h2>
<p><?= $rows1['content'] ;?></p>
</div>
<div class="col-md-6">
<img src="images/<?= $rowsi['section_1_img'] ?>" class="margvbin" width="100%">
</div>

<br>

<div class='col-sm-12 aboutusother_p text-dark'>
  <?php
  while($rows1=$ques1->fetch(PDO::FETCH_ASSOC)){
    echo "<p>".$rows1['content']."</p>";
  }
  ?>
</div>            

</div>
</div>
</section>


<section class="vissionmission">
<div class='container'>
<div class='row'>
<div class='col-sm-12'>

<div class='row align-items-center'>

<div class='col-sm-6'>
<img src="Home/<?= $rowsi['section_2_img'] ?>" width="100%">

</div>


<?php

try{

$db=connect();
$ques2=$db->query('SELECT * FROM about_section_2');
$db=null;
}
catch(Exception $e){

echo $e->getMessage();

}

?>


<div class='col-sm-6'>
<div class='mg-b'>
<h2 class="">Vision & Mission</h2>

<?php
$i=0;
while($rows2=$ques2->fetch(PDO::FETCH_ASSOC)){
  $i++;
  echo "<p class='animated' data-animation-delay='100' data-animation='fadeInUp'>
  <span>$i </span>".$rows2['content']."</p>";
}

?>
</div>

</div>


</div>
</div>
</div>
</div>
</section>


<section class="sectionmargin">
<div class='container text-dark'>
<div class='row'>
<div class='col-sm-12'>

<div class='row align-items-center'>

<?php

try{

$db=connect();
$ques3=$db->query('SELECT * FROM about_section_3');
$db=null;
}
catch(Exception $e){

echo $e->getMessage();

}

?>


<div class='col-sm-6'>
<div class='mg-b'>
<h2 class="">Core Values</h2>
<?php
$i=0;
while($rows3=$ques3->fetch(PDO::FETCH_ASSOC)){
  $i++;
  echo "<p class='animated' data-animation-delay='100' data-animation='fadeInUp'>
  <span>$i </span> ".$rows3['content']."</p>";
}

?>

</div>

</div>
<div class='col-sm-6'>
<img src="Home/<?= $rowsi['section_3_img'] ?>" class="margvbin11"width="100%">

</div>             

</div>
</div>
</div>
</div>
</section>

<?php

try{

$db=connect();
$ques4=$db->query('SELECT * FROM about_section_4');
$db=null;
}
catch(Exception $e){

echo $e->getMessage();

}

?>



<section class='sectionmargin'>

<div class='container text-dark'>
<div class='row'>
<div class="col-md-12 text-center">
<h3>Our Team</h3>
</div>
<div class='col-sm-12'>
<div class="owl-carousel121 owl-carousel owl-theme text-dark">

<?php
while($rows4=$ques4->fetch(PDO::FETCH_ASSOC)){
  echo '<div class="item">
  <div class="itermslider">
  <img src="Home/Team/'.$rows4['image'].'" width="100%">
  <h3>'.$rows4['name'].'</h3>
  <p>'.$rows4['authority'].'</p>
  </div>
  </div>';
}

?>

</div>

<div class='owl-carousel-nav owl-arrowrrightleft'>
<div class='owl-btn listarror prev'>
<i class='fa fa-chevron-left'></i>
</div>
<div class='owl-btn listarror next'>
<i class='fa fa-chevron-right'></i>
</div>
</div>

</div>
</div>
</div>

</section>


</div>
  
  <?php include('include/footer.php') ;?>
  
  <script>
      $('.owl-carousel121').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})
  </script>
  
