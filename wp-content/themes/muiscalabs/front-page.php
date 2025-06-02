<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package muiscalabs
 */

get_header();
?>

  <main id="primary" class="main site-main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <div id="hero-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active">
          <img src="<?php echo get_template_directory_uri() . '/assets/img/hero-carousel/hero-carousel' ?>-1.jpg" alt="">
          <div class="carousel-container">
            <h2>Bienvenido a Muisca Labs</h2>
            <p>Innovamos con tecnología de vanguardia para transformar negocios y potenciar el crecimiento digital. En Muisca Labs combinamos la tradición con el futuro.</p>
            <a href="#about" class="btn-get-started">Conócenos</a>
          </div>
        </div><!-- Fin del Carousel Item -->

        <div class="carousel-item">
          <img src="<?php echo get_template_directory_uri() . '/assets/img/hero-carousel/hero-carousel' ?>-2.jpg" alt="">
          <div class="carousel-container">
            <h2>Unimos cultura y tecnología</h2>
            <p>Desarrollamos soluciones digitales inspiradas en la innovación y el legado cultural, creando software que redefine el presente sin olvidar el pasado.</p>
            <a href="#services" class="btn-get-started">Nuestros Servicios</a>
          </div>
        </div><!-- Fin del Carousel Item -->

        <div class="carousel-item">
          <img src="<?php echo get_template_directory_uri() . '/assets/img/hero-carousel/hero-carousel' ?>-3.jpg" alt="">
          <div class="carousel-container">
            <h2>Impulsamos tu transformación digital</h2>
            <p>Desde inteligencia artificial hasta integraciones en la nube, Muisca Labs ofrece soluciones robustas, escalables y seguras para empresas en crecimiento.</p>
            <a href="#contact" class="btn-get-started">Contáctanos</a>
          </div>
        </div><!-- Fin del Carousel Item -->

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

        <ol class="carousel-indicators"></ol>

      </div>

</section><!-- /Sección Hero -->


    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-5 position-relative" data-aos="fade-up" data-aos-delay="200">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/MuiscaLabs.webp" class' ?>="img-fluid" alt="Muisca Labs">
          </div>

          <div class="col-lg-7 content ps-lg-4" data-aos="fade-up" data-aos-delay="100">
            <h3>Sobre Muisca Labs</h3>
            <p>
              En Muisca Labs desarrollamos soluciones tecnológicas innovadoras que transforman negocios y optimizan procesos. Inspirados en el legado de los Muiscas, combinamos tradición y vanguardia para crear software que marca la diferencia.
            </p>
            <ul>
              <li>
                <i class="bi bi-diagram-3"></i>
                <div>
                  <h5>Desarrollo de Software a Medida</h5>
                  <p>Diseñamos y creamos aplicaciones escalables y eficientes, adaptadas a las necesidades de cada cliente.</p>
                </div>
              </li>
              <li>
                <i class="bi bi-fullscreen-exit"></i>
                <div>
                  <h5>Soluciones Basadas en Datos e IA</h5>
                  <p>Implementamos inteligencia artificial y análisis de datos para mejorar la toma de decisiones empresariales.</p>
                </div>
              </li>
              <li>
                <i class="bi bi-broadcast"></i>
                <div>
                  <h5>Transformación Digital</h5>
                  <p>Ayudamos a empresas a modernizarse con tecnologías de última generación, optimizando su productividad.</p>
                </div>
              </li>
            </ul>
            <p>
              Nuestro compromiso es ofrecer productos tecnológicos de alto impacto, combinando creatividad, precisión y un enfoque centrado en el usuario. 
            </p>
          </div>

        </div>

      </div>

</section><!-- /Sección Sobre Nosotros -->


    <!-- Stats Section -->
    <section id="stats" class="stats section light-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Clientes Satisfechos</strong> <span>Confiando en nuestra visión</span></p>
            </div>
          </div><!-- Fin Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="8" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Proyectos en Desarrollo</strong> <span>Innovando con cada línea de código</span></p>
            </div>
          </div><!-- Fin Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="100" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Horas de Soporte</strong> <span>Acompañando a nuestros clientes</span></p>
            </div>
          </div><!-- Fin Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Colaboradores</strong> <span>Un equipo comprometido con la excelencia</span></p>
            </div>
          </div><!-- Fin Stats Item -->

        </div>

      </div>

