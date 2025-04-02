<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>conozcoamigos.com</title>
<style type="text/css">
<!--
body {
	background-color: #00CC33;
	margin: 0.5;
	padding: 1;
	color: #000;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 100%;
	line-height: 2;
	font-weight: 900;
	width: auto;
	z-index: auto;
	top: auto;
	border-top-color: #FFF;
	border-right-color: #FFF;
	border-bottom-color: #FFF;
	border-left-color: #FFF;
}

/* ~~ Selectores de elemento/etiqueta ~~ */
ul, ol, dl { /* Debido a las diferencias existentes entre los navegadores, es recomendable no añadir relleno ni márgenes en las listas. Para lograr coherencia, puede especificar las cantidades deseadas aquí o en los elementos de lista (LI, DT, DD) que contienen. Recuerde que lo que haga aquí se aplicará en cascada en la lista .nav, a no ser que escriba un selector más específico. */
	padding: 0px;
	margin: 0px;
	top: auto;
	clip: rect(auto,auto,auto,auto);
	background-color: #FFF;
}
h1, h2, h3, h4, h5, h6, p {
	margin-top: 0;	 /* la eliminación del margen superior resuelve un problema que origina que los márgenes escapen de la etiqueta div contenedora. El margen inferior restante lo mantendrá separado de los elementos de que le sigan. */
	padding-right: 25px;
	padding-left: 15px; /* la adición de relleno a los lados del elemento dentro de las divs, en lugar de en las divs propiamente dichas, elimina todas las matemáticas de modelo de cuadro. Una div anidada con relleno lateral también puede usarse como método alternativo. */
	font-family: Georgia, "Times New Roman", Times, serif;
	color: #000;
	background-color: #FFF;
	padding-top: 0px;
}
a img { /* este selector elimina el borde azul predeterminado que se muestra en algunos navegadores alrededor de una imagen cuando está rodeada por un vínculo */
	border: none;
}

/* ~~ La aplicación de estilo a los vínculos del sitio debe permanecer en este orden (incluido el grupo de selectores que crea el efecto hover -paso por encima-). ~~ */
a:link {
	color: #0033FF;
	text-decoration: underline; /* a no ser que aplique estilos a los vínculos para que tengan un aspecto muy exclusivo, es recomendable proporcionar subrayados para facilitar una identificación visual rápida */
}
a:visited {
	color: #4E5869;
	text-decoration: underline;
}
a:hover, a:active, a:focus { /* este grupo de selectores proporcionará a un usuario que navegue mediante el teclado la misma experiencia de hover (paso por encima) que experimenta un usuario que emplea un ratón. */
	text-decoration: none;
}

/* ~~ este contenedor rodea a todas las demás divs, lo que les asigna su anchura basada en porcentaje ~~ */
.container {
	width: 70%;
	max-width: 1260px;/* puede que sea conveniente una anchura máxima (max-width) para evitar que este diseño sea demasiado ancho en un monitor grande. Esto mantiene una longitud de línea más legible. IE6 no respeta esta declaración. */
	min-width: 780px;/* puede que sea conveniente una anchura mínima (min-width) para evitar que este diseño sea demasiado estrecho. Esto permite que la longitud de línea sea más legible en las columnas laterales. IE6 no respeta esta declaración. */
	background-color: #FFF; /* el valor automático de los lados, unido a la anchura, centra el diseño. No es necesario si establece la anchura de .container en el 100%. */
	margin-top: 0;
	margin-right: auto;
	margin-bottom: 0;
	margin-left: auto;
}

/* ~~ no se asigna una anchura al encabezado. Se extenderá por toda la anchura del diseño. Contiene un marcador de posición de imagen que debe sustituirse por su propio logotipo vinculado ~~ */
.header {
	background-color: #FFFFFF;
	font-size: xx-large;
	color: #693;
	font-weight: 900;
	font-style: normal;
	font-variant: normal;
	text-transform: uppercase;
	line-height: 100px;
	font-family: "Comic Sans MS", cursive;
	top: auto;
	padding: 0px;
	word-spacing: 0em;
	letter-spacing: 0.2em;
	clip: rect(auto,auto,auto,auto);
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 20px;
	margin-left: 0px;
	border-bottom-width: 5px;
	border-bottom-style: solid;
	border-top-color: #FFF;
	border-right-color: #FFF;
	border-bottom-color: #00F;
	border-left-color: #FFF;
}

