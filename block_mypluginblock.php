<?php
class block_my_plugin_block extends block_base
{

    public function init()
    {
        $this->title = get_string('pluginname', 'block_my_plugin_block');
    }

    public function get_content()
    {
        if ($this->content !== null) {
            return $this->content;
        }

        $this->content = new stdClass();

        if (!empty($this->config->title)) {
            $this->title = $this->config->title;
        }

        if (empty($this->config->content['text'])) {
            $this->content->text = get_string('contentnotset', 'block_my_plugin_block');
        } else {
            $this->content->text = format_text($this->config->content['text'], FORMAT_HTML);
        }

        return $this->content;
    }

    public function instance_allow_multiple()
    {
        return true;
    }
}