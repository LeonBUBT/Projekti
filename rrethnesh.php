<?php 
    $pageTittle = 'About us';
    include 'header.php';
?>
<main>
    <div id="main">
        <?php 
            require 'backend/config.php';
            require 'backend/fetch_about_us.php';

            error_reporting(E_ALL);
            ini_set('display_errors',1);

            $database = new Database();
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
    <script src="JS/rrethnesh.js"></script>
</main>
<?php include 'footer.php' ?>