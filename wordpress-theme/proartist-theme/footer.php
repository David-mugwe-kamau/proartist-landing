<footer class="site-footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-section">
                <h3>ProArtist Africa</h3>
                <p>Building Africa's next big portfolio of hair & beauty investment opportunities.</p>
            </div>
            <div class="footer-section">
                <h4>Quick Links</h4>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'menu_class' => 'footer-menu',
                    'container' => false,
                ));
                ?>
            </div>
            <div class="footer-section">
                <h4>Contact</h4>
                <p>Email: <a href="mailto:info@proartistafrica.africa">info@proartistafrica.africa</a></p>
                <p>Phone: <a href="tel:+254740726132">+254 740 726 132</a></p>
            </div>
            <div class="footer-section">
                <h4>Follow Us</h4>
                <div class="social-links">
                    <a href="https://wa.me/254740726132" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp">WhatsApp</a>
                    <a href="https://instagram.com/proartistafrica" target="_blank" rel="noopener noreferrer" aria-label="Instagram">Instagram</a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> ProArtist Africa. All rights reserved.</p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>

