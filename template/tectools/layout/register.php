<?php

declare(strict_types=1);

/**
 * @var Template $this
 */

if ($this->RCMS->Login->isLoggedIn()) {
    header('Location: /dashboard');
}
?>

<div class="row">
    <div class="col s12 m8 l4 xl2 offset-m2 offset-l4 offset-xl5">
        <div id="">
            <h1 style="font-size: 3.2rem">Opret Konto</h1>

            <?php
            if (isset($_GET['emailtaken'])) {
                $this->RCMS->Functions->outputError('Bruger med den email eksisterer allerede', 'h6');
            }
            ?>

            <form action="" method="POST">
                <input autocomplete="off" name="email" required type="email" placeholder="E-mail"><br>
                <input autocomplete="off" name="password" required type="password" placeholder="Adgangskode"><br>
                <!-- TODO: hent automatisk by ud fra postnummer -->
                <input value="<?= $_SESSION['createUserPOST']['firstname'] ?? '' ?>" autocomplete="off" name="firstname" required type="text" placeholder="Fornavn"><br>
                <input value="<?= $_SESSION['createUserPOST']['lastname'] ?? '' ?>" autocomplete="off" name="lastname" required type="text" placeholder="Efternavn"><br>
                <input pattern="\d*" minlength="8" maxlength="8" value="<?= $_SESSION['createUserPOST']['phone'] ?? '' ?>" autocomplete="off" name="phone" required type="text" placeholder="Tlf. nr."><br>
                <input value="<?= $_SESSION['createUserPOST']['address'] ?? '' ?>" autocomplete="off" name="address" required type="text" placeholder="Adresse"><br>
                <input pattern="\d*" minlength="4" maxlength="4" value="<?= $_SESSION['createUserPOST']['zipcode'] ?? '' ?>" autocomplete="off" name="zipcode" required type="text" placeholder="Postnr."><br>
                <input value="<?= $_SESSION['createUserPOST']['city'] ?? '' ?>" autocomplete="off" name="city" required type="text" placeholder="By"><br>

                <input name="create_new_user" type="hidden" value="1"><br>
                <input class="btn" type="submit" value="Opret">
            </form>
            <br><br><br>
        </div>
    </div>
</div>