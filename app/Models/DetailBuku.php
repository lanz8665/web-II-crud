<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailBuku extends Model
{
    //inisialisasi table
    protected $table = 'detail_buku';

    //inisialisasi PK
    protected $primaryKey = 'id';


    public function buku()
    {
        return $this->belongsTo(Buku::class, 'buku_id', 'id');
    }    

}
