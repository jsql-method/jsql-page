<!DOCTYPE HTML>
<html>
<?php include('head.php'); ?>
<body>
<?php include('menu.php'); ?>


<div id="background4"></div>
<div class="content background4">
<div class="info-box info-box0 info-box-relative">
    <div class="featured contact-form">
        <h2>Kontakt</h2>

        <div class="left">
            JSQL sp. z o. o.<br/>
            ul. Sienna 9<br/>
            70-542 Szczecin<br/><br/>
            e-mail: <br/>
            <a class="mail" href="mailto:office@jsql.pl">office@jsql.pl</a><br/>
            <a class="mail" href="mailto:biuro@jsql.pl">biuro@jsql.pl</a><br/>
            <br/>
            tel: +48 786 933 336<br/>
        </div>
        <div class="right">
            <div id="map"></div>
            <script>
                function initMap() {
                    var uluru = {lat: 53.424139, lng: 14.560396 };
                    var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 12,
                        center: uluru
                    });
                    var marker = new google.maps.Marker({
                        position: uluru,
                        map: map
                    });
                }
            </script>
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDO_3cZyk_jIDm2y3QELe28mKYG-eXAtCs&callback=initMap"></script>
        </div>

    </div>
</div>
</div>
<!---->
<!--<div id="contact">-->
<!--    <div class="clearfix">-->
<!--        <div class="featured">-->
<!--            <h2>Kontakt</h2>-->
<!--            <div class="main">-->
<!--                <p style="padding: 0 10px;">-->
<!--                    Skorzystaj z formularza aby wysłać do nas wiadomość. Odpowiemy najszybciej jak to będzie-->
<!--                    możliwe.-->
<!--                </p>-->
<!--                <form action="contact.php" method="post" class="message">-->
<!--                    <label>Imię i nazwisko</label>-->
<!--                    <input type="text" name="subject" value="">-->
<!--                    <label>Email</label>-->
<!--                    <input type="email" name="email" value="">-->
<!--                    <label>Wiadomość</label>-->
<!--                    <textarea name="message"></textarea>-->
<!--                    <button type="submit"><i class="fa fa-send"></i> Wyślij</button>-->
<!--                </form>-->
<!--                <div class="contact-details">-->
<!--                    <p>-->
<!--                        <i class="ion ion-ios-telephone-outline"></i>-->
<!--                        <label>+48 534 091 605</label>-->
<!--                    </p>-->
<!--                    <p>-->
<!--                        <i class="ion ion-ios-email-outline"></i>-->
<!--                        <label>biuro@jsql.pl</label>-->
<!--                    </p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->


<?php include('footer.php'); ?>
</body>
</html>
