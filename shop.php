<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>

<head>
  <!-- Font Awesome Cdn -->
<script src="https://kit.fontawesome.com/e48d166edc.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ1 3" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

</head>




   </section>
  <!-- MAIN -->
  <main>
    <!-- HERO -->
    <div class="nero">
      <div class="nero__heading">
        <span class="nero__bold">shop</span> AT Overlays
      </div>
      <p class="nero__text">
      </p>
    </div>
  </main>


<div id="content" ><!-- content Starts -->
<div class="container" ><!-- container Starts -->

<div class="col-md-12" ><!--- col-md-12 Starts -->



</div><!--- col-md-12 Ends -->

<div class="col-md-3"><!-- col-md-3 Starts -->

<?php include("includes/sidebar.php"); ?>

</div><!-- col-md-3 Ends -->

<div class="col-md-9" ><!-- col-md-9 Starts --->


<?php getProducts(); ?>

</div><!-- row Ends -->

<center><!-- center Starts -->

<ul class="pagination" ><!-- pagination Starts -->

<?php getPaginator(); ?>

</ul><!-- pagination Ends -->

</center><!-- center Ends -->



</div><!-- col-md-9 Ends --->



</div><!--- wait Ends -->

</div><!-- container Ends -->
</div><!-- content Ends -->



<style>
	p{
    font-size: 15px;
    font-family: "Nunito Sans" , sans-serif ;
    color: #3d3d3d;
    font-weight: 400;
    line-height: 25px;
    margin: 0 0 15px 0;
}
img{
    max-width: 100%;
}
a{
    text-decoration: none;
}
ul{
    padding-left: 0;
}

input:focus{
    outline: none;
}
a:hover,
a:focus{
    text-decoration: none;
    outline: none;
    color: #ffffff;
}

                .footer{
    background: #111111;
    padding-top: 70px;
}
.footer-about{
    margin-bottom: 30px;
}
.footer-about .footer-logo{
    margin-bottom: 30px;
}
.footer-about p{
    color: #b7b7b7;
    margin-bottom: 30px;
}
.footer-widget{
    margin-bottom: 30px;
}
.footer-widget h6{
    color:  #ffffff;
    font-size: 15px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-bottom: 20px;
}
.footer-widget ul li{
    line-height: 36px;
    list-style: none;
}
.footer-widget ul li a{
    color: #b7b7b7;
    font-size: 15px;
}
.footer-widget ul li a:hover{
    color: #e53637;
}
.footer-widget .footer-newslatter p{
    color: #b7b7b7;
}
.footer-widget .footer-newslatter form{
    position: relative;
}
.footer-widget .footer-newslatter form input{
    width: 100%;
    font-size: 15px;
    color: #ffffff;
    background: transparent;
    border: none;
    padding: 15px 0;
    border-bottom: 2px solid #ffffff;
}
.footer-widget .footer-newslatter form input::placeholder{
    color: #b7b7b7;
}
.footer-widget .footer-newslatter form button{
    color: #b7b7b7;
    font-size: 16px;
    position: absolute;
    right: 5px;
    top: 0;
    height: 100%;
    background: transparent;
    border: none;
}
.footer-copyright-text{
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    padding: 20px 0;
    margin-top: 40px;
}
.footer-copyright-text p{
    color: #b7b7b7;
    margin-bottom: 0;
}
.footer-copyright-text p i{
    color: #e53637;
}
.footer-copyright-text p a{
    color: #e53637;
}
</style>

