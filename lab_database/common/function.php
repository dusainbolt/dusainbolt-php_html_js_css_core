<?php 
    function checkEmptyValue($data, $key){
        $value = isset($data[$key]) ? $data[$key] : null;
        return $value;
    }

    function genderDataSelect($data, $check = ""){
        var_dump($check);
        foreach($data as $value){
            echo '<option value="'.$value.'" '.($value === $check ? "selected" : "").'>'.$value.'</option>';
        }
    }

    function genderSqlCondition($data){
        $conditon = "WHERE";
        $dem = 0;
        foreach($data as $key => $value){
            if(!empty($value)){
                $conditon .= ($dem != 0 ? " AND" : " ")." ".$key."=".'"'.$value.'"';
                $dem++;
            }
        }
        return $conditon == "WHERE" ? "" : $conditon;
    }

?>