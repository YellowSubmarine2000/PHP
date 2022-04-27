<p>Вопрос 3 ответ в</p>
<form action="result.php" method="post">
    <input type="radio" name="answer" value="3a">a<br>
    <input type="radio" name="answer" value="3b">b<br>
    <input type="radio" name="answer" value="3c">c<br>
    <input type="submit" value="Send">
    <input type="hidden" name= "title" value="get the result">
    <input type="hidden" name= "q" value="<?++$q?>">
</form>
<? echo $q;