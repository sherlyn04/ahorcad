<?php
    include_once("conexDB.php");

    function calificar($modoJuego, $tiempo = 0, $vidas) {
        # code...
    }

    function verificarLetraRepetida($letra, $arrayLetras) {
        $letraRepetida = false;

        for ($i=0; $i < count($arrayLetras); $i++) {
            if ($letra === $arrayLetras[$i]) {
                $letraRepetida = true;
            }
        }

        if ($letraRepetida == true) {
            return true;
        } else {
            return false;
        }
    }

    function filtroLetras($letra){
        $letras = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','ñ','o','p',
                        'q','r','s','t','u','v','w','x','y','z');
        $letrasValidas = 0;

        for ($i=0; $i < count($letras); $i++) {
            if ($letra == $letras[$i]) {
                $letrasValidas++;
            }
        }

        if ($letrasValidas > 0) {
            return true;
        } else {
            return false;
        }
    }

    function buscarPalabra($dirDocumentos) {
        $tabla = "Palabra";
        $conexion2 = new conexDB($dirDocumentos);
        $resultados = $conexion2->cantResultados($tabla);
        $idPalabra = mt_rand(1, $resultados);
        $sql = "SELECT * FROM Palabra WHERE codigoPalabra = " . $idPalabra;
        $resultConsultaPalabra = $conexion2->consultaPersonalizada($sql);
        $conexion2->cerrarConex();

        return $resultConsultaPalabra;
    }

    class motor {
        private $palabra;
        private $posLetra;

        function __construct($palabra) {
            $this->palabra = $palabra;
        }

        public function verificarLetra($letra) {
            $letrasCorr = 0; //cantidad de letras correctas en la palabra

            for ($i=0; $i < strlen($this->palabra); $i++) {
                if ($letra == substr($this->palabra, $i, 1)) {
                    $this->posLetra[$i] = $letra;
                    $letrasCorr++;
                } else {
                    $this->posLetra[$i] = 0;
                }
            }

            if ($letrasCorr > 0) {
                return true;
            } else {
                return false;
            }
        }

        public function mensaje(){
            echo "<script>alert('hola mundo');</script>";
        }

        public function getPos() {
            return $this->posLetra;
        }
    }
?>
