<?php

namespace Picqer\Financials\Exact;

class Currencies extends Model {

	use Query\Findable;

	protected $fillable = [
		'Code',
		'AmountPrecision',
		'Created',
		'Description',
		'Modified',
		'PricePrecision',
	];
	protected $url = 'general/Currencies';

}
