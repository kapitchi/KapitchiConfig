<?php
return array(
    'di' => array(
        'instance' => array(
            'KapitchiConfig\Form\Config' => array(
                'parameters' => array(
                    
                )
            ),
            'KapitchiContact\Service\Contact' => array(
                'parameters' => array(
                    'modelPrototype' => 'KapitchiContact\Model\Contact',
                    'mapper' => 'KapitchiContact\Model\Mapper\ContactDbAdapter',
                )
            ),
        ),
    ),
);
