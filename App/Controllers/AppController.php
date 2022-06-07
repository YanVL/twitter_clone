<?php

namespace App\Controllers;

//os recursos do miniframework
use MF\Controller\Action;
use MF\Model\Container;

class AppController extends Action {

    public function timeline() {

        session_start();

        echo 'chegamos até aqui!';

        echo '<pre>';
        print_r($_SESSION);
        echo '</pre>';
    }
}