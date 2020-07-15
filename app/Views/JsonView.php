<?php
namespace NickSnellock\Views;

class JsonView extends BaseView
{
    public function __toString()
    {
        return json_encode($this->data);
    }
}