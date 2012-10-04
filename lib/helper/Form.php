<?php

class Form {

    private static $instance = NULL;

    // get Singleton instance of Form class
    public static function getInstance() {
        if (self::$instance === NULL) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    // render <form> opening tag
    public static function open(array $attributes) {
        $html = '<form';
        if (!empty($attributes)) {
            foreach ($attributes as $attribute => $value) {
                if (in_array($attribute, array('action', 'method', 'id', 'class', 'enctype')) and !empty($value)) {
                    // assign default value to 'method' attribute
                    if ($attribute === 'method' AND ($value !== 'post' OR $value !== 'get')) {
                        $value = 'post';
                    }
                    $html .= ' ' . $attribute . '="' . $value . '"';
                }
            }
        }
        return $html . '>';
    }

    // render <input> tag
    public static function input(array $attributes) {
        $html = '<input';
        if (!empty($attributes)) {
            foreach ($attributes as $attribute => $value) {
                if (in_array($attribute, array('type', 'id', 'class', 'name', 'value')) and !empty($value)) {
                    $html .= ' ' . $attribute . '="' . $value . '"';
                }
            }
        }
        return $html . '>';
    }

    // render <textarea> tag
    public static function textarea(array $attributes) {
        $html = '<textarea';
        $content = '';
        if (!empty($attributes)) {
            foreach ($attributes as $attribute => $value) {
                if (in_array($attribute, array('rows', 'cols', 'id', 'class', 'name', 'value')) and !empty($value)) {
                    if ($attribute === 'value') {
                        $content = $value;
                        continue;
                    }
                    $html .= ' ' . $attribute . '="' . $value . '"';
                }
            }
        }
        return $html . '>' . $content . '</textarea>';
    }

    // render </form> closing tag
    public static function close() {
        return '</form>';
    }

}

// End Form class