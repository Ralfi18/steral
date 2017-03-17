<?php
class App {

	public function __construct(  )
	{

			function __autoload( $class )
			{
				$inc_path  = './inc' . DS . strtolower($class) . '.php';
				$init_path = './init' . DS . strtolower($class) . '.php';

				if ( $init_path )
				{
					$include = './init' . DS . strtolower($class) . '.php';
				}

				else if ( $inc_path  )
				{
					$include =  './inc' . DS . strtolower($class) . '.php';
				}

				if ( file_exists($include) )
				{
					require_once $include;	
				}
			}
		}
}