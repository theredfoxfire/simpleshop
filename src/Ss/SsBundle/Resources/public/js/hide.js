function loadjs()
	{
		document.getElementById("js").innerHTML= "<script src='{{ asset('bundles/ssss/js/jquery-2.0.3.min.js') }}' type='text/javascript'></script><script src='{{ asset('bundles/ssss/js/search.js') }}' type='text/javascript'></script>" ;
	}
