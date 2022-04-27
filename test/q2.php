<p>Вопрос 2 ответ a</p>
<form action="<? echo
$_SERVER['REQUEST_URI']?>" method="post">
    <input type="radio" name="answer" value="2a">a<br>
    <input type="radio" name="answer" value="2b">b<br>
    <input type="radio" name="answer" value="2c">c<br>
    <input type="submit" value="Send">
    <input type="hidden" name= "q" value="<?++$q?>">
</form>