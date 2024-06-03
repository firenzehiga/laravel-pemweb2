<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $fillable = ['name', 'nim', 'major','class', 'course_id'];

    /**
     * 1 to many: 
     * -hasOne(namamodel)  : table saat ini meminjamkan key ke table lain
     * -belongsTo(namamodel) : table saat ini meminjam key ke table lain
     * 
     * -hasMany : : table saat ini meminjamkan key ke table lain
     * belongsToMany : table saat ini meminjam key ke table lain
     */
    // mendefinisikan relasi ke model course
    public function course(){
        return $this->belongsTo(Courses::class);
    }
    
}
