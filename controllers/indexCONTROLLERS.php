<?php
require 'models/indexModels.php';


	class Principal_Controlador
	{

    public $costumers;

    public function __construct()
    {
        $this->costumers = new Principal_Models();
    }

	public function Consult()
    {         
		return $this->costumers->Users();
    } 

    public function getFields($id, $full_name, $email, $hear_us)
    {   
        $this->costumers->set("id", $id); 
        $this->costumers->set("full_name", $full_name); 
        $this->costumers->set("email", $email);
        $this->costumers->set("hear_us", $hear_us); 

        $resultado = $this->costumers->Register();
        return $resultado;
    }


	}//FIN DE LA CLASE



 ?>