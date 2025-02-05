<?php
require_once(__DIR__ . '/../../config.php');

class block_my_plugin_block_edit_form extends block_edit_form
{

    protected function specific_definition($mform)
    {
        $mform->addElement('header', 'configheader', get_string('blocksettings', 'block'));

        $mform->addElement('text', 'config_title', get_string('blocktitle', 'block_my_plugin_block'));
        $mform->setType('config_title', PARAM_TEXT);
        $mform->addRule('config_title', null, 'required', null, 'client');
        $mform->addRule('config_title', 'Максимум 100 символов', 'maxlength', 100, 'client');

        $mform->addElement('editor', 'config_content', get_string('blockcontent', 'block_my_plugin_block'));
        $mform->setType('config_content', PARAM_RAW);
        $mform->addRule('config_content', null, 'required', null, 'client');
    }

    public static function display_form_when_adding(): bool
    {
        return true;
    }

    public function hide_header()
    {
        return true;
    }
}