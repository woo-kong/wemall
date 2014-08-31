<?php
class OrdersModel extends RelationModel {
	protected $_link = array(
		'Users'=>array(
			'mapping_type'  => BELONGS_TO,
//          'class_name'    => 'Users',
			'mapping_name'  => 'users',
			'foreign_key'   => 'users_id',//关联id
		),
		'Ordersinfo'=>array(
			'mapping_type'  => HAS_MANY,
//          'class_name'    => 'Users',
			'mapping_name'  => 'ordersinfo',
			'foreign_key'   => 'orders_id',//关联id
		),
	);
}