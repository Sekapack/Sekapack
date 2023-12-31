<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CrmCustomer extends Model
{
    use SoftDeletes, HasFactory;

    public $table = 'crm_customers';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'musteriler',
        'first_name',
        'last_name',
        'status_id',
        'phone',
        'address',
        'email',
        'website',
        'description',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function customerCrmNotes()
    {
        return $this->hasMany(CrmNote::class, 'customer_id', 'id');
    }

    public function customerCrmDocuments()
    {
        return $this->hasMany(CrmDocument::class, 'customer_id', 'id');
    }

    public function status()
    {
        return $this->belongsTo(CrmStatus::class, 'status_id');
    }
}
