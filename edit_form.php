<?php
/*
 * 
 */ 
class block_txblock_edit_form extends block_edit_form {

    /*
     * Form used in the configuration page
     */
    
    protected function specific_definition($mform) {
 
        // Section header title according to language file.
        $mform->addElement('header', 'configheader', get_string('blocksettings', 'block_txblock'));
 
        // A sample string variable with a default value.
        $mform->addElement('text', 'config_text', get_string('blockstring', 'block_txblock'));
        $mform->setDefault('config_text', 'default value');
        $mform->setType('config_text', PARAM_TEXT);        
 
    }
}