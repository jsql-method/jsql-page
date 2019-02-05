<!DOCTYPE HTML>
<html>
<?php include('head.php'); ?>
<body>
<?php include('menu.php'); ?>

<div id="background4"></div>
<div class="content background4">
    <div class="info-box info-box0 info-box-relative">
        <div class="featured ">
            <div class="main width-50">
                <h2>Przystąp do Akademii Programowania JSQL!</h2>
                <h2>Zdobądź zawód i kwalifikacje</h2>
                <br/>
                <a href="http://uniwersytet-programowania.pl/akademia-programowania/">
                    <h2>Kliknij tutaj i sprawdź więcej na stronie Uniwersytetu Programowania JSQL</h2>
                </a>
                <?php

                if (isset($_GET['send'])) {

                    if ($_GET['send'] == 'true') {
                        echo '<div class="success">Dziękujemy. Wiadomość została wysłana.</div>';
                    } else if ($_GET['send'] == 'false') {
                        echo '<div class="error">Przepraszamy. Wiadomość nie została wysłana</div>';
                    }

                }

                ?>

                <form action="assets/send.php" method="post" enctype="multipart/form-data"
                      class="message akademia-form">

                    <label for="c_name">Imię i nazwisko</label>
                    <input type="text" id="c_name" name="imie" required="required">

                    <select id="c_pozycja" name="pozycja" required="required" value="AKADEMIA" style="display: none;">
                        <option value="AKADEMIA" selected>Akademia Programowania JSQL</option>
                    </select>

                    <label for="c_name">E-mail</label>
                    <input type="email" id="c_name" name="e-mail" required="required">

                    <textarea id="c_message" name="tresc" style="display: none;"></textarea>

                    <div class="input-file">
                        <button type="button" onclick="document.getElementById('c_plik').click();">Dodaj CV</button>
                        <input type="file" id="c_plik" name="plik" placeholder="DODAJ PLIK" style="display: none;">
                    </div>

                    <button type="submit" name="submit"><i class="ion ion-android-send"></i> Wyślij</button>

                </form>

            </div>
            <div class="width-50 akademia">
                <a href="http://uniwersytet-programowania.pl/akademia-programowania/">
                    <div class="akademia-img"></div>
                </a>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
</body>
</html>