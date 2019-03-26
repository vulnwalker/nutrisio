<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Asset
 *
 * @package App
 * @property string $category
 * @property string $serial_number
 * @property string $title
 * @property string $photo1
 * @property string $photo2
 * @property string $photo3
 * @property string $status
 * @property string $location
 * @property string $assigned_user
 * @property text $notes
*/
class Product extends Model
{
    protected $table = "produk";
    protected $fillable = ['nama_produk','harga','harga_member','deskripsi','promo','komisi','gambar','video'];
    protected $hidden = [];
    
}
