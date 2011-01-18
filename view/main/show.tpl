<?php require_once(FILES_PATH.'/view/header.php'); ?>

<p><?php echo $data[0]['camp1']; ?></p>
<p><?php echo $data[0]['camp2']; ?></p>
<p><?php echo $data[0]['camp3']; ?></p>
<p><?php echo $data[0]['camp4']; ?></p>
<?php echo "<a href='".BASE_URL."/main/edit?id=".$_GET['id']."'>Edit</a>"; ?>

<?php echo "<a href='".BASE_URL."/main/delete?id=".$_GET['id']."'>Delete</a>"; ?>

<?php require_once(FILES_PATH.'/view/footer.php'); ?>