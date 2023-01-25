<?php if(count($errors)>0):?>
<div class="error">
<?php foreach($errors as $error): ?>
<center><div class="error_get_last"><p><?php echo $error ?></p></div></center>
<?php endforeach ?>
</div>
<?php endif ?>