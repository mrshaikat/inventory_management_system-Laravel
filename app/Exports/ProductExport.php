<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Product::select('product_name', 'product_garage', 'product_route','buy_date','expire_date', 'buying_price', 'selling_price') -> get();
    }
}
