<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <select name=user>
    {html_options values=$id output=$names selected="5"}
    </select>
    <table>
        {foreach $names as $name}
        {strip}
           <tr bgcolor="{cycle values="#eeeeee,#dddddd"}">
              <td>{$name}</td>
           </tr>
        {/strip}
        {/foreach}
    </table>
        
    <table>
        {foreach $users as $user}
        {strip}
           <tr bgcolor="{cycle values="#aaaaaa,#bbbbbb"}">
              <td>{$user.name}</td>
              <td>{$user.phone}</td>
           </tr>
        {/strip}
        {/foreach}
    </table>
</body>
</html>