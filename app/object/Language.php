<?php
class Language {
    
    public $data = array();
    public $default = 'english';

    public function __construct($language) {
        $file = DIR_LANGUAGE . '/' . $language . '.php';

        if (file_exists($file)) {
            $_ = array();

            require($file);

            $this->data = array_merge($this->data, $_);

            return $this->data;
        }

        $file = DIR_LANGUAGE . '/' . $this->default . '.php';

        if (file_exists($file)) {
            $_ = array();

            require($file);

            $this->data = array_merge($this->data, $_);

            return $this->data;
        } else {
            trigger_error('Error: Could not load language ' . $filename . '!');
            exit();
        }
    }

}

?>
