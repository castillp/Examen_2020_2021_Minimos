<?php

include 'head.php';
echo'
                                       
      <div class="postcontent">
              <form action="" method="post">
        

                  
                        <h2>Cómo funciona el método Harris-Benedict para calcular calorias</h2>

                        <p>La calculadora de Harris-Benedict se basa en cinco parámetros diferentes para calcular el número
                        de calorías recomendado. <br>
                        Sexo, Altura,Peso,Edad,Actividad Física</p>
                         
                        <p>Con estos párametros la calculadora es capaz de calcular la Tasa de Metabolismo Basal(TMB),
                        es decir la cantidad de energia mínima que necesita tu cuerpo para funcionar.
                        Nunca debemos ingerir menos antidad de caloriasde las que marca la Tasa metabólica.<br>
                        
                        La TMB se calcula siguiendo las siguientes ecuaciones</p>

                        <h2>Formula para calcular la TMB</h2>
                        <b>Estas ecuaciones están tabuladas para valores de estatura entre 151 y 200 cm, y edad entre 21 y 70 años.</b>
                        <br>Para valores que <u>NO esten en estos margenes</u> NO SE PODRA CALCULAR y habrá que mostrar un mensaje indicandolo.
                       <ul>
                        <li>TMB Mujer = 655 + (9,6 * P) + (1,8 * A) – (4,7 * E)</li>
                        <li>TMB Hombre = 66 + (13,7 * P) + (5 * A) – (6,8 * E)</li>
                       </ul>
                       <b>Nomenclatura de la formula</b>
                       <ul>
                       <li>P -->Peso en Kilogramos</li>
                       <li>A --> Altura en centimetros</li>
                       <li>E --> Edad en Años</li>
                       </ul>
                       Una vez obtenidad la TMB se multiplica por el Factor de Actividad:
                       <ul>
                       <li>Sedentario:CCD:TMB * 1,2 (Trabajo de escritorio- sin ejercicio))</li>
                       <li>Ligero: CCD: TMB * 1,375 (ejercicio 1-3 dias a la semana)</li>
                       <li>Moderado: CCD: TMB * 1,55 (ejercicio 3-5 dias a la semana)</li>
                       <li>intenso: CCD: TMB * 1,725 (ejercicio 6-7 dias a la semana)</li>
                       <li>Muy Intenso: CCD: TMB * 1,9 (ejercicio dos veces al dia, ejercicios de mucha fuerza y agotamiento,
                       deportistas profesionales)</li>
                       </ul>

                       <br>
                       <b>ANEXO: 1 kILO = 0,453592 LIBRAS</b>
               
            
        </div>
        
';
include 'pie.php';

