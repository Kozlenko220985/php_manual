<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 11.08.2017
 * Time: 13:53
 */


function selectItems(array $item, $selected){

    $text = '';
    foreach ($item as $key => $value){
        if ($key == $selected){
            $ch = "selected";
        }else{
            $ch ="";
            $text .= "<option $ch value = \"$key\"> $value </option> \n ";
        }
    }
    return $text;
}

$arrayName = [
    'Weaving' => 'Hugo',
    'Goddard' => 'Paul',
    'Taylor' => 'Robert'
];


?>

<form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="post">
    <label for="secondName">Выберите имя</label>
    <select name="surname" id="secondName">
        <?= selectItems($arrayName, $_REQUEST['surname']) ?>"
    </select><br>
    <input type="submit" name="submit" value="Узнать фамилию">
</form>


<?php
if (isset($_POST['surname'])){
    $name = $arrayName[$_POST['surname']];
    echo "Вы выбрали : {$_POST['surname']}, {$name}";
}
?>