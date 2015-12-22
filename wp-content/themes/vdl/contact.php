<?php
/**
 * Created by PhpStorm.
 * User: Vilim Stubičan
 * Date: 12.9.2015.
 * Time: 17:14
 */

/* Template Name: Contact */



get_header();
?>

<section class="main">
    <div class="container-2">
        <div id="location-map" class="location-map">
        </div>
    </div>

    <div class="container-2">
        <div class="contact-form-wrapper">
            <header>
                <h1>Kontakt</h1>
                <span class="sub">
                    Pošaljite nam svoje mišljenje ili upit.
                </span>
            </header>

            <form class="contact-form">
                <span class="contact-error"></span>
                <span class="contact-success"></span>
                <fieldset>
                    <label for="from">Vaše ime</label>
                    <input type="text" name="from" placeholder="Ime" class="transition-normal" contact-id="name"/>
                </fieldset>
                <fieldset>
                    <label for="email">Vaša email adresa</label>
                    <input type="text" name="sender" placeholder="Email" class="transition-normal" contact-id="email"/>
                </fieldset>

                <fieldset>
                    <label for="message">Poruka</label>
                    <textarea name="message" placeholder="Poruka" rows="5" class="transition-normal" contact-id="message"></textarea>
                </fieldset>

                <fieldset>
                    <button type="button" class="btn btn-transparent-green transition-normal" id="form-submit">Pošalji</button>
                </fieldset>
            </form>
        </div>
    </div>
</section>



<?php
get_footer();
