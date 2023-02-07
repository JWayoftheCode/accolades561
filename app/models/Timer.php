<?php
	/**
	 * Timer class
	 *
	 * Import table into database
	 * define table
	 * define allowedColumns
	 *
	 *
	 */
	
	class Timer
	{
		/**
		 * table
		 * allowedColumns
		 */
		use Model;
		
		// table name from sql
		protected string $table = 'timer_tbl';
		
		protected array $allowedColumns = [
			
			'_id',
			'date',
			'hour',
			'minutes',
			'seconds'
		];
		/*
		 * TDRL
		 *  Cannot change or construct a Trait
		 *
		 * */
		
		/**
		 * Get timer
		 *  Timers should be labeled by name so they can be queried
		 *
		 * ATM : Getting timer by _id
		 *
		 * @param $id
		 *
		 * @return array
		 */
		public function get_timer($id): array {
			//Make data to get timer
			$timer_data['_id'] = $id;
			
			$result = $this->where($timer_data);
			$result = (array) $result[0];
			// show($result);
			
			return [
				"date" =>$result['date'],
				"hr" =>$result['hour'],
				"min" =>$result['minutes'],
				"sec" =>$result['seconds'],
			];
		}
		
	}