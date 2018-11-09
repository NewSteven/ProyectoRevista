



<div class="row">
						<div class="col-md-9">
							<div class="row">
							<?php
								$wsqli="SELECT noticias.idnoticias, noticias.titulo, noticias.descripcion, noticias.fechanotica, genero.idgenero, genero.nombre, usuarios.idusuario, usuarios.nombre FROM noticias INNER JOIN noticias.idnoticias = genero.idgenero INNER JOIN noticias.idnoticias = usuarios.idusuario";
								 $result = $linki->query($wsqli);
								 if($linki->errno) die($linki->error);
							 	while($row = $result->fetch_array()){
							?>
								<div class="thumbnail">
									<img src="img/not01.jpg" alt="" class="img-responsive img-rounded">
									<div class="margenes txt-info">
										<h2 class="text-center"><?php echo $row['titulo']?></h2>
										<p class="text-justify"><?php echo $row['descripcion']?></p>
										<div class="text-right">
											<h5 class="text-left">Genero: <strong><?php echo $row['nombre']?></strong></h5>
											<h5 class="text-left">Autor: <strong><?php echo $row['nombre']?></strong></h5>
											<p>Fecha: <strong><?php echo $row['fechanoticia']?><strong></p>
											<a href="detalle.html" class="btn btn-danger">Leer mas</a>
										</div>
									</div>
								</div>
							<?php } ?>
								<div class="thumbnail">
									<img src="img/not02.jpg" alt="" class="img-responsive">
									<div class="margenes txt-info">
										<h2 class="text-center">Red Dead Redemption 2 muestra su primer gameplay</h2>
										<p class="text-justify">Rockstar hace público por fin el primer vídeo con gameplay del esperadísimo Red Dead Redemption 2, un western con
											el que espera batir records. El western definitivo, eso es a lo que aspira Red Dead Redemption 2, además de convertirse
											en uno de los mejores sandbox de la historia. Si no lo consigue, andará muy cerca, a tenor de lo que hemos podido
											ver gracias al primer gameplay del juego publicado por Rockstar, como la propia compañía nos había avisado. Más
											de seis minutos para disfrutar y sentir el poder del hype que solo esta compañía es capaz de crear.</p>
										<div class="text-right">
											<a href="detalle.html" class="btn btn-danger">Leer mas</a>
										</div>
									</div>
								</div>

								<div class="thumbnail">
									<img src="img/not03.jpg" alt="" class="img-responsive">
									<div class="margenes txt-info">
										<h2 class="text-center">Fortnite Battle Royale: Sigue el mapa del tesoro de Ribera Repipi</h2>
										<p class="text-justify">Completa con esta guía uno de los desafíos de la Semana 5 de la Temporada 5 del Pase de Batalla de Fortnite Battle
											Royale. A la caza del tesoro. Fortnite Battle Royale se encuentra ya en la Semana 5 de la Temporada 5 de su Pase
											de Batalla. Como siempre que hay un cambio de semana en Fortnite, se han añadido nuevos desafíos. Y, de nuevo,
											como siempre, en Meristation os traemos las soluciones para los desafíos más complejos. En este caso, os ayudaremos
											a conseguir el tesoro de esta semana completando el desafío que dice tal que así: Sigue el mapa del tesoro de
											Ribera Repipi. Debemos ir al siguiente punto del mapa de Battle Royale</p>
										<div class="text-right">
											<a href="detalle.html" class="btn btn-danger">Leer mas</a>
										</div>
									</div>
								</div>
								<div class="thumbnail">
									<img src="img/not04.jpg" alt="" class="img-responsive">
									<div class="margenes txt-info">
										<h2 class="text-center">El nuevo modo de Call of Duty: Black Ops 4 se llama Heist</h2>
										<p class="text-justify">Call of Duty: Black Ops 4 quiere representar un punto y aparte en la franquicia de Activision, y para ello Treyarch
											ha tenido que tomar decisiones difíciles como prescindir de campaña individual, pero es algo que está compensando
											con varios añadidos interesantes en su multijugador, como estamos comprobando con su beta cerrada. Uno de ellos
											lo acabamos de conocer, y es su modo Heist, consistente en hacerse con una bolsa de dinero y llevarlo de manera
											segura al punto de extracción correspondiente.</p>
										<div class="text-right">
											<a href="detalle.html" class="btn btn-danger">Leer mas</a>
										</div>
									</div>
								</div>
							</div>

						</div>

						<div class="col-md-3">
							<div class="row">
								<div class="thumbnail">
									<img src="img/mini01.jpg" alt="" class="img-responsive">
									<p class="small text-center">El fin de ciclo de PS4 está cerca, reconoce Sony</p>
									<a href="detalle.html" class="btn btn-block btn-danger">Leer mas</a>
								</div>
								<div class="thumbnail">
									<img src="img/mini02.jpg" alt="" class="img-responsive">
									<p class="small text-center">El fin de ciclo de PS4 está cerca, reconoce Sony</p>
									<a href="detalle.html" class="btn btn-block btn-danger">Leer mas</a>
								</div>
								<div class="thumbnail">
									<img src="img/mini03.jpg" alt="" class="img-responsive">
									<p class="small text-center">El fin de ciclo de PS4 está cerca, reconoce Sony</p>
									<a href="detalle.html" class="btn btn-block btn-danger">Leer mas</a>
								</div>
								<div class="thumbnail">
									<img src="img/mini04.jpg" alt="" class="img-responsive">
									<p class="small text-center">El fin de ciclo de PS4 está cerca, reconoce Sony</p>
									<a href="detalle.html" class="btn btn-block btn-danger">Leer mas</a>
								</div>
								<div class="thumbnail">
									<img src="img/mini05.jpg" alt="" class="img-responsive">
									<p class="small text-center">El fin de ciclo de PS4 está cerca, reconoce Sony</p>
									<a href="detalle.html" class="btn btn-block btn-danger">Leer mas</a>
								</div>
								<div class="thumbnail">
									<img src="img/mini06.jpg" alt="" class="img-responsive">
									<p class="small text-center">El fin de ciclo de PS4 está cerca, reconoce Sony</p>
									<a href="detalle.html" class="btn btn-block btn-danger">Leer mas</a>
								</div>
								<div class="thumbnail">
									<img src="img/mini07.jpg" alt="" class="img-responsive">
									<p class="small text-center">El fin de ciclo de PS4 está cerca, reconoce Sony</p>
									<a href="detalle.html" class="btn btn-block btn-danger">Leer mas</a>
								</div>
								<div class="thumbnail">
									<img src="img/mini08.jpg" alt="" class="img-responsive">
									<p class="small text-center">El fin de ciclo de PS4 está cerca, reconoce Sony</p>
									<a href="detalle.html" class="btn btn-block btn-danger">Leer mas</a>
								</div>
								<div class="thumbnail">
									<img src="img/mini09.jpg" alt="" class="img-responsive">
									<p class="small text-center">El fin de ciclo de PS4 está cerca, reconoce Sony</p>
									<a href="detalle.html" class="btn btn-block btn-danger">Leer mas</a>
								</div>
								<div class="thumbnail">
									<img src="img/mini10.jpg" alt="" class="img-responsive">
									<p class="small text-center">El fin de ciclo de PS4 está cerca, reconoce Sony</p>
									<a href="detalle.html" class="btn btn-block btn-danger">Leer mas</a>
								</div>
								<div class="thumbnail">
									<img src="img/mini11.jpg" alt="" class="img-responsive">
									<p class="small text-center">El fin de ciclo de PS4 está cerca, reconoce Sony</p>
									<a href="detalle.html" class="btn btn-block btn-danger">Leer mas</a>
								</div>
								<div class="thumbnail">
									<img src="img/mini12.jpg" alt="" class="img-responsive">
									<p class="small text-center">El fin de ciclo de PS4 está cerca, reconoce Sony</p>
									<a href="detalle.html" class="btn btn-block btn-danger">Leer mas</a>
								</div>
							</div>
						</div>

					</div>
