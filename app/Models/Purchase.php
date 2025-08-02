<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'owner',
        'purchase_name',
        'installment_purchase',
        'installments',
        'cost',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'owner');
    }

    public function purchaseName()
    {
        return $this->purchase_name;
    }

    public function isInstallmentPurchase()
    {
        return $this->installment_purchase;
    }

    public function installments()
    {
        return $this->installments;
    }

    public function cost()
    {
        return $this->cost;
    }
}
