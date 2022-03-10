<table>
<?php
foreach($books as $key=>$book)
{

?>
    <tr>
        <td><a href="index.php?book=<?php echo $key;?>"><?php echo $key;?></a></td>
        <td><?php echo $book->title;?></td>
        <td><?php echo $book->author;?></td>
        <td><?php echo $book->description;?></td>
    </tr>
    <?php }?>
</table>


