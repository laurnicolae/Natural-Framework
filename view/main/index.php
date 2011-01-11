<?php require_once(FILES_PATH.'/view/header.php'); ?>

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
<?php foreach($data as $key => $row){ ?>
    <tr>
        <td><?php echo $key+1; ?></td>
        <td><?php echo $row['camp1']; ?></td>
        <td><?php echo $row['camp2']; ?></td>
        <td><?php echo $row['camp3']; ?></td>
        <td><?php echo $row['camp4']; ?></td>
        <td><?php echo "<a href='".BASE_URL."/main/show?id=".$row['id']."'>Show</a>"; ?></td>
        <td><?php echo "<a href='".BASE_URL."/main/edit?id=".$row['id']."'>Edit</a>"; ?></td>
        <td><?php echo "<a href='".BASE_URL."/main/delete?id=".$row['id']."'>Delete</a>"; ?></td>
    </tr>
<?php } //endforeach ?>
</table>
<?php echo "<a href='".BASE_URL."/main/add'>Add</a>"; ?>

<?php require_once(FILES_PATH.'/view/footer.php'); ?>