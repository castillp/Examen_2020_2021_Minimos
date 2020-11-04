<?php
include 'head.php';
// si he pulsado el boton calcular
if (isset($_REQUEST['btn_calcular']))
{
    echo 'YA has pulsado calcular';
    $actividad=$_REQUEST['cmb_actividad'];
    $peso=$_REQUEST['txt_peso'];
    $altura=$_REQUEST['txt_altura'];
    $edad=$_REQUEST['txt_edad'];
    $sexo=$_REQUEST['rb_sexo'];
}



//estatura entre 151 y 200
elseif($altura>=151 and $altura<=200){
    if(isset($_REQUEST['rb_sexo'])){
        if($TBR_Mujer==1)
        {
        $sexo=655;
        $sexo=$peso*9.6;
        $sexo=$altura*1.8;
        $sexo=$edad*4.7; 
        }
        elseif($TBR_Hombre==2)
        {
        $sexo=66;
        $sexo=$peso*13.7;
        $sexo=$altura*5;
        $sexo=$edad*6.8;
        }
    }
    
    else
{
    if($medida==1)
    {
        $sexo=$sexo*$actividad;
    }
}

    }
    elseif($altura<=151 and $altura>=200){
        echo 'NO SE PUEDE CALCULAR';
    }


//los años estan entre 21 y 70 años
elseif($edad>=21 and $edad<=70){
    if(isset($_REQUEST['rb_sexo']))
    {
        if($TBR_Mujer==1)
    {
        $sexo=655;
        $sexo=$peso*9.6;
        $sexo=$altura*1.8;
        $sexo=$edad*4.7;
    }
    elseif($TBR_Hombre==2)
    {
        $sexo=66;
        $sexo=$peso*13.7;
        $sexo=$altura*5;
        $sexo=$edad*6.8;
    }
    }

    else
{
    if($medida==1)
    {
        $sexo=$sexo*$actividad;
    }
}

    }
    elseif($edad<21 and $edad>70){
        echo 'NO SE PUEDE CALCULAR';
    }




//calculo de TMB


//TMB se multiplica por el Factor de actividad
//else
//{
//    if($medida==1)
//    {
//        $sexo=$sexo*$actividad;
//    }
//}

$calorias=($peso*$altura*$edad);







echo'  

     <div class="postcontent">
      <h2>Calculadora Harris-Benedict   </h2>
              <form action="Solucion_Ejercicio.php" method="post">              
                    <p>
                    <form>
                        <table align="center" border="2">

                            <tr>
                                <td align="right">Nivel de Actividad:</td>  
                                <td colspan=2>
                                    <select name="cmb_actividad">
                                    <option value="1,2">Sedentario</option>
                                    <option value="1,375">Actividad Ligera</option>
                                    <option value="1,55">Actividad Moderada</option>
                                    <option value="1,725">Actividad Intensa</option>
                                    <option value="1,9">Actividad Muy Intensa</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td align="right"><label for="txt_peso">Peso : </label></td>
                                <td>
                                
                                    <input type="text"   id="txt_peso" name="txt_peso" size="7" /> 
                                </td>
                            </tr>
                            <tr>
                                <td ></td>
                                <td>
                                    <input type="radio"  name="rb_tipo_peso"  checked="checked" value=""/>Kilos	
                                    <input type="radio"  name="rb_tipo_peso"  value=""/>Libras
                                    </td>
                             </tr>  
                            <tr>
                               <td align="right"><label for="txt_altura">Altura ( en cm )</label></td>
                               <td>
                                 <input type="text"   id="txt_altura" name="txt_altura" size="7" /> cm
                               </td>
                            </tr>
                            <tr>
                            <td align="right"><label for="txt_edad">Edad ( en años )</label></td>
                            <td>
                            
                                <input type="text"   id="txt_edad" name="txt_edad" size="7" /> Años
                            </td>
                        </tr>
                            <tr>
                                <td align="right">Sexo :</td>
                                <td>
                                    <input type="radio"  name="rb_sexo"  checked="checked" value=""/>Hombre	
                                    <input type="radio"  name="rb_sexo"  value=""/>Mujer
                                    </td>
                             </tr>  
                            
                            
                            <tr>
                                <td colspan="2">
                                    <div align="center"><strong>
                                           
                                            <input name="btn_calcular" type="submit" id="btn_calcular" value="Calcular"/>
                                        </strong>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </form>
                    <br>
                    <label for="txt_calorias">Las calorias recomendadas diarias son :</label>
                        	
                        <input type="text" id="txt_calorias" name="txt_calorias" size="5" />'.$calorias.' calorias

                    



                </div>


                <div style="clear: both;"></div>
            </div>
        </div>
       
';

include 'pie.php';

