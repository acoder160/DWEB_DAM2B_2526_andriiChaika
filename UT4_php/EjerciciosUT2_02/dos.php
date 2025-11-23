<?php
    include 'cabezera.php';
    define('consumo', 22);
    define('iva',16);
    define('precio', 0.11473);
    define('total', 2.52);
                 echo "
                        <table>
                            <tr>
                                <th colspan='2' style='text-align: center;'>Factura Luz</th>
                            </tr>
                            <tr>
                                <td>consumo</td>
                                <td>". consumo ."KW</td>
                            </tr>
                            <tr>
                                <td>Precio KW</td>
                                <td>". precio ."€</td>
                            </tr>
                            <tr>
                                <td>Total sin IVA</td>
                                <td>". total ."€</td>
                            </tr>
                            <tr>
                                <td>Iva 16%</td>
                                <td>". number_format(total * iva / 100, 2) ."€</td>
                            </tr>
                            <tr>
                                <td>Total factura</td>
                                <td>". number_format(total + total * iva / 100, 2) ."€</td>
                            </tr>
                            </table>";
                 



    include 'pie.php';
?>