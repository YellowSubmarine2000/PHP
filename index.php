<?   

require_once ('inc/func.ini.php');



$array = [1,2,3,4,5,6,7,8,9,0];

$a= my_count($array);

echo "Кол-во элементов массива: $a  ";
// изменение запроса при помощи метода _GET
$leftmenu = [
    ['link'=>'Домой', 'href'=>'index.php'],
    ['link'=>'Test', 'href'=>'test/index.php'],
    ['link'=>'Контакты', 'href'=>'index.php?id=contact'],
    ['link'=>'Таблица умножения', 'href'=>'index.php?id=table'],
    ['link'=>'Кальклятор', 'href'=>'index.php?id=calc'],
    ['link'=>'Cookie', 'href'=>'inc/cookie.inc.php']
];
//заголовок
$title= 'Мой сайт';
$header= "Мой сайт№";
$id= strtolower(strip_tags(trim($_GET['id'])));
switch ($id) {
case 'about':
    $title= 'О сайте';
    $header= 'О сайте№';
    break;
case 'contact':
    $title= 'Контакты';
    $header= 'Контакты№';
    break;
case 'table':
    $title= 'Таблица';
    $header= 'Таблица№';
    break;
case 'calc':
    $title= 'Калькулятор';
    $header= 'Калькулятор№';
    break;
case 'cookie':
    $title= 'cookie';
    $header= 'cookie№';
    break;
}
echo "Название страницы: $title ";
echo "Название заголовка: $header ";
   

    drawMenu($leftmenu);

    $serv= $_SERVER["SERVER_SOFTWARE"];
    $ver= PHP_VERSION;
    $os= PHP_OS;

    echo "$serv ,  PHP: $ver , $os ";

    ?>
    <a href="inc/cookie.inc.php">Cookie</a>

<?

    /* var_dump($_SERVER) ; */
/* $hour = date('h');
$welcome = '';

$size = ini_get("post_max_size");

$letter = $size{strlen($size)-1};

$size = (int)$size;

switch ($letter) {
    case "M":{
        echo "Максимальный объем переменной $size мегабайт"; break;
    }
    case "G":{
        echo "Максимальный объем переменной $size гигабайт"; break;
    }
    default:{
        echo "Максимальный объем переменной $size килобайт"; break;
    }

} */

/* if ( 0 < $hour && 5 > $hour ) :
    $welcome = 'Доброй ночи';

elseif ( 6 < $hour && $hour < 11 ) :
    $welcome = 'Доброе утро';
}
elseif ( 12 < $hour && $hour <17 ) {
    $welcome = 'Добрый день ';
}
elseif ( 18 < $hour && $hour <23 ) {
    $welcome = 'Добрый вечер';
} 
endif;

echo "$welcome"; */

