
snippet met
	public function ${1}()
	{

	    ${2}	    
	
	}


snippet pmet
	protected funcion ${1}()
	{

	    ${2}

	}

snippet smet
	public static function ${1}()
	{

	    ${2}

	}

snippet $
	$this->${1}

snippet echo
	echo '${1}';

snippet each
	foreach ($${1:vars} as $${2:vars}){


	    ${3:vars}
	}

snippet iff
	if ($${1:vars} as $${2:vars}){
	
	  ${3:vars}

	}


snippet rg
	Route::get('${1}', '${2}');


snippet rp
	Route::post('${1}', '${2}');


snippet rpa
	Route::post('${1}', function() {

	  ${2}

	);




snippet pre
	echo '<pre>';

	    ${1}
	 
	echo '</pre>';

snippet pr
	print_r(${1});


snippet you
	echo 'you are here';
	die();

snippet func
	function ${1}()
	{

	    ${2}

	}

