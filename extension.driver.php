<?php

	Class extension_dont_drop extends Extension{
	
		public function about(){
			return array('name' => 'Don\'t Drop!',
						 'version' => '1.3',
						 'release-date' => '2011-02-02',
						 'author' => array('name' => 'Nils Werner',
										   'website' => 'http://www.phoque.com/projekte/symphony',
										   'email' => 'nils.werner@gmail.com')
				 		);
		}
		
		
		public function getSubscribedDelegates() {
			return array(
				array(
					'page'		=> '/backend/',
					'delegate'	=> 'InitaliseAdminPageHead',
					'callback'	=> 'initaliseAdminPageHead'
				)
			);
		}

		public function initaliseAdminPageHead($context) {
			$page = $context['parent']->Page;
			
			$page->addScriptToHead(URL . '/extensions/dont_drop/assets/script.js', 3165704);
			$page->addStylesheetToHead(URL . '/extensions/dont_drop/assets/style.css', "screen");
		}
			
	}

?>
