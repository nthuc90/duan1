<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Slide extends Model{

    protected $table = 'slides';
    public $timestamps = false;
    protected $fillable = ['name','image', 'content'];
}
 
?> 