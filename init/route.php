<?php 

class Route {

	protected $url;

	protected $method;

	protected $params = [];

	public function __construct( $url = '' )
	{
		if ( $url != '' )
		{
			$uri = explode('/', trim(trim($url), '/'));
			$this->url = array_shift($uri);
			if ( count($uri) > 0 )
			{
				$this->method = array_shift($uri);
			}
			if ( count($uri) > 0 )
			{
				$this->params = $uri;
			}
		}
	} 

	public function getUri()
	{
		return $this->url ;	
	}

	public function getMethod()
	{
		return $this->method ;
	}

	public function getParams()
	{
		if (!empty($this->params))
		{
			return $this->params ;
		}
	}
}