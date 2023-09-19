<?php
// Incluye el archivo que contiene la información de conexión a la base de datos
include '../../config/db.php';

class TableData
{
	private $_db; //Declara una propiedad privada llamada _db, que almacenará una instancia de la clase PDO para interactuar con la base de datos.

	public function __construct() //Define el constructor de la clase.
	{
		try {
			// Recoge la información de conexión desde las constantes definidas en ../../db.php
			$host      = DB_HOST;
			$database  = DB_NAME;
			$user      = DB_USER;
			$passwd    = DB_PASSWORD;
			// Crea una instancia de PDO para conectarse a la base de datos
			$this->_db = new PDO('mysql:host=' . $host . ';dbname=' . $database, $user, $passwd, array(
				PDO::ATTR_PERSISTENT => true, PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
			));
		} catch (PDOException $e) {
			// Si ocurre un error al conectarse a la base de datos, registra un mensaje de error
			error_log("Failed to connect to database: " . $e->getMessage());
		}
	}
	/* 
		Define un método público llamado get que toma tres parámetros: 
		$table (nombre de la tabla), 
		$index_column (nombre de la columna de índice), 
		$columns (un arreglo de nombres de columnas).
		*/
	public function get($table, $index_column, $columns)
	{
		// Se inicia la configuración para el manejo de la paginación, ordenamiento y filtrado de DataTables.
		$sLimit = "";
		//Comienza a verificar si se ha proporcionado información de paginación.
		if (isset($_GET['iDisplayStart']) && $_GET['iDisplayLength'] != '-1') {
			// Configura la paginación de los resultados
			$sLimit = "LIMIT " . intval($_GET['iDisplayStart']) . ", " . intval($_GET['iDisplayLength']);
		}

		// Ordering: Comienza a verificar y construir las opciones de ordenamiento.
		$sOrder = "";
		if (isset($_GET['iSortCol_0'])) {
			// Configura el ordenamiento de los resultados
			$sOrder = "ORDER BY  ";
			for ($i = 0; $i < intval($_GET['iSortingCols']); $i++) {
				if ($_GET['bSortable_' . intval($_GET['iSortCol_' . $i])] == "true") {
					$sortDir = (strcasecmp($_GET['sSortDir_' . $i], 'ASC') == 0) ? 'ASC' : 'DESC';
					$sOrder .= "`" . $columns[intval($_GET['iSortCol_' . $i])] . "` " . $sortDir . ", ";
				}
			}

			$sOrder = substr_replace($sOrder, "", -2);
			if ($sOrder == "ORDER BY") {
				$sOrder = "";
			}
		}

		/*
        * Filtrado
        * NOTA: esto no coincide con el filtrado de DataTables incorporado que sí lo hace.
        * palabra por palabra en cualquier campo. Es posible hacerlo aquí, pero preocupado por la eficiencia.
        * en tablas muy grandes, y la funcionalidad de expresiones regulares de MySQL es muy limitada
        */
		// Filtrado: Se inicia la construcción de las condiciones de filtrado.
		$sWhere = "";
		if (isset($_GET['sSearch']) && $_GET['sSearch'] != "") {
			// Configura el filtrado global de resultados
			$sWhere = "WHERE (";
			for ($i = 0; $i < count($columns); $i++) {
				if (isset($_GET['bSearchable_' . $i]) && $_GET['bSearchable_' . $i] == "true") {
					$sWhere .= "`" . $columns[$i] . "` LIKE :search OR ";
				}
			}
			$sWhere = substr_replace($sWhere, "", -3);
			$sWhere .= ')';
		}

		// Se construyen las condiciones de filtrado para columnas individuales.
		for ($i = 0; $i < count($columns); $i++) {
			if (isset($_GET['bSearchable_' . $i]) && $_GET['bSearchable_' . $i] == "true" && $_GET['sSearch_' . $i] != '') {
				if ($sWhere == "") {
					$sWhere = "WHERE ";
				} else {
					$sWhere .= " AND ";
				}
				$sWhere .= "`" . $columns[$i] . "` LIKE :search" . $i . " ";
			}
		}

		// Se crea la consulta SQL para obtener los datos de la base de datos según las opciones de paginación, ordenamiento y filtrado.
		$sQuery = "SELECT SQL_CALC_FOUND_ROWS `" . str_replace(" , ", " ", implode("`, `", $columns)) . "` FROM `" . $table . "` " . $sWhere . " " . $sOrder . " " . $sLimit;
		$statement = $this->_db->prepare($sQuery);

		// Se enlazan los parámetros para las consultas preparadas.
		if (isset($_GET['sSearch']) && $_GET['sSearch'] != "") {
			$statement->bindValue(':search', '%' . $_GET['sSearch'] . '%', PDO::PARAM_STR);
		}
		for ($i = 0; $i < count($columns); $i++) {
			if (isset($_GET['bSearchable_' . $i]) && $_GET['bSearchable_' . $i] == "true" && $_GET['sSearch_' . $i] != '') {
				$statement->bindValue(':search' . $i, '%' . $_GET['sSearch_' . $i] . '%', PDO::PARAM_STR);
			}
		}

		$statement->execute(); // Se ejecuta la consulta SQL.
		$rResult = $statement->fetchAll(); // Se recuperan los resultados de la consulta en un arreglo.
		//Se obtiene el número total de filas en la tabla sin aplicar filtros.
		$iFilteredTotal = current($this->_db->query('SELECT FOUND_ROWS()')->fetch());

		// Get total number of rows in table
		$sQuery = "SELECT COUNT(`" . $index_column . "`) FROM `" . $table . "`";
		$iTotal = current($this->_db->query($sQuery)->fetch());

		// Se crea un arreglo $output que contendrá los datos de respuesta que DataTables espera.
		$output = array(
			"sEcho" => intval($_GET['sEcho']),
			"iTotalRecords" => $iTotal,
			"iTotalDisplayRecords" => $iFilteredTotal,
			"aaData" => array()
		);

		//Se itera a través de los resultados de la consulta y se formatean para la salida.
		foreach ($rResult as $aRow) {
			$row = array();
			for ($i = 0; $i < count($columns); $i++) {
				if ($columns[$i] == "version") {
					// Special output formatting for 'version' column
					$row[] = ($aRow[$columns[$i]] == "0") ? '-' : $aRow[$columns[$i]];
				} else if ($columns[$i] != ' ') {
					$row[] = $aRow[$columns[$i]];
				}
			}
			$output['aaData'][] = $row;
		}

		// Imprime la respuesta en formato JSON que DataTables puede procesar
		echo json_encode($output);
	}
}

// Crea una instancia de la clase TableData
//$table_data = new TableData();
