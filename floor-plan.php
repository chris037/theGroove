<?php include 'header.php'; ?>

<div class="main-container">
    <section class="cover fullscreen theGrooveSlider image-slider slider-arrow-controls controls-inside">
        <ul class="slides">                  
            <li class="image-bg pt-xs-240 pb-xs-240">
                <div class="background-image-holder">
                    <img alt="image" class="background-image" src="img/banner-1.jpg" />
                </div>
                <div class="banner-logo">
                    <img src="img/theGrooveRockwell.png">
                </div>
                <div class="align-bottom">
                    
                    <div class="row">
                        <div class="col-md-12 priceWrap">
                            <hr class="mb0">
                            
                                <div class="col-md-3 col-sm-6">
                                    <p><span>PROPERTY TYPE:</span> CONDOMINIUM </p>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <p><span>PRICE RANGE:</span> PHP 5,000,000 - PHP 50,000,000 </p>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <p><span>LOCATION:</span> PASIG </p>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <p><span>UNIT SIZE:</span> 22-55 SQM </p>
                                </div>    
                           
                            <hr class="mb24">
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </li>
            <li class="image-bg pt-xs-240 pb-xs-240">
                <div class="background-image-holder">
                    <img alt="image" class="background-image" src="img/banner-1.jpg" />
                </div>
                <div class="banner-logo">
                    <img src="img/theGrooveRockwell.png">
                </div>
                <div class="align-bottom">
                    
                    <div class="row">
                        <div class="col-md-12 priceWrap">
                            <hr class="mb0">
                            
                                <div class="col-md-3 col-sm-6">
                                    <p><span>PROPERTY TYPE:</span> CONDOMINIUM </p>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <p><span>PRICE RANGE:</span> PHP 5,000,000 - PHP 50,000,000 </p>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <p><span>LOCATION:</span> PASIG </p>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <p><span>UNIT SIZE:</span> 22-55 SQM </p>
                                </div>    
                           
                            <hr class="mb24">
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </li> 
    </section>  


    <section class="pageContainer">

       
        
    </section>

</div>

<?php include 'footer.php'; ?> 

            
 <script type="text/javascript">
      $(document).ready(function(){
            $.ajax({
                url: 'floorplanMain.php',
                type: 'GET',
                dataType: 'html',
                success: function(data){
                    $(".pageContainer").html(data);
                }
            });
            
        }) ;

</script> 

<script src="js/thegroove.min.js"></script>
<script type="text/javascript">
     $(document).ready(function(){

        

        $("body").on('click','#calculatorBtn',function(e){
           $('.calcu-wrapper').fadeIn();
            return false;
        });

        $("body").on('click','.close-calcu',function(e){
           $('.calcu-wrapper').fadeOut();
            return false;
        });

        $("body").on('click','.InquireBtn',function(e){
           $('.fadingForm').fadeIn();
            return false;
        });

        $("body").on('click','.formClose',function(e){
           $('.fadingForm').fadeOut();
            return false;
        });

        $("body").on('click','.gotoUnitType',function(e){
               $.ajax({
                url: 'unitType.php',
                type: 'GET',
                dataType: 'html',
                success: function(data){
                   
                    $(".pageContainer").html(data);
                }
            });
            return false;
        });  

        $("body").on('click',".backfloorPlan", function(e){
           $.ajax({
                url: 'floorplanMain.php',
                type: 'GET',
                dataType: 'html',
                success: function(data){
                  
                    $(".pageContainer").html(data);
                }
            });
        }); 


        $("body").on('click','.gotoPlan',function(e){
            $.ajax({
                url: 'plan.php',
                type: 'GET',
                dataType: 'html',
                success: function(data){
                   
                    $(".pageContainer").html(data);
                }
            });
            return false;
        });  

        $("body").on('click','.backunitType',function(e){
            $.ajax({
                url: 'unitType.php',
                type: 'GET',
                dataType: 'html',
                success: function(data){
                   
                    $(".pageContainer").html(data);
                }
            });
            return false;
        }); 

    }) ;

</script>

  
  </body>  
</html>
