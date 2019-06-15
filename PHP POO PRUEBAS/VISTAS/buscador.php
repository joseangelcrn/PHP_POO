<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Buscador de personas</title>
	<?php include_once '../static/bootstrap_css.php' ?>
</head>
<body>
	<?php include_once '../static/menu.php' ?>

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div id="suggestions"></div>
			</div>
		</div>
	</div>









	<?php include_once '../static/bootstrap_js.php' ?>


	<script>
	$(document).ready(function() {




	    $('#key').on('keyup', function() {
	        var key = $(this).val();		
	        console.log(key);
	        var dataString =key;

					$( function() {

					 // Single Select
						$( "#key" ).autocomplete({
							  source: function( request, response ) {
							   // Fetch data
							   $.ajax({
							    url: "../clases/Search.php",
							    type: 'post',
							    dataType: "json",
							    data: {
							     search: request.term
							    },
							    success: function( data ) {
							     response( data );
							    }
							   });
							  },
							  select: function (event, ui) {
							   // Set selection
							   $('#key').val(ui.item.label); // display the selected text
							   $('#selectuser_id').val(ui.item.value); // save selected id to input
							   return false;
							  }
						});
				    });
	}); 

//--------
		// $.ajax({
	 //            type: "POST",
	 //            url: "../clases/Search.php",
	 //            data: {key: dataString},
	 //            success: function(data) {
	 //            	if (data) {
	 //            		 // //Escribimos las sugerencias que nos manda la consulta
		// 	             //    $('#suggestions').fadeIn(1000).html(data);
		// 	             //    //Al hacer click en alguna de las sugerencias
		// 	             //    $('.suggest-element').on('click', function(){
		// 	             //            //Obtenemos la id unica de la sugerencia pulsada
		// 	             //            var id = $(this).attr('id');
		// 	             //            //Editamos el valor del input con data de la sugerencia pulsada
		// 	             //            $('#key').val($('#'+id).attr('data'));
		// 	             //            //Hacemos desaparecer el resto de sugerencias
		// 	             //            $('#suggestions').fadeOut(1000);
		// 	             //            alert('Has seleccionado el '+id+' '+$('#'+id).attr('data'));
		// 	             //            return false;
		// 	             //    });

		

	 //            	}
	 //            	else{
	 //            		//$("#key").val("");
	 //            	}
	               
	 //            }
	 //        });



	//     });
	// }); 
    </script>
</body>
</html>