<?php session_start(); ?>
<?php require_once('../model/database.php') ?>
<?php require_once('../model/supplier.php') ?>

<h2>View Supplier Details</h2>

<table class="table table-hover">
  <thead>
    <tr>
      <th>Supplier ID</th>
      <th>Supplier Name</th>
      <th>Supplier Phone</th>
      <th>Supplier Address</th>
      <th>Supplier Email</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    	// create an oblject from StockItem class
		$supplier= new Supplier();
		$supplier_list = $supplier->loadSupplierDetails();
		echo $supplier_list; 
	?>
  </tbody>
</table>