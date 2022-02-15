<?php
/**
 * Handles the view functionality of our MVC framework
 */
class View_Model
{

    private $_data = array();

    private $_render = false;

    public function __construct($template) {
        $file = SERVER_ROOT . '/views/' . strtolower($template) . '.php';
        if (file_exists($file)) {
            /**
             * trigger render to include file when this model is destroyed
             * if we render it now, we wouldn't be able to assign variables
             * to the view!
             */
            $this->_render = $file;
        }
    }

    public function assign($variable, $value) {
        $this->_data[$variable] = $value;
    }

    public function __destruct() {
        //parse data variables into local variables so they render to view
        $data = $this->_data;
        //render veiw
        include $this->_render;
    }

}