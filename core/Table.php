<?php

class Table{

    public function columns($data, $isColumn  = false){

        $columns = $isColumn?array_keys($data):array_values($data);

        $separator = $isColumn?',':'","';

        $columns = implode($separator, $columns);

        if($isColumn == false){
            $columns = '"'.$columns.'"';
        }

        return $columns;
        
    }
}