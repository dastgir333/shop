 
<?php
include('header.php');?>


<?php
include('navbar.php');?>





 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <title>beautiful landing page with sidebar menu</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="../project2019/css/bootstrap.min.css" rel="stylesheet">
<link href="../project2019/css/custom-style.css" rel="stylesheet">

     <style>
     
         *{
             margin: 0;
         }
     
         body{
             color: white;
             background-image: url(bg-1.jpg);
             background-size: cover;
             font-family: tahoma;
             overflow: hidden;
         }
     
         h1{
             font-size: 50px;
             color: #e67e22;
             text-transform: uppercase;
             font-family:arial;
             font-style: italic;
         }
         
         p,a{
             font-size: 17px;
             line-height: 27px;
             font-weight: 400;
             letter-spacing: 0.5px;
             color: #262525;
         }
         
         .btn{
             background-color: #e67e22;
             color: white;
             display: inline-block;
             text-decoration: none;
             padding: 13px 30px;
             margin: 30px 0 0 0;
             border-radius: 3px;
             font-weight: bold;
             transition: all 200ms ease-in-out;
         }
         
         .btn:hover{
             background-color: white;
             color: #262525;
         }
         
         .page-wrap{
            padding: 50px 60px;
            overflow: hidden;
             transition: all 200ms ease-in-out;
         
         }
         
         
         .offcanvas-expanded .page-wrap{
             transform: translateX(320px);
         }
         
         .offcanvas{
             width: 320px;
             height: 100%;
             position: fixed;
             top: 0;
             bottom: 0;
             background: #262525;
             z-index: 5000;
             transform: translateX(-320px);
             transition: all 200ms ease-in-out;
         }
         
         .offcanvas ul{
             list-style: none;
             margin: 55px 0 0 0;
         }
         
         
         .offcanvas ul li{
             margin: 30px 0;
         }
         
         
         .offcanvas ul li a{
             color: white;
             text-decoration: none;
             text-transform: uppercase;
             font-weight: bold;
         }
         
         
         .offcanvas-expanded .offcanvas{
             transform: translateX(0);
         }
         
         .offcanvas-toggle{
             background-color: transparent;
             border: 0;
             color: white;
         }
         
         
         .offcanvas-toggle:focus{
             outline: none;
         }
         
         
         .offcanvas-toggle:before{
             content: '\f0c9';
             font-family: 'FontAwesome';
             margin: 0 20px 0 0;
             cursor: pointer;
             font-size: 40px;
             color: #e67e22;
         }
         
          
     
     </style>
 </head>
 <body>
     
     <div class="page-wrap">
         <button class="offcanvas-toggle">OPEN HERE</button>
         <br><br><br><br><br><br><br>
         <h1>Responsive Sidebar</h1>
         <br>
         <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam natus sunt <br>
            quia neque velit dignissimos maxime inventore impedit iure vero modi eveniet <br>
            ipsam recusandae aut necessitatibus nisi, officia sed ea deserunt laudantium. <br>
            atque perspiciatis quos officiis animi eaque tempora,
         </p>
         <a href="" class="btn">READ MORE NOW</a>
     </div>
     
     <div class="offcanvas">
         <ul>
             <li><a href="add.php">MANAGE PRODUCT</a></li>
             <li><a href="">BLOG</a></li>
             <li><a href="">ABOUT US</a></li>
             <li><a href="">CONTACT</a></li>
             <li><a href="">TWITTER</a></li>
              
         </ul>
     </div>
     
     <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
     
     <script>
     
     $('.offcanvas-toggle').on('click', function(){
         
         $('body').toggleClass('offcanvas-expanded');
         
     });
     
     
     
     
     
     </script>
     
     
     
     
     
     
     
     
     
     
     
     
      
  <?php include("footer.php");?>   
 
 </html>
