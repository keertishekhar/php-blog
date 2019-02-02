<?php

class Table{

    public function columns($data, $isColumn  = false, $separator = null){

        $columns = $isColumn?array_keys($data):array_values($data);

        if(is_null($separator)){

            $separator = $isColumn?',':'","';
        }

        $columns = implode($separator, $columns);

        if($isColumn == false){
            $columns = '"'.$columns.'"';
        }

        return $columns;
        
    }
}