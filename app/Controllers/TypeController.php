<?php 

class TypeController extends CoreController {

    public function types() {
        $typeModel = new Type();
        $types = $typeModel->findAll();

        $this->show('types', ['types' => $types]);
    }

}