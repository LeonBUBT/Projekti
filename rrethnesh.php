<?php 
    $pageTittle = 'About us';
    include 'header.php';
?>
<main>
    <div id="why-choose-us">
        <h2>Why Choose Us?</h2>
        <div class="accordion">
            <?php

                require 'backend/config.php';
                require 'backend/fetch_wcu.php';

                error_reporting(E_ALL);
                ini_set("display_errors",1);
                
                $database = new Database();
                $wcu = new WCU($database);

                $reasons = $wcu ->getWCU();

                if(!empty($reasons)){
                    foreach ($reasons as $reason) {
                        echo '
                            <div class="accordion-item">
                                <button id="' . $reason['wcu_id'] . '-button" aria-expanded="false" aria-controls="' . $reason['wcu_id'] . '">
                                    <span class="accordion-title">' . $reason['title'] . '</span>
                                    <span class="icon" aria-hidden="true"></span>
                                </button>
                                <div id="' . $reason['wcu_id'] . '" class="accordion-content" role="region" aria-labelledby="' . $reason['wcu_id'] . '-button">
                                    <p>' . $reason['description'] . '</p>
                                </div>
                            </div>
                        ';
                    }
                }
            ?>
    </div>
    </div>
        <div id="main">
            <?php 
  
            require 'backend/fetch_about_us.php';

            error_reporting(E_ALL);
            ini_set('display_errors',1);

            $aboutus = new AboutUs($database);    

            $cards=$aboutus->getCards();

            if(count($cards)>0){

                    foreach($cards as $abt){
                        echo"
                            <div class='flip-card'>
                              <div class='flip-card-inner'>
                                  <div class ='flip-card-front'>
                                      <img src='uploads/".$abt['image']."' alt='".$abt['name']."' id='imga'>
                                  </div>
                                  <div class='flip-card-back'>
                                      <h1>".$abt['name']."</h1>
                                      <p>".$abt['position']."</p>
                                      <p>".$abt['description']."</p>
                                  </div>
                                  </div>
                              </div> 
                        ";
                    }
                }
        ?>
    </div>
    <div id="timeline">
        <h2>Our Milestone</h2>
        <div class="timeline-container">
            <?php

                require_once 'backend/fetch_milestones.php';

                $milestones = new Milestones($database);
                $rows = $milestones->getMilestones();

                if(!empty($rows)){
                    foreach ($rows as $milestone){
                        echo '
                        <div class="timeline-item">
                            <div class="timeline-year">' . $milestone['year'] . '</div>
                            <div class="timeline-content">
                            <h3>' . $milestone['title'] .'</h3>
                            <p>' . $milestone['description'] . '</p>
                            </div>
                            </div>
                        ';
                    }
                }
            ?>
        </div>
    </div>

    <script src="JS/rrethnesh.js" ></script>
</main>
<?php include 'footer.php' ?>