<?php
namespace NickSnellock\Views;

abstract class BaseView
{
    /**
     * @var array
     */
    protected $data;

    protected $booleans = [];

    public function __construct(array $data, array $booleans = [])
    {
        $this->data = $data;
        $this->booleans = $booleans;
    }

    abstract function __toString();
}