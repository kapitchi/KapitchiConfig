<?php

namespace KapitchiConfig\Form;

class ConfigSet extends ZfcBase\Form\Form {
    public function init() {
        $this->addElement('checkbox', 'myconfig', array(
            'label' => 'My label',
        ));
    }
}