<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use KhmerDateTime\KhmerDateTime;

class InvoicePaid extends Model
{
    use HasFactory;

    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id', 'id');
    }

    public function roomRent()
    {
        return $this->belongsTo(RoomRent::class, 'room_id', 'room_id');
    }
}
