<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Encuesta</title>
  </head>
  <body>
    <form action="resultado.php" method="post">
      <h2>Encuesta sobre satisfaccion del curso</h2>
      
      <?php

      $preguntas = [
        "¿El contenido del curso fue suficiente?",
        "¿Como evalua la preparacion y explicacion del instructor?",
        "¿La forma de enseñanza fue dinamica y efectiva?",
        "¿Tuvo suficientes oportunidades para resolver dudas?",
        "¿Puedes aplicar lo aprendido a estudios o trbajos?",
        "¿El contenido enseñado fue suficiente?",
        "¿Los temas tratados fueron utiles?",
        "¿Los recursos aplicados fueron suficientes?",
        "¿Considera que la duracion fue apropiada?",
        "¿Que tan satisfecho te encuentras con el curso?"
      ];

        $cant = $_POST["cant"];
         foreach ($preguntas as $pregunta) {
          echo "Pregunta: " ;
          echo $pregunta;
          echo "<br>";
          echo "<br>";
          
        ?>  
        
        (1 a 5):
      <input type="number" name="p" min="1" max="5"/>
      <br /><br />
      <?php 
        };  

      echo "<br>";
      echo "<br>";
      ?>

      <input type="submit" value="Enviar" />
    </form>
  </body>
</html>
