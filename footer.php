<div id="footer">
    <div class="clearfix rows-footer">
        <div class="section">
            <h4>O nas</h4>
            <p>
                Spólka JSQL Sp. z.o.o. powstała ze wspólnej idei inwestowania i tworzenia innowacyjnych rozwiązań z zakresu IT.
                Dzięki połączeniu wiedzy technicznej i biznesu możliwe jest odniesienie sukcesu na rynku wewnętrznym jak i międzynarodowym.
            </p>
        </div>
        <div class="section contact">
            <h4>Adres siedziby</h4>
            <p>
                <span>Adres:</span> 70-542 Szczecin ul. Sienna 9
            </p>
            <p>
                <span>Telefon:</span> (+48) 786 933 336
            </p>
            <p>
                <span>Email:</span> biuro@jsql.pl, office@jsql.pl
            </p>
        </div>
        <div class="section">
            <h4>Media społecznościowe</h4>
            <p>
                <a target="_blank" href="https://www.facebook.com/JSQL-143557626351560" class="social"><i class="ion ion-social-facebook"></i></a>
                <a target="_blank" href="https://www.youtube.com/channel/UCjQ9Ey-2NBkt8z7zoUa7OXw" class="social"><i class="ion ion-social-youtube"></i></a>
                <a target="_blank" href="https://twitter.com/JsqlSp" class="social"><i class="ion ion-social-twitter"></i></a>
            </p>
        </div>
        <div class="section">
            <h4>Polityka Cookies</h4>
            <p>
                Serwis wykorzystuje pliki cookies. Korzystając ze strony wyrażasz zgodę na wykorzystywanie plików
                cookies, w zakresie odpowiadającym konfiguracji Twojej przeglądarki.
            </p>
        </div>
    </div>
    <div class="founds">
        <img src="images/dotacje2.png?t=123" />
    </div>
    <div id="footnote">
        <div class="clearfix">
            <p style="font-size: 0.8rem;">
                SĄD REJONOWY SZCZECIN-CENTRUM W SZCZECINIE, XIII WYDZIAŁ GOSPODARCZY KRAJOWEGO REJESTRU SĄDOWEGO
            </p>
            <p style="font-size: 0.8rem;">
                Numer KRS: 0000666497, REGON: 366695470, NIP: 8581858437
            </p>
            <p style="font-size: 0.8rem;">
                Kapitał zakładowy: 10 000,00 zł
                <br/>
                <br/>
            </p>
            <p>
                © Copyright 2018 JSQL sp.z.o.o. All Rights Reserved.
            </p>
        </div>
    </div>
</div>

<link rel="stylesheet" href="css/style.css?t=123" type="text/css">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css?t=123" type="text/css">
<link rel="stylesheet" href="ionicons/css/ionicons.min.css?t=123">
<script src="jquery.min.js?t=123"></script>

<link href="fonts/varela.css?t=123" rel="stylesheet">
<link href="fonts/muli.css?t=123" rel="stylesheet">

<script type="text/javascript">

    var url = window.location.href;

    if (url.indexOf('?error=') > -1) {
        var error = url.substring(url.indexOf('?'), url.length);
        error = error.replace('?error=', '');

        document.getElementById('error').style.display = 'block'
        document.getElementById('error').innerHTML = decodeURIComponent(error);

    } else if (url.indexOf('?sended=') > -1) {

        console.log(document.getElementById('sended').style);

        document.getElementById('sended').style.display = 'block'
        document.getElementById('sended')

    }

    // Select all links with hashes
    $('a[href*="#"]')
    // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function(event) {
            // On-page links
            if (
                location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                &&
                location.hostname == this.hostname
            ) {
                // Figure out element to scroll to
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                // Does a scroll target exist?
                if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000, function() {
                        // Callback after animation
                        // Must change focus!
                        var $target = $(target);
                        $target.focus();
                        if ($target.is(":focus")) { // Checking if the target was focused
                            return false;
                        } else {
                            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                            $target.focus(); // Set focus again
                        };
                    });
                }
            }
        });

    $('.submenu-hover').click(function(){
        $(this).hasClass('hoverable') ? $(this).removeClass('hoverable').addClass('nothoverable') : $(this).addClass('hoverable').removeClass('nothoverable');
    });

    $('.hamburger').click(function(e){
        console.log(e);
        e.preventDefault();
        e.stopPropagation();
        $('.hamburger').toggleClass('change');
        $('.navigation').toggle();
    });

</script>
<script type="text/javascript">
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js?t=1', 'ga');

    ga('create', 'UA-97058079-1', 'auto');
    ga('send', 'pageview');

</script>
<script type="text/javascript">
    // Get the modal
    var modal = document.getElementById('modal');

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("closeModal")[0];

     $(document).ready(function(){

         setTimeout(function(){
             modal.style.display = "block";
             document.getElementById('notification').play();
         }, 1000);

     });

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>