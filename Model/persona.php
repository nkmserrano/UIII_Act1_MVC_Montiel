<?php
class tbl_boleto
{
	private $pdo;
    
    public $id_boleto;
    public $seccion;
    public $fila;
	public $asiento;
	public $artista;
	public $ciudad;
	public $lugar;
    public $dia;
    public $hora;
    public $codigo;
	public $precio;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Conexion::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM tbl_boleto");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function getting($id_boleto)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM tbl_boleto WHERE id_boleto = ?");
			          

			$stm->execute(array($id_boleto));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id_boleto)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM tbl_boleto WHERE id_boleto = ?");			          

			$stm->execute(array($id_boleto));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE tbl_boleto SET 
						seccion          = ?, 
						fila        = ?,
                        asiento        = ?,
						artista        = ?,
						ciudad            = ?, 
						lugar = ?,
						dia = ?,
						hora = ?,
						codigo = ?,
						precio = ?
				    WHERE id_boleto = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
						$data->seccion,
                        $data->fila, 
                        $data->asiento,
                        $data->artista,
                        $data->ciudad,
                        $data->lugar,
						$data->dia,
						$data->hora,
						$data->codigo,
						$data->precio,
                        $data->id_boleto
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar($data)
	{
		try 
		{
		$sql = "INSERT INTO `tbl_boleto` (seccion,fila,asiento,artista,ciudad,lugar,dia,hora,codigo,precio) 
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->seccion,
                        $data->fila, 
                        $data->asiento,
                        $data->artista,
                        $data->ciudad,
                        $data->lugar,
						$data->dia,
						$data->hora,
						$data->codigo,
						$data->precio                   
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
?>
