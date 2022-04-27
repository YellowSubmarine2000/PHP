<table width= "100%">
    <tr>
        <td align="left">
            <p>Вопрос 1 ответ в</p>
            <form action="q2.php" method="post">
                <input type="hidden" name= "q" value="<?++$q?>">
                <input type="radio" name="answer" value="1a">a<br>
                <input type="radio" name="answer" value="1b">b<br>
                <input type="radio" name="answer" value="1c">c<br>
                <input type="submit" value="Send">
                <input type="hidden" name= "title" value="Answer the questions">
            </form>
        </td>
    </tr>
</table>

<? echo $q;