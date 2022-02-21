<?php $file_name = basename($_SERVER['SCRIPT_FILENAME'], ".php")?>

<!--Section Footer-->
<footer class="decorate-footer mt-5 p-5 text-center text-md-left">
    <div class="row">
        <div class="col-md-4">
            <a class="navbar-brand" href="#">
            <img src="assets/image/logo.png" width="35" height="35" alt=""> Informatics Repair Report System
            </a> 
            <p>
                <i class="fa fa-phone-square"></i> :Tel 038 103 060 <br>
                <i class="fa fa-envelope-o"></i> :Email informatics@buu.ac.th <br>
            </p> 
                <a href="https://www.facebook.com/InformaticsBuu/" target="_blank"> 
                    <i class="fa fa-facebook-square fa-2x"></i>
                </a>
        
                <a href="https://www.youtube.com/channel/UCI0YkQlBZS5vqDtgIW3Mo9w" target="_blank">
                    <i class="fa fa-youtube fa-2x"></i>
                </a>

                <a href="https://www.informatics.buu.ac.th/2018/" targer="_blank">
                    <i class="fa fa-university fa-2x"></i>
                </a>

                <a href="">
                    <i class="fa fa-line"></i>
                </a>         
        </div>       
            <div class="col-md-3">
                <h4> Menu </h4>
                <ul class="navbar-nav ">
                <li class="nav-item <?php echo $file_name=='1-Homepage' ? 'active':'' ?>">
                    <a class="nav-link" href="1-Homepage.php"> Home <span class="sr-only">(current)</span></a>
                </li>
                
                <li class="nav-item <?php echo $file_name=='About' ? 'active':'' ?> ">
                    <a class="nav-link" href="About.php"> About </a>
                </li>

               
                <li class="nav-item <?php echo $file_name=='Statistics' ? 'active':'' ?> ">
                    <a class="nav-link" href="Statistics.php"> Statistics </a>
                </li>
     
                
                <?php $arr = array("Repair", "Report1", "Report2", "Report3", "Report4", "Report5", "Report6", "Report7", "Report8", "Report9", "Report10", "Report11"); ?>
                <li class="nav-item <?php echo in_array($file_name, $arr) ? 'active':'' ?>">
                    <a class="nav-link" href="Repair.php"> Repair</a>
                </li>

                <li class="nav-item <?php echo $file_name=='Help' ? 'active':'' ?>">
                <a class="nav-link" href="Help.php"> Help </a>
                </li>

                <li class="nav-item <?php echo $file_name=='Contact' ? 'active':'' ?>">
                <a class="nav-link" href="Contact.php"> Contact </a>
                </li>       
                </ul>        
            </div>
        <div class="col-md-5"> 
            <h4> Maps </h4>
            <iframe width="100%" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=informatics%20burapha&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
            <style>
            .mapouter{text-align:right;height:300px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:100%;}
            </style>
        </div>
    </div>
</footer>

<footer class="footer">
    <span> COPYRIGHT&copy; 2019 <a href="https://www.informatics.buu.ac.th/2018/"target="_blank"> InformaticsBuu </a>
        ALL Right Reserved
    </span>      
</footer>