</section><!-- /Sección de Estadísticas -->


<!-- Sección de Servicios -->
<section id="services" class="services section">

      <!-- Título de la Sección -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Servicios</h2>
        <div><span>Descubre Nuestros</span> <span class="description-title">Servicios</span></div>
      </div><!-- Fin Título de la Sección -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon flex-shrink-0"><i class="bi bi-code-slash"></i></div>
            <div>
              <h4 class="title">Desarrollo de Software</h4>
              <p class="description">Creamos soluciones a medida con tecnologías innovadoras para optimizar procesos y mejorar la eficiencia de tu negocio.</p>
              <a href="service-details.html" class="readmore stretched-link"><span>Más Información</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- Fin Servicio -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon flex-shrink-0"><i class="bi bi-cloud"></i></div>
            <div>
              <h4 class="title">Soluciones en la Nube</h4>
              <p class="description">Implementamos y gestionamos infraestructura en la nube para garantizar escalabilidad, seguridad y rendimiento óptimo.</p>
              <a href="service-details.html" class="readmore stretched-link"><span>Más Información</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- Fin Servicio -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="icon flex-shrink-0"><i class="bi bi-shield-lock"></i></div>
            <div>
              <h4 class="title">Ciberseguridad</h4>
              <p class="description">Protegemos tu negocio con estrategias avanzadas de seguridad, auditoría de vulnerabilidades y prevención de ataques.</p>
              <a href="service-details.html" class="readmore stretched-link"><span>Más Información</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- Fin Servicio -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="icon flex-shrink-0"><i class="bi bi-graph-up"></i></div>
            <div>
              <h4 class="title">Análisis de Datos</h4>
              <p class="description">Transformamos datos en información valiosa para tomar decisiones estratégicas basadas en inteligencia artificial y big data.</p>
              <a href="service-details.html" class="readmore stretched-link"><span>Más Información</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- Fin Servicio -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
            <div class="icon flex-shrink-0"><i class="bi bi-shop"></i></div>
            <div>
              <h4 class="title">Desarrollo Web & eCommerce</h4>
              <p class="description">Diseñamos y desarrollamos plataformas web modernas, optimizadas para ofrecer la mejor experiencia al usuario.</p>
              <a href="service-details.html" class="readmore stretched-link"><span>Más Información</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- Fin Servicio -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
            <div class="icon flex-shrink-0"><i class="bi bi-gear-wide-connected"></i></div>
            <div>
              <h4 class="title">Automatización de Procesos</h4>
              <p class="description">Optimizamos tareas repetitivas con soluciones de automatización basadas en inteligencia artificial y robótica.</p>
              <a href="service-details.html" class="readmore stretched-link"><span>Más Información</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- Fin Servicio -->

        </div>

      </div>

</section><!-- /Sección de Servicios -->


    <!-- Call To Action Section -->
<section id="call-to-action" class="call-to-action section dark-background">

      <img src="<?php echo get_template_directory_uri() . '/assets/img/cta-bg.jpg"' ?> alt="">

      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-10">
            <div class="text-center">
              <h3>Transforma tu negocio con tecnología</h3>
              <p>En Muisca Labs, impulsamos tu empresa con soluciones digitales innovadoras. Desde el desarrollo de software hasta la inteligencia artificial, estamos listos para llevar tu proyecto al siguiente nivel.</p>
              <a class="cta-btn" href="#contact">Contáctanos</a>
            </div>
          </div>
        </div>
      </div>

