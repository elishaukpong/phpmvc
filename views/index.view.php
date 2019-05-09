<?php require('partials/head.php') ?>

<?php foreach($users as $user) :?>
    <li><?= $user->name; ?></li>
<?php endforeach;?>

<h1>Submit Your Task</h1>

<form action="/names" method="POST">
    <input type="text" name="name">
    <input type="submit" value="Submit">
</form>
<?php require('partials/footer.php') ?>