/* ~~ Estas son las columnas para el diseño. ~~ 

1) El relleno sólo se sitúa en la parte superior y/o inferior de las divs. Los elementos situados dentro de estas divs tienen relleno a los lados. Esto le ahorra las "matemáticas de modelo de cuadro". Recuerde que si añade relleno o borde lateral a la div propiamente dicha, éste se añadirá a la anchura que defina para crear la anchura *total*. También puede optar por eliminar el relleno del elemento en la div y colocar una segunda div dentro de ésta sin anchura y el relleno necesario para el diseño deseado.

2) No se asigna margen a las columnas, ya que todas ellas son flotantes. Si es preciso añadir un margen, evite colocarlo en el lado hacia el que se produce la flotación (por ejemplo: un margen derecho en una div configurada para flotar hacia la derecha). En muchas ocasiones, puede usarse relleno como alternativa. En el caso de divs para las que deba incumplirse esta regla, deberá añadir una declaración "display:inline" a la regla de la div para evitar un error que provoca que algunas versiones de Internet Explorer dupliquen el margen.

3) Dado que las clases se pueden usar varias veces en un documento (y que también se pueden aplicar varias clases a un elemento), se ha asignado a las columnas nombres de clases en lugar de ID. Por ejemplo, dos divs de barra lateral podrían apilarse si fuera necesario. Si lo prefiere, éstas pueden cambiarse a ID fácilmente, siempre y cuando las utilice una sola vez por documento.

4) Si prefiere que la navegación esté a la derecha en lugar de a la izquierda, simplemente haga que estas columnas floten en dirección opuesta (todas a la derecha en lugar de todas a la izquierda) y éstas se representarán en orden inverso. No es necesario mover las divs por el código fuente HTML.

*/
.sidebar1 {
	float: left;
	width: 17%;
	background-color: #FF6600;
	padding-bottom: 150px;
	height: 20px;
}
.content {
	padding: 10px 0;
	width: 80%;
	float: left;
	text-align: justify;
}

/* ~~ Este selector agrupado da espacio a las listas del área de .content ~~ */
.content ul, .content ol { 
	padding: 0 15px 15px 40px; /* este relleno reproduce en espejo el relleno derecho de la regla de encabezados y de párrafo incluida más arriba. El relleno se ha colocado en la parte inferior para que el espacio existente entre otros elementos de la lista y a la izquierda cree la sangría. Estos pueden ajustarse como se desee. */
}

/* ~~ Los estilos de lista de navegación (pueden eliminarse si opta por usar un menú desplegable predefinido como el de Spry) ~~ */
ul.nav {
	list-style: none; /* esto crea el borde superior de los vínculos (los demás se sitúan usando un borde inferior en el LI) */
	margin-bottom: 15px; /* esto crea el espacio entre la navegación en el contenido situado debajo */
	background-color: #F60;
	border-top-width: 0px;
	border-top-style: 0;
	border-top-color: #F60;
	border-right-color: #F60;
	border-bottom-color: #F60;
	border-left-color: #F60;
	color: #F60;
}
ul.nav li {
	border-bottom: 1px solid #667; /* esto crea la separación de los botones */
	color: #F90;
}
ul.nav a, ul.nav a:visited { /* al agrupar estos selectores, se asegurará de que los vínculos mantengan el aspecto de botón incluso después de haber sido visitados */
	padding: 5px 5px 5px 15px;
	display: block; /* esto asigna propiedades de bloque al vínculo, lo que provoca que llene todo el LI que lo contiene. Esto provoca que toda el área reaccione a un clic de ratón. */
	text-decoration: none;
	background-color: #8090AB;
	color: #000;
}
ul.nav a:hover, ul.nav a:active, ul.nav a:focus { /* esto cambia el color de fondo y del texto tanto para usuarios que naveguen con ratón como para los que lo hagan con teclado */
	background-color: #FF6600;
	color: #FC0;
	border-top-color: #FFF;
	border-right-color: #FFF;
	border-bottom-color: #FFF;
	border-left-color: #FFF;
}

/* ~~ El pie de página ~~ */
.footer {
	background-color: #3399FF;
	position: relative;/* esto da a IE6 hasLayout para borrar correctamente */
	clear: both; /* esta propiedad de borrado fuerza a .container a conocer dónde terminan las columnas y a contenerlas */
	text-align: center;
	font-size: x-small;
	color: #999;
	padding-top: 5px;
	padding-right: 0;
	padding-bottom: 5px;
	padding-left: 0;
}

