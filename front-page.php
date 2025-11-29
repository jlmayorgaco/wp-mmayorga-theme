<?php
/**
 * Front Page – Landing principal
 */
get_header();
?>

<section class="mm-section mm-section--hero mm-section--parallax" data-parallax="y" data-parallax-speed="0.2">
    <div class="mm-hero-media">
        <!-- Imagen mientras carga el video -->
        <img
            class="mm-hero-poster"
            src="<?php echo esc_url( get_template_directory_uri() . '/img/home-cover-bg-video-hd.jpg' ); ?>"
            alt="Mayorga Abogados"
            loading="lazy"
        >

        <!-- Video de fondo -->
        <video
            class="mm-hero-video"
            data-mm-hero-video
            muted
            loop
            playsinline
        >
            <source src="<?php echo esc_url( get_template_directory_uri() . '/video/home-cover-bg-video-hd-1.mp4' ); ?>" type="video/mp4">
        </video>
    </div>

    <div class="mm-hero-overlay"></div>

    <div class="mm-hero-content">
        <h1>Mejores servicios… Estamos haciendo ajustes en nuestra web</h1>
    </div>
</section>


<section class="mm-section mm-section--parallax mm-section--into">
    <div class="mm-section-inner2">
        <div class="mm-section-col mm-section-col--text">
            <h2>¿QUIÉNES SOMOS?</h2>
            <p>
                <strong>MAYORGA ABOGADOS</strong>, Estudio Jurídico y Financiero, creado en 2005 e integrado actualmente
                por profesionales especializados (abogados, economistas y contadores), egresados de las mejores
                universidades de Colombia y el Exterior; con éxitos totalmente verificables, en asesoría y asistencia
                legal corporativa (jurídica y financiera).
            </p>

            <div class="mm-info-logo">
                <img
                    src="<?php echo esc_url( get_template_directory_uri() . '/img/logo-mayorga.svg' ); ?>"
                    alt="Mayorga Abogados"
                    loading="lazy"
                >
            </div>
        </div>

        <div class="mm-section-col mm-section-col--image">
            <!-- Imagen con efecto parallax vertical -->
            <div class="mm-parallax-image"
                 data-parallax="y"
                 data-parallax-speed="0.35"
                 style="background-image: url('<?php echo esc_url( get_template_directory_uri() . '/img/home-about-bg-1005x1024.jpg' ); ?>');">
            </div>
        </div>
    </div>
</section>

<section class="mm-section mm-section--map">
    <div class="mm-map-wrapper">
        <iframe
            class="mm-map-iframe"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.6492514059596!2d-74.10873482407276!3d4.6564841953183524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9b974b86ff93%3A0xe1aaecea9c3fd10!2sTorre%20central%20Davivienda%2C%20Av.%20El%20Dorado%20%2368c%20-%2061%2C%20Bogot%C3%A1!5e0!3m2!1ses!2sco!4v1764376274199!5m2!1ses!2sco"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</section>

<?php
get_footer();
