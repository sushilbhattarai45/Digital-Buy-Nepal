<?php include "inc.php"; ?>

<?php if(!isset($_SESSION['userId'])): 


endif; ?>
<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=0">
<style>
  #s1
  {
    background-color: white;
    height: 36px;
    position: relative;
    left:-6px;
    top: -3.2px;
    border-radius: 0px  24px 24px 0px;
    border-color: black;
    cursor: pointer;




  }

 
  #menuToggle
  {
    display: none;
  }
  #t1
  {
    color: black;
    width: 470px;
    height: 38px;

      


  
  }
   @media only screen and (max-width: 1000px) {
    #t1
    {
       position: relative;
  top: -8px;
  left: 80px;

    }
    #s1
    {
       position: relative;
  top: -11px;
  left:75px;


    }
  #t1 {
    width:300px;
  }
  #menuToggle
{
  display: block;
  position: relative;
  top: 30px;
 float: left;
  
  z-index: 11;
  
  -webkit-user-select: none;
  user-select: none;
}

#menuToggle a
{
  text-decoration: none;
  color: #232323;
  
  transition: color 0.3s ease;
}
#navbarColor01
{
  display: none;
}

#menuToggle a:hover
{
  color: tomato;
}


#menuToggle input
{
  display: block;
  width: 40px;
  height: 32px;
  position: absolute;
  top: -7px;
  left: -5px;
  
  cursor: pointer;
  
  opacity: 0; /* hide this */
  z-index: 2; /* and place it over the hamburger */
  
  -webkit-touch-callout: none;
}

/*
 * Just a quick hamburger
 */
#menuToggle span
{
  display: block;
  width: 33px;
  height: 4px;
  margin-bottom: 5px;
  position: relative;
  
  background: #cdcdcd;
  border-radius: 3px;
  
  z-index: 1;
  
  transform-origin: 4px 0px;
  
  transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0),
              background 0.5s cubic-bezier(0.77,0.2,0.05,1.0),
              opacity 0.55s ease;
}

#menuToggle span:first-child
{
  transform-origin: 0% 0%;
}

#menuToggle span:nth-last-child(2)
{
  transform-origin: 0% 100%;
}

/* 
 * Transform all the slices of hamburger
 * into a crossmark.
 */
#menuToggle input:checked ~ span
{
  opacity: 1;
  transform: rotate(45deg) translate(-2px, -1px);
  background: #232323;
}

/*
 * But let's hide the middle one.
 */
#menuToggle input:checked ~ span:nth-last-child(3)
{
  opacity: 0;
  transform: rotate(0deg) scale(0.2, 0.2);
}

/*
 * Ohyeah and the last one should go the other direction
 */
#menuToggle input:checked ~ span:nth-last-child(2)
{
  transform: rotate(-45deg) translate(0, -1px);
}

/*
 * Make this absolute positioned
 * at the top left of the screen
 */
#menu
{
  position: absolute;
  width: 300px;
  margin: -130px 0 0 -50px;
  padding: 50px;
  padding-top: 125px;
  left: -100px;
  
  background: #ededed;
  list-style-type: none;
  -webkit-font-smoothing: antialiased;
  /* to stop flickering of text in safari */
  
  transform-origin: 0% 0%;
  transform: translate(-100%, 0);
  
  transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0);
}

#menu li
{
  padding: 10px 0;
  font-size: 22px;
}

/*
 * And let's slide it in from the left
 */
#menuToggle input:checked ~ ul
{
  transform: none;
}
}
  @media only screen and (max-width: 680px) {
 
  #menu
  {
    left: 5px;
  }
  @media only screen and (max-width: 600px) {
  #t1 {
    width:300px;
  }
  #menu
  {
    left: 5px;
  }
  @media only screen and (max-width: 400px) {
  #t1 {
    width:250px;
  }
  #menu
  {
    left: 5px;
  }
 
  #s1
  {
    left: 20px;
  }
}
@media only screen and (max-width: 350px) {
  #t1 {
    width:150px;
  }
  #menu
  {
    left: 5px;
  }
 
  #s1
  {
    left: 20px;
  }
}


body
{
  margin: 0;
  padding: 0;
  
  background: white;
  color: #cdcdcd;
  font-family: "Avenir Next", "Avenir", sans-serif;
}

#s2 a
{
  color: red;
}



  </style>


    <title>Digital Buy Nepal</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">

    <?php
    // require functions.php file
    require ('functions.php');
    ?>

</head>
<body>

<!-- start #header -->
<header id="header">
    <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
        <p class="font-rale font-size-12 text-black-50 m-0">Rebranded of Nepcart.ml All Rights Reserved </p>
        
    </div>


   
    <!-- !Primary Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="background: #7B68EE!important;">
    <div class="container"><div>
      <nav role="navigation">
  <div id="menuToggle">
 

    <input type="checkbox" />
    
  
    <span></span>
    <span></span>
    <span></span>
    
    
    <ul id="menu">
      <a href="index.php"><li>Home</li></a>
      <a href="#"><li>About</li></a>
      <?php if(isset($_SESSION['userId'])): ?>
      <li>
       Hello . <?php echo $_SESSION['userName']; ?>
   </li>
      <li>
        <a href="logout.php">Logout</a>
      </li>
<?php else: ?>
<li>
        <a href="home.php">Register</a>
      </li>
      <li>
        <a href="login.php">Login</a>
      </li>
<?php endif; ?>
      <a href="#"><li>Contact</li></a>
      
    </ul>
  </div>
