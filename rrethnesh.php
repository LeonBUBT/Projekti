<?php 
    $pageTittle = 'About us';
    include 'header.php';
?>
<main>
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
    <div id="timeline">
        ,<h2>Our Milestone</h2>
        <div class="timeline-container">
            <?php
            $milestone = [
                ["year" => "2000", "title" => "Founded  Nexus Bank", "description" => "Established with a vision to revolutionize banking through innovation and trust."],
                ["year" => "2002", "title" => "First Branch Opened", "description" => "Serving thousand of costumers locally."],
                ["year" => "2005", "title" => "Online Banking Introduced", "description" => "Enabled costumers to manage accounts remotely."],
                ["year" => "2010", "title" => "1 Million Costumers", "description" => "Expanded to multiple locations with a growing costumer base." ],
                ["year" => "2012", "title" => "Mobile Banking Launched", "description" => "Bringing banking services to smartphones."],
                ["year" => "2015", "title" => "International Expansion", "description" => "Seamless global transactions made possible."],
                ["year" => "2018", "title" => "AI Financial Advisory", "description" => "Personalized banking enhanced by AI-driven services."],
                ["year" => "2022", "title" => "Carbon-Neutral Operation", "description" => "Commitment to sustainability and eco-friendly banking."],
                ["year" => "2024", "title" => "Fully Digital Branches", "description" => "Combining AI, automation, and human experties."],
                ["year" => "2025", "title" => "Blockchain Banking Solutions", "description" => "Enhanced security and transparency through blockchain,"],
                ["year" => "2026", "title" => "Serving 50M+ Costumers", "description" => "Loading the future of finance worldwide." ]
            ];
            foreach ($milestones as $milestone){
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
            ?>
        </div>
    </div>

    <script src="JS/rrethnesh.js" ></script>
</main>
<?php include 'footer.php' ?>