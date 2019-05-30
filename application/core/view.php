<?php

	class View
	{				
		function generate($content_view,$data = null,$seconddata = null)
		{				
			include 'application/views/'.$content_view.'.php';
		}
	}
