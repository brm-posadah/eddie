<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Otb_Urls_Ots extends Model
{
    protected $table = "otb_url_ot";
    public $timestamps = false;
    protected $primaryKey = 'id_ot';

    protected $fillable = [
        'url',
        'id_ot'
    ];

    public function urls(){
        return $this->belongsTo('App\Otb_Ordenes_Trabajos', 'id_ot');
    }

}