/* ~~ clases float/clear varias ~~ */
.fltrt {  /* esta clase puede utilizarse para que un elemento flote en la parte derecha de la página. El elemento flotante debe preceder al elemento junto al que debe aparecer en la página. */
	float: right;
	margin-left: 8px;
}
.fltlft { /* esta clase puede utilizarse para que un elemento flote en la parte izquierda de la página. El elemento flotante debe preceder al elemento junto al que debe aparecer en la página. */
	float: left;
	margin-right: 8px;
}
.clearfloat { /* esta clase puede situarse en una <br /> o div vacía como elemento final tras la última div flotante (dentro de #container) si #footer se elimina o se saca fuera de #container */
	clear:both;
	height:0;
	font-size: 1px;
	line-height: 0px;
}
a:hover {
	color: #0066CC;
}
.container .header ul .header {
	height: 190px;
}
-->
</style><!--[if lte IE 7]>
<style>
.content { margin-right: -1px; } /* este margen negativo de 1 px puede situarse en cualquiera de las columnas de este diseño con el mismo efecto corrector. */
ul.nav a { zoom: 1; }  /* la propiedad de zoom da a IE el desencadenante hasLayout que necesita para corregir el espacio en blanco extra existente entre los vínculos */
</style>
<![endif]--></head>

<body>

<div class="container">

  <div class="header">conozcoamigos.com <img src="Caricatura1.jpg" width="355" height="70" />  </div>
    
  <div class="sidebar1">
    <ul class="nav">
      <li><a href="index.php">Inicio</a></li>
      <li><a href="Ingresar.php">Ingresar</a></li>
      <li><a href="Registrarse.php">Registrarse</a></li>
      <li><a href="Verperfiles.php">Ver perfiles</a></li>
    </ul>
    <p>&nbsp;</p>
  <!-- end .sidebar1 --></div>
  <div class="content">
    <h2 style="color: blue; font-size: 30px;">Contexto de la página</h2>

    
    <p>Esta página está diseñada para conocer personas que  compartan nuestros propios gustos, pasatiempos, temas de conversación, emprendimientos y maneras de pensar en general.</p>
<p>Sera una forma fácil y segura de aumentar nuestro círculo de  amigos, crear sociedades, buscar colaboradores para nuestros proyectos, encontrar profesionales en todas las areas e incluso conseguir una pareja con la que compartamos ideales en comun.  </p>
<p><img src="Amigos.jpg" width="270" height="200" /></p>
    <h2 style="color: blue; font-size: 25px;">¿Como utilizo la pagina?</h2>
    <p>Puedes empezar viendo los perfiles de las personas que ya  hacen parte de nuestra comunidad virtual. Solo podrás ver los perfiles sin  fotos y no tendrás la opción de hacerles una invitación, pero tendrás una idea  de como es esa persona y si podría ser compatible con tu manera de pensar e  incluirla en tu círculo de amigos.</p>
    <p>Luego de que ya te hayas registrado y llenado tu perfil,  podrás enviar un mensaje de invitación de amigos a el perfil o los perfiles que  sean de tu interes a través del buscador en tu ambiente de usuario.</p>
    <p>Deberás entonces esperar a que tus amigos potenciales  acepten tu invitación, te darás cuenta de ello cuando aparescan en la lista de contactos de tu página de perfil de  usuario, lo siguiente será ponerse en contacto a través de nuestro sistema de  mensajes o Chat y conocer mejor a tus amigos potenciales...</p>
<p>&nbsp;</p>
    <p><span style="color: blue; font-size: 25px;">Aspectos  de seguridad</span></p>
<p>En ningún caso compartas información personal antes de  conocer bien a tus amigos potenciales. Si dudas de sus buenas intenciones  puedes eliminar los perfiles de tu bandeja, asi ya hagan parte de tu lista de amigos.</p>
<p>Si te encuentras personalmente por primera vez con un nuevo amigo, se  recomienda que ambos vayan acompañados y se reúnan en lugares abiertos con  gente alrededor.</p>
<p>Solo podrán registrarse mayores de 18 años. En caso de que  se dude de la mayoría de edad del usuario será eliminado su perfil. (Esto deberá  ser controlado por la misma comunidad)</p>
<p>&nbsp;</p>
<!-- end .content --></div>
  <div class="footer">
    <p>Derechos reservados 2014 - kaizerjzb@gmail.com</p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>
