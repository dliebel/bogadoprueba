<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table= 'student';

    protected $fillable = ['name', 'surname', 'birth','address','user_id'];


    public function user(){
       
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function joins(){
        $this->join('contacts', 'users.id', '=', 'contacts.user_id')
        ->join('orders', 'users.id', '=', 'orders.user_id')
        ->select('users.*', 'contacts.phone', 'orders.price');
    }
    
}
