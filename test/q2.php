<p>Вопрос 2 ответ a</p>
<form action="q3.php" method="post">
    <input type="radio" name="answer" value="2a">a<br>
    <input type="radio" name="answer" value="2b">b<br>
    <input type="radio" name="answer" value="2c">c<br>
    <input type="submit" value="Send">
    <input type="hidden" name= "title" value="Answer the questions">
    <input type="hidden" name= "q" value="<?++$q?>">
</form>
<? echo $q;