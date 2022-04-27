<?
session_start();
if (!isset($_SESSION['test']) && !isset($_POST['q'])) {
    //Проверка запущена ли сессия и задана ли переменная
    $q= 0; //№ вопроса
    $title = 'Answer the questions';
}else{
    //Создаем сессионную переменую test, содержащую массив ответов
    if($_POST['q'] != 1 )
        $_SESSION['test'][] = $_POST['answer'];
    $q = $_POST['q'];
    $title = $_POST['title'];
    
}
?>
<h1><?$title?></h1>
<?
echo $q;
//В зависимости от номера , подключаем файл с вопросами
switch($q){
    case 0:
        include 'start.php';
        break;
    case 1:
        include 'q1.php';
        break;
    case 2:
        include 'q2.php';
        break;
    case 3:
        include 'q3.php';
        break;
    default:
        include 'result.php';
}