<?php
/* Smarty version 4.3.0, created on 2023-01-12 20:01:54
  from '/Users/lukas_braziulis/Sites/toDoWithDataBase/src/View/task_update_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63c067327092a3_21121717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff5720e5504400c3d561a3144535988ee7c197b1' => 
    array (
      0 => '/Users/lukas_braziulis/Sites/toDoWithDataBase/src/View/task_update_page.tpl',
      1 => 1673553709,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c067327092a3_21121717 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Task</title>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132384873863c06732702606_64500400', "css");
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_41079773263c067327049f9_60315152', "js");
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
<form method="post" action="/toDoWithDataBase/update">
<fieldset>
    <legend><h3>Update Task</h3></legend>
    <input type="hidden" name="task_id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
">
    <div class="display-flex">
        <div>
            <label>Name:</label>
            <input type="text" name="name" required value="<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
">
        </div>
        <div>
            <label>Description:</label>
            <textarea type="text" name="description"><?php echo $_smarty_tpl->tpl_vars['data']->value['description'];?>
</textarea>
        </div>
      <input class="submit-button" type="submit" value="Create">     </div>
</fieldset>

</form>
</main>
</body>
</html><?php }
/* {block "css"} */
class Block_132384873863c06732702606_64500400 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_132384873863c06732702606_64500400',
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
class Block_41079773263c067327049f9_60315152 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_41079773263c067327049f9_60315152',
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
