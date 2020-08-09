<?php 
    function checkEmptyValue($data, $key){
        $value = isset($data[$key]) ? $data[$key] : null;
        return $value;
    }

    function genderDataSelect($data, $check = ""){
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

    function getUrlServerImg($filePath){
        return "upload/" . $filePath;
    }

    function checkActiveMenu($path){
       return strpos($_SERVER['REQUEST_URI'], $path) == 0 ? "" : "active";
    }

    function convertDateInput($value){
        if(empty($value)) return "";
        return substr($value, 0, 10);
    }
?>