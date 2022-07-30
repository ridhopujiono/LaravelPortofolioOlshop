<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class produk
 * @package App\Models
 * @version July 30, 2022, 2:55 am UTC
 *
 * @property string $nama_produk
 * @property string $harga
 * @property string $foto
 */
class produk extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'produks';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama_produk',
        'harga',
        'foto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama_produk' => 'string',
        'harga' => 'string',
        'foto' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama_produk' => 'required',
        'harga' => 'required'
    ];

    
}
