<?php

namespace GoGetForums\includes;

class Component
{
    public $data;
    public $meta_key;
    public function __construct($data, $meta_key)
    {
        $this->data = $data;
        $this->meta_key = $meta_key;
    }
}

class Dropdown extends Component
{
    // Dropdown
    public function __construct($data, $meta_key) // in the future, we could extend extra parameters.
    {
        parent::__construct($data, $meta_key);

        include(GOGETFORUMS_TEMPLATE_PATH . "component/Dropdown.php");
    }
}

class Textarea extends Component
{
    // Textarea
    public  function __construct($data, $meta_key)
    {
        parent::__construct($data, $meta_key);

        // include quill.js
        GoGetForumsAssets::load_quill_assets();

        include(GOGETFORUMS_TEMPLATE_PATH . "component/Textarea.php");
    }
}

class SingleSelection extends Component
{
    // SingleSelection
    public function __construct($data, $meta_key)
    {
        parent::__construct($data, $meta_key);

        include(GOGETFORUMS_TEMPLATE_PATH . "component/SingleSelection.php");
    }
}

class InputBox extends Component
{
    // InputBox
    public function __construct($data, $meta_key)
    {
        parent::__construct($data, $meta_key);

        include(GOGETFORUMS_TEMPLATE_PATH . "component/InputBox.php");
    }
}

class Radio extends Component
{
    // Radio
    public function __construct($data, $meta_key)
    {
        parent::__construct($data, $meta_key);

        include(GOGETFORUMS_TEMPLATE_PATH . "component/Radio.php");
    }
}

class MultiCheckBox extends Component
{
    // MultiCheckBox
    public function __construct($data, $meta_key)
    {
        parent::__construct($data, $meta_key);

        include(GOGETFORUMS_TEMPLATE_PATH . "component/MultiCheckBox.php");
    }
}

class ComboBox extends Component
{
    // ComboBox
    public function __construct($data, $meta_key)
    {
        parent::__construct($data, $meta_key);

        include(GOGETFORUMS_TEMPLATE_PATH . "component/ComboBox.php");
    }
}

class DatePicker extends Component
{
    // DatePicker
    public function __construct($data, $meta_key)
    {
        parent::__construct($data, $meta_key);

        // Use cdn for testing
        wp_enqueue_style('style', 'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css');
        echo ('<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>');

        include(GOGETFORUMS_TEMPLATE_PATH . "component/DatePicker.php");
    }
}

class Select2 extends Component
{
    // Select2
    public function __construct($data, $meta_key)
    {
        parent::__construct($data, $meta_key);

        include(GOGETFORUMS_TEMPLATE_PATH . "component/Select2.php");
    }
}