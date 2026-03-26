<?php
namespace Model;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model {
    public $timestamps = false;
    protected $table = 'phone';
    protected $fillable = ['user_id', 'room_id', 'phone_number'];
}
