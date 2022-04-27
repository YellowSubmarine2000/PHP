<?
 function drawMenu($menu, $vertical= true) {
        
    ?>
    <ul>
    <?php foreach ($menu as $items):?>
    <li><a href="<?=$items['href']?>"><?=$items['link']?></a></li>
    <?php endforeach;?>
    </ul><?
}
function my_count($arr, $mode= 0) {
    $i = 0;
    if(is_null($arr)) return 0;
    if(!is_array($arr)) return 1;
    foreach ($arr as $a) {
        if(is_array($a) && $mode= 1){
           $i+= my_count($a,1);
        }
        $i++;
    }
    
    return $i;
}