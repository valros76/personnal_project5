<?php

function loadClass($class){
    require('models/classes/'.$class.'.php');
}
spl_autoload_register('loadClass');



?>