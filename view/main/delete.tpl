{include file='header.tpl'}
<form method="post" action="{$base_url}/{$controller}/delete">
    <input type="hidden" name="id" value="{$id}" />
    <p>Sunteti sigur ca doriti sa stergeti inregistrarea?</p>
    <input type="submit" name="delete" value="Sterge" />
    <a href="{$base_url}/{$controller}/">Nu, du-ma inapoi.</a>
    
</form>    
{include file='footer.tpl'}