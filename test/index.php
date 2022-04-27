<?
session_start();
if (isset($_SESSION['test']) && !isset($_POST['q'])) {
    //Проверка запущена ли сессия и задана ли переменная
    $q= 0; //№ вопроса
    $title = 'Answer the questions';
}else{
    //Создаем сессионную переменую test, содержащую массив ответов
    if($_POST['q'] !=1)
        $_SESSION['test'][] = $_POST['answer'];
    $q = $_POST['q'];
    $title = $_POST['title'];
    
}
?>
<h1><?$title?></h1>
<?
//В зависимости от номера , переходим на нужную страницу
switch($q){
    case 0:
        header('Location: start.php');
        break;
    case 1:
        header('Location: q1.php');
        break;
    case 2:
        header('Location: q2.php');
        break;
    case 3:
        header('Location: q3.php');
        break;
    default:
    include 'result.php';
}