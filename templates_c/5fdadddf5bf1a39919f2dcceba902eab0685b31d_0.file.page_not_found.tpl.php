<?php
/* Smarty version 4.3.0, created on 2023-01-12 17:23:34
  from '/Users/lukas_braziulis/Sites/toDoWithDataBase/src/View/page_not_found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63c04216c48f30_77921119',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fdadddf5bf1a39919f2dcceba902eab0685b31d' => 
    array (
      0 => '/Users/lukas_braziulis/Sites/toDoWithDataBase/src/View/page_not_found.tpl',
      1 => 1673542673,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../assets/css/main.css' => 1,
  ),
),false)) {
function content_63c04216c48f30_77921119 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>404</title>

   <style><?php $_smarty_tpl->_subTemplateRender("file:../assets/css/main.css", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('hide_sign'=>true), 0, false);
?></style>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_70354594263c04216c46f94_70228678', "js");
?>

</head>
<body>
<header>
    <div class="topnav">
        <a href="/toDoWithDataBase">Home</a>
        <a href="/toDoWithDataBase/new">Create</a>
    </div>
</header>
<main>
    <div class="not-found-block">
        <h2>Page is not found :(</h2>
        <br>
        <div>
            <img src="https://i.kym-cdn.com/entries/icons/mobile/000/026/489/crying.jpg" height="300">
        </div>
    </div>
</main>
</body>
</html><?php }
/* {block "js"} */
class Block_70354594263c04216c46f94_70228678 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_70354594263c04216c46f94_70228678',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo '<script'; ?>
 src="./src/assets/js/main.js"><?php echo '</script'; ?>
>
    <?php
}
}
/* {/block "js"} */
}
