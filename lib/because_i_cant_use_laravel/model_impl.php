<?php 

class Model{
    public function __construct(){
        echo "Model created";
    }

    public function get_data(){
        return "Model data";
    }

    public function get_data_with_param($param){
        return "Model data with param: {$param}";
    }

    public function save_data($data){
        return "Model data saved";
    }

    public function update_data($var = null){
        return "Model data updated";
    }

    public function delete_data($var = null){
        return "Model data deleted";
    }

    public function get_as_json()
    {
        return json_encode(["data" => "Model data"]);
    }


}