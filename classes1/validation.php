<?php
error_reporting(0);
class validation extends db {

    public $errors = [];

    public function input($field){
        if($_SERVER['REQUEST_METHOD'] == 'POST' || $_SERVER['REQUEST_METHOD'] == 'post'){
            return strip_tags(trim($_POST[$field]));
        } else if($_SERVER['REQUEST_METHOD'] == 'GET' || $_SERVER['REQUEST_METHOD'] == 'get'){
            return strip_tags(trim($_GET[$field]));
        }
    }
    public function validate($field, $label, $rules){

    //    Split rule string on pipe sign
    $allRules = explode("|", $rules);
    $inputField = $this->input($field);
    // Check required rule in the array
    if(in_array("required", $allRules)){
        
        if(empty($inputField)){
            return $this->errors[$field] = $label . " is required";
        }

    }
    // Close required rule

    // Check uniqueEmail rule in the array
    if(in_array('uniqueEmail', $allRules)){

        $uniqueIndex = array_search("uniqueEmail", $allRules);
        $tableIndex  = $uniqueIndex + 1;
        $tableName   = $allRules[$tableIndex];
        $result = $this->connect->prepare(" SELECT * FROM " . $tableName . " WHERE " . $field . " = ? ");
        if($result->execute([$inputField])){
            if($result->rowCount() < 1 ){
                return $this->errors[$field] = $label . " not found :  You had not login to this website using this email ";
            }
        }

    }
    // Close uniqueEmail rule

    // Check min_len rule in the array
    if(in_array("min_len", $allRules)){
        $minLenIndex = array_search("min_len", $allRules);
        $valueIndex = $minLenIndex + 1;
        $minValue = $allRules[$valueIndex];
        if(strlen($inputField) < $minValue){
            return $this->errors[$field]  . " Product Code is too short";
        }

    }

    }

    public function run(){
        if(empty($this->errors)){
            return true;
        } else {
            return false;
        }
    }

}

?>