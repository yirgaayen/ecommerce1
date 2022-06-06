<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\CatagoryController;

class catagory extends Model
{
    use HasFactory;
    protected $fillable=[
         'id',
        'name',
    ];
    public function product()
    {
        return $this->hasMany(product::class);
    }
}
