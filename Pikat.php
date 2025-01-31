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
    
    <div id="testimonials">
        <?php 
            require 'backend/config.php';
            require 'backend/fetch_reviews.php';

            error_reporting(E_ALL);
            ini_set('display_errors',1);

            $database = new Database();
            $cards = new Reviews($database);

            $reviews=$cards->getReviews();

            if(count($reviews)>0){
                foreach($reviews as $review){
                    echo"
                    <div class='testimonial'>
                        <p>\"".$review['description']." \"</p>
                        <h4>".$review['user_name']."</h4>
                        <div class='stars'>
                            &#9733;&#9733;&#9733;&#9733;&#9733;
                        </div>
                    </div>
                    ";
                }
            }
        ?>
    </div>
    
    <script>

        document.addEventListener("DOMContentLoaded", () => {
            const butoniLista = document.getElementById("butoniLista");
            const listaOpsioneve = document.getElementById("listaOpsioneve");
            const detajetDeges = document.getElementById("detajetDeges");
            const emriDeges = document.getElementById("emriDeges");
            const adresaDeges = document.getElementById("adresaDeges");
            const orarDeges = document.getElementById("orarDeges");
            const kontaktiDeges = document.getElementById("kontaktiDeges");
            const sherbimeDeges = document.getElementById("sherbimeDeges");

            let teDhenatDeges = {}; 

            fetch('backend/fetch_pikat.php')
                .then(response => response.json())
                .then(data => {
      
                    data.forEach((dega, index) => {
                        teDhenatDeges[`dega${index + 1}`] = {
                            emri: dega.name,
                            adresa: dega.address,
                            orar: dega.shift,
                            kontakti: dega.contact,
                            sherbime: dega.services
                        };
                    
                        const li = document.createElement('li');
                        li.textContent = dega.name;
                        li.setAttribute('data-dega', `dega${index + 1}`);
                        listaOpsioneve.appendChild(li);
                    });
                })
                .catch(error => {
                    console.error("Error fetching data:", error);
                });

            butoniLista.addEventListener("click", () => {
                listaOpsioneve.classList.toggle("trego");
                if(!emriDeges.hasChildNodes()){
                    detajetDeges.classList.toggle("fshehu");            
                }else{
                    detajetDeges.classList.toggle("trego");            
                }
            });
            
            listaOpsioneve.addEventListener("click", (event) => {          
                const degaID = event.target.getAttribute("data-dega");
                if (degaID && teDhenatDeges[degaID]) {
                    const { emri, adresa, orar, kontakti, sherbime } = teDhenatDeges[degaID];
                    emriDeges.textContent = emri;
                    adresaDeges.textContent = `Adresa: ${adresa}`;
                    orarDeges.textContent = `Orari: ${orar}`;
                    kontaktiDeges.textContent = `Kontakti: ${kontakti}`;
                    sherbimeDeges.textContent = `Sherbimet: ${sherbime}`;
                    detajetDeges.classList.add("trego");
                }
            });
        });
    </script>
</main>
<?php include 'footer.php' ?>