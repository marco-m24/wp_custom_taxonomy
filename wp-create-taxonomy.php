add_action( 'init', 'mrc_create_genere_hierarchical_taxonomy', 0 );
 
//creiamo la custom taxonomy e la chiamiamo genere per i nostri libri
 
function mrc_create_genere_hierarchical_taxonomy() {
 
// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI
 
  $labels = array(
    'name' => _x( 'Genere', 'taxonomy general name' ),
    'singular_name' => _x( 'Genere', 'taxonomy singular name' ),
    'search_items' =>  __( 'Cerca Genere' ),
    'all_items' => __( 'Tutti i Generi' ),
    'parent_item' => __( 'Genere Genitore' ),
    'parent_item_colon' => __( 'Genere Genitore:' ),
    'edit_item' => __( 'Edita Genere' ), 
    'update_item' => __( 'Aggiorna Genere' ),
    'add_new_item' => __( 'Aggiungi nuovo Genere' ),
    'new_item_name' => __( 'Nuovo Genere Nome' ),
    'menu_name' => __( 'Generi' ),
  );    
 
// Now register the taxonomy
 
  register_taxonomy('genere',array('libri'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'genere' ),
  ));
 
}
