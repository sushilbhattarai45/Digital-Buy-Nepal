<?php include "inc.php"; ?>
<?php if(!isset($_SESSION['userId'])): 


endif; ?>
<html>
<style>
 
  #s1
  {
    background-color: white;
    height: 36px;
    position: relative;
    left:-5px;
    top: -1px;
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
      


  
  }
   @media only screen and (max-width: 990px) {
    #t1
    {
       position: relative;
  top: -3px;
  left: 70px;
    }
    #s1
    {
       position: relative;
  top: -4.6px;
  left: 60px;

    }
  #t1 {
    width:280px;
  }
  #menuToggle
{
  display: block;
  position: relative;
  top: 30px;
  left: 10px;
  
  z-index: 1;
  
  -webkit-user-select: none;
  user-select: none;
}

#menuToggle a
{
  text-decoration: none;
  color: #232323;
  
  transition: color 0.3s ease;
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
  @media only screen and (max-width: 680px) {
  #t1 {
    width:320px;
  }
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
    width:200px;
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


 
  </style>

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
</nav>

      <input type="text" name="" id="t1">
     <svg width="20" height="20" viewBox="0 0 17 18" class="" xmlns="http://www.w3.org/2000/svg" id="s1" onclick="serch()"><g fill="#2874F1" fill-rule="evenodd"><path class="_2BhAHa" d="m11.618 9.897l4.225 4.212c.092.092.101.232.02.313l-1.465 1.46c-.081.081-.221.072-.314-.02l-4.216-4.203"></path><path class="_2BhAHa" d="m6.486 10.901c-2.42 0-4.381-1.956-4.381-4.368 0-2.413 1.961-4.369 4.381-4.369 2.42 0 4.381 1.956 4.381 4.369 0 2.413-1.961 4.368-4.381 4.368m0-10.835c-3.582 0-6.486 2.895-6.486 6.467 0 3.572 2.904 6.467 6.486 6.467 3.582 0 6.486-2.895 6.486-6.467 0-3.572-2.904-6.467-6.486-6.467"></path></g></svg>
   </div>



  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"><span class="sr-only">(current)</span></a>
      </li><li class="nav-item active">
        <a class="nav-link" href="index.php"> <span class="sr-only">(current)</span></a>
      </li><li class="nav-item active">
        <a class="nav-link" href="index.php"> <span class="sr-only">(current)</span></a>
      </li>
    <li class="nav-item active">
        <a class="nav-link" href="index.php"> <span class="sr-only">(current)</span></a>
      </li><li class="nav-item active">
        <a class="nav-link" href="index.php"> <span class="sr-only">(current)</span></a>
      </li><li class="nav-item active">
        <a class="nav-link" href="index.php"> <span class="sr-only">(current)</span></a>
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
    </div>
</nav>
<script>
function serch()
{
    var a =document.getElementById("t1").value;
    if(a=="bag"||a=="bags")
    {
        window.open("bag1.php");
    }
    if(a=="mobile"||a=="mobiles")
    {
        window.open("mobiles.php");
    }
    if(a=="tech"||a=="earphones"||a=="earphone")
    {
        window.open("earphones.php");
    }
    if(a=="teddys"||a=="teddy"|| a=="dolls")
    {
        window.open("teddy.php");
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
