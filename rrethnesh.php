<?php 
    $pageTittle = 'About us';
    include 'header.php';
?>
<main>
    <div id="main">
        <?php 
            require 'backend/fetch_about_us.php';
            if(count($aboutUs)>0){
                foreach($aboutUs as $abt){
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