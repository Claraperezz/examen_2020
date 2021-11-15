<?php

include 'head.php';
 
session_start();

if(isset($_REQUEST['borrar']))

{

    $num_incidencia=$_REQUEST['num_incidencia']-1;
    $cont_antes=count($_SESSION['incidencias']);
    unset($_SESSION['incidencias'][$num_incidencia]);
    $cont_despuess=count($_SESSION['incidencias']);

    if($cont_antes==$cont_despuess);

}
 print' 

            <strong>INTRODUCE EL IDENTIFICADOR DE LA INCIDENCIA A BORRAR<BR><BR></strong>
                                     
        <div   class="postcontent"><form action="" method="post">
            <table align="center" class="content-layout">
              
              
              <tr><td align="right"><strong>Num Incidencia :</strong></td><td>
              <div align="left">
                    <input type="text" name="num_incidencia"/>
              </div></td></tr>
              
              <tr ><td colspan="2"><div align="center"><strong>
            <input name="borrar" type="submit" id="borrar" value="Dar de Baja"/>
            </strong></div></td></tr>
        </table>
    </form>
        </div>';
 include 'pie.php';