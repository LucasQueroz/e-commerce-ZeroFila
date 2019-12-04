<? php 

    function __autoload($class){
        require_once "{$class}.class.php";
    }

    class Produtos{

            define("CAMINHO_IMAGEM", "view/_imagens/_produtos");
            define("EXTENSAO_IMAGEM", ".jpg");

            define("CATEGORIA_CAMISAS", 1);
            define("CATEGORIA_BLUSAS", 2);
            define("CATEGORIA_ACESSORIOS", 3);
            define("CATEGORIA_ELETRONICOS", 4);
            define("CATEGORIA_CALSA_MASCULINA", 5);
            define("CATEGORIA_CALSA_FEMININA", 6);
            define("CATEGORIA_CALSADO_MASCULINO", 7);
            define("CATEGORIA_CALSADO_FEMININO", 8);

            define("RAIZ_PROGETO", "/www/ZeroFila/");

       
        function Produtos(){

        }

        public function getCaminhoImagem(){
            return self::CAMINHO_IMAGEM;
        }

        public function getExtensaoImagem(){
            return self::EXTENSAO_IMAGEM;
        }
    }

$lgn = new Produtos();
var_dump('$cpt->setCripto('a')');