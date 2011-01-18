<form id="form" method="post" action="{$base_url}/{$controller}/{if $action=='add'}create{elseif $action=='edit'}update{/if}">
  <input type="hidden" name="id" value="{if isset($data[0]['id'])}{$data[0]['id']}{/if}" />
  
  <span class='row{if isset($error['camp1'])} error{/if}'>
    {if isset($error['camp1'])}
       <span>{$error['camp1']}</span>    
    {/if}
    <label>Camp1</label>
    <input type="text" name="camp1" value="{if isset($data[0]['camp1'])}{$data[0]['camp1']}{/if}" />
  </span>
  
  <span class='row{if isset($error['camp2'])} error{/if}'>
    {if isset($error['camp2'])}
       <span>{$error['camp2']}</span>    
    {/if}
    <label>Camp2</label>
    <input type="text" name="camp2" value="{if isset($data[0]['camp2'])}{$data[0]['camp2']}{/if}" />
  </span>
  
  <span class='row{if isset($error['camp3'])} error{/if}'>
    {if isset($error['camp3'])}
       <span>{$error['camp3']}</span>    
    {/if}
    <label>Camp3</label>
    <input type="text" name="camp3" value="{if isset($data[0]['camp3'])}{$data[0]['camp3']}{/if}" />
  </span>
  
  <span class='row{if isset($error['camp4'])} error{/if}'>
    {if isset($error['camp4'])}
       <span>{$error['camp4']}</span>    
    {/if}
    <label>Camp4</label>
    <input type="text" name="camp4" value="{if isset($data[0]['camp4'])}{$data[0]['camp4']}{/if}" />
  </span>
  
  <input type="submit" value="Send" />
  
</form>