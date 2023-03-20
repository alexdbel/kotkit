<?php

function Nav()
{
?>
    <div class="nav">
        <div class="news" style="float: left; margin: 1rem 1rem;">
            <p>Les actualités</p>
        </div>
        <div>
            <button type="button" class="btn btn-outline-secondary" style="float: right; margin: 1rem 1rem;"><a href="./connexion.php">Connexion</a></button>
            <button type="button" class="btn btn-outline-danger" style="float: right; margin: 1rem 1rem; display:flex"><img width="25" src="./assets/img/svg/televerser.svg" alt="">Téléverser </button>
        </div>
    </div>
<?php 
}