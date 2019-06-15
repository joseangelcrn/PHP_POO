<?php
    include_once 'UsuarioHandler.php';
    $key=$_POST['key'];

    $uh = new UsuarioHandler();
    
    $html = '';
    $usuarios =  array();

    $usuarios =  $uh->findLikeApellidos($key);
   
    if ($usuarios!= null) {
        
        foreach($usuarios as $usuario) {
            $html .= '<div>
            <a class="suggest-element" 
            data="'.'" 
            id="'.$usuario['id'].'"
            >'.$usuario['nombre']." ".$usuario['apellidos'].'</a></div>';

            //$html .= "<p>".$usuario['nombre']."</p>";
        }    
        
    }
    else{
        $html.="vacio!";
    }

    echo $html;
?>