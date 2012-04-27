<?php

namespace KapitchiConfig\Controller;

use Zend\Mvc\Controller\ActionController;

class ConfigSetController extends ActionController {
    protected $module;
    
    public function __construct(Module $module) {
        $this->module = $module;
    }
    
    public function indexAction() {
        
    }
    
    public function createAction() {
        
    }
    
    protected function attachDefaultListeners()
    {
        parent::attachDefaultListeners();
        $events = $this->events();
    }
    
    //getters/setters
    public function getModule() {
        return $this->module;
    }

    public function setModule(Module $module) {
        $this->module = $module;
    }

}