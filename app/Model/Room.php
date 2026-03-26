<?php
namespace Model;
use Illuminate\Database\Eloquent\Model;

class Room extends Model {
    public $timestamps = false;
    protected $table = 'room';
    protected $fillable = ['department_id', 'name', 'room_type'];
}
