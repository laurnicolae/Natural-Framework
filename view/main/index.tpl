{include file='header.tpl'}
{strip}
<table border="1">
    <tr>
        <th>&nbsp;</th>
        <th>Column1</th>
        <th>Column2</th>
        <th>Column3</th>
        <th>Column4</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
    </tr>
{foreach $data as $row}
    <tr bgcolor="{cycle values="#eeeeee,#dddddd"}">
        <td>{$row@iteration}</td>
        <td>{$row.camp1}</td>
        <td>{$row.camp2}</td>
        <td>{$row.camp3}</td>
        <td>{$row.camp4}</td>
        <td><a href='{$base_url}/main/show?id={$row.id}'>Show</a></td>
        <td><a href='{$base_url}/main/edit?id={$row.id}'>Edit</a></td>
        <td><a href='{$base_url}/main/delete?id={$row.id}'>Delete</a></td>
    </tr>
{/foreach}
</table>
<a href='{$base_url}/main/add'>Add</a>
{/strip}
{include file='footer.tpl'}