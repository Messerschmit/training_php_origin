<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="UTF-8">
        <title>title</title>
    </head>
        <!--action $_SERVER['PHP_SELF'] позволяет обрабатывать несколько значений в переменной-->
        <form action="<?= htmlentities($_SERVER['PHP_SELF']);?>" method="post">
            <fieldset>
                <legend>Выберите животное:</legend>
                <label for="dog">
                    <input type="checkbox" id="dog" value="dog" name="animall[]">
                    dog
                </label>
                <label for="cat">
                    <input type="checkbox" id="cat" value="cat" name="animall[]">
                    cat
                </label>
                <label for="rat">
                    <input type="checkbox" id="rat" value="rat" name="animall[]">
                    rat
                </label>
                <label for="fox">
                    <input type="checkbox" id="fox" value="fox" name="animall[]">
                    fox
                </label>
            </fieldset>
            <input type="submit" value="ok!">
        </form>
        <?php 
        //вывод результата выбора
            $animall  = isset($_POST['animall']) ? $_POST['animall'] : 0;
            if ( !empty($animall) ){
                echo '<br><br>Выбраны:';
                foreach ($animall as $value) {
                    echo "<span>".htmlentities($value)."</span>";
                    echo ' ';
                }
            }
        ?>
    
    
</html>

