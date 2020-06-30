<?php
if($nav == "home"){
 $aboutlink = "about";
 $contactlink = "contact";
 $privacylink = "privacy";
 $termslink = "terms-of-service";
 
    
}elseif($nav == "about"){
 $aboutlink = "./";
 $contactlink = "../contact";
 $privacylink = "../privacy";
 $termslink = "../terms-of-service";
   
    
}elseif($nav == "contact"){
 $aboutlink = "../about";
 $contactlink = "./";
 $privacylink = "../privacy";
 $termslink = "../terms-of-service";
   
    
}elseif($nav == "terms"){
 $aboutlink = "../about";
 $contactlink = "../contact";
 $privacylink = "../privacy";
 $termslink = "./terms-of-service";
   
   
}else{
 $aboutlink = "../about";
 $contactlink = "../contact";
 $privacylink = "../privacy";
 $termslink = "../terms-of-service";
    
}                                    
            
?>    <footer class="ftco-footer ftco-bg-dark ftco-section" style="background-color:black;border-top:1px solid #00FF00">
      <div class="container" >
        <div class="row mb-5" style="padding:0px !important; margin: 0px !important;">
          <div class="col-md-3" style="padding:0px !important; margin: 0px !important;">
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft ">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
            
           <div class="col-md-3"><p style="padding-top:10px"><a href="<?php echo $aboutlink; ?>">About</a>&nbsp; <a href="<?php echo $contactlink; ?>">Contact</a>&nbsp; <a href="<?php echo $privacylink; ?>">Privacy</a>&nbsp; <a href="<?php echo $termslink; ?>">Terms</a></p>
<!--
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft ">
              <li class="ftco-animate"><a href="#">About</a></li>
              <li class="ftco-animate"><a href="#">Contact</a></li>
              <li class="ftco-animate"><a href="#">Privacy</a></li>
              <li class="ftco-animate"><a href="#">Terms</a></li>
            </ul>
-->
          </div> 
            <div class="col-md-2"></div>
                    <div class="col-md-4"> <p>
  Copyright &copy;2019 GiLab All rights reserved
  </p> </div> 
            

        </div>


<!--
            <p>
  Copyright &copy;2019 FOWARD DIGITAL All rights reserved
  </p>
-->

      </div>
    </footer>
    