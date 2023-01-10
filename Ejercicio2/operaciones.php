<link rel="stylesheet" href="styles.css">
<?php
    class operaciones{
        private $a;
        private $b;
        private $c;

        function __construct($a, $b, $c){
            $this->a = $a;
            $this->b = $b;            
            $this->c = $c;
        }

        function calsuma(){
            $resultado = $this->a + $this->b + $this->c;
            return $resultado;
        }

        function calmayor(){
            if($this->a > $this->b && $this->a > $this->c){
                $mayor = $this->a;
            } else if($this->b > $this->a && $this->b > $this->c){
                $mayor = $this->b;
            } else{
                $mayor = $this->c;
            }

            return $mayor;
        }

        function Resultados(){ ?>
        <div align="center">
            <h1>Resultados</h1>
            <br>

            <table border="0" cellspacing="0">
                <tr class="fondonaranja">
                    <th>Valor A</th>
                    <th>Valor B</th>
                    <th>Valor C</th>
                </tr>

                <tr>
                    <td><?php echo $this->a; ?></td>
                    <td><?php echo $this->b; ?></td>
                    <td><?php echo $this->c; ?></td>
                </tr>
            </table>

            <table border="0" cellspacing="0">
                <tr class="fondonaranja size">
                    <th>Suma: </th>
                    <td> <?php echo $this->calsuma(); ?></td>
                </tr>

                <tr class="fondonaranja size">
                    <th>Mayor: </th>
                    <td> <?php echo $this->calmayor(); ?></td>
                </tr>
            </table>
        </div>
        
        <?php } 
    }
?>