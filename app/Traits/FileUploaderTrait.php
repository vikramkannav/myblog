<?php

namespace App\Traits;

trait FileUploaderTrait
{
    public $file_url='files/';
    public function uploadFile($data)
    {
        $response=array('name'=>null,'type'=>null);
        list($type, $data) = explode(';', $data);
        list(, $data)      = explode(',', $data);
        list($type, $extension)      = explode('/', $type);
        if(!($type=='data:application'||$type=='data:image'))
            return $response;
        $data = base64_decode($data);
        $name=md5(microtime()).".".$extension;
        $url = $this->file_url.$name;
        file_put_contents($url, $data);
        $response['name']=$name;
        $response['type']=$type;
        return $response;
    }
    public function getFiles($attachments){
        $val=array();
        $assets=$this->$attachments()->get();
        foreach ($assets as $key=>$value) {
            array_push($val,$value->file_name);
        }
        return $val;
    }
    public function setFiles($model,$val,$file_type){
        $class=get_class($this);
        $model::where(['model_id'=>$this->id,'model_type'=>$class,'file_type'=>$file_type])->delete();
        foreach ($val as $key=>$value){
            $arr=array('file_name'=>$value,'model_id'=>$this->id,'model_type'=>$class);
            $obj=$model::create($arr);
            if($obj->errors()){
                $this->addError($obj->errors()->toArray());
                break;
            }
        }
    }

}