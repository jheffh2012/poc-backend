<?php   
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mensagem extends Model{
    protected $table = "mensagem";

    protected $fillable = ["texto", "fila"];

    // public $timestamps = false;
}