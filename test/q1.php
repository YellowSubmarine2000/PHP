<p>Вопрос 1 ответ в</p>
<form action="<? echo
$_SERVER['REQUEST_URI']?>" method="post">
    <input type="radio" name="answer" value="1a">a<br>
    <input type="radio" name="answer" value="1b">b<br>
    <input type="radio" name="answer" value="1c">c<br>
    <input type="submit" value="Send">
    <input type="hidden" name= "q" value="<?++$q?>">
</form>