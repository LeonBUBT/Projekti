<?php 
    $pageTittle = 'About us';
    include 'header.php';
?>
<main>
<<<<<<< HEAD
<div id="why-choose-us">
    <h2>Why Choose Us?</h2>
    <div class="accordion">
        <?php
        // Array of reasons for "Why Choose Us?"
        $reasons = [
            [
                "id" => "accordion-item-1",
                "title" => "Innovative Banking Solutions",
                "content" => "At Nexus Bank, we are committed to staying at the forefront of financial technology. 
                Our cutting-edge digital tools and AI-powered insights make managing your finances effortless and secure."
            ],
            [
                "id" => "accordion-item-2",
                "title" => "Unmatched Security",
                "content" => "Your trust is our priority. We use advanced encryption and fraud detection systems 
                to ensure your money and personal information are safe, giving you peace of mind every step of the way."
            ],
            [
                "id" => "accordion-item-3",
                "title" => "Customer-Centric Services",
                "content" => "We value every customer and provide personalized financial solutions tailored to your goals. 
                With 24/7 customer support, we're always here to help you succeed."
            ],
            [
                "id" => "accordion-item-4",
                "title" => "Transparent and Competitive Rates",
                "content" => "Nexus Bank offers transparent pricing with no hidden fees, competitive loan rates, 
                and high-return savings accounts, ensuring you get the best value for your money."
            ],
            [
                "id" => "accordion-item-5",
                "title" => "Global Reach with Local Expertise",
                "content" => "Whether you're banking locally or internationally, our extensive network and expertise 
                ensure smooth financial operations wherever you are."
            ]
        ];

       
        foreach ($reasons as $reason) {
            echo '
            <div class="accordion-item">
                <button id="' . $reason['id'] . '-button" aria-expanded="false" aria-controls="' . $reason['id'] . '">
                    <span class="accordion-title">' . $reason['title'] . '</span>
                    <span class="icon" aria-hidden="true"></span>
                </button>
                <div id="' . $reason['id'] . '" class="accordion-content" role="region" aria-labelledby="' . $reason['id'] . '-button">
                    <p>' . $reason['content'] . '</p>
                </div>
            </div>
            ';
        }
        ?>
    </div>
</div>


    <div id="main">
  
        <?php 
            require 'backend/fetch_about_us.php';
            if(count($aboutUs)>0){
                foreach($aboutUs as $abt){
=======
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
>>>>>>> main
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
<<<<<<< HEAD
    <div id="core-values">
        <?php
        $core_values = [
         [   
            "title" => "Integrity",
            "description" => "We uphold the highest standards of honesty and transparwncy in everything we do."
         ],
         [
            "title" => "Costumer-Centricity",
            "description" => "our costumers are at the heart of our business, and we strive to meet their unique financial needs."
         ],
         [
            "title" => "Innovation",
            "description" => "We embrace technology to deliver forward-thinking banking solutions."
         ],
         [
            "title" => "Trust",
            "description" => "we build lasting relationships by consistently delivering on our promisess."
         ],
         [
            "title" => "Sustainability",
            "description" => "We are comitted to enviromentally consicious operations and investments in our communities."
         ],
         [
            "title" => "Excellence",
            "description" => "We pursue excellence in every service and solution we offer."
         ],
         [
            "title" => "Diversity and Inclusion",
            "description" => "We celebrate diversity and foster and inclusive enviroment fpr pur employees and customers."
         ],
         [
            "title" => "Accountability",
            "description" => "We take responsibility for our actions and prioritize customer statisfaction"
         ]
         ];
            
            foreach ($core_values as $value){
                echo '
                <div class="value-item">
                <h3>' . $value['title'] . '</h3>
                <p> ' . $value['description'] . '</p>
                </div>
                ';
            }
        ?>

   <script>document.querySelectorAll('.accordion-item button').forEach(button => {
    button.addEventListener('click', () => {
        const expanded = button.getAttribute('aria-expanded') === 'true';
        button.setAttribute('aria-expanded', !expanded);

        const content = document.getElementById(button.getAttribute('aria-controls'));
        if (!expanded) {
            content.style.maxHeight = content.scrollHeight + "px";
        } else {
            content.style.maxHeight = null;
        }
    });
});</script>
=======
    <script src="JS/rrethnesh.js"></script>
>>>>>>> main
</main>
<?php include 'footer.php' ?>