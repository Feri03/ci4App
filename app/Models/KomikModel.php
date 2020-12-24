<?php 

namespace App\Models;

use CodeIgniter\Model;

class KomikModel extends Model
{
    // menambah kan proferty 
    protected $table      = 'komik';
    protected $useTimestamps = true;
    protected $allowedFields = ['judul', 'slug', 'penulis', 'penerbit', 'sampul'];

    // ambil data komik 
    public function getKomik($slug = false) //dengan parameter tidak ada
    {
        // jika tidak data komik tampilkan semua 
        if($slug == false){
            return $this->findAll();
        }
        // jika ada data komik tampilkan 
        return $this->where(['slug' => $slug])->first();
    }
}