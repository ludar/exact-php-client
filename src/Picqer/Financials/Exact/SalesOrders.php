<?php namespace Picqer\Financials\Exact;

class SalesOrders extends Model
{

    use Query\Findable;
    use Persistance\Storable;

    protected $primaryKey = 'OrderID';

    protected $salesOrderLines = [ ];

    protected $fillable = [
		'AmountDC',
        'Division',
        'Currency',
        'OrderedBy',
        'OrderID',
        'OrderNumber',
        'Customer',
        'YourRef',
        'SalesOrderLines',
        'Document',
        'Description',
        'Status',
        'PaymentCondition',
        'Remarks',
        'Salesperson',
        'DeliverTo',
    ];

	    public function addItem(array $array)
    {
        if ( ! isset( $this->attributes['SalesOrderLines'] ) || $this->attributes['SalesOrderLines'] == null) {
            $this->attributes['SalesOrderLines'] = [ ];
        }
        if ( ! isset( $array['LineNumber'] )) {
            $array['LineNumber'] = count($this->attributes['SalesOrderLines']) + 1;
        }
        $this->attributes['SalesOrderLines'][] = $array;
    }


    protected $url = 'salesorder/SalesOrders';

}