</nav><div>

        
        


      <input type="text" name="" id="t1">
     <svg width="20" height="20" viewBox="0 0 17 18" class="" xmlns="http://www.w3.org/2000/svg" id="s1" onclick="serch()"><g fill="#2874F1" fill-rule="evenodd"><path class="_2BhAHa" d="m11.618 9.897l4.225 4.212c.092.092.101.232.02.313l-1.465 1.46c-.081.081-.221.072-.314-.02l-4.216-4.203"></path><path class="_2BhAHa" d="m6.486 10.901c-2.42 0-4.381-1.956-4.381-4.368 0-2.413 1.961-4.369 4.381-4.369 2.42 0 4.381 1.956 4.381 4.369 0 2.413-1.961 4.368-4.381 4.368m0-10.835c-3.582 0-6.486 2.895-6.486 6.467 0 3.572 2.904 6.467 6.486 6.467 3.582 0 6.486-2.895 6.486-6.467 0-3.572-2.904-6.467-6.486-6.467"></path></g></svg>
  
 </div>
</div>


  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"><span class="sr-only">(current)</span></a>
     
     <li class="nav-item active">
        <a class="nav-link" href="index.php">Digital Buy Nepal <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <?php if(isset($_SESSION['userId'])): ?>
        <li class="nav-item active">
     <a class="nav-link" href="#">  Hello . <?php echo $_SESSION['userName']; ?></a>
   </li>
      <li class="nav-item active">
        <a class="nav-link" href="logout.php">logout</a>
      </li>
<?php else: ?>
<li class="nav-item active">
        <a class="nav-link" href="home.php">Register</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="login.php">Login</a>
      </li>
<?php endif; ?>
     
    </ul>
      </div>


            <form action="#" class="font-size-14 font-rale">
                <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                    <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                    <span class="px-3 py-2 rounded-pill text-dark bg-light"><?php echo count($product->getData('cart')); ?></span>
                </a>
            </form>

    </div>
        </div>
    </nav>
</nav>

</header>

<!-- !start #header -->

<!-- start #main-site -->
<main id="main-site">
<div id="results"></div>
<script src="search.js"></script>
<script type="text/javascript" ></script>
  <script>
  
     function serch()
{
    var a =document.getElementById("t1").value;
    if(a=="bag"||a=="female bags")
    {
        window.open("product.php?item_id=17");

    }
     if(a=="kids bag"||a=="barbie female bags")
    {
        window.open("product.php?item_id=17");

    }
    if(a=="male bag"||a=="stylish bags")
    {
        window.open("product.php?item_id=10");
        
    }
    if(a=="redmi mobile"||a=="redmi" ||a=="Redmi")
    {
        window.open("product.php?item_id=6");
    }
     if(a=="samsung mobile"||a==" Samsung mobile"||a=="samsung" ||a=="galaxy a 30" ||a=="samsung galaxy a 30" ||a=="Samsung galaxy a 30")
    {
        window.open("product.php?item_id=7");
    }
     if(a=="redmi note 8"||a=="Redmi note 8 " ||a=="redmi Note 8"  ||a=="Redmi Note 8 ")
    {
        window.open("product.php?item_id=6");
    }
      if(a=="redmi note 8 pro"||a=="redmi Note 8 Pro " ||a=="Redmi Note 8 pro"  ||a=="Redmi Note 8 Pro")
    {
        window.open("product.php?item_id=16");
    }
      if(a=="redmi note 6 pro"||a=="redmi Note 6 Pro" ||a=="Redmi Note 6 pro"  ||a=="Redmi Note 6 Pro")
    {
        window.open("product.php?item_id=3");
    }

      if(a==" redmi note 7 pro"||a=="redmi Note 7 pro" ||a=="Redmi Note  7 pro"  ||a=="Note 7 pro "  ||a=="mi phones")
    {
        window.open("product.php?item_id=16");
    }
     if(a==" redmi note 7"||a=="redmi Note 7" ||a=="Redmi Note 7"  ||a=="Note 7"  ||a=="mi note 7")
    {
        window.open("product.php?item_id=2");
    }
     if(a==" redmi note 5"||a=="redmi Note 5" ||a=="Redmi Note 5"  ||a=="Note 5"  ||a=="mi note 5")
    {
        window.open("product.php?item_id=5");
    }
    if(a=="tech"||a=="Technology")
    {
        window.open("product.php?item_id=7");
    }
    if(a=="Poco"||a=="poco"|| a=="poco x2" ||a=="poco X2" ||a=="Poco X2 Pro" ||a=="Poco X2" ||a==" X2")
    {
        window.open("product.php?item_id=15");
    }
     if(a=="Poco"||a=="poco"|| a=="poco x2 pro" ||a=="poco X2 pro" ||a=="Poco X2 pro" ||a=="Poco X2 Pro" ||a==" X2 Pro")
    {
        window.open("product.php?item_id=15");
    }
    if(a=="tools"||a=="kitchen"||a=="tool")
    {
        window.open("tool.php");
    }
    if(a=="pendrives"||a=="pendrive"||a=="pendrive 32 gb")
    {
        window.open("PENDRIVE.php");
    }
    if(a=="motor driver"||a=="motordriver"||a=="motor"||a=="l298N" || a=="L298N" )
    {
        window.open("motordriver.php");
    }
     if(a=="hot glue gun"||a=="glue gun"||a=="glu gun"||a=="gun hot glue" || a=="hot"|| a=="gun" || a=="Hot"|| a=="Gun")
    {
        window.open("hotglugun.php");
    }
    

   
}
    </script>