<?php
namespace NickSnellock\Views;

class TableView extends BaseView
{
    public function __toString()
    {
        $returnString = '';

        foreach ($this->data as $item) {
            foreach ($item as $key => &$column) {
                if ($column === null) {
                    $column = 'null';
                }
                if (in_array($key, $this->booleans)) {
                    if ($column == 1) {
                        $column = 'true';
                    } else {
                        $column= 'false';
                    }
                }
            }
            $returnString .= implode("\t", $item) . "\n";
        }

        return $returnString;
    }
}