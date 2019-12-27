<?php

namespace App;
use App\Action;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name', 'phone', 'address',
    ];

    public function actions()
    {
        return $this->belongsToMany(Action::class);
    }

}
