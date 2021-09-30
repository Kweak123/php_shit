<?php
/* @var $this yii\web\View */
/* @var $booksList [] app\controllers\BooksController */

use yii\helpers\Url;

?>
    <br>
<a href="<?= Url::to(['books/create']);?>" class="btn btn-primary">Create</a>
    <br>
<h1>books/index</h1>

<table class="table table-condensed">
    <tr>
        <th>ID</th>
        <th>Book Name</th>
        <th>Author</th>
        <th>Publication Date</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>


<?php foreach ($booksList as $books): ?>
    <tr>
    <td><?php echo $books->id; ?></td>
    <td><?php echo $books->bookName; ?></td>
    <td><?php echo $books->author; ?></td>
    <td><?php echo $books->publicationDate; ?></td>
    <td><a href="<?= Url::to(['books/update', 'id' => $books->id]); ?>">Edit</a></td>
    <td><a href="<?= Url::to(['books/delete', 'id' => $books->id]); ?>">Delete</a></td>
    </tr>
<?php endforeach; ?>
</table>