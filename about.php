<html>
    <head>
        <!-- Font Awesome Cdn -->
<script src="https://kit.fontawesome.com/e48d166edc.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ1 3" crossorigin="anonymous"></script>
    </head>
    
    <body>
        <style>
            #Navbar{
               position: sticky;
               top: 0;
               z-index: 10;
               background-color: white;
               font-family: 'Poppins', sans-serif;
           }
           .navbar{
               /* background-image: linear-gradient(to left,red, whitesmoke); */
               padding: 1% ;
               
           }
           .navbar i{
    display: inline-block;
    margin: 0 -15px;
}
      
           .navbar-brand{
            font-family: 'Poppins', sans-serif;
            
           }
           .navbar-nav li{
               padding: 0 10px;
               margin-left: 10px;
           }
           .navbar-nav li a{
               color:black !important ;
               font-weight: bold;
               color: #555;
           }
           .navbar-nav li a:hover{
               color:#243a6f !important;
               transition: ease-in-out 400ms;
               
           } 
           .fa-bars{
               color: black;
               font-size: 30px !important;
           }

           #header-1{
               background-color: black;
               color: white;
               text-align: center;
               font-weight:bold;
               padding: 0.4%;
           }
           #header-1 h4{
             font-size: 72%;
             margin-top: 7px;
           }


           #box-1 button{
               color: white;
               background-color: black;

             }
             #box-2 button{
               color:white;
               background-color:black;
              }
            
             #box-1 button:hover{
               background-color: white;
               color: black;
               border-radius: 50px;
               transform: scale(1.1);
               transition: ease-in-out 250ms;

             }
             #box-2 button:hover{
               background-color: white;
               color: black;
               border-radius: 50px;
               transform: scale(1.1);
               transition: ease-in-out 250ms;
              }
              #box-2 img:hover{
                opacity: 0.7;
               transform: scale(1.05);
               transition: ease-in-out 400ms;
              }
              #box-1 img:hover{
                opacity: 0.7;
               transform: scale(1.05);
               transition: ease-in-out 400ms;
              }
              #box-3 img:hover{
                opacity: 0.7;
               transform: scale(1.05);
               transition: ease-in-out 400ms;
              }
              #box-1{
                 margin-top: 10%;
                 
             }
             #box-2{
                 margin-top: 10%;
                 margin-bottom: 10%;
             }
             #box-3{
                 margin-top: 10%;
                 margin-bottom: 10%;
             }







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
    background: black;
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

<section id="header-1">
    <header >
       <h4>Free Shipping & Free Returns on all orders*</h4>
    </header>



</section>


<section id="Navbar">

   

   <nav class="navbar navbar-expand-lg navbar-light">
       <a class="navbar-brand ms-2" href="Home.php"><img src="images/logo.png" width="25%"></a>
       <button class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#Nav">
           <i class="fas fa-bars"></i>
       </button>
       
       
       <div class="collapse navbar-collapse ms-2 ps-5" id="Nav">
         <ul class="navbar-nav ms-5 ps-5">
           <li class="nav-item ">
             <a class="nav-link " href="Home.php">Home</a>
           </li>
           
           <li class="nav-item">
             <a class="nav-link" href="shop.php">Shop</a>
           </li>
           <li class="nav-item">
               <a class="nav-link" href="about.php">About</a>
             </li>
         </ul>
         
        <ul class="navbar-nav ms-auto icon me-2 ms-2">
           <li class="nav-item ">
             <a class="nav-link" href="#"><i class="fas fa-search"></i></a>
           </li>
           <li class="nav-item ">
             <a class="nav-link" href="login.html"><i class="fas fa-user"></i></a>
           </li>
           <li class="nav-item ">
             <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i></a>
           </li>
         </ul>
       </div>
       </nav>

   </section>



        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-5 mb-5" style="text-align: center; padding-bottom: 50px;">
            <h2>OUR STORY</h2>
            <p>I'm a paragraph. Click here to add your own text and edit me.<br>
                It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font.<br>
                I’m a great place for you to tell a story and let your users<br>
                know a little more about you.</p>
        </div>

        

        
        <section id="box-1" style="margin-top: 15px;"> 
            <div class ="container">
                <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center" >
                        <img src="images/Form-image1.webp" style="max-width: 70% ;height:auto ; object-fit: cover; ">
    
                    </div>
                    
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center" style="margin-top: 11%;">
                        <h1>Sustainability</h1>
                        <h2>From our farms, to our manufacturing and packaging.</h2>
                        <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. I’m a great place for you to tell a story and let your users know a little more about you.</p>

                    </div>

                    
                </div>
            </div>
        </section>

        <section id="box-2"> 
            <div class ="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center " style="margin-top: 12%;">
                        <h1>Our Factories</h1>
                        <h2>We respect people as much as we respect the planet. </h2>
                        <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. I’m a great place for you to tell a story and let your users know a little more about you.</p>

                    </div>
                    
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center ">
                        <img src="images/Factories-image.webp" style="max-width: 70%;height:100%; object-fit: cover;" >

                    </div>
                    
                </div>
            </div>
        </section>

        <section id="box-3"> 
            <div class ="container">
                <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center" >
                        <img src="images/Fabrics-image.webp" style="max-width: 70% ;height:auto ; object-fit: cover; ">
    
                    </div>
                    
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center" style="margin-top: 11%;">
                        <h1>Our Fabrics</h1>
                        <h2>Crafted from recycled and sustainably grown fibers.</h2>
                        <p>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. I’m a great place for you to tell a story and let your users know a little more about you.</p>

                    </div>

                    
                </div>
            </div>
        </section>





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
                            <p>Copyright &copy; 2021 All rights reserved | Made with <i class="fa fa-heart-o" arial-hidden="true"></i>
                                by <a href="#">HAT</a></p>
                        </div>
                    </div>
                </div>
          
          
            </div>
          
          </footer>
          
          
          
          <!-- Bootstrap Js Cdn -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
            crossorigin="anonymous"></script>
        

    </body>
</html>