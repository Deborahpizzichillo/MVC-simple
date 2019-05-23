<?php
include_once 'model/htmlTemplate.php';


class homecontroller
{
    public function index()
    {
        $htmlTemplate = new htmlTemplate('home');

        include_once 'view/home/homeview.php';

        unset($htmlTemplate);
    }
}

?>

