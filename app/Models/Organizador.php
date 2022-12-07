<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Organizador extends User
{
    use HasApiTokens, HasFactory, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = "organizador";
    public $timestamps = false;
    protected $fillable = [
        'nome',
        'email',
        'password',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //How to make connection between 2 tables - https://stackoverflow.com/questions/36762802/laravel-how-to-make-a-relationship-between-two-table-that-has-a-reference-table
    public function eventos(){
        return $this->belongsToMany(Eventos::class, 'id_organizador_fk', 'id');
    }
}
