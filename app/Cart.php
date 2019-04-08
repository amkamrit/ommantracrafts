<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart 
{
	public $items = null;
	public $totalQty = 0 ;
	public $totalPrice = 0;

	public function __construct($oldCart){
		if ($oldCart) {

			$this->items = $oldCart->items;
			$this->totalQty= $oldCart->totalQty;
			$this->totalPrice= $oldCart->totalPrice;
			
		}
	}
    
   public function add($item, $id){
   	 $storeItem=['qty' => $item->product_minimum_sell_number-1, 'price' => $item->product_normal_price, 'item' => $item];
   	 if ($this->items) {
   	 	if (array_key_exists($id, $this->items)) {
   	 		
   	 		$storeItem= $this->items[$id];

   	 	}
   	 }
   	 $storeItem['qty']++;
   	 $storeItem['price']= $item->product_normal_price * $storeItem['qty'];
   	 $this->items[$id]= $storeItem;	
   	 $this->totalQty++;
   	 $this->totalPrice	+= $storeItem['price'];
   } 
   public function getUpdate($id , $qty, $item){
      $storeItem=['qty' => 0, 'price' => $item->product_normal_price, 'item' => $item];
      $oldQty=$this->items[$id]['qty'];
      $oldPrice=$this->items[$id]['price'];
      $this->items[$id]['qty']=$qty;
      $this->items[$id]['price']=$item->product_normal_price*$qty;
      $this->totalQty=$this->totalQty - $oldQty+ $this->items[$id]['qty'];
      $this->totalPrice=$this->totalPrice-$oldPrice+$this->items[$id]['price'];
      if ($this->items[$id]['qty'] <= 0) {
         unset($this->items[$id]);
      }
   }
   public function removeItem($id){
      $this->totalQty -= $this->items[$id]['qty'];
      $this->totalPrice -=$this->items[$id]['price'];
      unset($this->items[$id]);
   }
}
