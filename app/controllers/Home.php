<?php
	
	/**
	 * home class
	 */
	class Home
	{
		use Controller;
		
		/**
		 * @return void
		 */
		public function index(): void {
			
			$data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->username;
			
			//Package timer data
			$timer = new Timer;
			$timer_data = $timer->get_timer(1);
			$timer_data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->username;
			
			/**
			 * TODO: Find a better way to combine array data
			 */
			
			// $data = array()
			
			
			$this->view('home',$timer_data);
		}
		
	}
