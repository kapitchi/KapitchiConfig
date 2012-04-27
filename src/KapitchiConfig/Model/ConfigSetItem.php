<?php

namespace KapitchiConfig\Model;

use ZfcBase\Model\ModelAbstract;

class ConfigSetItem extends ModelAbstract {
    protected $id;
    protected $value;
    protected $formElement;
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getValue() {
        return $this->value;
    }

    public function setValue($value) {
        $this->value = $value;
    }

    public function getFormElement() {
        return $this->formElement;
    }

    public function setFormElement($formElement) {
        $this->formElement = $formElement;
    }

}