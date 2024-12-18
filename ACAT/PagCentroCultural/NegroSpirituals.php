<?php
session_start(); // Inicia la sesión
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- jQuery y JavaScript de DataTables -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <!-- CDN de DataTables Responsive -->
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>

</head>
  <header>
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#0833a2">
          <div class="container-fluid">
              <div class="navbar-brand">
                  <img src="img/logo.png" width="90" height="65">
              </div>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                  <ul class="navbar-nav">

                      <li class="nav-item">
                          <a class="nav-link active" aria-current="page" href="index.html">Inicio</a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link" href="QuienesSomos.html">¿Quiénes Somos?</a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link" href="Galeria.html">Galería</a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link" href="NegroSpirituals.php" style="color: gold; text-shadow: 0 0 10px gold;" >Negro Spirituals</a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link" href="Asociate.html">Asóciate</a>
                      </li>
                      
                    
                  </ul>
              </div>
          </div>
      </nav>
    </div>
    
  </header>

    <br>
    <div class="titulo">¿Quiénes Somos Negro Spirituals?</div>
    <div class="subtitulo" style="font-family: Montserrat, sans-serif;">Directores de Coros con vasta experiencia en distintos tipos de Coros, desde Coros de niños hasta Coros de adultos mayores.</div>
    <br>



    <div class="container mt-5">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="ImgNegroS/teresa-aedo.jpg" class="card-img-top" alt="Imagen 1" height="500">
            <div class="card-body">
              <h5 class="card-title">Teresa E. Aedo.</h5>
              <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modal" data-persona="1">
                información
              </button>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <img src="ImgNegroS/isaac-marquez.jpg" class="card-img-top" alt="Imagen 2" height="500">
            <div class="card-body">
              <h5 class="card-title">Isaac Márquez Nar.</h5>
              <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modal2" data-persona="2">
                información
              </button>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <img src="ImgNegroS/hans2.JPG" class="card-img-top" alt="Imagen 3" height="500">
            <div class="card-body">
              <h5 class="card-title">Hans Barra Astudillo.</h5>
              <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modal3" data-persona="3">
                información
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
        


      

    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalLabel">Teresa E. Aedo</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <h4 style="border-bottom: 1px solid #3498db;">Directora de Coros:</h4>
            <ul>
              <li>Francisco Bilbao (niños Talcahuano)</li>
              <li>Apoderados Colegio Santa Eufrasia (Concepción)</li>
              <li>Coros de niñas Congregación Buen Pastor (Concepción)</li>
              <li>Damas de Rojos (Hospital Higueras Thno)</li>
              <li>Coro de Profesores Jubilados (Colegio de Profesores A.G)</li>
              <li>Coro de Niños Acathno</li>
              <li>Coro Ex Alumnos Apoderados Liceo A-21 (Talcahuano)</li>
              <li>Coro Escuela Enfermería integrados alumnos de todas las carreras y docentes de la Universidad San Sebastián. Sede Concepcion.</li>
              <li>Dirige forma Coro Pacientes Esquizofrénicos (Capef Concepción)</li>
              <!-- Resto de la lista -->
            </ul>
            <h4 style="border-bottom: 1px solid #3498db;">Estudios:</h4>
            <p>Profesora de Educación Básica Mención Música, Pedagogía en Educación Musical.</p>
            <p>Estudia Piano, Teoría de la música, Armonía rinde exámenes en la comisión Del Conservatorio Nacional de Chile Magister "Metodología para la Enseñanza de la música en Educación Pre-Básica, Básica, Media y Superior. Magister en Dirección Coral Magister en Formación Coro Escolar Metodología, audición, Evaluación I, II, III, IV. Armonización y Arreglos Corales I, II, III Estudios de Clarinete, Canto Lírico.</p>
            <!-- Resto de la información -->

            <h4 style="border-bottom: 1px solid #3498db;">Integrante:</h4>
            <p>Iniciadora e integrante del equipo de trabajo que Organiza Festival Internacional Virtual Negro Spirituals.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="modalLabel2" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalLabel">Isaac Márquez Nar.</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <h4 style="border-bottom: 1px solid #3498db;">Director de Coros:</h4>
            <ul>
              <li>Coro de Petit.</li>
              <li>Armonía Viva.</li>
              <li>A tempo.</li>
              <!-- Resto de la lista -->
            </ul>
            
            <h4 style="border-bottom: 1px solid #3498db;">Estudios:</h4>
            <p>Canto.</p>
            <p>Dirección Coral y Orquesta.</p>
            <p>Composición, Órgano(Polonia).</p>
            <!-- Resto de la información -->

            <h4 style="border-bottom: 1px solid #3498db;">Integrante:</h4>
            <p>La Federación Internacional para la Música Coral, la Mesa de Consejo de la Red Nacional de Coros México, el Club de Organistas de México y el equipo de trabajo del Festival Internacional de Coros Negro Spirituals de Talcahuano-Chile conforman entidades clave. Además, asume el rol de Relacionador Público para establecer comunicación y dar a conocer el festival temático con otras asociaciones y federaciones corales.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="modal3" tabindex="-1" aria-labelledby="modalLabel3" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalLabel">Hans Barra Astudillo</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <h4 style="border-bottom: 1px solid #3498db;">Director de Coros:</h4>
            <ul>
              <li>Director Ayudante del Coro Hildegard von Bingen de la Agrupación Cultural Artística de Talcahuano Chile.</li>
              <!-- Resto de la lista -->
            </ul>
            <h4 style="border-bottom: 1px solid #3498db;">Estudios:</h4>
            <p>Estudios de  Piano.</p>
            <p>Teoría de la Música, Dir. Coral</p>
          
            <!-- Resto de la información -->
            <h4 style="border-bottom: 1px solid #3498db;">Integrante:</h4>
            <p>Socio de la Agrupación Cultural Artística de Talcahuano desde el 2017Se integra a la organización del Encuentro Coral Negro Spirituals 2021 Pasa a formar parte de de la Mesa de trabajo de dicho Festival a la fecha.</p>
          </div>
        </div>
      </div>
    </div>

    <br>
    <br>
    <br>
    <!-- Acordeon -->
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="accordion" id="accordionExample">
            <!-- Item 1 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  <span class="texto-destacado" style="font-family: lora, serif;">Difundir el género Negro Musical:</span>
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body" style="font-family: Montserrat, sans-serif;">
                  Difundimos el género en nuestros coros y aquellos que deseen adentrarse a este maravilloso mundo musical.
                </div>
              </div>
            </div>
            <!-- Item 2 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <span class="texto-destacado" style="font-family: lora, serif;">Utilizar como herramienta permanente el Encuentro Coral Virtual:</span>
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body" style="font-family: Montserrat, sans-serif;">
                  Mantenemos contacto con coros de diferentes lugares, presentando material conocido y nuevo a través de encuentros virtuales.
                </div>
              </div>
            </div>
            <!-- Item 3 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <span class="texto-destacado" style="font-family: lora, serif;">Proponer:</span>
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body" style="font-family: Montserrat, sans-serif;">
                  Compartir repertorio común a los coros para difundir este género fortalecer lazos de amistad, vínculos musicales.
                </div>
              </div>
            </div>
            <!-- Item 4 -->
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  <span class="texto-destacado" style="font-family: lora, serif;">Para lograr los objetivos propuestos contamos con:</span>
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body" style="font-family: Montserrat, sans-serif;">
                <li>I. La Agrupación Cultural Artística de Talcahuano-Chile.</li>
                <li>II. Nuestros propios Coros.</li>
                <li>III. Alumnos tesistas en Computación, Diseño Gráfico y Seguridad Cibernética, pertenecientes a una Institución de Educación Superior. Construyendo nuestra página con toda la información necesaria, incluyendo partituras de este género.</li> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="info-section-nuevo">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 info-imagen">
                    <h2>¿Qué es un Negro Spirituals?</h2>
                    <br>
                    <p>Los Negro Spirituals, Son canciones religiosas entonadas a capella por los esclavos en las plantaciones de algodón, surgieron durante la época de esclavitud y se inspiraron en la vida cotidiana.</p>
    
                    <!-- Contenido adicional oculto con JavaScript -->
                    <div class="contenidoAdicional" style="display: none;">
                        <!-- Más contenido aquí -->
                        <p>Estas composiciones reflejaban el ritmo agotador del trabajo en ese entorno, donde los esclavos eran instados a cantar como medida para prevenir fugas y rebeliones.</p>
                        <p>A pesar de su origen en circunstancias adversas, la música de los Negro Spirituals se convirtió en un valioso patrimonio del pueblo Afroamericano. Estas canciones incorporaban motivos bíblicos que simbolizaban poéticamente la realidad de aquellos que experimentaban dolor en el sufrimiento, pero mantenían la esperanza de una liberación futura.</p>
                        <p>Los Spirituals no solo eran expresiones espirituales, sino también estrategias de comunicación que surgían de la improvisación. Su naturaleza táctica iba más allá de lo espiritual, proporcionando a la comunidad Afroamericana una forma de transmitir mensajes de manera creativa y resistente.</p>
                    </div>
    
                    <!-- Botones "Leer más" y "Ocultar texto" -->
                    <button class="btn btn-primary leer-mas">Leer más</button>
                    <button class="btn btn-secondary ocultar-texto" style="display: none;">Ocultar texto</button>
                </div>
                <div class="col-md-6 info-imagen">
                    <img src="ImgNegroS/NegroS.jpg" alt="Imagen del nuevo contenido" width="300" style="margin-left: 20%;">
                </div>
            </div>
        </div>
    </section>

    <section class="info-section-nuevo">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 info-imagen">
                    <h2>¿Qué es un Góspel?</h2>
                    <br>
                    <p>El Góspel, cuyos orígenes se remontan a 1619 con la llegada del primer africano a la colonia inglesa de Virginia (EEUU) y el primer registro de un esclavo bautizado como cristiano, ha evolucionado de manera significativa a lo largo de la historia.</p>
    
                    <!-- Contenido adicional oculto con JavaScript -->
                    <div class="contenidoAdicional" style="display: none;">
                        <!-- Más contenido aquí -->
                        <p>Thomas A. Dorsey, reconocido como el padre del góspel, desempeñó un papel crucial al acuñar este término para referirse a una canción. Dorsey, un talentoso pianista de blues y jazz, fusionó estos estilos musicales con elementos religiosos, marcando así el inicio de una nueva expresión musical.</p>
                        <p>El surgimiento del Góspel coincide con la liberación de los esclavos, momento en el cual estos obtuvieron el derecho de asistir a ceremonias religiosas. A diferencia de los Negro Spirituals, que representaban un clamor del alma y una protesta, el Góspel se caracteriza por ser directamente destinado a la adoración a Dios. Las letras del Góspel encuentran su inspiración en el carácter y milagros de Jesucristo, proporcionando un vehículo poderoso para la expresión espiritual y la conexión con la fe cristiana.</p>
                    </div>
    
                    <!-- Botones "Leer más" y "Ocultar texto" -->
                    <button class="btn btn-primary leer-mas">Leer más</button>
                    <button class="btn btn-secondary ocultar-texto" style="display: none;">Ocultar texto</button>
                </div>
                <div class="col-md-6 info-imagen">
                    <img src="ImgNegroS/gospel.jpeg" alt="Imagen del nuevo contenido" width="300" style="margin-left: 20%;">
                </div>
            </div>
        </div>
    </section>

    <section class="info-section-nuevo">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 info-imagen">
                    <h2>¿Cúales son las Diferencia entre N. Spirituals y Góspel?</h2>
                    <br>
                    <p>Keit Mora Prado, estudiante de Rockapellas Glee club de Ulacit, nos transporta a la época de la esclavitud con una improvisación de los esclavos africanos: “El tren del evangelio se acerca, lo escucho a mano, escucho las ruedas del auto moverse y retumbando por la tierra.</p>
    
                    <!-- Contenido adicional oculto con JavaScript -->
                    <div class="contenidoAdicional" style="display: none;">
                        <!-- Más contenido aquí -->
                        <p>Oh, sube a bordo, niños pequeños. Suben a bordo, niños pequeños. Hay espacio para muchos más” (Spirituals Workshop, París, s. f.). Antes de la abolición de la esclavitud en 1863, los africanos, bajo el sol brillante, el hambre y el dolor, componían melodías para aliviar el peso del trabajo duro.</p>
                        <p>La improvisación era común, con un solo que comenzaba y el grupo respondía, creando así una forma de comunicación entre hermanos. Más allá de su función musical, los Negro Spirituals se convirtieron en una sutil forma de protesta, con interpretaciones que contenían mensajes encriptados, alertando de peligros o revelando estrategias de escape. En resumen, el Negro Spirituals es un género que nació de la improvisación, capturando la realidad y la resistencia de aquellos tiempos difíciles.</p>
                    </div>
    
                    <!-- Botones "Leer más" y "Ocultar texto" -->
                    <button class="btn btn-primary leer-mas">Leer más</button>
                    <button class="btn btn-secondary ocultar-texto" style="display: none;">Ocultar texto</button>
                </div>
                <div class="col-md-6 info-imagen">
                    <img src="ImgNegroS/gospelvsnegros.jpg" alt="Imagen del nuevo contenido" width="300" style="margin-left: 20%;">
                    
                </div>
            </div>
        </div>
    </section>

    <!-- AVISO URGENTE -->
    <div class="container mt-5">
      <div class="carousel-container">
        <div id="avisoCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="ImgNegroS/uno.jpg" class="d-block w-100" alt="Descripción de la foto 1">
            </div>
            
            <div class="carousel-item">
              <img src="ImgNegroS/dos.jpg" class="d-block w-100" alt="Descripción de la foto 2">
            </div>
            
            <div class="carousel-item">
              <img src="ImgNegroS/tres.jpg" class="d-block w-100" alt="Descripción de la foto 3">
            </div>
            
            <div class="carousel-item">
              <img src="ImgNegroS/cuatro.jpg" class="d-block w-100" alt="Descripción de la foto 4">
            </div>
          
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#avisoCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#avisoCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>




  <div class="container mt-5">
    <h2 class="text-center">Descargar Partituras</h2>

    <!-- Contenedor de la tabla y los controles -->
    <div class="table-container">
        <!-- Tabla de Partituras -->
        <table id="tablaPartiturasUnica" class="table table-striped display" style="width:100%">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Fecha de Actualización</th>
                    <th>Categoría</th>
                    <th>Descargar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td data-titulo-real="I'm Building Me A Home_Walton.pdf">I'm Building Me A Home enauu</td>
                    <td>agosto 21, 2023</td>
                    <td>Negro Spirituals</td>
                    <td><button class="btn btn-danger seleccionar-partitura-unica" data-bs-toggle="modal" data-bs-target="#modalFormularioUnico" data-titulo="I'm Building Me A Home_Walton.pdf">Acceder</button></td>
                </tr>
                <tr>
                    <td data-titulo-real="I want to go home V2 - Score 2.pdf">I want to go home V2 - Score 2</td>
                    <td>agosto 21, 2023</td>
                    <td>Negro Spirituals</td>
                    <td><button class="btn btn-danger seleccionar-partitura-unica" data-bs-toggle="modal" data-bs-target="#modalFormularioUnico" data-titulo="I want to go home V2 - Score 2.pdf">Acceder</button></td>
                </tr>
                <tr>
                    <td data-titulo-real="Mary had a baby.pdf">Mary had a baby</td>
                    <td>agosto 21, 2023</td>
                    <td>Negro Spirituals</td>
                    <td><button class="btn btn-danger seleccionar-partitura-unica" data-bs-toggle="modal" data-bs-target="#modalFormularioUnico" data-titulo="Mary had a baby.pdf">Acceder</button></td>
                </tr>
                <tr>
                    <td data-titulo-real="My Lord What a Morning.pdf">My Lord What a Morning</td>
                    <td>agosto 21, 2023</td>
                    <td>Negro Spirituals</td>
                    <td><button class="btn btn-danger seleccionar-partitura-unica" data-bs-toggle="modal" data-bs-target="#modalFormularioUnico" data-titulo="My Lord What a Morning.pdf">Acceder</button></td>
                </tr>
                <tr>
                    <td data-titulo-real="Wade In The Water Short (1).pdf">Wade In The Water Short (1)</td>
                    <td>agosto 21, 2023</td>
                    <td>Negro Spirituals</td>
                    <td><button class="btn btn-danger seleccionar-partitura-unica" data-bs-toggle="modal" data-bs-target="#modalFormularioUnico" data-titulo="Wade In The Water Short (1).pdf">Acceder</button></td>
                </tr>
                <tr>
                    <td data-titulo-real="Amazing Grace 3.pdf">Amazing Grace 3</td>
                    <td>agosto 21, 2023</td>
                    <td>Negro Spirituals</td>
                    <td><button class="btn btn-danger seleccionar-partitura-unica" data-bs-toggle="modal" data-bs-target="#modalFormularioUnico" data-titulo="Amazing Grace 3.pdf">Acceder</button></td>
                </tr>
                <tr>
                    <td data-titulo-real="Copy of Music Down In My Soul - Hogan - Jan 13 2023 - 11-24 AM.pdf">Copy of Music Down In My Soul - Hogan - Jan 13 2023 - 11-24 AM</td>
                    <td>agosto 21, 2023</td>
                    <td>Negro Spirituals</td>
                    <td><button class="btn btn-danger seleccionar-partitura-unica" data-bs-toggle="modal" data-bs-target="#modalFormularioUnico" data-titulo="Copy of Music Down In My Soul - Hogan - Jan 13 2023 - 11-24 AM.pdf">Acceder</button></td>
                </tr>
                <tr>
                    <td data-titulo-real="Drinkin' of the Wine.pdf">Drinkin' of the Wine</td>
                    <td>agosto 21, 2023</td>
                    <td>Negro Spirituals</td>
                    <td><button class="btn btn-danger seleccionar-partitura-unica" data-bs-toggle="modal" data-bs-target="#modalFormularioUnico" data-titulo="Drinkin' of the Wine.pdf">Acceder</button></td>
                </tr>
                <tr>
                    <td data-titulo-real="Im on my way.pdf">Im on my way</td>
                    <td>agosto 21, 2023</td>
                    <td>Negro Spirituals</td>
                    <td><button class="btn btn-danger seleccionar-partitura-unica" data-bs-toggle="modal" data-bs-target="#modalFormularioUnico" data-titulo="Im on my way.pdf">Acceder</button></td>
                </tr>
                <tr>
                    <td data-titulo-real="IÔÇÖve Got Peace Like a River (2).pdf">IÔÇÖve Got Peace Like a River (2)</td>
                    <td>agosto 21, 2023</td>
                    <td>Negro Spirituals</td>
                    <td><button class="btn btn-danger seleccionar-partitura-unica" data-bs-toggle="modal" data-bs-target="#modalFormularioUnico" data-titulo="IÔÇÖve Got Peace Like a River (2).pdf">Acceder</button></td>
                </tr>
                <tr>
                    <td data-titulo-real="Peter on the Sea.pdf">Peter on the Sea</td>
                    <td>agosto 21, 2023</td>
                    <td>Negro Spirituals</td>
                    <td><button class="btn btn-danger seleccionar-partitura-unica" data-bs-toggle="modal" data-bs-target="#modalFormularioUnico" data-titulo="Peter on the Sea.pdf">Acceder</button></td>
                </tr>
                <tr>
                    <td data-titulo-real="Tryin to get home V3.pdf">Tryin to get home V3</td>
                    <td>agosto 21, 2023</td>
                    <td>Negro Spirituals</td>
                    <td><button class="btn btn-danger seleccionar-partitura-unica" data-bs-toggle="modal" data-bs-target="#modalFormularioUnico" data-titulo="Tryin to get home V3.pdf">Acceder</button></td>
                </tr>
                <tr>
                    <td data-titulo-real="Turn Me 'RoundHCEdition.pdf">Turn Me 'RoundHCEdition</td>
                    <td>agosto 21, 2023</td>
                    <td>Negro Spirituals</td>
                    <td><button class="btn btn-danger seleccionar-partitura-unica" data-bs-toggle="modal" data-bs-target="#modalFormularioUnico" data-titulo="Turn Me 'RoundHCEdition.pdf">Acceder</button></td>
                </tr>
                <tr>
                    <td data-titulo-real="Yonder Come Day - Tucker - Jan 13 2023 - 12-01 PM (1).pdf">Yonder Come Day - Tucker - Jan 13 2023 - 12-01 PM (1)</td>
                    <td>agosto 21, 2023</td>
                    <td>Negro Spirituals</td>
                    <td><button class="btn btn-danger seleccionar-partitura-unica" data-bs-toggle="modal" data-bs-target="#modalFormularioUnico" data-titulo="Yonder Come Day - Tucker - Jan 13 2023 - 12-01 PM (1).pdf">Acceder</button></td>
                </tr>
                <tr>
                    <td data-titulo-real="Daniel, Daniel, Servant of the Lord.pdf">Daniel, Daniel, Servant of the Lord</td>
                    <td>agosto 21, 2023</td>
                    <td>Negro Spirituals</td>
                    <td><button class="btn btn-danger seleccionar-partitura-unica" data-bs-toggle="modal" data-bs-target="#modalFormularioUnico" data-titulo="Daniel, Daniel, Servant of the Lord.pdf">Acceder</button></td>
                </tr>
                <tr>
                    <td data-titulo-real="DEEP RIVER.pdf">DEEP RIVER</td>
                    <td>agosto 21, 2023</td>
                    <td>Negro Spirituals</td>
                    <td><button class="btn btn-danger seleccionar-partitura-unica" data-bs-toggle="modal" data-bs-target="#modalFormularioUnico" data-titulo="DEEP RIVER.pdf">Acceder</button></td>
                </tr>
                <tr>
                    <td data-titulo-real="Go down, Moses.pdf">Go down, Moses</td>
                    <td>agosto 21, 2023</td>
                    <td>Negro Spirituals</td>
                    <td><button class="btn btn-danger seleccionar-partitura-unica" data-bs-toggle="modal" data-bs-target="#modalFormularioUnico" data-titulo="Go down, Moses.pdf">Acceder</button></td>
                </tr>
                <tr>
                    <td data-titulo-real="Gonna study war no more.pdf">Gonna study war no more</td>
                    <td>agosto 21, 2023</td>
                    <td>Negro Spirituals</td>
                    <td><button class="btn btn-danger seleccionar-partitura-unica" data-bs-toggle="modal" data-bs-target="#modalFormularioUnico" data-titulo="Gonna study war no more.pdf">Acceder</button></td>
                </tr>
                <tr>
                    <td data-titulo-real="He's got the whole world in his hands.pdf">He's got the whole world in his hands</td>
                    <td>agosto 21, 2023</td>
                    <td>Negro Spirituals</td>
                    <td><button class="btn btn-danger seleccionar-partitura-unica" data-bs-toggle="modal" data-bs-target="#modalFormularioUnico" data-titulo="He's got the whole world in his hands.pdf">Acceder</button></td>
                </tr>
                <tr>
                    <td data-titulo-real="I want to be ready (EE.UU).pdf">I want to be ready (EE.UU)</td>
                    <td>agosto 21, 2023</td>
                    <td>Negro Spirituals</td>
                    <td><button class="btn btn-danger seleccionar-partitura-unica" data-bs-toggle="modal" data-bs-target="#modalFormularioUnico" data-titulo="I want to be ready (EE.UU).pdf">Acceder</button></td>
                </tr>
                <tr>
                    <td data-titulo-real="I wan't to be ready.pdf">I wan't to be ready</td>
                    <td>agosto 21, 2023</td>
                    <td>Negro Spirituals</td>
                    <td><button class="btn btn-danger seleccionar-partitura-unica" data-bs-toggle="modal" data-bs-target="#modalFormularioUnico" data-titulo="I wan't to be ready.pdf">Acceder</button></td>
                </tr>
                <tr>
                    <td data-titulo-real="I'm Goin' to Sing.pdf">I'm Goin' to Sing</td>
                    <td>agosto 21, 2023</td>
                    <td>Negro Spirituals</td>
                    <td><button class="btn btn-danger seleccionar-partitura-unica" data-bs-toggle="modal" data-bs-target="#modalFormularioUnico" data-titulo="I'm Goin' to Sing.pdf">Acceder</button></td>
                </tr>
                <tr>
                    <td data-titulo-real="John saw duh numbuh.pdf">John saw duh numbuh</td>
                    <td>agosto 21, 2023</td>
                    <td>Negro Spirituals</td>
                    <td><button class="btn btn-danger seleccionar-partitura-unica" data-bs-toggle="modal" data-bs-target="#modalFormularioUnico" data-titulo="John saw duh numbuh.pdf">Acceder</button></td>
                </tr>
                <tr>
                    <td data-titulo-real="Lord in troublin.pdf">Lord in troublin</td>
                    <td>agosto 21, 2023</td>
                    <td>Negro Spirituals</td>
                    <td><button class="btn btn-danger seleccionar-partitura-unica" data-bs-toggle="modal" data-bs-target="#modalFormularioUnico" data-titulo="Lord in troublin.pdf">Acceder</button></td>
                </tr>
                <tr>
                    <td data-titulo-real="Rockin Yerusalen.pdf">Rockin Yerusalen</td>
                    <td>agosto 21, 2023</td>
                    <td>Negro Spirituals</td>
                    <td><button class="btn btn-danger seleccionar-partitura-unica" data-bs-toggle="modal" data-bs-target="#modalFormularioUnico" data-titulo="Rockin Yerusalen.pdf">Acceder</button></td>
                </tr>
                <tr>
                    <td data-titulo-real="Seekin' for a City.pdf">Seekin' for a City</td>
                    <td>agosto 21, 2023</td>
                    <td>Negro Spirituals</td>
                    <td><button class="btn btn-danger seleccionar-partitura-unica" data-bs-toggle="modal" data-bs-target="#modalFormularioUnico" data-titulo="Seekin' for a City.pdf">Acceder</button></td>
                </tr>
                <tr>
                    <td data-titulo-real="Swing low, Sweet Chariot.pdf">Swing low, Sweet Chariot</td>
                    <td>agosto 21, 2023</td>
                    <td>Negro Spirituals</td>
                    <td><button class="btn btn-danger seleccionar-partitura-unica" data-bs-toggle="modal" data-bs-target="#modalFormularioUnico" data-titulo="Swing low, Sweet Chariot.pdf">Acceder</button></td>
                </tr>
                <tr>
                    <td data-titulo-real="Were you there.pdf">Were you there</td>
                    <td>agosto 21, 2023</td>
                    <td>Negro Spirituals</td>
                    <td><button class="btn btn-danger seleccionar-partitura-unica" data-bs-toggle="modal" data-bs-target="#modalFormularioUnico" data-titulo="Were you there.pdf">Acceder</button></td>
                </tr>
                <tr>
                    <td data-titulo-real="Amen.pdf">Amen.pdf</td>
                    <td>agosto 21, 2023</td>
                    <td>Negro Spirituals</td>
                    <td><button class="btn btn-danger seleccionar-partitura-unica" data-bs-toggle="modal" data-bs-target="#modalFormularioUnico" data-titulo="Amen.pdf">Acceder</button></td>
                </tr>
                <tr>
                    <td data-titulo-real="Deep river For Full Chorus of Mixed Voices a capella.pdf">Deep river For Full Chorus of Mixed Voices a capella.pdf</td>
                    <td>agosto 21, 2023</td>
                    <td>Negro Spirituals</td>
                    <td><button class="btn btn-danger seleccionar-partitura-unica" data-bs-toggle="modal" data-bs-target="#modalFormularioUnico" data-titulo="Deep river For Full Chorus of Mixed Voices a capella.pdf">Acceder</button></td>
                </tr>
                <tr>
                    <td data-titulo-real="Go Tell It on the Mountain.pdf">Go Tell It on the Mountain</td>
                    <td>agosto 21, 2023</td>
                    <td>Negro Spirituals</td>
                    <td><button class="btn btn-danger seleccionar-partitura-unica" data-bs-toggle="modal" data-bs-target="#modalFormularioUnico" data-titulo="Go Tell It on the Mountain.pdf">Acceder</button></td>
                </tr>
                <tr>
                    <td data-titulo-real="He Never Said a Mumbalin' Word.pdf">He Never Said a Mumbalin' Word</td>
                    <td>agosto 21, 2023</td>
                    <td>Negro Spirituals</td>
                    <td><button class="btn btn-danger seleccionar-partitura-unica" data-bs-toggle="modal" data-bs-target="#modalFormularioUnico" data-titulo="He Never Said a Mumbalin' Word.pdf">Acceder</button></td>
                </tr>
                <tr>
                    <td data-titulo-real="Heav'n, Heav'n.pdf">Heav'n, Heav'n</td>
                    <td>agosto 21, 2023</td>
                    <td>Negro Spirituals</td>
                    <td><button class="btn btn-danger seleccionar-partitura-unica" data-bs-toggle="modal" data-bs-target="#modalFormularioUnico" data-titulo="Heav'n, Heav'n.pdf">Acceder</button></td>
                </tr>
                <tr>
                    <td data-titulo-real="Let my people go SATB y piano.pdf">Let my people go SATB y piano</td>
                    <td>agosto 21, 2023</td>
                    <td>Negro Spirituals</td>
                    <td><button class="btn btn-danger seleccionar-partitura-unica" data-bs-toggle="modal" data-bs-target="#modalFormularioUnico" data-titulo="Let my people go SATB y piano.pdf">Acceder</button></td>
                </tr>
                <tr>
                    <td data-titulo-real="Let Us Break Bread Together 'A Communion Hymn'.pdf">Let Us Break Bread Together 'A Communion Hymn'</td>
                    <td>agosto 21, 2023</td>
                    <td>Negro Spirituals</td>
                    <td><button class="btn btn-danger seleccionar-partitura-unica" data-bs-toggle="modal" data-bs-target="#modalFormularioUnico" data-titulo="Let Us Break Bread Together 'A Communion Hymn'.pdf">Acceder</button></td>
                </tr>
                <tr>
                    <td data-titulo-real="Little David.pdf">Little David</td>
                    <td>agosto 21, 2023</td>
                    <td>Negro Spirituals</td>
                    <td><button class="btn btn-danger seleccionar-partitura-unica" data-bs-toggle="modal" data-bs-target="#modalFormularioUnico" data-titulo="Little David.pdf">Acceder</button></td>
                </tr>
                <tr>
                    <td data-titulo-real="Lonesome Valley.pdf">Lonesome Valley</td>
                    <td>agosto 21, 2023</td>
                    <td>Negro Spirituals</td>
                    <td><button class="btn btn-danger seleccionar-partitura-unica" data-bs-toggle="modal" data-bs-target="#modalFormularioUnico" data-titulo="Lonesome Valley.pdf">Acceder</button></td>
                </tr>
                <tr>
                    <td data-titulo-real="Lonesome Valley-NegroSpirituals.pdf">Lonesome Valley-NegroSpirituals</td>
                    <td>agosto 21, 2023</td>
                    <td>Negro Spirituals</td>
                    <td><button class="btn btn-danger seleccionar-partitura-unica" data-bs-toggle="modal" data-bs-target="#modalFormularioUnico" data-titulo="Lonesome Valley-NegroSpirituals.pdf">Acceder</button></td>
                </tr>
                <tr>
                    <td data-titulo-real="O Mary, Don't You Weep.pdf">O Mary, Don't You Weep</td>
                    <td>agosto 21, 2023</td>
                    <td>Negro Spirituals</td>
                    <td><button class="btn btn-danger seleccionar-partitura-unica" data-bs-toggle="modal" data-bs-target="#modalFormularioUnico" data-titulo="O Mary, Don't You Weep.pdf">Acceder</button></td>
                </tr>
                <tr>
                    <td data-titulo-real="Oh happy day!.pdf">Oh happy day!</td>
                    <td>agosto 21, 2023</td>
                    <td>Negro Spirituals</td>
                    <td><button class="btn btn-danger seleccionar-partitura-unica" data-bs-toggle="modal" data-bs-target="#modalFormularioUnico" data-titulo="Oh happy day!.pdf">Acceder</button></td>
                </tr>
                <tr>
                    <td data-titulo-real="Poor Mourner For full Chorus of Mixed Voices, with Tenor Solo a capella.pdf">Poor Mourner For full Chorus of Mixed Voices, with Tenor Solo a capella</td>
                    <td>agosto 21, 2023</td>
                    <td>Negro Spirituals</td>
                    <td><button class="btn btn-danger seleccionar-partitura-unica" data-bs-toggle="modal" data-bs-target="#modalFormularioUnico" data-titulo="Poor Mourner For full Chorus of Mixed Voices, with Tenor Solo a capella.pdf">Acceder</button></td>
                </tr>
                <tr>
                    <td data-titulo-real="Soon ah will be done.pdf">Soon ah will be done</td>
                    <td>agosto 21, 2023</td>
                    <td>Negro Spirituals</td>
                    <td><button class="btn btn-danger seleccionar-partitura-unica" data-bs-toggle="modal" data-bs-target="#modalFormularioUnico" data-titulo="Soon ah will be done.pdf">Acceder</button></td>
                </tr>
                <tr>
                    <td data-titulo-real="Swing Low, Sweet Charlot Negro Spiritual.pdf">Swing Low, Sweet Charlot Negro Spiritual</td>
                    <td>agosto 21, 2023</td>
                    <td>Negro Spirituals</td>
                    <td><button class="btn btn-danger seleccionar-partitura-unica" data-bs-toggle="modal" data-bs-target="#modalFormularioUnico" data-titulo="Swing Low, Sweet Charlot Negro Spiritual.pdf">Acceder</button></td>
                </tr>
                <tr>
                    <td data-titulo-real="What Kind of Shoes.pdf">What Kind of Shoes</td>
                    <td>agosto 21, 2023</td>
                    <td>Negro Spirituals</td>
                    <td><button class="btn btn-danger seleccionar-partitura-unica" data-bs-toggle="modal" data-bs-target="#modalFormularioUnico" data-titulo="What Kind of Shoes.pdf">Acceder</button></td>
                </tr>
                <tr>
                    <td data-titulo-real="Negro-Folk-Songs.pdf">Negro-Folk-Songs</td>
                    <td>agosto 21, 2023</td>
                    <td>Negro Spirituals</td>
                    <td><button class="btn btn-danger seleccionar-partitura-unica" data-bs-toggle="modal" data-bs-target="#modalFormularioUnico" data-titulo="Negro-Folk-Songs.pdf">Acceder</button></td>
                </tr>
                <tr>
                    <td data-titulo-real="There is a Balm.pdf">There is a Balm</td>
                    <td>agosto 21, 2023</td>
                    <td>Negro Spirituals</td>
                    <td><button class="btn btn-danger seleccionar-partitura-unica" data-bs-toggle="modal" data-bs-target="#modalFormularioUnico" data-titulo="There is a Balm.pdf">Acceder</button></td>
                </tr>
                
                
                <!-- Agrega más filas según sea necesario -->
            </tbody>
        </table>
    </div>
  </div>

    
    
    
    <!-- Modal con el formulario de descarga -->
     <div class="modal fade" id="modalFormularioUnico" tabindex="-1" aria-labelledby="modalFormularioUnicoLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modalFormularioUnicoLabel">Descargar Partitura</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form id="formularioDescargaUnico" method="post" action="../php/descargar_partitura.php">
              <!-- Nombre Completo -->
               <label for="nombre" class="etiqueta-formulario-unica">Nombre Completo:</label>
               <input type="text" id="nombre" name="nombre" class="campo-formulario-unica form-control" required>
               
               <!-- Correo Electrónico -->
                <label for="email" class="etiqueta-formulario-unica">Correo Electrónico:</label>
                <input type="email" id="email" name="email" class="campo-formulario-unica form-control" required pattern="[a-zA-Z0-9._%+-]+@(inacapmail\.com|gmail\.com|hotmail\.com|otrodominio\.com)">
                <div id="mensaje-error-unico">
                  <?php
                  if (isset($_SESSION['mensaje']) && !empty($_SESSION['mensaje'])) {
                    echo $_SESSION['mensaje'];
                    unset($_SESSION['mensaje']); // Limpia el mensaje después de mostrarlo
                    }
                    ?>
                    </div>
                    <!-- Número de Celular -->
                    <label for="celular" class="etiqueta-formulario-unica">Número de Celular:</label>
                    <input type="tel" id="celular" name="celular" class="campo-formulario-unica form-control" required>
                     
                    <!-- Ocupación -->
                     <label for="ocupacion" class="etiqueta-formulario-unica">Ocupación:</label>
                    <select id="ocupacion" name="ocupacion" class="campo-formulario-unica form-control" required>
                      <option value="director_coro">Director de Coro</option>
                      <option value="profesor_musica">Profesor de Música</option>
                      <option value="integrante_coro">Integrante de Coro</option>
                    </select>
                    
                    <!-- Selección de Partitura -->
                     <label for="partitura" class="etiqueta-formulario-unica">Partitura Seleccionada:</label>
                     <input type="text" id="partituraUnica" name="partitura" class="campo-formulario-unica form-control" readonly required>
                     
                     <!-- Campo oculto para el estado -->
                      <input type="hidden" name="estado" value="pendiente">
                      <input type="submit" value="Descargar Partitura" class="boton-descarga" name="NegroSpirituals" onclick="enviarFormulario()">
              </form>
            </div>
          </div>
        </div>
      </div>




    <footer class="footer">
      <div class="container">
        <div class="row d-flex justify-content-between">
          <div class="col-md-4 mb-3">
            <div class="footer-logo text-center">
              <img src="img/logo.png" alt="Logo" class="img-fluid" />
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="footer-links text-center">
              <a href="index.html">Inicio</a>
              <a href="contacto.html">Contacto</a>
              <a href="#">Términos de Servicio</a>
              <a href="#">Privacidad</a>
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div class="footer-copyright">
              &copy; 2023 Agrupacion Cultural Artistica De Talcahuano | Todos los derechos reservados
            </div>
          </div>
        </div>
      </div>
    </footer>

  <body>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>