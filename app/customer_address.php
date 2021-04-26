<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer_address extends Model
{
    protected $fillable = [
        'customer_id','country','city','district','neigborhood','address','name','surname','title','invoice_type',
        'citizenship_number','zip_code','mobile_phone','home_phone','other_phone','company_name','tax_office','tax_number',
        'parasut_id',
    ];
    public $timestamps=false;

}
