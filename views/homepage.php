<?php
use App\Personnage;
use App\Form\Form;


$form = new Form();

function stripKeys($replace, $by, $arr){
    return str_replace($replace, $by, array_keys($arr));
}

dump($_GET);
// options à passer dans la réalisation de la liste déroulante
$options = ['a','b','c'];

$radios = ['homme', 'femme', 'vous-même']
?>



<form method="GET" action="">
    <?= $form->formInput('input', 'nom', 'text') ?>
    <?= $form->formInput('textarea','contenu') ?>
    <?= $form->formInput('select','catégories', $options) ?>
    <?= $form->formInput('radio',$radios, 'gender') ?>
    <?= $form->submit(); ?>
</form>