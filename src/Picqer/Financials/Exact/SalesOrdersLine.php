<?php namespace Picqer\Financials\Exact;

class SalesOrderLines extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'AmountDC',
        'Description',
        'Division',
        'ID',
        'OrderID',
        'ItemDescription',
        'AmountDC',
        'Quantity',
        'VATCode',
        'VATPercentage',
        'Notes',

    ];

    protected $url = 'salesorder/SalesOrderLines';

}