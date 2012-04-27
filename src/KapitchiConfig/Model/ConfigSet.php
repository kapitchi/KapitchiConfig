<?php

namespace KapitchiConfig\Model;

use ZfcBase\Model\ModelAbstract;

class ConfigSet extends ModelAbstract {
    protected $values;
    
    public function getValues() {
        return $this->values;
    }

    public function setValues($values) {
        $this->values = $values;
    }
    
}