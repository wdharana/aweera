<?php 
	
	class Database{
		protected static $connection;

		function Database(){

		}

		public function connect(){
			$dbhost = 'localhost';
			$dbuser = 'root';
			$dbpass = '';
			$dbname = 'aweeradb'; 

			self::$connection = new mysqli($dbhost, $dbuser,$dbpass,$dbname);

			// checking the connection
			if(self::$connection === false) {
            	die('Database connection failed ' . mysqli_connect_error());
        	}
			
			return self::$connection;
		}

		public function executeQuery($query) {
	        // make the connection
	        $connection = $this -> connect();

	        // execute the query
	        $result = $connection -> query($query);

	        return $result;
    	}

    	public function select($query) {
	        $rows = array();
	        $result = $this -> executeQuery($query);
	        if($result === false) {
	            return false;
	        }
	        while ($row = $result -> fetch_assoc()) {
	            $rows[] = $row;
	        }
	        return $rows;
	    }

    	public function verify_query($result_set){
			if (!$result_set){
				die ("Database query failed. ".mysqli_error(self::$connection));
			}
	}


	}

 ?>