<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;
    protected $fillable  = ['name', 'age', 'sex', 'area_id', 'lga', 'date_occurred', 'summary', 'type', 'status'];



    protected $hidden = ['created_at', 'updated_at'];
    
    public function area(){
        return $this->belongsTo(Area::class);
    }
}
