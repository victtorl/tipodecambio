 <!DOCTYPE html>
 <html>

 <head>
     <title></title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
         integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<<<<<<< HEAD
   
=======
     <style type="text/css">
      <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
     .cabecera {
         background-color: aqua;
         font-size: 20px;
     }


     .titulo {
         font-size: 28px;
         text-align: center;
         font-family: inherit;
         color: white;
         margin-top: 6%
     }

     .form {
         background-color: currentColor;
         display: grid;
     }

     .fecha {}
     </style>
>>>>>>> 3ccdc1c5b721fdcdbc81ceb67ba0175fc2a55109
 </head>

 <body>

     <form action="" method="POST" class="form">
<<<<<<< HEAD
         <p class="titulo lb">PRECIO DEL DOLAR HOY</p>>
=======
         <p class="titulo lb">Precio del dolar hoy </p>>
>>>>>>> 3ccdc1c5b721fdcdbc81ceb67ba0175fc2a55109

     </form>
     <div class="cabecer">

         <table class="table table-hover table-dark">
             <thead>
                 <tr>
                     <td>Fecha</td>
                     <td>Compra</td>
                     <td>Venta</td>
                 </tr>
             </thead>






             <tbody>

          <?php

<<<<<<< HEAD
function actual_date ()  
{  
    $week_days = array ("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado");  
    $months = array ("", "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");  
    $year_now = date ("Y");  
    $month_now = date ("n");  
    $day_now = date ("j");  
    $week_day_now = date ("w");  
    $date = $week_days[$week_day_now] . ", " . $day_now . " de " . $months[$month_now] . " de " . $year_now;   
    return $date;    
} 

$data = json_decode(file_get_contents('https://deperu.com/api/rest/cotizaciondolar.json'),1);
$fecha=actual_date();
=======
$data = json_decode(file_get_contents('https://deperu.com/api/rest/cotizaciondolar.json'),1);
$fecha=date('l jS \of F Y h:i:s A');
>>>>>>> 3ccdc1c5b721fdcdbc81ceb67ba0175fc2a55109
$compra=($data["Cotizacion"][0]["Compra"]); 
$venta=($data["Cotizacion"][0]["Venta"]);


              echo "
                          <tr>

                            <td>$fecha</td>

                            <td class='compra' >$compra</td>

                            <td class='venta'>$venta</td>

                          </tr>

                     ";
                   
                    


             ?>

             </tbody>
         </table>


      

     </div>
     <div class="container">

         <div class="row">
<<<<<<< HEAD
             <div class="col-sm-6 col-md-6 col-lg-6">
                 <div class="card" >
=======
             <div class="col-sm">
                 <div class="card" style="width: 18rem;">
>>>>>>> 3ccdc1c5b721fdcdbc81ceb67ba0175fc2a55109
                     <div class="input-group mb-3">
                         <span class="input-group-text">$</span>
                         <input type="text" class="form-control form1">
                     </div>

                     
                     <div class="card-body">
                         <h5 class="card-title">Soles a dolares -Compra</h5>
                          <p class="parrafo1">s<p/>
                     </div>
                 </div>
             </div>

  
<<<<<<< HEAD
            <div class="col-sm-6 col-md-6 col-lg-6 ">
                <div class="card" >
=======
            <div class="col-sm ml-0">
                <div class="card" style="width: 18rem;">
>>>>>>> 3ccdc1c5b721fdcdbc81ceb67ba0175fc2a55109
                     <div class="input-group mb-3">
                         <span class="input-group-text">$</span>
                         <input type="text" class="form-control form2">
                     </div>

                     
                     <div class="card-body">
                         <h5 class="card-title">Soles a dolares -Venta</h5>
                          <p class="parrafo2">s<p/>
                     </div>
                 </div>
            <div/> 
             
             
         </div>



     </div>

 </body>

 </html>
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
 <script>
 var comp=$(".compra").html();
 var vent=$(".venta").html();

  console.log('compra'+comp);
  console.log('venta'+vent);

  $( ".form1" )
  .keyup(function() {
    var value = $( this ).val()*comp;
    $( ".parrafo1" ).text( value );
    console.log(value*2);
  })
  .keyup();

  $( ".form2" )
  .keyup(function() {
    var value = $( this ).val()*vent;
    $( ".parrafo2" ).text( value );
    console.log(value*2);
  })
  .keyup();
  
  
  
</script>

<<<<<<< HEAD

<style type="text/css">
      <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
     .cabecera {
         background-color: aqua;
         font-size: 20px;
     }


     .titulo {
         font-size: 28px;
         text-align: center;
         font-family: inherit;
         color: white;
         margin-top: 6%
     }

     .form {
         background-color: currentColor;
         display: grid;
     }

    .card-body h5{
        color:blue;
        text-align:center;
    }

    .card-body p{
        color:blue;
        text-align:center;
        font-size:20px;
    }

    td{
        text-align:center;
        font-size:20px;
    }

    @media (min-width: 900px) {


     }
     .fecha {}
     </style>
=======
>>>>>>> 3ccdc1c5b721fdcdbc81ceb67ba0175fc2a55109
