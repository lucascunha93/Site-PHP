<?php

    if(!isset($_GET['c'])){
        require_once("controllers/site.php");
        $site = new siteControler();
        $site -> home();
    }else{
        switch($_REQUEST['c']){
            case 's':
            require_once("controllers/site.php");
            $site = new siteControler();

                if (!isset($_GET['a'])){
                    $site -> home();
                }else {
                    switch ($_REQUEST['a']) {
                        case 'h':
                            $site -> home();
                            break;
                        
                        case 's':
                            $site -> sobre();
                            break;

                        case 'p':
                            $site -> produtos();
                            break;

                        case 'c':
                            $site -> contato();;
                            break;

                        default:
                            echo "Erou";
                            break;
                    }
            }
        }
    }
?>