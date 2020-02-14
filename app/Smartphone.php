<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Smartphone extends Model
{
    protected $table = 'smartphone';
    protected $fillable = ['namaSmartphone', 'gambarBarang', 'spesifikasiBarang', 'tagsBarang', 'garansiBarang', 'hargaBarang', 'pembuatPost'];

    public function getGambarBarang()
    {
        if(!$this->gambarBarang){
            return asset('images/smartphone/coco-default-smartphone.png');
        }
        return asset('images/smartphone/'.$this->gambarBarang);
    }
}
