<?php
    $pageTittle = 'Main points';
    include 'header.php';
?>
<main>

    <div id="animacion">
        <h1 id="lokacionet">Lokacionet Tona</h1>
       
        <div class="content-wrapper">
            <div id="google-map">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1744.7927805994777!2d21.14742556350628!3d42.65330236146237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549ef3f69baacb%3A0xf864a269cc75e908!2sDukagjini%20Residence!5e0!3m2!1sen!2s!4v1732571826972!5m2!1sen!2s"
                    width="40%"
                    height="600px"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <div>
                <div id="ndryshues">
                    
                    <button id="butoniLista">Zgjidh Degën</button>
                    <ul id="listaOpsioneve" class="fshehur">
                        <li data-dega="dega1">Dega Kryesore</li>
                        <li data-dega="dega2">Dega Qender Qytetit</li>
                        <li data-dega="dega3">Dega e Aeroportit</li>
                    </ul>
                </div>
                <div id="detajetDeges" class="fshehur">
                    <h2 id="emriDeges"></h2>
                    <p id="adresaDeges"></p>
                    <p id="orarDeges"></p>
                    <p id="kontaktiDeges"></p>
                    <p id="sherbimeDeges"></p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- testimonials -->
    <div id="testimonials">
        <h2>Çfarë thonë klientët tanë</h2>
        <div class="testimonial">
            <p>"Kam përfituar shumë nga shërbimet e Nexus Bank. Stafi është gjithmonë i gatshëm për të ndihmuar dhe proceset janë të shpejta dhe të lehta."</p>
            <h4>Arbër Krasniqi</h4>
            <div class="stars">
                &#9733;&#9733;&#9733;&#9733;&#9733;
            </div>
        </div>
        <div class="testimonial">
            <p>"Nexus Bank më ka ndihmuar shumë në menaxhimin e financave të mia personale dhe të biznesit. E rekomandoj shumë!"</p>
            <h4>Lea Gashi</h4>
            <div class="stars">
                &#9733;&#9733;&#9733;&#9733;&#9733;
            </div>
        </div>
        <div class="testimonial">
            <p>"Shërbimi është i shkëlqyer dhe gjithmonë i përgjegjshëm. ATM-të janë gjithmonë të disponueshme dhe të lehta për t'u përdorur."</p>
            <h4>Fatmir Beqiri</h4>
            <div class="stars">
                &#9733;&#9733;&#9733;&#9733;&#9733;
            </div>
        </div>
    </div>
    
    <script src="JS/pikat.js"></script>
</main>
<?php include 'footer.php' ?>