</section><!-- /Sección Call To Action -->


    <!-- Portfolio Section -->


    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Título de la Sección -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonios</h2>
        <div><span>Lo que dicen</span> <span class="description-title">Nuestros Clientes</span></div>
      </div><!-- Fin del título de la sección -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="testimonial-item">
              <!-- <img src="php echo get_template_directory_uri() . '/assets/img/testimonials/testimonial-1.jpg' ?>" class="testimonial-img" alt=""> -->
              <h3>Juan José Rodriguez</h3>
              <h4>Jefe de ventas</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Muisca Labs ha revolucionado la forma en que operamos. Su enfoque innovador y soluciones digitales nos han permitido mejorar la eficiencia y escalar nuestro negocio.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- Fin Testimonio -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="testimonial-item">
              <!-- <img src="php echo get_template_directory_uri() . '/assets/img/testimonials/testimonial-2.jpg' ?>" class="testimonial-img" alt=""> -->
              <h3>María Rodríguez</h3>
              <h4>Dueña de Negocio</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Gracias a Muisca Labs, mi startup ahora cuenta con una plataforma digital robusta y escalable. Su equipo entendió nuestras necesidades desde el día uno.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- Fin Testimonio -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="testimonial-item">
              <!-- <img src="php echo get_template_directory_uri() . '/assets/img/testimonials/testimonial-3.jpg' ?>" class="testimonial-img" alt=""> -->
              <h3>Carlos López</h3>
              <h4>Director de Operaciones</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>El desarrollo de software personalizado que nos ofrecieron fue clave para optimizar nuestros procesos internos. Un equipo altamente profesional y comprometido.</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- Fin Testimonio -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="testimonial-item">
              <!-- <img src="php echo get_template_directory_uri() . '/assets/img/testimonials/testimonial-4.jpg' ?>" class="testimonial-img" alt=""> -->
              <h3>Lucía Fernández</h3>
              <h4> Dropshipper</h4>
              <div class="stars">
                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
              <p>
                <i class="bi bi-quote quote-icon-left"></i>
                <span>Implementaron una solución de eccomerce que incremento las ventas usando nuestra tienda online. ¡Increíble resultado!</span>
                <i class="bi bi-quote quote-icon-right"></i>
              </p>
            </div>
          </div><!-- Fin Testimonio -->

        </div>

      </div>

</section><!-- /Sección Testimonios -->


    <!-- Contact Section -->
    <!-- Sección de Contacto -->
<section id="contact" class="contact section">

<!-- Título de la Sección -->
<div class="container section-title" data-aos="fade-up">
  <h2>Contacto</h2>
  <div><span>¿Necesitas ayuda?</span> <span class="description-title">Hablemos</span></div>
</div><!-- Fin Título de la Sección -->

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row gy-4">

    <!-- Información de Contacto -->
    <div class="col-lg-6">

      <div class="row gy-4">

        <div class="col-md-6">
          <div class="info-item" data-aos="fade" data-aos-delay="300">
            <i class="bi bi-telephone"></i>
            <h3>Llámanos</h3>
            <p>+57 323 3068416</p>
          </div>
        </div><!-- Fin Info Item -->

        <div class="col-md-6">
          <div class="info-item" data-aos="fade" data-aos-delay="400">
            <i class="bi bi-envelope"></i>
            <h3>Escríbenos</h3>
            <p>andres.yanquen6@gmail.com</p>
          </div>
        </div><!-- Fin Info Item -->

        <div class="col-md-6">
          <div class="info-item" data-aos="fade" data-aos-delay="500">
            <i class="bi bi-clock"></i>
            <h3>Horario de Atención</h3>
            <p>Lunes - Viernes</p>
            <p>8:00 AM - 5:00 PM</p>
          </div>
        </div><!-- Fin Info Item -->

      </div>

    </div><!-- Fin Información de Contacto -->

    <!-- Formulario de Contacto -->
    <div class="col-lg-6">
      <form action="<?php echo get_template_directory_uri() . '/inc/email-handler.php'  ?>" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
        <div class="row gy-4">

          <div class="col-md-6">
            <input type="text" name="name" class="form-control" placeholder="Tu Nombre" required="">
          </div>

          <div class="col-md-6">
            <input type="email" class="form-control" name="email" placeholder="Tu Correo Electrónico" required="">
          </div>

          <div class="col-12">
            <input type="text" class="form-control" name="subject" placeholder="Asunto" required="">
          </div>

          <div class="col-12">
            <textarea class="form-control" name="message" rows="6" placeholder="Escribe tu mensaje aquí..." required=""></textarea>
          </div>

          <div class="col-12 text-center">
            <div class="loading">Enviando...</div>
            <div class="error-message"></div>
            <div class="sent-message">Tu mensaje ha sido enviado. ¡Gracias por contactarnos!</div>

            <button type="submit">Enviar Mensaje</button>
          </div>

        </div>
      </form>
    </div><!-- Fin Formulario de Contacto -->

  </div>

</div>

</section><!-- /Sección de Contacto -->


  </main>


  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>




<?php
get_footer();
