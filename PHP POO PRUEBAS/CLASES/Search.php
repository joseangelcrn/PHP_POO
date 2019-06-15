<?php
    include_once 'UsuarioHandler.php';
    $key=$_POST['key'];

    $uh = new UsuarioHandler();
    
    $html = '';
    $usuarios =  array();

    $usuarios =  $uh->findLikeApellidos($key);
   
    if ($usuarios!= null) {
        
        //este array es para la primera form que si funciona

        // foreach($usuarios as $usuario) {
        //     $html .= '<div>
        //     <a class="suggest-element" 
        //     data="'.'" 
        //     id="'.$usuario['id'].'"
        //     >'.$usuario['nombre']." ".$usuario['apellidos'].'</a></div>';

        //     //$html .= "<p>".$usuario['nombre']."</p>";
        // }    


        // while($row = mysqli_fetch_array($result) ){
        //    $response[] = array("value"=>$row['id'],"label"=>$row['name']);
        //  }
        foreach ($usuarios as $usuario) {
           $response[] = array("value"=>$usuario['id'],"label"=>$usuario['nombre']." ".$usuario['apellidos']);  
        }
        echo json_encode($response);

    }  
    else{
       // $html.="vacio!";
        echo "vacio!";
    }

        //return de la primera forma que SI funciona
    //echo $html;

    exit;

?>