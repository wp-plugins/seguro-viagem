<?php 
  
  namespace RTI;

	class TI_Template { 
		use PublicVars;

		public function render($view_template_file) { 
			extract($this->vars); 
			ob_start();
			include(WP_URL_PLUGIN . '/view/' . $view_template_file); 
			return ob_get_clean(); 
		}
	}