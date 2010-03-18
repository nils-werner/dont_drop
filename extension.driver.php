<?php

	Class extension_single_navgroup_behaviour extends Extension{
	
		public function about(){
			return array('name' => 'Single Navgroup Behaviour',
						 'version' => '1.1',
						 'release-date' => '2010-03-18',
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
			
			$page->addScriptToHead(URL . '/extensions/single_navgroup_behaviour/assets/script.js', 3165704);
			$page->addStylesheetToHead(URL . '/extensions/single_navgroup_behaviour/assets/style.css', "screen");
		}
			
	}

?>