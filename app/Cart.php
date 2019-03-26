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
class Cart extends Model
{
	public $timestamps = false;
    protected $table = "cart";
    protected $fillable = ['id_produk','qty','session_id'];
    protected $hidden = [];
    
}
