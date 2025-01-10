<?php
    $pageTittle = 'Nexus Bank - Contact';
    include 'header.php';
?>
<main >
    <div id="background">
    <div class="form-wrapper">
        <div class="contact-form">
            <h1>Forma e Kontaktit</h1>
            <form action="#" method="POST">
                <div class="form-group">
                    <label for="emri">Emri dhe Mbiemri</label>
                    <input type="text" id="emri" name="emri" placeholder="Shkruani emrin tuaj" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Adresa</label>
                    <input type="email" id="email" name="email" placeholder="Shkruani email-in tuaj" required>
                </div>
                <div class="form-group">
                    <label for="telefoni">Numri i Telefonit</label>
                    <input type="tel" id="telefoni" name="telefoni" placeholder="Shkruani numrin e telefonit tuaj">
                </div>

                <div class="form-group">
                    <label for="subjekti">Subjekti</label>
                    <select id="subjekti" name="subjekti" required>
                        <option value="">Zgjidhni një opsion</option>
                        <option value="ndihme">Kërkesë për ndihmë</option>
                        <option value="informata">Kërkesa për informata</option>
                        <option value="tjeter">Tjetër</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="mesazhi">Mesazhi</label>
                    <textarea id="mesazhi" name="mesazhi" placeholder="Shkruani mesazhin tuaj këtu" required></textarea>
                </div>

                <div class="form-group" id="submit-btn">
                    <button type="submit">Dërgo</button>
                </div>
            </form>
        </div>
    </div>    
</div>

</main>
<?php include 'footer.php';?>