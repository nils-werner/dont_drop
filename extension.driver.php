<?php

	Class extension_dont_drop extends Extension{
	
		public function about(){
			return array('name' => 'Don\'t Drop!',
						 'version' => '1.4',
						 'release-date' => '2012-06-11',
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
					'callback'	=> 'appendScriptToHead'
				)
			);
		}

		public function appendScriptToHead($context) {
			$page = Administration::instance()->Page;
			$page->addStylesheetToHead(URL . '/extensions/dont_drop/assets/style.css', 'screen', 666);
			$page->addScriptToHead(URL . '/extensions/dont_drop/assets/script.js', 667);
		}
			
	}

?>
