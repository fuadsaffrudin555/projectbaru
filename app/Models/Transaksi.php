<?php

namespace App\Models;

use App\Models\Car;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = 'transaksins';
    protected $fillable = ['customer_id', 'car_id', 'invoice_no', 'rent_date', 'return_date', 'harga', 'status'];

    /**
     * Get the customers that owns the Transaksi
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customers(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    /**
     * Get the cars that owns the Transaksi
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cars(): BelongsTo
    {
        return $this->belongsTo(Car::class, 'car_id');
    }
}
