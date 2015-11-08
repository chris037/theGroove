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
            
<script src="js/thegroove.min.js"></script>
<script type="text/javascript">
      $(document).ready(function(){
            $.ajax({
                url: 'modelunitMain.php',
                type: 'GET',
                dataType: 'html',
                success: function(data){
                    $(".pageContainer").html(data);
                }
            });
        }) ;

</script> 

<script type="text/javascript">
$(document).ready(function(){

        $("body").on('click','.InquireBtn',function(e){
           $('.fadingForm').fadeIn();
            return false;
        });

        $("body").on('click','.formClose',function(e){
           $('.fadingForm').fadeOut();
            return false;
        });

        $("body").on('click','.gotoModelunit',function(e){
               $.ajax({
                url: 'modelunit-inner.php',
                type: 'GET',
                dataType: 'html',
                success: function(data){
                   
                    $(".pageContainer").html(data);
                }
            });
            return false;
        });

        $("body").on('click','.backModelUnit',function(e){
               $.ajax({
                url: 'modelunitMain.php',
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