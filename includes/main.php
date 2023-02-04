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