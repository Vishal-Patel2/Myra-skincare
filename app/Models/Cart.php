<?php
 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['user_id', 'session_id', 'service_id', 'quantity'];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
