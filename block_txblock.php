<?php
class block_txblock extends block_base {
    public function init() {
        $this->title = get_string('txblock', 'block_txblock');
    }
    // The PHP tag and the curly bracket for the class definition 
    // will only be closed after there is another function added in the next section.
    public function get_content() {
        if ($this->content !== null) {
          return $this->content;
        }

        $this->content         =  new stdClass;
        $this->content->text   = 'The content of our block !';
        $this->content->footer = 'Footer here...';

        return $this->content;
  }
}