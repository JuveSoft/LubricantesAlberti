<p>El watch es estar escuchando por los cambios que sucedan en un archivo</p>
<p>En el package.json, en el script de sass le agregamos watch</p>
<p>"sass":"sass --watch css/scss:build/css"</p>
<p>De esta forma todos los cambios que sucedan en css/scss se van a cambiar automaticamente, por ahora solo vamos a
    tener que refrescar la página</p>
<p>Una vez que terminamos ponemos ctrl c para finalizar </p>
<h2>Gulp</h2>
<p>Vamos a crear el archivo gulpfile, esto nos va permitir multiples tareas y nos va a permitir diferentes acciones</p>
<p>Con gulp vamos a trabajar en javascript y con esto vamos a tener un compilador de sass, vamos a poder optimizar y
    minificar imagenes, crear diferentes formatos, formatos que van a estar diseñado para tener una buena performance
</p>
<p>Vamos también a ver como vamos a unir código de javascript y el código de css va a mejorar también</p>
<p>Sirve para automatizar todas las tareas</p>
<h3>Terminal</h3>
<p>Como es una dependencia de desarrollo vamos a escribir 'npm i --save-dave gulp' también puede ser 'npm i -D gulp'</p>
<p>En package.sjon nos tiene que aparecer la version en 'devDependencies'</p>
<p>Esto va a requerir que agreguemos un archivo, nos tenemos que asegurar que esté en la raiz del proyecto</p>
<p>Es en este archivo donde va a buscar las funciones y tareas</p>
<p>Gulp es una herramienta para automatizar tareas, y esas tareas son funciones de javascript. Cada función es una tarea
    para gulp</p>
<p>Cada tarea la vamos a definir por una funcion y su nombre que sea valido. A esta función hay que mandarla a llamar
    para que cumpla la función, en este caso la vamos a llamr desde gulpfile, y este requiere node.js para ejecutarse,
    node corre en el
    servidor y tiene acceso a los archivos por eso necesitamos node</p>
<p>Node tiene una sisntaxis especial para hacer disponible una funcion o mnandarla a llamar, por ejemplo 'exports.nombre
    al cual vamos a llamar a estafunción = nombre de la función;'. Es conveniente que se llamen de la misma manera</p>
<p>exports.priemerTarea=tarea;</p>
<p>La podemos llamar por medio de 'npx' que o instalamos junto a node, la ventaja que tiene es que podemos ejecutar
    paquetes sin la necesidad de ejecutarlos globalmente. A gulp lo tenemos que poner en a llamada porque es un proyexto
    de gulp. En la terminal
    ponemos:
</p>
<p>npx gulp priemrTarea</p>
<p>Esto se ejecuta todo desde la carpeta que tenemos que se llama 'node_modules'. Para qu eno nos devuelva un error
    te4nemos que ponerle un callback (done) como paso deparametro, y también antes que termine la función </p>
<p>funcion tarea(done){</p>
<p>console.log ("Mi primer tarea");</p>
<p>done(); } Con esto sabemos que llegamos a la parte final y que se ha ejecutado el código</p>
<p> De esta manera podemos definir la parte de compilar el sass, lo mandamos a llamar de esta forma y va aestar
    compilando todo el tiempo</p>
<p>Se puede tambien crear una función para comprimir imagenes. Cuando tenemos muchas imagenes podemos crear funcion que
    un directorio un directorio, entonces vamos a llamar esa funciíonby vamos a comprimir toda las imagenes. </p>

<h3>Ahora desde el package.json</h3>
<p>Abrimos el package.json y extent4e mos el script poniendo una coma(,) y doble comilla("") siempre en json. Alli
    ponemos el nombre de la función "tarea": "gulp tarea" (el nombre de la función). 'tarea' va a ser el nombre de npm
    pero lo que se va a
    ejecutar es 'gulp tarea'</p>
<p>Si en la terminal ponemos 'npm run tarea' lo que vamos a mandar a llamar es la parte de la izquierda del script</p>

<h3>Como compilar sass</h3>
<p>Para compilar esta hoja de estilos tenemos que realizar tres pasos. </p>
<p>1° tenemos que identificar el archivo de sass, saber donde está </p>
<p>Para esto gulp tiene una api que tiene funciones que facilitan toda esta parte de automatizar tareas. Po r ej. con
    las imagenes, cuando queremos comprimir imaenes y generar los formatos 'avif' y 'webp', lo primero que hay que hacer
    es decirle donde
    va a encontrar las imagenes. Despues los comprime y despues los guarda es una api sencilla. IDENTIFICA - PROCESA -
    GUARDA</p>
