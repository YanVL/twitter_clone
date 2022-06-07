<?php

namespace App\Controllers;

//os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;

class AppController extends Action {

    public function timeline() {

        if($_SESSION['id'] != '' && $_SESSION['nome'] != '')  {
            echo 'chegamos até aqui!';

            echo '<pre>';
            print_r($_SESSION);
            echo '</pre>';
        } else {
            header('Location: /?login=erro');
        }


    }
}