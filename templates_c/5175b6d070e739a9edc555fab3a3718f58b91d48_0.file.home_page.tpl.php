<?php
/* Smarty version 4.3.0, created on 2023-01-12 19:42:52
  from '/Users/lukas_braziulis/Sites/toDoWithDataBase/src/View/home_page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63c062bc469d93_29825859',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5175b6d070e739a9edc555fab3a3718f58b91d48' => 
    array (
      0 => '/Users/lukas_braziulis/Sites/toDoWithDataBase/src/View/home_page.tpl',
      1 => 1673552445,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c062bc469d93_29825859 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71168993263c062bc455e88_92189365', "css");
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_202506039063c062bc459185_14841305', "js");
?>

</head>
<body>
<header>
    <div class="topnav">
        <a class="active" href="/toDoWithDataBase">Home</a>
        <a href="/toDoWithDataBase/new">Create</a>
    </div>
</header>
<main>
<table>
    <tr>
       <th>ID</th>
       <th>Name</th>
       <th>Description</th>
       <th>Active</th>
       <th>Created At</th>
       <th>Updated At</th>
    </tr>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tasks']->value, 'task');
$_smarty_tpl->tpl_vars['task']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['task']->value) {
$_smarty_tpl->tpl_vars['task']->do_else = false;
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['task']->value['id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['task']->value['name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['task']->value['description'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['task']->value['active'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['task']->value['created_at'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['task']->value['updated_at'];?>
</td>

      <td class="no-border">
          <form method="post" action="/toDoWithDataBase/delete" id="delete-form-<?php echo $_smarty_tpl->tpl_vars['task']->value['id'];?>
">
              <input type="hidden" name="task_id" value="<?php echo $_smarty_tpl->tpl_vars['task']->value['id'];?>
">
              <button type="submit" form="delete-form-<?php echo $_smarty_tpl->tpl_vars['task']->value['id'];?>
" class="btn"><i class="fa fa-trash"></i></button>


          </form>
      </td>
       <td class="no-border">
           <form method="post" action="/toDoWithDataBase/loadEditForm" id="edit-form-<?php echo $_smarty_tpl->tpl_vars['task']->value['id'];?>
">
               <input type="hidden" name="task_id" value="<?php echo $_smarty_tpl->tpl_vars['task']->value['id'];?>
">
               <button type="submit" form="edit-form-<?php echo $_smarty_tpl->tpl_vars['task']->value['id'];?>
" class="btn"><i class="fa fa-edit"></i></button>

           </form>
       </td>
    </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
    <br>
    <br>
    <br>








        





</main>
</body>
</html><?php }
/* {block "css"} */
class Block_71168993263c062bc455e88_92189365 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_71168993263c062bc455e88_92189365',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="./src/assets/css/main.css" media="all" />
    <?php
}
}
/* {/block "css"} */
/* {block "js"} */
class Block_202506039063c062bc459185_14841305 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_202506039063c062bc459185_14841305',
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
