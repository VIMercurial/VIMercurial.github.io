<?php
/* Smarty version 4.3.0, created on 2023-01-15 11:58:12
  from 'C:\XAMPP\htdocs\VIMercurial.github.io\view\prog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63c3dc44b3b499_91936129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '766e48d86de539ac2e544218ea0e56c759b861ea' => 
    array (
      0 => 'C:\\XAMPP\\htdocs\\VIMercurial.github.io\\view\\prog.tpl',
      1 => 1673780269,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c3dc44b3b499_91936129 (Smarty_Internal_Template $_smarty_tpl) {
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
        <a class="clickLinks" href="<?php echo $_smarty_tpl->tpl_vars['routeHome']->value;?>
"><i class="fa-solid fa-house"></i> PRINCIPAL</a>
        <a class="clickLinks" href="<?php echo $_smarty_tpl->tpl_vars['routeGames']->value;?>
"><i class="fa-solid fa-gamepad"></i> JOGOS</a>
        <a class="clickLinks" href="https://github.com/VIMercurial/"><i class="fa-brands fa-github"></i> GITHUB</a>
        <a class="clickLinks" href="<?php echo $_smarty_tpl->tpl_vars['routeProg']->value;?>
"><i class="fa-solid fa-table-list"></i> PROGRAMAÇÃO</a>
    </thead>

    <div class="boxElements">
        <div class="boxHeader">
            <h3 class="boxHeaderText"> -+- PROGRAMAÇÃO -+-</h3>
        </div>

        <span class="textInsideRed">
            <h2 class="textCenterRedFOCUS">BEM VINDO AO MEU PORTFÓLIO DE PROGRAMAÇÃO!</h2>
            <p>
                Por formação no Design de Games, aprendi como programar via Programação Orientada á Objetos na linguagem
                de C# dentro do ambiente de jogo Unity3D.
                Porém hoje em dia, trabalho com tudo um pouco dentro do Software do Visual Studio Code, integrando JS,
                CSS, HTML, Bootstrap... Enfim.
                A coisa mais legal nestes últimos anos tem sido, com o estudo, ver que a lógica de programação ou
                marcação, segue uma hierarquia como qualquer outro
                estilo de vida, o que me deixou muito mais confortável em trabalhar com programação no geral!
            </p>
        </span>
    </div>

    <div class="boxElements">
        <div class="boxHeader">
            <h3 class="boxHeaderText"> -+- NOTAS SOBRE PROGRAMAÇÃO -+-</h3>
        </div>

        <span class="textInside textJustifyRed">
            <h2 class="textCenterRedFOCUS"> 23-10-2022 ATUALIZAÇÃO PARA MVC COM SMARTIES</h2>
            <p>
                Comecei um trabalho no meio do ano e fui desenvolvendo novas habilidades como programador, tanto que este website agora é programado na metodologia MVC,
                Essencial para um mercado de trabalho atual.
            </p>
        </span>


        <span class="textInside textJustifyRed">
            <h2 class="textCenterRedFOCUS"> 10-03-2022 ESTUDOS DE PROGRAMAÇÃO</h2>
            <p>
                Com o trabalho de programação sendo muito mais puxado do que eu imaginava, eu não pensava que este projeto ficaria á deriva por tanto tempo.
                Agora eu posso dar uma pequena atualizada nele. Vou documentar por aqui todos os meus estudos e coisas legais que aprender para não esquecer.
            </p>
        </span>
    </div>



    <thead class="listLinks">
        <a class="clickLinks" href="<?php echo $_smarty_tpl->tpl_vars['routeHome']->value;?>
"><i class="fa-solid fa-house"></i> PRINCIPAL</a>
        <a class="clickLinks" href="<?php echo $_smarty_tpl->tpl_vars['routeGames']->value;?>
"><i class="fa-solid fa-gamepad"></i> JOGOS</a>
        <a class="clickLinks" href="https://github.com/VIMercurial/"><i class="fa-brands fa-github"></i> GITHUB</a>
        <a class="clickLinks" href="<?php echo $_smarty_tpl->tpl_vars['routeProg']->value;?>
"><i class="fa-solid fa-table-list"></i> PROGRAMAÇÃO</a>
    </thead>
</div>
<?php }
}
