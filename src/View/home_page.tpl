<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    {*    CSS'o uzloadininmas*}
    {block name="css"}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="./src/assets/css/main.css" media="all" />
    {/block}

    {*    JS uzloadinimas*}
    {block name="js"}
        <script src="./src/assets/js/main.js"></script>
    {/block}
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

    {foreach $tasks as $task}
    <tr>
        <td>{$task.id}</td>
        <td>{$task.name}</td>
        <td>{$task.description}</td>
        <td>{$task.active}</td>
        <td>{$task.created_at}</td>
        <td>{$task.updated_at}</td>

      <td class="no-border">
          <form method="post" action="/toDoWithDataBase/delete" id="delete-form-{$task.id}">
              <input type="hidden" name="task_id" value="{$task.id}">
              <button type="submit" form="delete-form-{$task.id}" class="btn"><i class="fa fa-trash"></i></button>

{*              <input type="submit" value="Delete"> NEREIKIA, nes veikia su ICON*}

          </form>
      </td>
       <td class="no-border">
           <form method="post" action="/toDoWithDataBase/loadEditForm" id="edit-form-{$task.id}">
               <input type="hidden" name="task_id" value="{$task.id}">
               <button type="submit" form="edit-form-{$task.id}" class="btn"><i class="fa fa-edit"></i></button>

{*               <input type="submit" value="Update"> NEREIKIA, nes veikia su ICON*}
           </form>
       </td>
    </tr>
    {/foreach}
</table>
    <br>
    <br>
    <br>








    {*    <button class="btn"><i class="fa fa-trash"></i></button>*}
    {*    <button class="btn"><i class="fa fa-edit"></i></button>*}





{*    <button class="btn"><i class="fa fa-home"></i></button>*}
{*    <button class="btn"><i class="fa fa-bars"></i></button>*}
{*    <button class="btn"><i class="fa fa-close"></i></button>*}
{*    <button class="btn"><i class="fa fa-folder"></i></button>*}

{*    <p>Icon buttons with text:</p>*}
{*    <button class="btn"><i class="fa fa-home"></i> Home</button>*}
{*    <button class="btn"><i class="fa fa-bars"></i> Menu</button>*}
{*    <button class="btn"><i class="fa fa-trash"></i> Trash</button>*}
{*    <button class="btn"><i class="fa fa-close"></i> Close</button>*}
{*    <button class="btn"><i class="fa fa-folder"></i> Folder</button>*}
</main>
</body>
</html>