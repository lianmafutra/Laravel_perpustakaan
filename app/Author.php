<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $guarded= [''];
    public $timestamps = false; // menagktifkan kolom created at & update at
    
    public function books(){
        return $this->hasMany(Book::class);
    }

    

}
