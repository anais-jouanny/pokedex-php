<?php

class CoreController {

    public function show($page, $viewData = []) {
        $absoluteUrl = $_SERVER['BASE_URI'];

        include __DIR__ . "/../views/partials/header.tpl.php";
        include __DIR__ . "/../views/$page.tpl.php";
        include __DIR__ . "/../views/partials/footer.tpl.php";
    }
    
}