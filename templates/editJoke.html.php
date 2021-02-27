<form action="" method="post">
<input type="hidden" name="id" value="<?=$joke['id'] ?>" />
    <label for="joketext">Update your joke:</label>
    <textarea id="joketext" name="joketext" values="<?=$joke['joketext'] ?>" rows="3" cols="40"></textarea>
    <input type="submit" value="Update">
</form>