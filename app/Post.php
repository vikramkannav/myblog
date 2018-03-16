<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends BaseModel
{
    public static $includeRelationshipsForApi = ['created_by'];

    protected $fillable = ['name','subject','description','status','created_by'];

     public function user(){
         return $this->belongsTo(User::class,'created_by');
     }

    public function getValidationRules()
    {
        return [
            'name' => 'required | min:2 | max:60',
            'description' => 'required | min:2 | max:60',
            'description' => 'required | min:2 | max:60',
            'subject' => 'required | min:2 | max:60',
            'status' => 'required',
        ];
    }
}
