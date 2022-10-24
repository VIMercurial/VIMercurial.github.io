<?php
/* Smarty version 4.2.1, created on 2022-10-24 01:58:29
  from 'C:\XAMPP\htdocs\VIMercurial\view\jogos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6355d52557dba9_25548285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80264f1a46d33f23e479570bb908bb9791bbd452' => 
    array (
      0 => 'C:\\XAMPP\\htdocs\\VIMercurial\\view\\jogos.tpl',
      1 => 1666569504,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6355d52557dba9_25548285 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pt">
<?php echo '<script'; ?>
 src="JSCodes.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://kit.fontawesome.com/09f222d34e.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="../styles/CSS.css" type="text/css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device=width, initial-scale=1.0">

<div class="boxMain">
    <div class="boxHeader">
        <h3 class="boxHeaderText"> -+- <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 -+- </h3>
    </div>

    <thead class="listLinks">
        <a class="clickLinks" href="index.php"><i class="fa-solid fa-house"></i> PRINCIPAL</a>
        <a class="clickLinks" href="jogos.php"><i class="fa-solid fa-gamepad"></i> JOGOS</a>
        <a class="clickLinks" href="https://github.com/VIMercurial/"><i class="fa-brands fa-github"></i> GITHUB</a>
        <a class="clickLinks" href="prog.php"><i class="fa-solid fa-table-list"></i> PROGRAMAÇÃO</a>
    </thead>

    <div class="boxElements">
        <div class="boxHeader">
            <h3 class="boxHeaderText"> -+- JOGOS -+-</h3>
        </div>

        <span class="textInsideRed">
            <h2 class="textCenterRedFOCUS">BEM VINDO AO MEU PORTFÓLIO DE JOGOS!</h2>
            <p>
                Bom, sendo formado na faculdade Anhembi Morumbi no curso de Design de Games, eu estou sempre pensando em fazer um pequeno
                log nesta página, como um pequeno jornal de meus designs de jogos ou quaisquer outras coisas. Sempre tive paixão por fazer
                pequenos projetos, e creio que detalhando-os aqui, posso demonstrar á todos o quão legal é a arte do Design de Jogos!
            </p>
        </span>
    </div>

    <div class="boxElements">
        <div class="boxHeader">
            <h3 class="boxHeaderText"> -+- NOTAS SOBRE JOGOS -+-</h3>
        </div>

        <span class="textInsideRed">
            <h2 class="textCenterRedFOCUS"> 01-01-2022 - PROJETO EVILHEART</h2>
            <p>
                Um pequeno FPS que planejo criar desde sempre, os arquivos base estão no meu GITHUB, porém preciso continuar a programação
                logo mais... Atualmente tenho uns testes 3D no Unity, e um pouco de programação feita.
            </p>
        </span>
    </div>


    <thead class="listLinks">
        <a class="clickLinks" href="index.php"><i class="fa-solid fa-house"></i> PRINCIPAL</a>
        <a class="clickLinks" href="jogos.php"><i class="fa-solid fa-gamepad"></i> JOGOS</a>
        <a class="clickLinks" href="https://github.com/VIMercurial/"><i class="fa-brands fa-github"></i> GITHUB</a>
        <a class="clickLinks" href="prog.php"><i class="fa-solid fa-table-list"></i> PROGRAMAÇÃO</a>
    </thead>
</div>
<?php }
}
