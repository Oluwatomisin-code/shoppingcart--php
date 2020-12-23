 <?php
    session_start();
 require_once 'assets/php/createdb.php';
 


 $database= new createdb();

 include 'header.php';
 ?>
 <!--<svg style="position: absolute;">
    <defs>
        <clipPath id="clipPath">
            <circle class="circle" cx="600" cy="-1400" r="2100">
        </clipPath>
    </defs>
 </svg>-->
    <div class="contain py-4 mx-auto">       
        <div class="card z-depth-1 border-0 bg-white px-auto p-0" style="height: 500px; margin-top: 60px;">
            <div class="row m-0 p-0"style="height:100%; box-sizing: border-box;">
                <div class="info bg-dark">
                </div>
                <div class="carouselDiv">
                </div>
            </div>
        </div>
    </div>
<!--promos-->
    <div class="contain mx-auto">
        <div class="card border-0" style="width:100%; height:400px;">
            <div class="row m-0 p-0" style="height: 100%;">
                <div class="promo" style="width: 300px; margin-right:5px; height: 100%;">

                </div>
                <div class="promo" style="width: 510px; margin-left:5px; margin-right:5px; height: 100%;">

                </div>
                <div class="promo" style="width:300px; margin-left:5px; height: 100%;">
                </div>
            
                
            </div>
        </div>
       
    </div>

<!--produts on home-page -->
    <div class="contain py-4 mx-auto">       
        <div class="card shadow z-depth-1 rounded border-0 bg-white px-auto py-1">
            <div class="card-header bg-white pt-0">
                <h5>
                <b>
                Available Products
                </b> 
                </h5>
            </div>
            <div class="card-body p-0">
            
                <div class="row mx-auto col-md-12" id="products"> 
                    <!--load products from db via productcomponent.php template via ajax request-->
                </div>
                
            </div> 
            
            
        </div>
    </div>
    
    <div class="contain mx-auto my-3" >
        <div class="text-center" style="width: 100%;">
            <h3>
                More About Us
            </h3>
            <hr>
            <div class="row justify-content-between p-5" style="width: 100%; height: 400px;">
                <div class="card text-center border-0 justify-content-center cardhover px-3" style="height: 100%; width:300px;">
                    <h3>
                        Our Mission
                    </h3>
                    <span>
                        O3 is geared towards providing very rear products that people 
                        want without knowing about it, you’d be really amazed 
                        to see how important it will be in your daily life.
                    </span>
                </div>
                <div class="card text-center border-0 justify-content-center cardhover px-3" style="height: 100%; width:300px;">
                    <h3>
                        Our Mission
                    </h3>
                    <span>
                    O3 is basically created to provide products that 
                    will make things easy for you so you could get to the peak of your career.
                    </span>
                </div>
                <div class="card text-center border-0 justify-content-center cardhover px-3" style="height: 100%; width:300px;">
                    <h3>
                        Our objective
                    </h3>
                    <span>
                        Seeing how beautiful your life is, is our main 
                        objective. You can browse through our product 
                        to see how grateful you’d be.
                    </span>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-dark" style="height: 400px; width:100%;">
        <div class="contain">

        </div>
    </footer>
    


</body>
</html>