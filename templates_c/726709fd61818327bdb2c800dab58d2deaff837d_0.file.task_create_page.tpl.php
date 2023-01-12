<?php
/* Smarty version 4.3.0, created on 2023-01-11 18:20:19
  from '/Users/lukas_braziulis/Sites/toDoWithDataBase/src/View/task_create_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63befde30c4c04_14161902',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '726709fd61818327bdb2c800dab58d2deaff837d' => 
    array (
      0 => '/Users/lukas_braziulis/Sites/toDoWithDataBase/src/View/task_create_page.tpl',
      1 => 1673461217,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63befde30c4c04_14161902 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create New Task</title>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_103404550963befde30c1724_92020896', "css");
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136432371763befde30c43f1_10273950', "js");
?>

</head>
<body>
<header>
    <div class="topnav">
        <a href="/toDoWithDataBase">Home</a>
        <a class="active" href="/toDoWithDataBase/new">Create</a>
    </div>
</header>
<main>
<form method="post" action="/toDoWithDataBase/create">
<fieldset>
    <legend><h3>Create New Task</h3></legend>
    <div class="display-flex">
        <div>
            <label>Name:</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label>Description:</label>
            <textarea type="text" name="description"></textarea>
        </div>
        <input class="submit-button" type="submit" value="Create">
    </div>
</fieldset>

</form>
</main>
</body>
</html><?php }
/* {block "css"} */
class Block_103404550963befde30c1724_92020896 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_103404550963befde30c1724_92020896',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <link rel="stylesheet" href="./src/assets/css/main.css" media="all" />
    <?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_136432371763befde30c43f1_10273950 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_136432371763befde30c43f1_10273950',
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
