<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;
use Carbon\Carbon;
class Contact extends Model
{
    use HasFactory;
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $dates = [
        'date_from',
        'date_to',
        'created_at',
        'updated_at',
        
    ];
    public $fillable = [
        'id',
        'id_user', 
        'name', 
        'email', 
        'phone', 
        'series', 
        'message', 
        'price',
        'accept',
        'image_name',
        'image_path',
        'created_at',
        'updated_at', 
        'date_from',
        'date_to',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function getDateFromAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDateFromAttribute($value)
    {
        $this->attributes['date_from'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }
    public function getDateToAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDateToAttribute($value)
    {
        $this->attributes['date_to'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }
}