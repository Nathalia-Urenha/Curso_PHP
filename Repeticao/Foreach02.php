<form>

    <input type="text" name="nome">
    <input type="date" name="nascimento">
    <input type="submit" value="OK">

</form>

<?php

//se o campo tiver get
if (isset($_GET)) {

  //$key é o name dos inputs, $value é o valor dos inputs
    foreach ($_GET as $key => $value) {

        echo "Nome do campo: " . $key . "<br>";

        echo "Valor do campo: " . $value;

        echo "<hr>"; //linha horizontal

    }

}

?>