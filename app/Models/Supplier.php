<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supplier extends Model
{
    use SoftDeletes;
     protected $fillable = [
         'code',
         'name',
         'image',
         'email',
         'phone',
         'supplier_type',
         'country',
         'city',
         'address',
         'payment_term',
         'currency',
         'company_name',
         'company_image',
         'company_email',
         'company_phone',
         'company_website',
         'company_address',
         'tax_number',
         'industry_type',
         'note',
         'status',
         'created_by',
         'updated_by',

     ];
     public function bankAccounts()
     {
         return $this->hasMany(SupplierBankAccount::class);
     }
}
