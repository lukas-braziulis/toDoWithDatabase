<?php
/* Smarty version 4.3.0, created on 2023-01-12 18:56:16
  from '/Users/lukas_braziulis/Sites/toDoWithDataBase/src/assets/css/main.css' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63c057d009bcd0_72737215',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '289ae6e2a588ad2dc714ca2325a1e59c1bcca97b' => 
    array (
      0 => '/Users/lukas_braziulis/Sites/toDoWithDataBase/src/assets/css/main.css',
      1 => 1673549386,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c057d009bcd0_72737215 (Smarty_Internal_Template $_smarty_tpl) {
?>body {
    margin: 0;
    font-family: Arial, Helvetica, sans-serif;
}

.topnav {
    overflow: hidden;
    background-color: #333;
    margin-bottom: 15px;
}

.topnav a {
    float: left;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
}

.topnav a:hover {
    background-color: #ddd;
    color: black;
}

.topnav a.active {
    background-color: #04AA6D;
    color: white;
}

table {
    border: 1px black solid;
    margin: 20px;
    padding: 15px;
    border-radius: 5px;
}

th {
    border-bottom: 1px gray dotted;
    padding-bottom: 3px;
}

td {
    border-bottom: 1px gray dotted;
    border-right: 1px gray dotted;
    padding: 5px;

}

td:first-child{
    border-left: 1px gray dotted;
}

tr {
    padding: 5px;
}

div.not-found-block {
    width: 100%;
    margin-top: 50px;
    text-align: center;
}

input, textarea {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input:not(:last-child) {
    width: 500px;
}

.submit-button {
    font-size: 15px;
    background-color: none;
    padding-right: 10px;
    padding-left: 10px;
    text-transform: uppercase;
    border-radius: 5px;
    background-color: #04AA6D;
    color: white;
}

.submit-button:hover {
    background-color: lightgreen;

}

.no-border{
    border: none;
}

.display-flex{
    display: flex;
    flex-direction: column;
    justify-content: space-between;

}

<?php }
}
