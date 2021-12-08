<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/css/style.css">
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
    height: 40px;
    width: 300px;
      


  
  }
   @media only screen and (max-width: 990px) {
    #t1
    {
       position: relative;
  top: -3px;
  left: 90px;
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
  left: 0px;
  
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
#f1
{
	position: relative;
	top: 50px;

}
#f1 p
{
	font-size: 20px;
}


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
#b1
{
  height: 20%;
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
  height: 100vh;
  
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
    width:260px;
  }
  @media only screen and (max-width: 600px) {
  #t1 {
    width:250px;
  }
  @media only screen and (max-width: 355px) {
  #t1 {
    width:200px;
  }
  body
  {
  	margin: 0px;
  	padding: 0px;
  	background-color: white;
  }
   @media only screen and (max-width: 300px) {
  #t1 {
    width:170px;
  }
  #s1
  {
    left: 20px;
  }
}




</style>