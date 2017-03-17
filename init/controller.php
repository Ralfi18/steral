<?php 


class Controller {

	public function __construct( $index ='', $method ='', $params = [] )
	{
		if (  $index !='' )
		{
			$name = ucfirst( $index );
			return new $name;
		}
	}
}