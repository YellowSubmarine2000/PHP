<form action="<? echo
$_SERVER['REQUEST_URI']?>" method="post">
    <input type="hidden" name= "q" value="<?++$q?>">
    <input type="submit" value="Start">
    <? echo $q; ?>
</form>