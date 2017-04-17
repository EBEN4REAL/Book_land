<?php
//connect to the databse
$server = 'localhost';  //server type
$username = 'root';  // server username
$password = '';   //server password
$database_name = 'books_land'; //The database name should go here


$connected = mysqli_connect("$server" , "$username" ,"$password", "$database_name");

if ($connected) {
   
    // echo "Successfully connected to database";
}
else{
    echo "Error connecting to the database";
}
//send subscribed data to the database
 $status = '';

if (isset($_POST['subscribe'])) {
    # code...
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subscribe = "INSERT INTO users (name,subscribe) VALUES ('$name','$email')"; // The database name is "Users" in this case. change it to your own database name
    $sql_query = mysqli_query($connected ,$subscribe);
    $status = '<span class="alert alert-success">Thank You </span>';



}



?>




<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8" />
        <meta name = "U-XA-COMPATIBLE" content = "IE=edge" />
        <meta name = "viewport" content = "width=device-width, initial-scale =1.0" />
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel = "stylesheet" href = "css/styles.css" type ="text/css" />   
        <title>BookeyLand.com</title>
    </head>  
    <body>   
        <nav class="navbar navbar-default navbar-inverse ">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#" class = "img-responsive"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a style = "color:#fff" href="#">Home</a></li>
                        <li><a style = "color:#fff" href="#">About Us</a></li>
                        <li><a style = "color:#fff" href="#">Contact</a></li>
                        <li><a  style = "color:#fff" href="#">Subscribe</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class = "img-responsive" src="images/ImageStyle.jpg" alt="second_shoeImage">
                    <div class="carousel-caption">
                        <p class ="typewriter_text"></p>
                    </div>
                </div>
                <div class="item">
                    <img class = "img-responsive" src="images/imageSeven.jpg" alt="second_shoeImage">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
                <div class="item">
                    <img class = "img-responsive" src="images/imageSix.jpg" alt="second_shoeImage">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
                <div class="item">
                    <img class = "img-responsive" src="images/imagFour.jpg" alt="second_shoeImage">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!--
<div>   
<span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span>
<span class="sr-only">down</span>
</div>   
-->

        </div>
        <div class = container-fluid>
            <div class = "jumbotron col-lg-4 col-md-4">
                <fieldset>
                    <legend>Who we are</legend>
                    <p class ="about">Nam pariatur efflorescere. Esse tempor ubi lorem fore nam est noster elit nulla 
                        possumus, ullamco ipsum incurreret, excepteur est deserunt. Ne quem mandaremus, 
                        non nisi si anim, pariatur quis an singulis adipisicing, tamen incurreret do </p>
                </fieldset>    
            </div>
        </div>
       <div class = "container-fluid">
            <div class = "col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-12 col-xs-12">
                <div class = "image-container">
                    <image src = "images/shoe_1.jpg"  class = "img-responsive img-thumbnail" />
                </div>   
            </div>
           <div class = "col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-12 col-xs-12">
                <div class = "image-container">
                    <image src = "images/shoe_3.jpg"  class = "img-responsive img-thumbnail" />
                </div>   
            </div>
           <div class = "col-lg-3 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-12 col-xs-12">
                <div class = "image-container">
                    <image src = "images/shoe_5.jpg"  class = "img-responsive img-thumbnail" />
                </div>   
            </div>  
        </div>       
  <div style="height: 100px;"></div>


   
     <div>

         <div class="row">

          <form class="form-group" method="post" action="index.php">

               <div class="col-lg-3 col-lg-offset-1">
               <input type="text" name="name" placeholder="Enter your Name" class="form-control" style="">

                 
             </div>
             <div class="col-lg-3 col-lg-offset-">
                 <input type="email" name="email" placeholder="Enter your Email" class="form-control" required>
             </div>
             <div class="col-lg-3">
                
                 <input type="submit" name="subscribe"  class="form-control" style="" class="btn btn-danger"><br> <?php echo $status; ?>
             </div>
          </form>
            

         </div>
     </div>





      
        <script src="js/ajax_jquery.js"></script> 
 <script src="js/jquery.js"></script> 
 <script src="js/bootstrap.min.js"></script>

   <script>
            document.addEventListener('DOMContentLoaded', function(){
                Typed.new('.typewriter_text', {
                    strings: ["We redefine what the standards are,  here at BookeyDesigns"],
                    typeSpeed: 20
                });
            });
            
        
           
        </script>
     <script type="text/javascript">
   $(window).scroll(function () {
  if ($(window).scrollTop() >= 100) {
  $('.navbar').css('background','#000').css('opacity', '0.95').animate('2000');
  } else {
  $('.navbar').css('background','transparent').css('border-bottom' , 'none');
  }
  });
     

    $('a[href^="#div2"]').on('click' , function(event){
  var target = $(this.getAttribute('href'));
  if (target.length) {
    event.preventDefault();
    $('html , body').stop().animate({
      scrollTop: target.offset().top
    },1000);
  }
}) 
  window.onload = function() {
  Particles.init({
    selector: '.background'
  });
};
   </script>
    </body>       
</html>       