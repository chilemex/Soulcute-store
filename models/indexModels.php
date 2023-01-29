<?php 
require 'models/m_ConnectDB.php';


	class Principal_Models extends m_ConnectDB
	{
        private $id;
        private $full_name;
        private $email;
        private $hear_us;

        public function set($atributo, $contenido)
        {
            $this->$atributo = $contenido;
        }

        public function get($atributo)
        {
            return $this->$atributo;
        }

		public function Users() 
    	{ 
            $consult = $this->_db->query("SELECT * FROM costumers"); 
            return $consult;
    	}

        public function Register()
        {
            $consult = $this->_db->query("SELECT * FROM costumers WHERE id = '{$this->id}'");
            $numero_filas = mysqli_num_rows($consult);

            if ($numero_filas !=0) 
            {
                return false;           
            }
            else
            {
            $consult = $this->_db->query("
                INSERT INTO costumers (id, full_name, email, hear_us) 
                VALUES ('{$this->id}','{$this->full_name}','{$this->email}','{$this->hear_us}')");
                return true;
            }
        }

        public function lastId()
        {
            $last_id_registed=mysqli_insert_id($consult);
            return $consult;
        }


        // public function Delete()
        // {
        //     $sql = $this->_db->query("DELETE FROM unerg_estudiantes WHERE id_unerg_estudiantes = '{$this->id}'");
        // }

        // public function Edit()
        // {
        //     $sql = $this->_db->query("UPDATE unerg_estudiantes SET 
        //         dni = '{$this->cedula}',
        //         name = '{$this->nombre}',
        //         lastname = '{$this->apellido}',
        //         andress = '{$this->direccion}',
        //         phone = '{$this->telefono}'
                
        //         WHERE id_unerg_estudiantes = '{$this->id}'");   
        // }

        





	}//FIN DE LA CLASE







 ?>