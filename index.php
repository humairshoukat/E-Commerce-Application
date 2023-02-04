<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
// include("includes/main.php");

?>

<html>
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
    <body>
        <style>
         @import url('https://fonts.googleapis.com/css2?family=Monoton&display=swap'); 
         @import url('https://fonts.googleapis.com/css2?family=Corinthia&family=Monoton&display=swap');
         * {
             margin: 0;
             padding: 0;
           }
           body{
            font-family: 'Poppins', sans-serif;
           }

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


            #Header-2{

              background-image: url(images/Header-2-img.jpg);
              padding: 20%;
              background-size: cover;
              background-attachment: fixed;
              color: white;
              text-align: center;
              font-family:Arial, Helvetica, sans-serif;
              font-weight: bolder;
             }
             #Header-2 p{
               color: white;
               
             }
             #Header-2 button{
               background-color:black;
               color: white;
               cursor: pointer;
               
             }
             #Header-2 button:hover{
               background-color: white;
               color: black;
               border-radius: 50px;
               transform: scale(1.1);
               transition: ease-in-out 250ms;
             }

             #Mission{
               text-align: center;
               font-family:Arial, Helvetica, sans-serif;
               font-weight: bolder;
               font-size: large;
               padding: 5%;
              
             }
             #Mission h4{
               color: black;
             }
             #box-1 button{
               color: white;
               background-color: black;
               cursor: pointer;

             }
             #box-2 button{
               color:white;
               background-color:black;
               cursor: pointer;
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
             #box-2{
                 margin-top: 3%;
                 margin-bottom: 3%;
             }
              #Header-3{

              background-image: url(images/Header-3-img.jpg);
              padding: 20%;
              background-size: cover;
              background-attachment: fixed;
              color: white;
              text-align: center;
              font-family:Arial, Helvetica, sans-serif;
              font-weight: bolder;
             }
             #Header-3 p{
               
               color: white}
             #Header-3 button:hover{
               background-color: white;
               color: black;}

               #panel{
                 padding: 100px 0;
                 color: black;
               }
               #panel i{
                 font-size: 35px;
               }
               .Services{
                
                 padding: 15px;
                 
               }
               .Services h4:hover{
                /*text-decoration: underline;*/
                transition:ease-in-out 250ms ;
                  font-weight: bold;
                  font-family: 'Corinthia', cursive;
                
              }
              .Services i:hover{
                color: gray;
                transform: scale(1.1);
                transition:ease-in-out 250ms ;
              
              }
              .Services p:hover{
                 text-decoration: underline;
                transition:ease-in-out 250ms ;
              
              }



                /*#footer{
                  background-color: black;
                  color: white;
                }

                .footer-box{
                  padding: 20px;
                }
                .footer-box i{
                  color: white;
                   font-size: 30px;
                   padding-left: 2%;
                }
                .footer-box p:hover{
                  text-decoration: underline;
                  transition:ease-in-out 10ms ;
                  font-weight: bold;
                }

                .footer-box .form-control{
                  box-shadow: none !important; 
                  border: 0;
                  border-radius: 0;
                  margin-top: 25px;
                  max-width: 250px;
                }

                .footer-box button:hover{
                  color: black;
                  background-color: grey;
                } */              
                @media (min-width: 992px) { 
                  .Services{
                    border-right:2px double black;
                   }
                   
                  }

                /*html,
body{
    height: 100%;
    font-family: "Nunito Sans" , sans-serif;
    -webkit-font-smoothing: antialiased;
}*/
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

         <section id="header-1">
             <header >
                <h4>Free Shipping & Free Returns on all orders*</h4>
             </header>



         </section>


        <section id="Navbar">

            

            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand ms-2" href="Home.html"><img src="images/logo.png" width="25%"></a>
                <button class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#Nav">
                    <i class="fas fa-bars"></i>
                </button>
                
                
                <div class="collapse navbar-collapse ms-2 ps-5" id="Nav">
                  <ul class="navbar-nav ms-5 ps-5">
                    <li class="nav-item ">
                      <a class="nav-link " href="Home.html">Home</a>
                    </li>
                    
                    <li class="nav-item">
                      <a class="nav-link" href="Project Shop.html">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="About.html">About</a>
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
                      <a class="nav-link" href="cart.html"><i class="fas fa-shopping-cart"></i></a>
                    </li>
                  </ul>
                </div>
                </nav>

            </section>


            <section id="header-2">
              <h1>Buy Both And Get 20% OFF</h1>
              <p>________</p>
              <a href="Project Shop.html"><button type="submit" class="btn border-dark btn-dark p-2 ps-4 pe-4 m-2">  Shop Now</button></a>

          </section>

          <section id="Mission">
              <h4><b>OUR MISSION</b></h4>
              <p>________</p>
              <p><b>TO OUTFIT THE WORLD’S MOST AMBITIOUS PEOPLE.</b></p>

          </section>


          <section id="box-1"> 
              <div class ="container">
                  <div class="row">

                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center" >
                          <img src="images/woman.jpg" style="max-width: 100% ;height:auto ; object-fit: cover; ">
      
                      </div>
                      
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center" style="margin-top: 11%;">
                          <h1>PIQUE TEXTURED HD FABRIC</h1>
                          <h2>______</h2>
                          <p>The Pique delivers dynamic functionality. This casual yet stylish shape expresses a more distinctive look.</p>
                          <a href="Project Shop.html"><button type="submit" class="btn border-dark btn-dark p-2 ps-4 pe-4 m-2">  Shop Now</button></a>

                      </div>

                      
                  </div>
              </div>


          </section>

          <section id="box-2"> 
              <div class ="container">
                  <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center " style="margin-top: 12%;">
                          <h1>PIQUE TEXTURED HD FABRIC</h1>
                          <h2>______</h2>
                          <p>The Pique delivers dynamic functionality. This casual yet stylish shape expresses a more distinctive look.</p>
                          <a href="Project Shop.html"><button type="submit" class="btn border-dark btn-dark p-2 ps-4 pe-4 m-2">  Shop Now</button></a>

                      </div>
                      
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center ">
                          <img src="images/man.jpg" style="max-width: 100%;height:100%; object-fit: cover;" >

                      </div>
                      
                  </div>
              </div>


          </section>


          <section id="products">
            <div class="container">
              <h1 class="text-center"style="font-weight:bold"> New Arrival</h1>

             </div>

              <div id="carouselExampleIndicators" class="carousel slide m-5" data-bs-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                    <!-- <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li> -->
                  </ol>
                  <div class="carousel-inner">
                      
                    <div class="carousel-item active ">
                      <div class="row">
                        <div class="col-lg-4 col-sm-4"><img class="d-block " src="images/p1.webp" alt="First slide"></div>
                        <div class="col-lg-4 col-sm-4"><img class="d-block " src="images/p2.webp" alt="First slide"></div>
                        <div class="col-lg-4 col-sm-4"><img class="d-block " src="images/p3.webp" alt="First slide"></div>   
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="row">
                        <div class="col-lg-4 col-sm-4"><img class="d-block " src="images/p1.webp" alt="First slide"></div>
                        <div class="col-lg-4 col-sm-4"><img class="d-block " src="images/p2.webp" alt="First slide"></div>
                        <div class="col-lg-4 col-sm-4"><img class="d-block " src="images/p3.webp" alt="First slide"></div> 
                      </div>
                    </div>
            
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
          </section>

          <section id="Header-3">
            
              <h1>QUALITY THAT WILL LAST</h1>
              <p>_____</p>
              <p>Creatively Caliberated looks that are built to last.</p>
            
          </section>

          <section id="panel">

            <div class ="container">
              <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center Services "> 
                  <i class="fas fa-truck "></i>
                <h4 class="mt-3">FREE SHIPPING</h4>
                <p>Get free shipping on your orders all over Pakistan.</p>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center Services"> 
                <i class="fas fa-retweet"></i>
              <h4 class="mt-3">EASY RETURNS</h4>
              <p>15 days No Question Asked Return Policy.</p>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center Services "> 
              <i class="fas fa-check-circle"></i>
            <h4 class="mt-3">QUALITY PRODUCTS</h4>
            <p>Premium product and no quality compromise.Go for the best</p>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center Services" style="border: none;"> 
            <i class="fas fa-users"></i>
          <h4 class="mt-3">SATISFACTION 100%</h4>
          <p>If at any point you come across any problem, just reach out to us.</p>
        </div>

              </div>
          </div>
            


          </section>

          <section id="video">
                <div class="col-12" style="width: 100%; height: 100%; margin-bottom: 130px;">
                <video class="video" muted="" playsinline="" preload="none" autoplay="" loop="" style="width: 100%;">
                    <source type="video/mp4" src="https://cdn.shopify.com/s/files/1/0566/0839/1368/files/website_trailer_1_1.mp4?v=1631168748">
                </video>
              </div>
                                     





          </section>

          <!-- <section id="footer">
            <div class="container">
              <div class="row">
                <div class="col-lg-3 col-md-3 footer-box" >
                  <p>4 Khayaban-e-Johar, H 9/4 H-9, Islamabad, Islamabad Capital Territory 44000</p>
                  <p>Call us: (051) 9265100</p>
                  <p>Email: dean-engg@numl.edu.pk, info@numl.edu.pk</p>
                  <a href="#"><i class="fab fa-facebook-square"></i></a>
                  <a href="#"><i class="fab fa-twitter-square"></i></a>
                  <a href="#"><i class="fab fa-invision"></i></i></a>
                  
                </div>

                <div class="col-lg-3 col-md-3 footer-box" >
                  <h4><b>INFORMATION</b></h4>
                  <p>Privacy Policy</p> 
                  <p>Refund Policy</p>
                  <p>Shipping Policy</p>
                  <p>Terms of Service</p>
                  
                </div>

                <div class="col-lg-3 col-md-3 footer-box" >
                  <h4><b>HELP</b></h4>
                  <p>Home</p> 
                  <p>Wishlist</p>
                  <p>About Us</p>
                  <p>FAQ's</p>
                  
                </div>

                <div class="col-lg-3 col-md-3 footer-box" >
                  <h4><b>NEWSLETTER SIGN UP</b></h4>
                  <p>Subscribe to our newsletter and get 10% off your first purchase.</p>
                  <input type="email" class="form-control" placeholder="Enter Email">
                  <button type="submit" class="btn border-dark btn-light p-2 ps-4 pe-4 mt-3 ">Submit</button>
                </div>
              </div>
            </div>

          </section>

          <section id="footer-bottom" style="font-weight: bold;">

          <div class="footer-bottom text-center">
            <div class="container">
                <div class="row">
                    
                    <div class="col-12">
                        <address>
                            
                            <div>
                                Copyright © 2021 Overlays Clothing. All rights reserved to Tahir,Humair and Aneela.
                            </div>
                            
                        </address>
                    </div>
                    
    
                    
                </div>       
            </div>
        </div>
        
      </section>-->


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


 
