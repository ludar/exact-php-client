<?php

namespace Picqer\Financials\Exact;

class Warehouses extends Model {

	use Query\Findable;

	protected $fillable = [
		'ID',
		'Code',
		'Created',
		'Creator',
		'CreatorFullName',
		'Description',
		'Division',
		'EMail',
		'Main',
		'ManagerUser',
		'Modified',
		'Modifier',
		'ModifierFullName',
		'UseStorageLocations',
	];
	protected $url = 'inventory/Warehouses';

}
