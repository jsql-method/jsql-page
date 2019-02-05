<!DOCTYPE HTML>
<html>
<?php include('head.php'); ?>
<body>
<?php include('menu.php'); ?>

<div id="background4"></div>
<div class="content background4">
<div class="info-box info-box0 info-box-relative">
    <div class="featured">
        <h2>Przystąp do naszej Akademii Programowania JSQL!</h2>
                <div class="main">

                    <?php

                        if(isset($_GET['send'])){

                            if($_GET['send'] == 'true'){
                                echo '<div class="success">Dziękujemy. Wiadomość została wysłana.</div>';
                            }else if($_GET['send'] == 'false'){
                                echo '<div class="error">Przepraszamy. Wiadomość nie została wysłana</div>';
                            }

                        }

                    ?>

                    <form action="assets/send.php" method="post" enctype="multipart/form-data" class="message">

                        <label for="c_name">Imię i nazwisko</label>
                        <input type="text" id="c_name"  name="imie" required="required">

                        <label for="c_pozycja">Stanowisko</label>
                        <select id="c_pozycja"  name="pozycja" required="required">
                            <option value="AKADEMIA">Akademia Programowania JSQL</option>
                            <option value="FRONTEND">Frontend Developer</option>
                            <option value="JAVA">Java Developer</option>
                            <option value="NET">.NET Developer</option>
                            <option value="PHP">PHP Developer</option>
                            <option value="REKRUTER">Rekruter IT</option>
                            <option value="TESTER">Tester</option>
                            <option value="JUNIOR_FRONTEND">Junior Frontend Developer</option>
                            <option value="JUNIOR_JAVA">Junior Java Developer</option>
                            <option value="JUNIOR_NET">Junior .NET Developer</option>
                            <option value="JUNIOR_PHP">Junior PHP Developer</option>
                            <option value="PRAKTYKI">Praktykant</option>
                        </select>

                        <label for="c_name">E-mail</label>
                        <input type="email" id="c_name" name="e-mail" required="required">

                        <label for="c_message">Wiadomość (opcjonalnie)</label>
                        <textarea id="c_message" name="tresc"></textarea>

                        <div class="input-file">
                            <button type="button" onclick="document.getElementById('c_plik').click();">Dodaj CV</button>
                            <input type="file" id="c_plik" name="plik" placeholder="DODAJ PLIK" style="display: none;">
                        </div>

                        <button type="submit" name="submit"><i class="ion ion-android-send"></i> Wyślij</button>

                    </form>
                </div>
    </div>
</div>
</div>
<?php include('footer.php'); ?>
</body>
</html>