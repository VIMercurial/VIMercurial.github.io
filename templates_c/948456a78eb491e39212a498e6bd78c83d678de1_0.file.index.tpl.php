<?php
/* Smarty version 4.2.1, created on 2022-10-13 15:07:39
  from 'C:\XAMPP\htdocs\VIMercurial\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63480d9b6c31b6_68587002',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '948456a78eb491e39212a498e6bd78c83d678de1' => 
    array (
      0 => 'C:\\XAMPP\\htdocs\\VIMercurial\\view\\index.tpl',
      1 => 1665666404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63480d9b6c31b6_68587002 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pt">
<?php echo '<script'; ?>
 src="JSCodes.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://kit.fontawesome.com/09f222d34e.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="CSS.css">
<meta charset="UTF-8">
<meta name="viewport" content="width=device=width, initial-scale=1.0">

<div class="boxMain">
    <div class="boxHeader">
        <h3 class="boxHeaderText"> -+- <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 -+- </h3>
    </div>

    <thead class="listLinks">
        <a class="clickLinks" href="index.html"><i class="fa-solid fa-house"></i> PRINCIPAL</a>
        <a class="clickLinks" href="jogos.html"><i class="fa-solid fa-gamepad"></i> JOGOS</a>
        <a class="clickLinks" href="https://github.com/VIMercurial/"><i class="fa-brands fa-github"></i> GITHUB</a>
        <a class="clickLinks" href="prog.html"><i class="fa-solid fa-table-list"></i> PROGRAMAÇÃO</a>
    </thead>

    <div class="boxElements">
        <div class="boxHeader">
            <h3 class="boxHeaderText"> -+- PRINCIPAL -+-</h3>
        </div>

        <span class="textJustifyRed">
            <h2 class="textCenterRedFOCUS">BEM VINDO AO MEU PORTFÓLIO DIGITAL!</h2>
            <p>
                Este é um showcase Digital feito por conta própria,
                o acesso á esta página é para poder demonstrar minhas habilidades com HTML, CSS & Outras ferramentas! Tudo
                o que é necessário é acessar a página correta no menu para ver o que eu sou capaz de fazer para os projetos.
                O site que você vê aqui é uma versão repaginada, diria que uma versão partindo para o BETA do meu website.
                Comecei faz alguns meses e já estou querendo botar em prática o que consigo fazer com o HTML, CSS, entre outros.
                Eu tinha começado esta página fazia alguns meses, mas pós uma contratação para aprender e trabalhar como
                desenvolvedor Júnior de Full-Stack, creio que fui aprendendo á desenvolver uma metodologia melhor para se
                trabalhar com o código geral.

                <br>

                <br>Aqui neste website você verá links tanto em cima, quanto em baixo, para chegar em:
                <ul>
                    <li>Uma página de Apresentação</li>
                    <li>Um portfólio de jogos</li>
                    <li>O meu GITHUB para contatos</li>
                    <li>Um portfólio de programação</li>
                </ul>
            </p>
        </span>
    </div>

    <div class="boxElements">
        <div class="boxHeader">
            <h3 class="boxHeaderText"> -+- NOTAS -+-</h3>
        </div>

        <span class="textInsideRed textJustifyRed">
            <h2 class="textCenterRedFOCUS"> 13-03-2022 - NOVO SITE!!</h2>
            <p>
                Consegui finalmente ter o conhecimento para poder gerar um site com um look mais profissional.
                Anteriormente, eu tinha feito um pequeno Alpha do website para poder conseguir alguma vaga de emprego.
                Com muita bênção, meu chefe é um cara muito sério, e tem me ensinado diariamente como progredir com a programação.
                Hoje, este design de website é muito mais coeso que o design anterior, mas entra para o meu portfólio de programação.
            </p>
        </span>
    </div>


    <div class="boxElements">
        <div class="boxHeader">
            <h3 class="boxHeaderText"> -+- SOBRE O CRIADOR -+-</h3>
        </div>
        <span class="textInsideRed">
            <p>
                Sou um formado na faculdade Anhembi Morumbi pelo curso de Design de Games, Trabalhando hoje em dia como
                Programador Júnior em uma companhia de logística, tenho sempre estado feliz em poder aprender mais com
                o que o emprego tem me mostrado e como eu posso ficar cada vez mais experiente nas áreas que gosto.
            </p>
        </span>
    </div>

    <thead class="listLinks">
        <a class="clickLinks" href="index.html"><i class="fa-solid fa-house"></i> PRINCIPAL</a>
        <a class="clickLinks" href="jogos.html"><i class="fa-solid fa-gamepad"></i> JOGOS</a>
        <a class="clickLinks" href="https://github.com/VIMercurial/"><i class="fa-brands fa-github"></i> GITHUB</a>
        <a class="clickLinks" href="prog.html"><i class="fa-solid fa-table-list"></i> PROGRAMAÇÃO</a>
    </thead>
</div>
<?php }
}
