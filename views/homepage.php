<?php
use App\Personnage;
use App\Form\Form;


$form = new Form();
?>


<form method="GET" action="">
    <?= $form->input('nom'); ?>
    <?= $form->textArea('contenu'); ?>

    <button type="submit" class="btn btn-primary"> valider</button>
</form>