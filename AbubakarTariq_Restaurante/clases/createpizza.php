<?php
require_once ("pizza.php");

$pizzaNormal = array (0=>new Pizza (0, "Crispy Pizza", "1pizza.png", 8.00, 'One', "Small", "no"),
                    1=>new Pizza (1, "BBQ Pizza", "2pizza2.png", 9.99, 'One', "Small", "no"),
                    2=>new Pizza (2, "Creamy Pizza", "3pizza3.png", 10.00, 'One', "Small", "no"),
                    3=>new Pizza (3, "Beef Pizza", "4pizza4.png", 11.99, 'One', "Small", "no"),
);


$pizzaVegetarian = array (0=>new Pizza (0, "Crispy Pizza", "1pizza.png", 10.00, 'One', "Small", "yes"),
                    1=>new Pizza (1, "BBQ Pizza", "2pizza2.png", 11.99, 'One', "Small", "yes"),
                    2=>new Pizza (2, "Creamy Pizza", "3pizza3.png", 11.00, 'One', "Small", "yes"),
                    3=>new Pizza (3, "Beef Pizza", "4pizza4.png", 12.99, 'One', "Small", "yes"),
);


/*$listv = array();
foreach($pizzaNormal as $pizza){
    array_push($listv, $pizza->getName(), $pizza->getId());
}
print_r($listv);

*/

?>