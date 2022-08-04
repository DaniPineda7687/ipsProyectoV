<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;500;600;800&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="/styles/main.css">
    <title>Grupo preferencial - Sanar</title>
</head>
<body>
    <header>
        <div class="logo-container">
            <img src="https://gruposanar.com.co/imagenes/logo5.png" alt="logo-ips-grupo-sanar" srcset="">
        </div>
        <div class="menu-content">
            <a href="#" class="menu__toggle">
                <i class="bi bi-list button__action"></i>
            </a>
            <nav class="nav-container">
                <ul>
                    <li class="nav__item"><a href="" class="nav__link">Inicio</a></li>
                    <li class="nav__item"><a href="#section-trabajo" class="nav__link">Nuestro trabajo</a></li>
                    <li class="nav__item"><a href="" class="nav__link">Características</a></li>
                    <li class="nav__item"><a href="" class="nav__link">Servicios</a></li>
                    <li class="nav__item"><a href="" class="nav__link">Contactos</a></li>
                    <li class="nav__item"><a href="" class="nav__link">Política de privacidad</a></li>
                    <li class="nav__item"><a href="" class="nav__link">Empresas</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section class="home">
            <section class="carousel-home">
                    <div id="carouselHomeIndicators" class="carousel slide" data-ride="carousel"> 
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselHomeIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselHomeIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselHomeIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                          </div>
                        <div class="carousel-inner">
                          <div class="carousel-item active carousel-image carousel-home__1">
                            
                          </div>
                          <div class="carousel-item carousel-image carousel-home__2">
                            
                          </div>
                          <div class="carousel-item carousel-image carousel-home__3">
                            
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselHomeIndicators" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselHomeIndicators" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
            </section>
            <section class="informacion-general">
                <div class="cards-container">
                    <article class="card">
                        <div class="header-card">
                            <div class="icon-card">
                                <i class="bi bi-people-fill icon"></i>
                            </div>
                            <div class="title-card">
                                <p class="text-card">¿Quienes somos?</p>
                            </div>
                        </div>
                        <div class="information-card">
                            <p class="text-card">
                                Somos una <strong>Ips</strong> comprometida con la vida, salud y bienestar de nuestros usuarios, brindando un servicio innovador, seguro e integral, generando confianza mediante un talento humano competente, comprometido y motivado por servir a la gente.
                            </p>
                        </div>
                        <div class="footer-card">
                            <a href="" class="text-card">SABER MÁS</a>
                        </div>
                    </article>
                    <article class="card">
                        <div class="header-card">
                            <div class="icon-card">
                                <i class="bi bi-envelope"></i>
                            </div>
                            <div class="title-card">
                                <p>Puntos de contacto</p>
                            </div>
                        </div>
                        <div class="information-card">
                            <p><strong>Gerencia</strong></p>
                            <p>gerencia@gruposanar.com.co</p>
                            <p><strong>Administración</strong></p>
                            <p>administrativo@gruposanar.com.co</p>
                            <p><strong>Admisión:</strong></p>
                            <p>atencionalcliente@gruposanar.com.co</p>
                        </div>
                        <div class="footer-card">
                            <a href="">SABER MÁS</a>
                        </div>
                    </article>
                    <article class="card">
                        <div class="header-card">
                            <div class="icon-card">
                                <i class="bi bi-clock"></i>
                            </div>
                            <div class="title-card">
                                <p>Horarios de atención</p>
                            </div>
                        </div>
                        <div class="information-card">
                            <p><strong>Lunes - viernes</strong></p>
                            <p>7:00am a 12:00am</p>
                            <p>2:00pm a 5:00pm</p>
                            <p><strong>Sábado</strong></p>
                            <p>7:00am a 12:00am</p>
                        </div>
                        <div class="footer-card">
                            <a href="">SABER MÁS</a>
                        </div>
                    </article>
                </div>
                <div class="informacion-nosotros">
                    <h2 class="title-section">Un poco sobre nosotros</h2>
                    <div class="video-nosotros">
                        <video src="/resources/videos/video.mp4" controls></video>
                    </div>
                </div>
            </section>
        </section>
        <section class="nuestro-trabajo" id="section-trabajo">
            <h2 class="title-section">Nuestro trabajo</h2>
            <p>Estamos comprometidos en ofrecer la mejor atención en las siguientes Áreas de la Salud</p>
            <div>
                <div id="carouselTrabajoIndicators" class="carousel slide carousel-trabajo" data-ride="carousel"> 
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselTrabajoIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselTrabajoIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselTrabajoIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                      </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active carousel-image carousel__1">
                        
                      </div>
                      <div class="carousel-item carousel-image carousel__2">
                        
                      </div>
                      <div class="carousel-item carousel-image carousel__3">
                        
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselTrabajoIndicators" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselTrabajoIndicators" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
        </section>
        <section class="caracteristicas">
            <h2 class="title-section">Características</h2>
            <p class="section-description">Nuestra experiencia profesional está orientada a lograr una Atención óptima al recurso más valioso, Usted.</p>
            
            <section class="cards-caracteristicas">
                <article class="card-caracteristica">
                    <div class="content-card-caracteristica">
                        <p>“Nuestra responsabilidad da un Valor agregado a la hora de Elegirnos como su Ips de confianza”</p>
                    </div>
                    <div class="footer-card-caracteristica">
                        <i class="bi bi-hand-thumbs-up-fill"></i>
                        <p>La Responsabilidad: <strong>Nos caracteriza</strong></p>
                    </div>
                </article>
                <article class="card-caracteristica">
                    <div class="content-card-caracteristica">
                        <p>“Nuestros precios son los mas competitivos del mercado sumados a una alta calidad en Atención y servicios médicos ”</p>
                    </div>
                    <div class="footer-card-caracteristica">
                        <i class="bi bi-currency-dollar"></i>
                        <p>Contamos con:<strong>Los Precios mas accesibles</strong></p>
                    </div>
                </article>
                <article class="card-caracteristica">
                    <div class="content-card-caracteristica">
                        <p>“Contamos con un equipo multidisciplinario con el principal objetivo de atenderle las 24 horas del día los 7 días de la semana ”</p>
                    </div>
                    <div class="footer-card-caracteristica">
                        <i class="bi bi-people-fill"></i>
                        <p>Somos un:<strong>Equipo Multidisciplinario</strong></p>
                    </div>
                </article>
            </section>
        </section>
        <section class="servicios">
            <h2 class="title-section">Nuestros servicios empresariales</h2>
            <p>Con el Plan Área Protegida, cuentas con servicios que protegen a todos los empleados, proveedores, clientes y visitantes de tu empresa.</p>
            <p>Tu empresa contará con:</p>

            <div class="cards-service-container">
                <article class="card-service">
                    <div class="header-service-card">
                        <div class="icon-service-card">
                            <img src="/resources/icons/ambulance.png" alt="">
                        </div>
                    </div>
                    <div class="information-service-card">
                        <div class="title-service-card">
                            <h3 class="text-card">Unidades Móviles</h3>
                        </div>
                        <p class="text-card">
                            Las unidades móviles pueden estar ubicadas en diferentes puntos del municipio y nuestro call center nos permite ubicar la más cercana para acudir en el menor tiempo posible al sitio de la atención.
                        </p>
                    </div>
                </article>
                <article class="card-service">
                    <div class="header-service-card">
                        <div class="icon-service-card">
                            <img src="/resources/icons/medico.png" alt="">
                        </div>
                    </div>
                    <div class="information-service-card">
                        <div class="title-service-card">
                            <h3 class="text-card">Valoración & Resolución Inmediata</h3>
                        </div>
                        <p class="text-card">
                            Con la valoración realizada por nuestro equipo médico, se inician las acciones para estabilizar al paciente. La mayor parte de los casos son resueltos en el lugar de la emergencia.
                        </p>
                    </div>
                </article>
                <article class="card-service">
                    <div class="header-service-card">
                        <div class="icon-service-card">
                            <img src="/resources/icons/telphone.png" alt="">
                        </div>
                    </div>
                    <div class="information-service-card">
                        <div class="title-service-card">
                            <h3 class="text-card">Comunicación Rápida & Oportuna</h3>
                        </div>
                        <p class="text-card">
                            La empresa afiliada se comunica a la línea de emergencias
                        </p>
                    </div>
                </article>
                <article class="card-service">
                    <div class="header-service-card">
                        <div class="icon-service-card">
                            <img src="/resources/icons/more.png" alt="">
                        </div>
                    </div>
                    <div class="information-service-card">
                        <div class="title-service-card">
                            <h3 class="text-card">Además Recibirás Más beneficios:</h3>
                        </div>
                        <p class="text-card">
                            -Recibirás atención médica oportuna, sin límite de usos y sin costo adicional por atención.
                        </p>
                        <p class="text-card">
                            -Unidades móviles tripuladas por para-médicos, con experiencia en atención de emergencias.
                        </p>
                        <p class="text-card">
                            -Exámenes de emergencia con equipos especializados.
                        </p>
                    </div>
                </article>
            </div>
        </section>
        <section class="nosotros">
            <h2 class="title-section">Nosotros</h2>
            <p>Somos Un Equipo de Profesionales Altamente Calificados, comprometidos en brindarle Soluciones en el Área de Su Salud
            </p>
            <div class="equipo-container">
                <article class="miembro-card">
                    <div class="image-profile">
                        <img src="https://definicionde.es/wp-content/uploads/2019/04/definicion-de-persona-min.jpg" alt="miembro-1">
                    </div>
                    <div class="content-card-member">
                        <p class="cargo"><strong>Gerente</strong></p>
                        <p class="nombre">David Gonzalo Duarte</p>
                        <p class="descripcion">Profesional responsable de la dirección y representación legal, judicial y extrajudicial que establece las políticas generales de nuestra empresa.</p>
                        <div class="footer-card-member">
                            <a href="#"><i class="bi bi-whatsapp wpp"></i></a>
                            <a href="#"><i class="bi bi-envelope mail"></i></a>
                            <a href="#"><i class="bi bi-facebook face"></i></a>
                        </div>
                    </div>
                </article>
                <article class="miembro-card">
                    <div class="image-profile">
                        <img src="https://definicionde.es/wp-content/uploads/2019/04/definicion-de-persona-min.jpg" alt="miembro-1">
                    </div>
                    <div class="content-card-member">
                        <p class="cargo"><strong>Coordinadora Comercial</strong></p>
                        <p class="nombre">Diana Patricia Peña</p>
                        <p class="descripcion">Profesional encargada de tomar las decisiones adecuadas que llevan a nuestra empresa a sostenerse financieramente, además administra nuestro talento humano.</p>
                        <div class="footer-card-member">
                            <a href="#"><i class="bi bi-whatsapp wpp"></i></a>
                            <a href="#"><i class="bi bi-envelope mail"></i></a>
                            <a href="#"><i class="bi bi-facebook face"></i></a>
                        </div>
                    </div>
                </article>
                <article class="miembro-card">
                    <div class="image-profile">
                        <img src="https://definicionde.es/wp-content/uploads/2019/04/definicion-de-persona-min.jpg" alt="miembro-1">
                    </div>
                    <div class="content-card-member">
                        <p class="cargo"><strong>Admisión</strong></p>
                        <p class="nombre">Yesica Triana Acosta</p>
                        <p class="descripcion">Profesional encargado de establecer y regular la organización interna de nuestra empresa, con el fin de seleccionar personal de altura y así brindar una atención de excelencia para nuestros clientes.</p>
                        <div class="footer-card-member">
                            <a href="#"><i class="bi bi-whatsapp wpp"></i></a>
                            <a href="#"><i class="bi bi-envelope mail"></i></a>
                            <a href="#"><i class="bi bi-facebook face"></i></a>
                        </div>
                    </div>
                </article>
            </div>
        </section>
        <section class="parallax-container">
            <p>SIÉNTASE PROTEGIDO LAS 24 HORAS DEL DÍA, LOS 7 DÍAS DE LA SEMANA</p>
            <img src="/resources/icons/heart.png" alt="">
        </section>
    </main>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="/scripts/main.js"></script>
</body>
</html>
