<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Información sobre Counter Strike Global Offencive</title>
	<link rel="stylesheet" type="text/css" href="./estilos_modulo_2_2.css">
	<!-- tipografía de google -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&family=Source+Code+Pro&family=Zen+Kurenaido&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href=".css/lightbox.css">
</head>
<body>
	<header>
		<div id="texto_1">
			<p>Counter-Strike: Global Offensive (CS:GO) es un videojuego de disparos en primera persona desarrollado por Valve Corporation en cooperación con Hidden Path Entertainment.</p>
		</div>
		<div id="texto_2">
			<p>CS:GO trae nuevos mapas, personajes y armas, y ofrece versiones actualizadas de contenido clásico de CS.</p>
		</div>
		<nav id="botonera_1">
			<ul class="botonera_1">
				<li><a href="#primero">Historia</a></li><li><a href="#segundo">Noticias</a></li><li><a href="#tercero">Torneo</a></li><li><a href="#footer">Contacto</a></li>
			</ul>
		</nav>
	</header>
	<section id="primero">
		<div id="texto_3">
			<p>El primer Counter-Strike fue publicado en 1999 como mod de Half-Life.</p>
			<p>A través de las versiones (1.6, Source y Global Offensive), Counter-Strike ha sido el estándar de referencia de facto de la habilidad del jugador.</p>
			<p>Los jugadores profesionales de Counter-Strike se han convertido en leyendas dentro de la comunidad internacional de amantes de los videojuegos.</p>
			<p> Además, presenta nuevos modos de juego, matchmaking, marcadores y mucho más.</p>
			<p>Actualmente existen diferentes tipos de modo de juego.</p>
			<p>Competitivo: partida 5 contra 5, al mejor de 30 rondas usando las reglas competitivas estándar. Puedes unirte a una partida por tu cuenta o formar un equipo y entrar como una unidad.</p>
		</div>
		<div id="texto_4">
			<p>Casual: los jugadores reciben automáticamente blindaje corporal y kits de desactivación.</p>
			<p>Demolición: los jugadores se turnan para atacar y defender un único emplazamiento de bomba en una serie de mapas diseñados para el juego rápido.</p>
			<p>Carrera de armamentos: es un modo de progresión de armas con reaparición instantánea y mucho combate en espacios cerrados.</p>
			<p>Cazapatos: Aquí se deshabilita la posibilidad de compra y los jugadores inician cada ronda con un SSG 08 y un cuchillo, siendo estas las únicas armas presentes en este modo de juego.</p>
			<p>Danger zone: es un Battle Royale diferente a Fortnite o PUBG, pero con el mismo objetivo. La primera persona de CS:GO se mantiene, así como las armas o el concepto de comprar. Todos vamos contra todos, pudiendo jugar en parejas de dos ó tres personas.</p>
		</div>
		<div id="rangocsgo">
			<h2 class="destacado_h2">Experiencia en CSGO</h2>
			<form action="enviar_rangos.php" method="POST">
				<input type="text" name="nickname" placeholder="Nick de steam">
				<input type="number" name="horas" placeholder="Horas jugadas">
				<input type="text" name="rango_mm" placeholder="Rango en MM">
				<input type="text" name="rango_dz" placeholder="Rango en Danger Zone">
				<textarea name="experiencia" placeholder="Cuenta tu experiencia en el juego" rows="4"></textarea>
				<input type="submit">
			</form>
			<?php 
				if(isset($_GET['ok'])) {
					echo "<h3>Experiencia enviada!</h3>";
				}
			?>
		</div>
		<div id="libreria_javascript">
			<a href="Equipos/rango_mm.jpg" data-lightbox="image-1" data-title="Rangos en MM"><img src="Equipos/rango_mm.jpg"></a>
			<a href="Equipos/rango_dz.jpg" data-lightbox="image-1" data-title="Rangos en Danger Zone"><img src="Equipos/rango_dz.jpg"></a>			
		</div>
	</section>
	<section id="segundo">
		<div id="texto_5">
			<h2>Actualmente se encuantran dispuntando 30 torneos, distribuidos en las 6 regiones principales: Europa, CIS, Norteamérica, Sudamérica, Asia y Oceania</h2>
		</div>
		<div id="imagen_1">
			<img src="Equipos/astralis.jpg">
		</div>
		<div id="texto_6">
			<p>De manera externa podemos jugar csgo, a traves de plataformas los cuales tienen sus propios servidores, niveles y si queres acceder a diversos premios lo que hay que hacer es pagar una suscripción. Las plataformas mencionadas son: Gamers Club, Faceit y ESEA.</p>
		</div>
		<div id="imagen_2">
			<img src="Equipos/9z.jpg">
		</div>
		<div id="texto_7">
			<p>Si hoy no hay ningún tipo de discusión sobre cuál es el mejor equipo de CS:GO de todos los tiempos, es culpa de <span class="texto_rojo">Astralis</span>.</p>
		</div>
		<div id="texto_8">
			<p>Actualmente el mejor equipo de csgo argentino es <span class="texto_rojo">9Z</span>. Ubicandose en el puesto 118 de ranking mundial.</p>
		</div>
	</section>
	<section id="tercero">
		<div id="texto_10">
			<p>Entre el 26 de octubre y el 7 de noviembre se disputo el PGL Major Estocolmo 2021. El cual es un torneo donde reune a los 24 mejores equipos del mundo. La competencia repartio un total de 2 millones de dolares, obteniendo así 1 millón para el ganador.</p>
		</div>
		<nav id="botonera_3">
			<ul class="botonera_3">
				<li><a href="index.php?id=eq#botonera_3">Equipos</a></li><li><a href="index.php?id=cl#botonera_3">Clasificación</a></li><li><a href="index.php?id=ca#botonera_3">Campeón</a></li>
			</ul>
			</nav>
		<?php
		if (isset($_GET['id']))
		switch ($_GET['id']) {
			case 'eq':
				$imagen = 'equipos.png';
				$titulo = 'Equipos';
				$info = 'Un total de 16 equipos disputaron varios partidos en el escenario de leyendas.';
				break;
			case 'cl':
				$imagen = 'clasificacion.png';
				$titulo = 'Clasificación';
				$info = 'En la etapa de clasificación hacia la gran fianl, lograron llegar los mejores 8 equipos.';
				break;		
			case 'ca':
				$imagen = 'navi_1.jpg';
				$titulo = 'Campeón';
				$info = 'Dos años pasaron para que vuelva, y lo hizo de la mejor manera. El <span class="texto_violeta">PGL Major Estocolmo</span> tuvo una gran final que quedó en manos de <span class="texto_rojo">NAVI</span> por 2-0 contra <span class="texto_rojo">G2</span> (16-11 Ancient, 22-19 Nuke). El un partido tuvo muchas emociones, récords de audiencia y más.';
				break;
				}
			else{
				$imagen = 'equipos.png';
				$titulo = 'Equipos';
				$info = 'Un total de 16 equipos disputaron varios partidos en el escenario de leyendas.';				
				}
		?>
		<div id="pgl_estocolmo">
			<div id="imagen_3">
				<img src="Equipos/<?php echo $imagen; ?>">
			</div>
			<div id="texto_11">
				<h3><?php echo $titulo; ?></h3>
				<p><?php echo $info; ?></p>
			</div>
		</div>	
	</section>
	<footer id="footer">
		<nav id="botonera_2">
			<ul class="botonera_2">
				<li><a href="https://www.facebook.com" target="new">Facebook</a></li><li><a href="https://twitter.com" target="new">Twitter</a></li><li><a href="https://www.instagram.com" target="new">Instagram</a></li>
			</ul>
		</nav>
		<div id="texto_9">
			<p>Fuente:<a href="https://blog.counter-strike.net/es/index.php/acerca-de/" target="new">BlogCSGO</a> <a href="https://www.marca.com/esports/csgo-counter-strike/2019/04/06/5ca7e404e5fdea73448b45cb.html" target="new">MarcaCSGO</a>
			<a href="https://es.wikipedia.org/wiki/Counter-Strike:_Global_Offensive" target="new">Wiki</a> <a href="https://www.alfabetajuega.com/guia/guia-completa-counter-strike-global-offensive-trucos-skins-armas-personajes-mods-mapas/jugar-cazapatos-counter-strike-global-offensive" target="new">AlfaBeta</a> <a href="https://es.egamersworld.com/counterstrike/latest" target="new">EGW</a> <a href="https://es.tips.gg/csgo/teams/argentina/" target="new">TipsGG</a> <a href="https://www.infobae.com/latinpower/esports/2021/10/26/pgl-major-estocolmo-2021-vuelve-uno-de-los-eventos-mas-esperados-de-los-esports-despues-de-25-meses/" target="new">Infobae</a>
			</p>
		</div>
	</footer>
	<script type="text/javascript" src="js/lightbox-plus-jquery.js"></script>
	<script src="js/lightbox.js" type="text/javascript"></script>
</body>
</html>