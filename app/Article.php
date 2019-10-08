<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // DEFINIR A PRIMARU KEY
    protected $primaryKey = 'id_article';
    
    protected $fillable = [
        'fk_user','titulo', 'link', 'created_at', 'updated_at'
    ];
}
