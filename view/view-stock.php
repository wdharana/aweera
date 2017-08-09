<?php session_start(); ?>
<?php require_once('../model/database.php') ?>
<?php require_once('../model/stock-item.php') ?>

<h2>View Stock Details</h2>

<table class="table table-hover">
  <thead>
    <tr>
      <th>Stock ID</th>
      <th>Item Name</th>
      <th>Brand</th>
      <th>Count</th>
      <th>Type</th>
      <th>Price</th>
      <th>Description</th>
      <th>Supplier ID</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    	// create an oblject from StockItem class
		$stockitem= new StockItem();
		$stock_list = $stockitem->loadStockDetails();
		echo $stock_list; 
	?>
  </tbody>
</table>