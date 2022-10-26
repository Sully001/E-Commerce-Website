<?php

Class Item{
	private $ean = "barcode";
	private $name = "name";
	private $description = "description";
	private $productType = "productType";
	private $price = 22.00;
	
	public Item()
	{
		
	}
	
	public Item($ean,$name,$description,$productType,$price)
	{
		$this->ean = $ean;
		$this->name = $name;
		$this->description = $description;
		$this->productType = $productType;
	}
	
	function getEAN(){	
			return $ean;
		}
	function getName(){
			
			return $name;
		}
	function getDescription(){	
			return $description;
		}
	function getProductType(){	
			return $productType;
		}
	
	function setEAN($ean){	
			$this->ean = $ean;
		}
	function setName($name){	
		$this->name = $name;
		}
	function setDescription($description){	
			$this->description = $description;
		}
	function setProductType($productType){	
			$this->productType = $productType;
		}
}
Class Order{
	private $customer;
	private $itemsArray;
	private $orderNum;
	
	public Order($customer,$orderNum)
	{
		$this->customer = $customer;
		$this->orderNum = $orderNum;
		$items = array(100);
		
		public addItem($item)
		{
		 $items -> append($item);
		}
		public removeItem($item)
		{
		 $removeArray = array($item);
		 $items = array_diff($items, $removeArray);
		}
	}
}

?>