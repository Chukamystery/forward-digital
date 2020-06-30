<?php
if($nav == "home"){
 $homelink = "./";
 $workslink = "works";
 $pricinglink = "pricing";
 $how_it_workslink = "how-it-works";
 $project_brieflink = "project-brief";
   
    
}elseif($nav == "works"){
 $homelink = "../";
 $workslink = "./";
 $pricinglink = "../pricing";
 $how_it_workslink = "../how-it-works";
 $project_brieflink = "../project-brief";
   
    
}elseif($nav == "pricing"){
 $homelink = "../";
 $workslink = "../works";
 $pricinglink = "./";
 $how_it_workslink = "../how-it-works";
 $project_brieflink = "../project-brief";
   
    
}elseif($nav == "how-it-works"){
 $homelink = "../";
 $workslink = "../works";
 $pricinglink = "../pricing";
 $how_it_workslink = "./";
 $project_brieflink = "../project-brief";
   
    
    
}elseif($nav == "project-brief"){
 $homelink = "../";
 $workslink = "../works";
 $pricinglink = "../pricing";
 $how_it_workslink = "../how-it-works";
 $project_brieflink = "./";
    
}else{
 $homelink = "../";
 $workslink = "../works";
 $pricinglink = "../pricing";
 $how_it_workslink = "../how-it-works"; 
 $project_brieflink = "../project-brief"; 
    
}                                    
            
?>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" style="background-color:black !important; padding-top:0px !important; margin-top:0px !important;border-bottom:1px solid #00FF00; border-top:0px rgba(0,0,0,100) !important">
	    <div class="container" style="padding-top:0px !important; margin-top:0px !important;">
	      <a class="navbar-brand" href="<?php echo $homelink; ?>"><img src="images/logo1.png" style="max-height:100px;max-width:100px; padding-bottom:5px"></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <div class="gdnav__hamburger" bis_skin_checked="1">
                    <div class="gdnav__hamburger-1" bis_skin_checked="1">
                        <div class="gdnav-circle gdnav-circle-1" bis_skin_checked="1" style="background-color: #2ebf71 !important;"></div>
                        <div class="gdnav-circle gdnav-circle-2" bis_skin_checked="1" style="background-color: linear-gradient(to right, #2ebf71 70%,#0765bd ) !important;"></div>
                        <div class="gdnav-circle gdnav-circle-3" bis_skin_checked="1" style="background-color: linear-gradient(to right, #2ebf71 70%,#0765bd ) !important;"></div>
                        <div class="gdnav-circle gdnav-circle-4" bis_skin_checked="1" style="background-color: #2ebf71 !important"></div>
                    </div>
                </div>
	      </button>
            


	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item <?php if($nav == "home"){ echo 'active';} ?>"><a href="<?php echo $homelink; ?>" class="nav-link">Home</a></li>
              <li class="nav-item <?php if($nav == "works"){ echo 'active';} ?>"><a class="nav-link" href="<?php echo $workslink; ?>">Works</a></li>
              <li class="nav-item <?php if($nav == "pricing"){ echo 'active';} ?>"><a href="<?php echo $pricinglink; ?>" class="nav-link">Pricing</a></li>
	          <li class="nav-item <?php if($nav == "how-it-works"){ echo 'active';} ?>"><a href="<?php echo $how_it_workslink; ?>" class="nav-link">How it works</a></li>
    
	         
<!--
	          <li class="nav-item"><a href="team.html" class="nav-link">Team</a></li>
	          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
	          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
-->
	          <li class="nav-item cta"><a href="<?php echo $project_brieflink; ?>" class="nav-link"><span class="wave">👋</span>&nbsp;<span>START PROJECT</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