<!-- Footer section Begin -->
<footer class="footer">
      <div class="container">
          <div class="row">


              <div class="col-lg-3 col-md-6 col-sm-6">
                  <div class="footer-about">
                      <div class="footer-logo">
                          <a href="#"><img src="images/footer-logo.png" alt=""></a>
                      </div>
                      <p>The Customer is at the heart of our unique bussiness model, which include design.</p>
                      <a href="#"><img src="images/payment.png" alt=""></a>
                  </div>
              </div>

              <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                  <div class="footer-widget">
                      <h6>Shopping</h6>
                      <ul>
                          <li><a href="#">New Arrivals</a></li>
                          <li><a href="#">Trending Products</a></li>
                          <li><a href="#">Winter Collections</a></li>
                          <li><a href="#">Sale</a></li>

                      </ul>
                  </div>
              </div>

              <div class="col-lg-2  col-md-3 col-sm-6">
                  <div class="footer-widget">
                      <h6>Links</h6>
                      <ul>
                          <li><a href="#">Contact Us</a></li>
                          <li><a href="#">Payment Methods</a></li>
                          <li><a href="#">Delivery</a></li>
                          <li><a href="#">Return & Refund</a></li>

                      </ul>
                  </div>
              </div>

              <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
                  <div class="footer-widget">
                      <h6>NewsLetter</h6>
                      <div class="footer-newslatter">
                          <p>Be the first to know about new arrivals, bestseller, sales & promos!</p>
                          <form action="#">
                              <input type="text" placeholder="Your Email">
                              <button type="submit"><span><i class="fa fa-envelope"
                                          arial-hidden="true"></i></span></button>
                          </form>
                      </div>

                  </div>
              </div>


          </div>

          <div class="row">
              <div class="col-lg-12 text-center">
                  <div class="footer-copyright-text">
                      <p>Copyright &copy; 2022 All rights reserved | Made with <i class="fa fa-heart-o" arial-hidden="true"></i>
                          by <a href="#">HAT</a></p>
                  </div>
              </div>
          </div>


      </div>

  </footer>

<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>

<script>

$(document).ready(function(){

/// Hide And Show Code Starts ///

$('.nav-toggle').click(function(){

$(".panel-collapse,.collapse-data").slideToggle(700,function(){

if($(this).css('display')=='none'){

$(".hide-show").html('Show');

}
else{

$(".hide-show").html('Hide');

}

});

});

/// Hide And Show Code Ends ///

/// Search Filters code Starts ///

$(function(){

$.fn.extend({

filterTable: function(){

return this.each(function(){

$(this).on('keyup', function(){

var $this = $(this),

search = $this.val().toLowerCase(),

target = $this.attr('data-filters'),

handle = $(target),

rows = handle.find('li a');

if(search == '') {

rows.show();

} else {

rows.each(function(){

var $this = $(this);

$this.text().toLowerCase().indexOf(search) === -1 ? $this.hide() : $this.show();

});

}

});

});

}

});

$('[data-action="filter"][id="dev-table-filter"]').filterTable();

});

/// Search Filters code Ends ///

});



</script>


<script>


$(document).ready(function(){

  // getProducts Function Code Starts

  function getProducts(){

// Products Categories Code Starts

var aInputs = Array();

var aInputs = $('li').find('.get_p_cat');

var aKeys = Array();

var aValues = Array();

iKey = 0;

$.each(aInputs,function(key,oInput){

if(oInput.checked){

aKeys[iKey] =  oInput.value

};

iKey++;

});

if(aKeys.length>0){

for(var i = 0; i < aKeys.length; i++){

sPath = sPath + 'p_cat[]=' + aKeys[i]+'&';

}

}

// Products Categories Code ENDS

   // Loader Code Starts

$('#wait').html('<img src="images/load.gif">');

// Loader Code ENDS

// ajax Code Starts

$.ajax({

url:"load.php",

method:"POST",

data: sPath+'sAction=getProducts',

success:function(data){

 $('#Products').html('');

 $('#Products').html(data);

 $("#wait").empty();

}

});

    $.ajax({
url:"load.php",
method:"POST",
data: sPath+'sAction=getPaginator',
success:function(data){
$('.pagination').html('');
$('.pagination').html(data);
}

    });

// ajax Code Ends

   }

   // getProducts Function Code Ends

$('.get_manufacturer').click(function(){

getProducts();

});


  $('.get_p_cat').click(function(){

getProducts();

});

$('.get_cat').click(function(){

getProducts();

});


 });

</script>

</body>

</html>
