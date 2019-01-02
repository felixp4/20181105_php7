<?php ## Удобство оператора @ 502/1071

if(@$_REQUEST['submit']) echo "Кнопка нажата!";
// if(!empty($submit)) echo "Кнопка нажата!";
// var_dump(empty($submit));
// var_dump($submit);

?>

<form action="<?= $_SERVER['SCRIPT_NAME']; ?>">
    <input type="submit" name="submit" value="Go!">
</form>
