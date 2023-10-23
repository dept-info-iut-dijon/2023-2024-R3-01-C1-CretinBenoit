<?php
require_once("views/View.php");

Class MainController{
    public function Index() : void {
        $indexView = new View('Index');
        $indexView->generer(['nomDresseur' => "Red"]);
    }
}
?>