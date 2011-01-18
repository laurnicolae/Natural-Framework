{include file='header.tpl'}

<p>{$data[0]['camp1']}</p>
<p>{$data[0]['camp2']}</p>
<p>{$data[0]['camp3']}</p>
<p>{$data[0]['camp4']}</p>
<a href='{$base_url}/main/edit?id={$id}'>Edit</a>

<a href='{$base_url}/main/delete?id={$id}'>Delete</a>

{include file='footer.tpl'}