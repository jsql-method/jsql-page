<!DOCTYPE HTML>
<html>
<?php include('head.php'); ?>
<body>
<?php include('menu.php'); ?>

<div class="content background">

    <div id="home">

        <p style="display: none;" class="error" id="error"></p>
        <p style="display: none;" class="success" id="sended">
            Pomyślnie wysłano wiadomość
        </p>

        <div class="row-1">


        <div class="info-box info-box1">
            <p class="title">Outsourcing usług IT</p>
            <p>
                Nasza firma świadczy usługi IT w postaci tworzenia szeroko rozumianego
                oprogramowania. Posiadamy w swoich zasobach wysoko wykwalifikowany
                i zmotywowany zespół specjalistów IT z różnych dziedzin biznesu,
                dostarczający szybko i kompetentnie rozwiązania dla klientów.
                <br/>
                Naszą siłą jest kompetencja oraz terminowość.
                <br/>
                <br/>
                Pracujemy m.in. z technologiami: Java, JavaScript, Angular, React
            </p>

            <a href="contact-form.php">Kontakt</a>

        </div>

        <div class="info-box info-box2">
            <p class="title">Inwestujemy w nowoczesne rozwiązania</p>
            <p>
                Nasza firma inwestuje w innowacyjne i ciekawe pomysły.
                Z naszymi Partnerami realizujemy wielomilionowe projekty.
                Stawiamy na budowanie relacji i wspólne prowadzenie biznesu, dlatego skontaktuj się
                z nami jeżeli potrzebujesz zaufanego inwestora lub wspólnika.
            </p>

            <a href="contact-form.php">Rozpocznij współpracę</a>

        </div>
        </div>
        <div class="row-1">

        <div class="info-box info-box3">
            <p class="title">Rekrutujemy dla IT</p>
            <p>
                Stale rekrutujemy dla firm IT w Polsce i za granicą.
                Nasi podopieczni to głównie programiści z Ukrainy i nie tylko.
                Jeżeli szukasz zasobów zza wschodniej granicy lub
                chciałbyś wziąć udział w rekrutacji skontaktuj się z nami.
            </p>

            <a href="contact-form.php">Znajdź pracownika</a>
            <a href="http://developerinpoland.eu/pl" target="_blank">Dołącz do poszukujących</a>

        </div>


        <div class="info-box info-box4">
            <p class="title">Posiadamy własne rozwiązania</p>
            <p>
                Nasza działalność opiera się także na szukaniu nowych rozwiązań,
                posiadamy własne wewnętrzne projekty które oferujemy
                szerokiej gamie zagranicznych klientów.
                Nasza działalność to również open-source, przez którą angażujemy się w
                społeczności IT i zdobywamy zaufanie wśród developerów.
            </p>

            <a href="eu-projects.php">Zobacz nasze rozwiązania</a>
            <a href="http://spikeframework.com" target="_blank">Odkryj nasz framework</a>

        </div>
        </div>
    </div>

</div>

<div class="cooperation">

    <p>Mamy przyjemność współpracować z:</p>

    <img src="images/exadel.png?t=123"/>

    <img src="images/gs.png?t=123"/>

    <img src="images/akme.png?t=123" style="    width: 100px;"/>

    <!--        <img src="images/sb.png" style="    width: 120px;" />-->

</div>

<div id="modal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">
            <span class="closeModal">&times;</span>
            <h2>Przystąp do Akademii Programowania JSQL</h2>
        </div>
        <div class="modal-body">
            <a href="akademia.php">Zgłoś się</a>
        </div>
    </div>

</div>

<audio id="notification" autoplay="false">
    <source src="notification.ogg" type="audio/ogg">
    <source src="notification.mp3" type="audio/mpeg">
</audio>

<?php include('footer.php'); ?>

<img src="images/background1.jpg?t=123" style="height: 1px;width: 1px;"/>
<img src="images/background5.jpg?t=123" style="height: 1px;width: 1px;"/>


</body>
</html>