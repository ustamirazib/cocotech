<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    protected $table = 'laptop';
    protected $fillable = ['namaLaptop', 'gambarBarang', 'spesifikasiBarang', 'tagsBarang', 'garansiBarang', 'hargaBarang', 'pembuatPost'];

    public function getGambarBarang()
    {
        if(!$this->gambarBarang){
            return asset('images/coco-default-laptop.png');
        }
        return asset('images/'.$this->gambarBarang);
        
    }
}
