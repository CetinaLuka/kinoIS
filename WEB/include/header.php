<header class="mdc-top-app-bar">
    <div class="mdc-top-app-bar__row">
        <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
            <!--<a href="#" class="material-icons mdc-top-app-bar__navigation-icon">menu</a>-->
            <a href="index.php"><span class="mdc-top-app-bar__title">Kino Študent</span></a>
        </section>
        <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end" role="toolbar">
            <?php
            if(isset($_SESSION["uporabniskoIme"])){?>
                <a href="../php/odjava.php""><div class="navbarLink  waves-effect waves-grey-lighten-5">Odjava</div></a>
                <a href=""><div class="navbarLink  waves-effect waves-grey-lighten-5">Moj račun</div></a>
            <?php
            }
            else{?>
                <a href="prijavaForm.php"><div class="navbarLink  waves-effect waves-grey-lighten-5">Prijava</div></a>
                <a href="registracijaForm.php"><div class="navbarLink  waves-effect waves-grey-lighten-5">Registracija</div></a>
            <?php
            }
            ?>
            <a href=""><div class="navbarLink waves-effect waves-grey-lighten-5">Košarica</div></a>
        </section>
    </div>
</header>