<?php
    $pageTittle = 'Nexus Bank - Home';
    include 'header.php';
?>
<main>

    <!-- ----------------------------------------------------------------- Slide show ---------------------------------------------------- -->

    <div class="slideshow-container">
        <div class="mySlides fade">
           
            <img src="images/header.jpg" alt="Slide 1">
            <div class="text">Te duhet kredi?</div>
        </div>
        <div class="mySlides fade">
           
            <img src="images/header2.jpg" alt="Slide 2">
            <div class="text">Eja merre me interesin me te vogel</div>
        </div>
        <div class="mySlides fade">
         
            <img src="images/header3.jpg" alt="Slide 3">
            <div class="text">Tek ne, banka me e mire</div>
        </div>
    </div>
    <div class="dots-container">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>

    <!-- ========================= add something more ========================= -->

    
    <!-- ========================= add something more ========================= -->

    <div id="Services" >
        <ul style="list-style-type: none;">
            <li>
                <div class="ServicesContainer">
                    <img src="images/Services.jpg" alt="Services" width="35%"> 
                    <div id="wrap">
                        <b>Pse te zgjedhni kartat tona?</b><br>Kartat tona ju ofrojnë rehati, siguri dhe përfitime të shumta. 
                        Paguani lehtësisht në çdo vend, përfitoni oferta ekskluzive dhe grumbulloni pikë shpërblyese për çdo blerje. 
                        Me mbrojtje të avancuar kundër mashtrimeve dhe qasje të thjeshtë përmes aplikacionit tonë, 
                        kartat tona janë zgjedhja ideale për çdo nevojë financiare. 
                        Zgjidhni kartën që ju përshtatet dhe shijoni avantazhet e bankimit modern!
                    </div>
                </div>
            </li>  

            <li>
                <div class=" ServicesContainerRight">
                    <div id="wrap">
                        <b>Kurse te hollat</b><br> Me bankën tonë, ju ofrojmë mundësinë për të kursyer me siguri dhe përfitime të larta. 
                        Përfitoni norma konkurruese interesi, 
                        fleksibilitet në llogaritë e kursimeve dhe qasje të lehtë për të menaxhuar fondet tuaja përmes platformave tona dixhitale. 
                        Kursimet tuaja janë të mbrojtura dhe gjithmonë të disponueshme kur ju nevojiten. 
                        Filloni sot dhe ndërtoni të ardhmen tuaj me ne!
                    </div>
                    <img src="images/Savings.jpg" alt="Savings" width="35%">
                </div>
            </li>    

            <li>
                <div class="ServicesContainer" id="Us">
                    <img src="images/NoContact.jpg "alt="Contactless" width="35%">
                    <div id="wrap">
                        <b>Pagese pa kontakt! <br></b> Me teknologjinë tonë të pagesave pa kontakt, 
                        ju mund të bëni blerjet tuaja shpejt dhe me siguri. 
                        Mjafton të afroni kartën tuaj pranë pajisjes POS dhe transaksioni përfundon në pak sekonda, 
                        pa pasur nevojë të fusni PIN për shuma të vogla. 
                        Ideale për një përvojë të shpejtë dhe higjienike, 
                        pagesat pa kontakt janë zgjidhja perfekte për stilin tuaj modern të jetesës!
                    </div>
                </div>    
            </li>
        </ul>
    </div>

<!-- Kalkulatori i interesit kujdessssss -->
<div id="Kalkulatori">
    <h1 class="h1-general">Kalkulatori i Kredisë</h1>
    <div id="TeDhenat">
        <div class="input-group">
            <label for="shuma-kredise">Shuma e kredisë:</label>
            <input type="range" id="shuma-kredise" min="1000" max="100000" step="1000">
            <input type="number" id="shuma-value" min="1000" max="100000" step="1000">
        </div>
        <div class="input-group">
            <label for="maturiteti-kredise">Maturiteti i kredisë:</label>
            <input type="range" id="maturiteti-kredise" min="6" max="360" step="6">
            <input type="number" id="maturiteti-value" min="6" max="360" step="6">
        </div>
        <div class="input-group">
            <label for="norma-interesit">Norma mujore e interesit (%):</label>
            <input type="range" id="norma-interesit" min="0.1" max="5" step="0.1">
            <input type="number" id="norma-value" min="0.1" max="5" step="0.1">
        </div>
    </div>
    <div id="Rezultati">
        <div id="RezMajtas">
            <h2>Rezultati</h2>
            <p>Shuma e kredisë:</p>
            <span id="shuma-output">-</span>
            <p>Kësti mujor:</p>
            <span id="kesti-output">-</span>
            <p>Interesi total:</p>
            <span id="interesi-output">-</span>
            <p>Maturiteti:</p>
            <span id="maturiteti-output">-</span>
        </div>
    </div>
</div>
<div class="kontenieri-kembimit">
    <h2>Kursi i Këmbimit <span class="simboli-valuta">€</span></h2>
    <table class="tabela-kembimit">
        <thead>
            <tr class="koka">
                <th></th>
                <th>LEK</th>
                <th>USD</th>
                <th>GBP</th>
                <th>CHF</th>
                <th>TL</th>
                <th>CAD</th>
                <th>AUD</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="blerje">Blerje</td>
                <td>98.3885</td>
                <td>1.048</td>
                <td>0.8333</td>
                <td>0.9298</td>
                <td>36.4325</td>
                <td>1.4802</td>
                <td>1.6214</td>
            </tr>
            <tr>
                <td class="shitje">Shitje</td>
                <td>98.3915</td>
                <td>1.0510</td>
                <td>0.8363</td>
                <td>0.93282</td>
                <td>36.4355</td>
                <td>1.4832</td>
                <td>1.6244</td>
            </tr>
        </tbody>
    </table>
    <p class="shpjegim">
        *Këto janë kurse indikative të tregut, të cilat mund të ndryshojnë. Për transaksionet e këmbimit valutor, ju lutem referohuni në E-Banking ose kontaktoni përfaqësuesit tanë.
    </p>
</div>
<div id="google-map">
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1744.7927805994777!2d21.14742556350628!3d42.65330236146237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549ef3f69baacb%3A0xf864a269cc75e908!2sDukagjini%20Residence!5e0!3m2!1sen!2s!4v1732571826972!5m2!1sen!2s"
        width="100%"
        height="600px"

        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
</div>
    <script src="JS/script.js"></script>
</main>
<?php include 'footer.php' ?>