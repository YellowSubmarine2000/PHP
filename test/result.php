<?
$result = 0; //Кол- во верных ответов
if (isset($_SESSION['test'])){
    //Передаем ответы изи .ini в массив
    $answers = parse_ini_file("answers.ini");
    //Проверка ответов
    foreach($_SESSION['test'] as $value){
        if(array_key_exists($value,$answers))
        //Суммируем кол- во верных
        $result+= $answers[$value];
    }
    //Очищаем сессию
    session_destroy();
}
echo "$result верных ответов";