<?php foreach ($jokes as $joke) { ?>
    <blockquote>
        <p><?= $joke['joketext']?>
       <a href="editJoke.php?id=<?=$joke['id']?>">Edit</a>
       <a href="deleteJoke.php?id=<?=$joke['id']?>">Delete</a>

        </p>
    </blockquote>
<?php } ?>