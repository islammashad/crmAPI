<?php

namespace App;
use App\Customer;
use Illuminate\Database\Eloquent\Model;

class Action extends Model
{
   protected $fillable = [
   	'name',
   ]; 

   public function customers()
    {
        return $this->belongsToMany(Customer::class);
    }
}
