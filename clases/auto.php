
    <?php

    // Definición de la clase
    class Auto {
        // Atributos (propiedades)
        public $marca;
        public $color;
        public $velocidad = 0;

        // Método constructor (se ejecuta al crear el objeto)
        public function __construct($marca, $color) {
            $this->marca = $marca;
            $this->color = $color;
        }

        // Método para acelerar
        public function acelerar($incremento) {
            $this->velocidad += $incremento;
            echo "El auto ha acelerado a " . $this->velocidad . " km/h<br>";
        }

        // Método para frenar
        public function frenar($reduccion) {
            $this->velocidad -= $reduccion;
            if ($this->velocidad < 0) {
                $this->velocidad = 0;
            }
            echo "El auto ha frenado a " . $this->velocidad . " km/h<br>";
        }

        // Método para mostrar información
        public function mostrarInformacion() {
            echo "Marca: " . $this->marca . "<br>";
            echo "Color: " . $this->color . "<br>";
            echo "Velocidad actual: " . $this->velocidad . " km/h<br>";
        }
    }
    ?>
