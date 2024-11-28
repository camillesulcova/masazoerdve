<?php
function masazoerdve() {
    // Enqueue Styles
    wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css");
    wp_enqueue_style("theme-style", get_template_directory_uri() . "/style.css");
    wp_enqueue_style("icons", "https://use.fontawesome.com/releases/v5.15.4/css/all.css");
    wp_enqueue_style("google-fonts", "https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Bodoni+Moda:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&family=Fraunces:ital,opsz,wght@0,9..144,100..900;1,9..144,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

    // Enqueue Scripts
    wp_enqueue_script("jquery", "https://code.jquery.com/jquery-3.6.0.min.js", array(), null, true);
    wp_enqueue_script("popper", "https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js", array(), null, true);
    wp_enqueue_script("modal", "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js", array(), null, true);
    wp_enqueue_script("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js", array("jquery", "popper"), null, true);

    // Enqueue AOS Library
    wp_enqueue_style("aos-css", "https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css");
    wp_enqueue_script("aos-js", "https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js", array(), null, true);

    // Initialize AOS
    wp_add_inline_script("aos-js", "AOS.init();");
}
add_action("wp_enqueue_scripts", "masazoerdve");

 function enqueue_aos_scripts() {
    wp_enqueue_style('aos-css', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css', array(), '2.3.4');
    wp_enqueue_script('aos-js', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js', array('jquery'), '2.3.4', true);
}
add_action('wp_enqueue_scripts', 'enqueue_aos_scripts'); 


function masazoerdve_remove_gutenberg() {
    remove_post_type_support("post", "editor");
    remove_post_type_support("page", "editor");
}
add_action("init", "masazoerdve_remove_gutenberg");