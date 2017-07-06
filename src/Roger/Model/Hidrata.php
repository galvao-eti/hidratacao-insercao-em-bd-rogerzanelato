<?php
	namespace Roger\Model;

	trait Hidrata {

		/*
			* Recebe um Array e passar os valores cujo índice corresponda ao atributo da classe
		*/
		public function hidratar(Array $arr){
			// array no qual os índices são os nomes do atributos
			$atributos = get_class_vars(__CLASS__);
			
			foreach ($arr as $key => $value) {
				/*
					* Se no array com os atributos na classe existir o índice do Array em parâmetro, adiciona o valor ao atributo correspondente
				*/
				if(array_key_exists($key, $atributos)){
					$this->$key = $value;
				}
			}

		}

	}