<?php $file_name = basename($_SERVER['SCRIPT_FILENAME'], ".php")?>
    
    <!--Section Navbar-->

    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-nav">
        <div class = "container">
            <a class="navbar-brand" href="1-Homepage.php">
                <img src="assets/image/logo.png" width="35" height="35" alt=""> Informatics Repair center
            </a> 
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarKey" aria-controls="navbarKey" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarKey">
                <ul class="navbar-nav ml-auto text-center">
                <li class="nav-item <?php echo $file_name=='1-Homepage' ? 'active':'' ?>">
                    <a class="nav-link" href="1-Homepage.php"> Home <span class="sr-only">(current)</span></a>
                </li>
                
                <li class="nav-item <?php echo $file_name=='About' ? 'active':'' ?>">
                    <a class="nav-link" href="About.php"> About </a>
                </li>

                <?php $arr = array("Blog", "ClassRoom", "ComputerRoom", "Library", "MeetingRoom", "StudyRoom", "TeachingRoom"); ?>
                <li class="nav-item <?php echo in_array($file_name, $arr) ? 'active':'' ?>">
                    <a class="nav-link" href="Blog.php"> Blog </a>
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
        </div>        
    </nav>