<?php require("config.php");?>
<?php include("header.php");?>
<?php     
?>
<?php if ( isset($_GET['view']) ):
    switch ($_GET['view']) :
        case "form" :
        default :
            include("home.php");
            break;
            case "panel" :
                include("panel.php");
            break;
    endswitch;
else :
    include("home.php");
endif;?>

<?php include("footer.php");?>
<?php include "debug.php";?>
