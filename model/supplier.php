<?php 
	
	class Supplier{

		public function loadSupplierDetails(){
			$db = new Database();
		    $connection = $db->connect();
		    $supplier_list ='';

			//getting list of stock items
			$query = "SELECT * FROM supplier ORDER BY supplier_name";
			$suppliers = $db->executeQuery($query);

			$db->verify_query($suppliers);

			while($supplier = mysqli_fetch_assoc($suppliers)){
				$supplier_list.= "<tr>";
				$supplier_list.= "<td>{$supplier['supplier_id']}</td>";
				$supplier_list.= "<td>{$supplier['supplier_name']}</td>";
				$supplier_list.= "<td>{$supplier['supplier_phone']}</td>";
				$supplier_list.= "<td>{$supplier['supplier_address']}</td>";
				$supplier_list.= "<td>{$supplier['supplier_email']}</td>";
				$supplier_list.= "</tr>";
			}
			return $supplier_list;
		}
	}

 ?>