<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

    </main>

    <footer class="mm-site-footer">
        <div class="mm-footer-top">
            <div class="mm-footer-col mm-footer-col--about">
                <h3>MAYORGA ABOGADOS</h3>
                <p>
                    Estudio Jurídico y Económico, creado en 2005, integrado actualmente por
                    profesionales especializados (abogados, economistas y contadores),
                    egresados de las mejores universidades de Colombia y el Exterior; con éxitos
                    totalmente verificables, en asesoría y asistencia legal corporativa.
                </p>
            </div>

            <div class="mm-footer-col mm-footer-col--contact">
                <p>Av. El Dorado # 68C-61<br>Oficina 204 - Bogotá D.C. Colombia</p>
                <p>PBX (571) 4322595<br>Celulares: (57) 310 6962968 / 3152448112</p>
                <p>
                    <a href="mailto:mmayorga@mayorga.com.co">mmayorga@mayorga.com.co</a><br>
                    <a href="mailto:info@mayorga.com.co">info@mayorga.com.co</a>
                </p>
            </div>

            <div class="mm-footer-col mm-footer-col--logo">
                <img
                    src="<?php echo esc_url( get_template_directory_uri() . '/img/MM_Logo-416x97.png' ); ?>"
                    alt="Mayorga Abogados"
                >
                <p class="mm-footer-year">Mayorga Abogados © <?php echo date( 'Y' ); ?></p>
            </div>
        </div>

        <div class="mm-footer-bottom">
            <p>© All rights reserved</p>
            <div class="mm-footer-icons">
                <span></span><span></span><span></span><span></span><span></span>
            </div>
        </div>
    </footer>

</div><!-- .mm-site -->

<?php wp_footer(); ?>
</body>
</html>
