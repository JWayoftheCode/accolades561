<?php
	
	/**
	 * Products class
	 */
	class Products {
		use Model;
		
		protected string $table = "products";
		
		protected array $allowColumns = [
			
			'images',
			'name',
			'collections',
			'price',
			'instock',
		];
		
		
		
	}