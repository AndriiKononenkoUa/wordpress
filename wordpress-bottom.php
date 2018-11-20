<?php //facebook-icon.html?>
<div class="icon-button">
  <a class="icon-container" href="#">
    <i class="fa fa-facebook"></i>
  </a>
</div> 

//font-awesome-cdn.html
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

// icon-button.css
<style type="text/css">
	div.icon-button {
  display: inline-block;
  overflow: hidden;
  border-radius: 50%;

  /* control whitespace around each button */
  margin: 5px 10px;

  /* control shadow around button */
  box-shadow: 4px 4px 4px #e3e3e3;
}

/* control hover effect */
div.icon-button:hover {
  box-shadow: 3px 3px 3px #e3e3e3;
  -webkit-transition-property: box-shadow;
  -webkit-transition-duration: .3s;
  transition-property: box-shadow;
  transition-duration: .3s;
}

a.icon-container {
  text-decoration: none;
  display: -webkit-flex
  -webkit-align-items: center;
  display : flex;
  align-items : center;

  /* adjust button size */
  width: 50px;
  height: 50px;

  /* adjust button color */
  background-color: #fff;
}

.icon-container i {
  margin: 0 auto;

  /* adjust icon size and color */
  font-size: 30px;
  color: #999;
}

/* adjust icon alignment */
i.move-left {
  padding-right: 5px;
}
i.move-up {
  padding-bottom: 5px;
}
i.move-down {
  padding-top: 5px;
}
i.move-right {
  padding-left: 5px;
}

</style>

//icon-buttons.html
<div class="icon-button">
  <a class="icon-container" href="#">
    <i class="move-left fa fa-angle-left"></i>
  </a>
</div>
<div class="icon-button">
  <a class="icon-container" href="#">
    <i class="move-up fa fa-angle-up"></i>
  </a>
</div>
<div class="icon-button">
  <a class="icon-container" href="#">
    <i class="move-down fa fa-angle-down"></i>
  </a>
</div>
<div class="icon-button">
  <a class="icon-container" href="#">
    <i class="move-right fa fa-angle-right"></i>
  </a>
</div>

//text-button.css
<style type="text/css">
	div.text-button {
  display: inline-block;
  overflow: hidden;

  /* rounded corners, set to 0 for square corners */
  border-radius: 10px;

  /* control whitespace around each button */
  margin: 5px 10px;

  /* control shadow around button */
  box-shadow: 4px 4px 4px #d3d3d3;
}

div.text-button:hover {
  box-shadow: 3px 3px 3px #d3d3d3;
  -webkit-transition-property: box-shadow; /* Safari */
  -webkit-transition-duration: .3s; /* Safari */
  transition-property: box-shadow;
  transition-duration: .3s;
}

a.text-container {
  text-decoration: none;
  display: inline-block;
  text-align: center;

  /* match radius of text-button div */
  border-radius: 10px;

  /* change the size of the button */
  padding: 20px 50px;
  
  /* change button background color */
  background-color: #70e566;

  /* change button text appearance */
  color: #fff;
  font-weight: bold;
  text-transform: uppercase;
  font-size: 2em;

  /* change border appearance */
  border: 5px solid #999;
}

a.text-container:hover {
  /* change button text color on hover */
  color: #f8f8f8;
  font-weight: bold;
}

a.text-container .details {
  display: block;

  /* change detail text appearance */
  font-size: .5em;
  text-transform: none;
  font-weight: normal;
}
</style>

//text-button.html
<div class="text-button">
  <a class="text-container" href="#">
    Buy Now
    <span class="details">Get 25% Off!</span>
  </a>
</div>

//text-icon-button.html 
<div class="text-button">
  <a class="text-container" href="#">
    <i class="move-left fa fa-shopping-cart"></i> 
    Buy Now
    <span class="details">Get 25% Off!</span>
  </a>
</div>