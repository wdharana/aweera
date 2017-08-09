<?php 
	
	class StockItem{

		public function loadStockDetails(){
			$db = new Database();
		    $connection = $db->connect();
		    $stock_list ='';

			//getting list of stock items
			$query = "SELECT * FROM stock_item ORDER BY type";
			$stocks = $db->executeQuery($query);

			$db->verify_query($stocks);

			while($stock = mysqli_fetch_assoc($stocks)){
				$stock_list.= "<tr>";
				$stock_list.= "<td>{$stock['stock_id']}</td>";
				$stock_list.= "<td>{$stock['stock_name']}</td>";
				$stock_list.= "<td>{$stock['stock_brand']}</td>";
				$stock_list.= "<td>{$stock['stock_count']}</td>";
				$stock_list.= "<td>{$stock['type']}</td>";
				$stock_list.= "<td>{$stock['price']}</td>";
				$stock_list.= "<td>{$stock['description']}</td>";
				$stock_list.= "<td>{$stock['supplier_id']}</td>";
				$stock_list.= "</tr>";
			}
			return $stock_list;
		}
	}

 ?>