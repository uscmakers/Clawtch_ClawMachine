<?php
if (isset ( $_POST["val"] )) {
	$val = strip_tags ($_POST["val"]);

	if (is_numeric($val)) {
		switch ($val) {
    case 0: // auto off

        break;
    case 1: // auto on

        break;
    case 2: // throw

        break;
		case 3: // dispense
				// use exec() or system() to communicate with external script
        break;
    default:
        echo("Invalid command " + $val);
		}
	}
?>
