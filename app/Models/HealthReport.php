<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthReport extends Model
{
    use HasFactory;
    /**
     * กำหนดชื่อ Table
     */
    protected $table = 'health_reports';

    /**
     * กำหนดคอลัมน์ที่สามารถ Fill ได้
     */
    protected $fillable = [
        'user_id',
        'temp',
        'heart_rate',
        'systolic',
        'diastolic',
        'status',
        'spo2',
        'lat',
        'lon',
    ];
}
