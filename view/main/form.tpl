<form method="post" action="<?=BASE_URL?>/<?=$controller?>/<?php if($action=='add'){echo 'create';}elseif($action=='edit'){echo 'update';} ?>"">
  <input type="hidden" name="id" value="<?php if(isset($data[0]['id'])) echo $data[0]['id'] ?>">
  
  <span id="camp1" <?if(isset($error['camp1'])){echo "class='error'";}?>
    <?php if(isset($error['camp1'])){?>
       <span><?=$error['camp1']?></span>    
    <?php } ?>
    <label>Camp1</label>
    <input type="text" name="camp1" value="<?php if(isset($data[0]['camp1'])) echo $data[0]['camp1'] ?>">
  </span>
  
  <span id="camp2" <?if(isset($error['camp2'])){echo "class='error'";}?>
    <?php if(isset($error['camp2'])){?>
       <span><?=$error['camp2']?></span>    
    <?php } ?>
    <label>Camp2</label>
    <input type="text" name="camp2" value="<?php if(isset($data[0]['camp2'])) echo $data[0]['camp2'] ?>">
  </span>
  
  <span id="camp3" <?if(isset($error['camp3'])){echo "class='error'";}?>
    <?php if(isset($error['camp3'])){?>
       <span><?=$error['camp3']?></span>    
    <?php } ?>
    <label>Camp3</label>
    <input type="text" name="camp3" value="<?php if(isset($data[0]['camp3'])) echo $data[0]['camp3'] ?>">
  </span>
  
  <span id="camp4" <?if(isset($error['camp4'])){echo "class='error'";}?>
    <?php if(isset($error['camp4'])){?>
       <span><?=$error['camp4']?></span>    
    <?php } ?>
    <label>Camp4</label>
    <input type="text" name="camp4" value="<?php if(isset($data[0]['camp4'])) echo $data[0]['camp4'] ?>">
  </span>
  
  <input type="submit" value="Send" />
  
</form>