<p>Para esto 'GULP' nos dá ciertas funciones que podemos utilizar. Al principio de la hoja de 'gulpfile' ponemos
    <span>const {} = require("gulp");</span>. Ese gulp es que insatalamos en el package.json en las 'devDependencies:{',
    el require es una forma
    de extraerlo, extrae la funcionalidad del gulp que está en la carpeta de node-modules, lo toma de ese archivo y lo
    trae a la funcion una de las funciones que trae es 'src' que sirve para identificar un archivo o una serie de
    archivos, es el source
    o una fuente. tambien vamos importar una funcion que se llama 'dest'. Esta función nos va a permitir almacer en una
    carpeta destino.</p>
<p>La parte de proceso o de compilacion la vamos a ir agregando de las dependencias via el package.json</p>

<p>2° tenemos que cmpilarlo ejecutando lacciones de SASS. La extension que tenemos en el script de json tiene todo el
    conocimiento de sass y sabe cpmp compilar</p>
<p>3° Guardarla en el disco duro</p>

<p>Empezamos con 'src' esto toam la ubicación de donde está el archivo</p>
<p>Como estamos ubicados en gulpfile tenemos que abrir la carpeta de 'src/' y acceder al archivo 'scss/' y podemos poner
    el nombre del archivo 'app.scss'. Hasta acá hemos identificado el archivo</p>
<p>Gulp tiene los 'pipes' esto sirve para realizar una accion después de otra. Una vez que finalize de identificar el
    archivo, podemos poner a continuación los 'pipes' uno detras de otro, lo que sean necesarios.pipe().pipe().pipe(),
    se van a ejecutar
    uno destrás de otro donde termina uno empiezxa el otro. Es ahí cunado el done() avisa que terminó la función</p>
<p>dentro del pipe vamos a poner una por ej. un sass() pero este lo vamos atener que importar de la carpeta de
    node-modules como una constante, estas la ponemos al inicio de la hoja </p>
<p>const sass= require("sass"), no chocan el hecho que usamos repetimos los nombres porque este sirve solo para
    importar. En 'const sass' solo creamos la funcion es solo el nombre para que la llamamos desde el pipe().</p>



    //$numero="1hola1";
    //$numero2="1HOLA";
    
    
    // sanitizar: filter_var es una funcion que va a filtrar una variable y toma 2 parametros el primero es una variable y
    el segundo el tipo de filtro
    // filter_var($variable, FILTER_SANITIZE_NUMBER_INT); solo mantiene los números
    // filter_var($variable, FILTER_ZANITIZE_EMAIL); eLIMINAN LO QUE NO ES NECESARIO
    
    //$resultado=filter_var($numero,FILTER_SANITIZE_NUMBER_INT);
    //$resultado=filter_var($numero,FILTER_SANITIZE_STRING); // mantiene lo que es el FILTER_SANITIZE_STRING
    
    // Si queremos validar usamos FILTER_VALIDATE_INT
    // Se usa para que no lleguen datos sucios a la base de datos
    //$resultado=filter_var($numero2,FILTER_VALIDATE_INT); // Donde no haya un numero va a dar false y se puede poner en un
    if()
    
    // Usamos mysqli_real_escape_string(), esto sirve par aque nos hagan inyección de sql.
    // Es una funcióin donde su primer parametro es la base de datos y el segundo loa que vamos a validar
    // SIntaxis: $variable=mysli_real_escape_string($db, $_POST['nombre']);
    
    //echo "
    <pre>";
     //var_dump($resultado);
     //   echo "</pre>";


        // _SERVER : Nos va a traer información detallada de lo que hay en el archivo
        // _POST : Nos va a traer cuando mandamos una petición en nuestro formulario
        
        // _FILES : nos va a permitir ver el contenido de los archivos
        // En el array de la imagenes vamos a encontrar ' [tmp_name']=> ' es un lugar temporal donde se almacenan los archivos,
        para saber en que parte del servidor se almacenan, para que los podemos guardar en la base de datos
        // También tenemos el nombre del archivo
        // Tambipen tenemos el ' [type] ' para que sepamos que tipo de archivo es
        // Tenemos un '[error]' en el caso que lo haya
        // Tenemos también el tamaño en bytes
        // Con estass validaciones podemos hacer por ej que no suban imagenes muy grandes
        //exit;