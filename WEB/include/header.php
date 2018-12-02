<header class="mdc-top-app-bar">
    <div class="mdc-top-app-bar__row">
        <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
            <!--<a href="#" class="material-icons mdc-top-app-bar__navigation-icon">menu</a>-->
            <a href="index.php"><span class="mdc-top-app-bar__title">Kino Študent</span></a>
        </section>
        <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end" role="toolbar">
            <?php
            if(@isset($_SESSION["uporabnik"])){?>
                <a href="odjava.php""><div class="navbarLink  waves-effect waves-grey-lighten-5">Odjava</div></a>
                <a ><div class="navbarLink  waves-effect waves-grey-lighten-5">Moj račun</div></a>
            <?php
            }
            else{?>
                <a onclick="naloziPrijavo()"><div class="navbarLink  waves-effect waves-grey-lighten-5">Prijava</div></a>
                <a onclick="naloziRegistracijo()"><div class="navbarLink  waves-effect waves-grey-lighten-5">Registracija</div></a>
            <?php
            }
            ?>
            <a ><div class="navbarLink waves-effect waves-grey-lighten-5">Košarica</div></a>
        </section>
    </div>
</header>