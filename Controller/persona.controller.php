<?php
require_once 'Model/persona.php';

class PersonaController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new tbl_boleto();
    }
    
    public function Index(){
        require_once 'View/header.php';
        require_once 'View/persona.php';
        require_once 'View/footer.php';
    }
    
    public function Crud(){
        $alm = new tbl_boleto();
        
        if(isset($_REQUEST['id_boleto'])){
            $alm = $this->model->getting($_REQUEST['id_boleto']);
        }
        
        require_once 'View/header.php';
        require_once 'View/persona-editar.php';
        require_once 'View/footer.php';
    }
    
    public function Guardar(){
        $alm = new tbl_boleto();
        
        $alm->id_boleto = $_REQUEST['id_boleto'];
        $alm->seccion = $_REQUEST['seccion'];
        $alm->fila = $_REQUEST['fila'];
        $alm->asiento = $_REQUEST['asiento'];
        $alm->artista = $_REQUEST['artista'];
        $alm->ciudad = $_REQUEST['ciudad'];
        $alm->lugar = $_REQUEST['lugar'];
        $alm->dia = $_REQUEST['dia'];
        $alm->hora = $_REQUEST['hora'];
        $alm->codigo = $_REQUEST['codigo'];
        $alm->precio = $_REQUEST['precio'];

        // SI ID PERSONA ES MAYOR QUE CERO (0) INDICA QUE ES UNA ACTUALIZACIÓN DE ESA TUPLA EN LA TABLA PERSONA, SINO SIGNIFICA QUE ES UN NUEVO REGISTRO

        $alm->id_boleto > 0 
           ? $this->model->Actualizar($alm)
           : $this->model->Registrar($alm);

       //EL CÓDIGO ANTERIOR ES EQUIVALENTE A UTILIZAR CONDICIONALES IF, TAL COMO SE MUESTRA EN EL COMENTARIO A CONTINUACIÓN:

        /*if ($alm->id_boleto > 0 ) {
            $this->model->Actualizar($alm);
        }
        else{
           $this->model->Registrar($alm); 
        }*/
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id_boleto']);
        header('Location: index.php');
    }
}
