<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title><?php cargarTitle(); ?></title>
<link rel="stylesheet" href="css/estilo.css">	
	
	
</head>


<body>
        <!-- Cabecera -->
        <header>
            <img src="<?php cargarLogo(); ?>" width="189" height="57" alt="logo"  /> 
            <h1><?php cargarTitulo(); ?></h1>
        </header>

        <!-- Contenido -->
        <section>
            
            <figure>
                    <img src="<?php cargarImagen(); ?>" width="200" height="200" alt="foto"  />
                    <figcaption><?php cargarDescImagen(); ?></figcaption>
            </figure>
            
            <p style="color : red;"><?php cargarParrafo1(); ?></p>
            <p><?php cargarParrafo2(); ?></p>

 
        </section>


        <!-- Contenido relacionado-->
        <aside>
                 <?php cargarLinkAside(); ?>
                 <?php cargarLinkAside(); ?>
                 <?php cargarLinkAside(); ?>
                 <?php cargarLinkAside(); ?>
        </aside>



        <!-- Pie de pagina -->
        <footer>
                <?php cargarLinkFooter(); ?>
                
        </footer>


</body>
</html>


<?php 
    
    function cargarTitle()
    {
        echo 'EJEMPLO MAQUETACIÓN EN HTML5';
    }

    function cargarLogo()
    {
        echo 'media/ejemplo-logotipo.gif';
    }


    function cargarTitulo()
    {
        echo 'Titulo Principal';
    }

    function cargarImagen()
    {
        echo 'media/koala.jpg';
    }

    function cargarDescImagen()
    {
        echo 'Figura: descipción foto';
    }    

    function cargarParrafo1()
    {
        echo 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ornare sapien ac nibh vulputate feugiat. Morbi euismod velit sit amet libero volutpat ultrices in quis sem. Sed sit amet placerat sem. Curabitur vitae lectus nec purus accumsan faucibus. Donec vitae volutpat tortor. Suspendisse tempor rutrum urna, in consequat est tincidunt vitae. Cras et ligula at felis placerat tempor. Fusce elementum metus non justo luctus iaculis.';
    }


    function cargarParrafo2()
    {
        echo 'Donec ligula arcu, sagittis lacinia nibh et, consequat gravida turpis. Aenean nec scelerisque felis. Integer nec odio sed lorem mattis rhoncus quis quis nibh. Praesent non fringilla nisi. Duis porta placerat mattis. Aenean in mollis odio, at egestas massa. Quisque in lectus magna. Vestibulum vel faucibus massa, vel varius tortor. Maecenas et laoreet neque, ut semper neque. Suspendisse aliquet, nisl vel pharetra ultricies, elit felis molestie sem, ac scelerisque turpis tortor non lacus.';
    }

    function cargarLinkFooter()
    {
        $source = 'http://www.ejemplocodigo.com';
        $descripcion = 'www.ejemplocodigo.com';

        htmlLink($source,$descripcion);        
    }


    function cargarLinkAside()
    {
        $source = 'http://www.ejemplo.com';
        $descripcion = 'www.ejemplo.com';

        htmlLink($source,$descripcion);        
    }

    function htmlLink($source,$descripcion)
    {
        echo  '<a href="'.$source.'">'.$descripcion.'</a>';
    }

    


 ?>