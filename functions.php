<?php

function madda_theme_support(){
	
	
	add_theme_support(
		'custom-background',
		array(
			'default-color' => 'FFFFFF',
		)
	);
		
	add_theme_support( 'post-thumbnails' );
	
	set_post_thumbnail_size( 1200, 9999 );
	
		add_theme_support(
		'custom-logo',
		array(
			'height'      => 60,
			'width'       => 60,
		)
	);
	
	add_theme_support( 'title-tag' );
	
}

add_action( 'after_setup_theme', 'madda_theme_support' );

//funzione per richiamare il file di style
function madda_theme_name_scripts() { 
wp_enqueue_style( 'madda', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'madda_theme_name_scripts');

//MENU
function madda_menu() {
	
	$locations = array(
	
	'primary'=>__('Menu Header', 'madda'),
	
	);
	register_nav_menus($locations);
}
add_action('init', 'madda_menu');

function madda_footer_menu() {
	
	$locations = array(
	
	'footer'=>__('Menu Footer', 'madda'),
	
	);
	register_nav_menus($locations);
}
add_action('init', 'madda_footer_menu');

//areapersonale

function areapersonale($wp_customize){
	//PANNELLO
	$wp_customize -> add_panel(
	'id_opzioni_area_personale', array(
	'title' =>__('Opzioni Area Personale', 'madda'),
	'priority' => 40
	));
	
	$wp_customize -> add_section('id_section_personale',
    array(
	'panel' => 'id_opzioni_area_personale',
	'title' => __('Opzioni Area Personale', 'madda'),
	'priority' => 10
	));	
    $wp_customize -> add_setting('id_setting_foto_personale',
		array(
		'default' => '',
		'transport' => 'refresh'
		));
	$wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize, 
		'id_setting_foto_personale', array(
		'label' => 'Inserisci Immagine',
		'description' => 'Descrizione',
        'section' => 'id_section_personale',
        'button_labels' => array(
		'select' => 'Seleziona Immagine',
		'change' => 'Cambia Immagine',
		'remove' => 'Elimina Immagine',
		'default' => 'Defult',
		'placeholder' => 'Nessuna Immagine Selezionata',
		'frame_title' => 'Seleziona Immagine',
		'frame_button'=> 'Scegli Immagine'
		),		
		)));
	$wp_customize -> add_setting('id_setting_nome',
	array(
	'default' => '',
	'transport' => 'refresh'
	));
	
	$wp_customize -> add_control('id_setting_nome',
	array(
	'label' => 'Nome',
	'description' => 'Descrizione',
	'section' => 'id_section_personale',
	'type' => 'text', 
	'priority' => 10
	));
	
	$wp_customize -> add_setting('id_setting_indirizzo',
	array(
	'default' => '',
	'transport' => 'refresh'
	));
	
	$wp_customize -> add_control('id_setting_indirizzo',
	array(
	'label' => 'Indirizzo',
	'description' => 'Descrizione',
	'section' => 'id_section_personale',
	'type' => 'text', 
	'priority' => 20
	));
	
	$wp_customize -> add_setting('id_setting_città',
	array(
	'default' => '',
	'transport' => 'refresh'
	));
	
	$wp_customize -> add_control('id_setting_città',
	array(
	'label' => 'Città',
	'description' => 'Descrizione',
	'section' => 'id_section_personale',
	'type' => 'text', 
	'priority' => 20
	));
	
	$wp_customize -> add_setting('id_setting_cellulare',
	array(
	'default' => '',
	'transport' => 'refresh'
	));
	
	$wp_customize -> add_control('id_setting_cellulare',
	array(
	'label' => 'Cellulare',
	'description' => 'Descrizione',
	'section' => 'id_section_personale',
	'type' => 'text', 
	'priority' => 30
	));
	
	$wp_customize -> add_setting('id_setting_email',
	array(
	'default' => '',
	'transport' => 'refresh'
	));
	
	$wp_customize -> add_control('id_setting_email',
	array(
	'label' => 'Email',
	'description' => 'Descrizione',
	'section' => 'id_section_personale',
	'type' => 'text', 
	'priority' => 40
	));
	
	$wp_customize -> add_setting('id_setting_descrizione',
	array(
	'default' => '',
	'transport' => 'refresh'
	));
	
	$wp_customize -> add_control('id_setting_descrizione',
	array(
	'label' => 'Breve descrizione',
	'description' => 'Descrizione',
	'section' => 'id_section_personale',
	'type' => 'textarea', 
	'priority' => 50
	));

	$wp_customize -> add_setting('id_setting_citazione',
	array(
	'default' => '',
	'transport' => 'refresh'
	));
	
	$wp_customize -> add_control('id_setting_citazione',
	array(
	'label' => 'Citazione',
	'description' => 'Descrizione',
	'section' => 'id_section_personale',
	'type' => 'textarea', 
	'priority' => 60
	));

	$wp_customize -> add_setting('id_setting_descr_approf',
	array(
	'default' => '',
	'transport' => 'refresh'
	));
	
	$wp_customize -> add_control('id_setting_descr_approf',
	array(
	'label' => 'Descrizione Chi-sono',
	'description' => 'Descrizione',
	'section' => 'id_section_personale',
	'type' => 'textarea', 
	'priority' => 70
	));
	
//SEZIONE COLORE COLONNA
$wp_customize -> add_section('id_sezione_color_panel',
    array(
	'panel' => 'id_opzioni_area_personale',
	'title' => __('Colore colonna', 'madda'),
	'priority' => 30
	));	
$wp_customize -> add_setting('id_setting_color_panel',
array(
'default'=>'#000000',
'transport'=>'refresh'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'id_setting_color_panel',
array(
'label'=>'Colore per il pannello',
'description'=>'Descrizione',
'section'=>'id_sezione_color_panel',
'position'=>10
)));
	
	//SEZIONE Icone social
    $wp_customize -> add_section('id_sezione_icone',
    array(
	'panel' => 'id_opzioni_area_personale',
	'title' => __('Icone Social', 'madda'),
	'priority' => 20
	));	
    //LINKEDIN
	$wp_customize -> add_setting('id_setting_linkedin',
	array(
	'default' => '',
	'transport' => 'refresh'
	));
	
	$wp_customize -> add_control('linkedin',
	array(
	'label' => 'Linkedin',
	'description' => 'Inserisci link',
	'section' => 'id_sezione_icone',
	'settings' => 'id_setting_linkedin',
	'type' => 'url', 
	'priority' => 10
	));
   
    //INSTAGRAM
	$wp_customize -> add_setting('id_setting_instagram',
	array(
	'default' => '',
	'transport' => 'refresh'
	));
	
	$wp_customize -> add_control('instagram',
	array(
	'label' => 'Instagram',
	'description' => 'Inserisci link',
	'section' => 'id_sezione_icone',
	'settings' => 'id_setting_instagram',
	'type' => 'url', 
	'priority' => 20
	));
	
	//FACEBOOK
	$wp_customize -> add_setting('id_setting_facebook',
	array(
	'default' => '',
	'transport' => 'refresh'
	));
	
	$wp_customize -> add_control('facebook',
	array(
	'label' => 'Facebook',
	'description' => 'Inserisci link',
	'section' => 'id_sezione_icone',
	'settings' => 'id_setting_facebook',
	'type' => 'url', 
	'priority' => 30
	));
	
    //YOUTUBE
	$wp_customize -> add_setting('id_setting_youtube',
	array(
	'default' => '',
	'transport' => 'refresh'
	));
	
	$wp_customize -> add_control('youtube',
	array(
	'label' => 'Youtube',
	'description' => 'Inserisci link',
	'section' => 'id_sezione_icone',
	'settings' => 'id_setting_youtube',
	'type' => 'url',
	'priority' => 40
	));
		
}
add_action('customize_register', 'areapersonale');


function madda_widgets(){

    register_sidebar(array(
    'name'=>'Footer 1',
    'id'=>'footer_1',
    'before_widget'=>'<div>',
    'after_widget'=>'</div>',
    'before_title'=>'<h2>',
    'after_title'=>'</h2>',  ));
    register_sidebar(array(
    'name'=>'Footer 2',
    'id'=>'footer_2',
    'before_widget'=>'<div>',
    'after_widget'=>'</div>',
    'before_title'=>'<h2>',
    'after_title'=>'</h2>',  ));
    register_sidebar(array(
    'name'=>'Footer 3',
    'id'=>'footer_3',
    'before_widget'=>'<div>',
    'after_widget'=>'</div>',
    'before_title'=>'<h2>',
    'after_title'=>'</h2>',  ));
    }
    add_action('widgets_init', 'madda_widgets');


function lavori($wp_customize){
		//PANNELLO
		$wp_customize -> add_panel(
		'id_opzioni_lavori', array(
		'title' =>__('Opzioni tipologie di lavoro', 'madda'),
		'priority' => 40
		));
		$lavori = array('Personali','Epoca','Commissioni');
		foreach ($lavori as $chiave => $valore){
		$wp_customize -> add_section("id_section_lavori_$valore",
		array(
		'panel' => 'id_opzioni_lavori',
		'title' => __($valore, 'madda'),
		'priority' => 10
		));	
		$wp_customize -> add_setting("id_setting_lavori_$valore",
			array(
			'default' => '',
			'transport' => 'refresh'
			));
		$wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize, 
			"id_setting_lavori_$valore", array(
			'label' => 'Inserisci Immagine',
			'description' => 'Descrizione',
			'section' => "id_section_lavori_$valore",
			'button_labels' => array(
			'select' => 'Seleziona Immagine',
			'change' => 'Cambia Immagine',
			'remove' => 'Elimina Immagine',
			'default' => 'Defult',
			'placeholder' => 'Nessuna Immagine Selezionata',
			'frame_title' => 'Seleziona Immagine',
			'frame_button'=> 'Scegli Immagine'
			),		
			)));
			
		$wp_customize -> add_setting("id_setting_nome_lavori_$valore",
		array(
		'default' => '',
		'transport' => 'refresh'
		));
		
		$wp_customize -> add_control("id_setting_nome_lavori_$valore",
		array(
		'label' => 'Titolo',
		'description' => 'Descrizione',
		'section' => "id_section_lavori_$valore",
		'type' => 'text', 
		'priority' => 10
		));
		
		$wp_customize -> add_setting("id_setting_descrizione_lavori_$valore",
		array(
		'default' => '',
		'transport' => 'refresh'
		));
		
		$wp_customize -> add_control("id_setting_descrizione_lavori_$valore",
		array(
		'label' => 'Descrizione',
		'description' => 'Descrizione',
		'section' => "id_section_lavori_$valore",
		'type' => 'textarea', 
		'priority' => 10
		));
		
			$wp_customize -> add_setting("id_setting_ecommerce_lavori_$valore",
		array(
		'default' => '',
		'transport' => 'refresh'
		));
		
		$wp_customize -> add_control("id_setting_ecommerce_lavori_$valore",
		array(
		'label' => 'E-commerce',
		'description' => 'Inserisci link',
		'section' => "id_section_lavori_$valore",
		'type' => 'url', 
		'priority' => 10
		));
		
	
	}
	}
	add_action('customize_register', 'lavori');   

	function collage_personali($wp_customize){
		//PANNELLO
		$wp_customize -> add_panel(
		'id_opzioni_collage_personali', array(
		'title' =>__('Collage_personali', 'madda'),
		'priority' => 50
		));
		$wp_customize -> add_section("id_section_collage_personali_testo",
		array(
			'panel' => 'id_opzioni_collage_personali',
			'title' => __('Testo', 'madda'),
			'priority' => 10
			));	
		$wp_customize -> add_setting("id_setting_collage_personali_titolo",
		array(
		'default' => '',
		'transport' => 'refresh'
		));
			
		$wp_customize -> add_control("id_setting_collage_personali_titolo",
		array(
		'label' => 'Titolo',
		'description' => 'Inserisci descrizione',
		'section' => "id_section_collage_personali_testo",
		'type' => 'text', 
		'priority' => 10
		));

		$wp_customize -> add_setting("id_setting_collage_personali_paragrafo",
		array(
		'default' => '',
		'transport' => 'refresh'
		));
		
		$wp_customize -> add_control("id_setting_collage_personali_paragrafo",
		array(
		'label' => 'Paragrafo',
		'description' => 'Inserisci descrizione',
		'section' => "id_section_collage_personali_testo",
		'type' => 'textarea', 
		'priority' => 20
		));

		$collage_personali = array('collage1','collage2','collage3', 'collage4', 'collage5', 'collage6', 'collage7', 'collage8', 'collage9', 'collage10', 'collage11', 'collage12');
		foreach ($collage_personali as $chiave => $valore){
		$wp_customize -> add_section("id_section_collage_personali_$valore",
		array(
		'panel' => 'id_opzioni_collage_personali',
		'title' => __($valore, 'madda'),
		'priority' => 10
		));	
		$wp_customize -> add_setting("id_setting_collage_personali_$valore",
			array(
			'default' => '',
			'transport' => 'refresh'
			));
		$wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize, 
			"id_setting_collage_personali_$valore", array(
			'label' => 'Inserisci Immagine',
			'description' => 'Descrizione',
			'section' => "id_section_collage_personali_$valore",
			'button_labels' => array(
			'select' => 'Seleziona Immagine',
			'change' => 'Cambia Immagine',
			'remove' => 'Elimina Immagine',
			'default' => 'Defult',
			'placeholder' => 'Nessuna Immagine Selezionata',
			'frame_title' => 'Seleziona Immagine',
			'frame_button'=> 'Scegli Immagine'
			),		
			)));

			$wp_customize -> add_setting("id_setting_show_collage_personali_$valore",
			array(
			'default' => '',
			'transport' => 'refresh'
			));
			
			$wp_customize -> add_control("id_setting_show_collage_personali_$valore",
			array(
			'label' => 'Visualizza',
			'description' => '',
			'section' => "id_section_collage_personali_$valore",
			'type' => 'checkbox', 
			'priority' => 10
			));
	
			
		$wp_customize -> add_setting("id_setting_titolo_collage_personali_$valore",
		array(
		'default' => '',
		'transport' => 'refresh'
		));
		
		$wp_customize -> add_control("id_setting_titolo_collage_personali_$valore",
		array(
		'label' => 'Titolo',
		'description' => 'Descrizione',
		'section' => "id_section_collage_personali_$valore",
		'type' => 'text', 
		'priority' => 10
		));

		$wp_customize -> add_setting("id_setting_tecnica_collage_personali_$valore",
		array(
		'default' => '',
		'transport' => 'refresh'
		));
		
		$wp_customize -> add_control("id_setting_tecnica_collage_personali_$valore",
		array(
		'label' => 'Tecnica',
		'description' => 'Descrizione',
		'section' => "id_section_collage_personali_$valore",
		'type' => 'text', 
		'priority' => 10
		));

		$wp_customize -> add_setting("id_setting_dimensioni_collage_personali_$valore",
		array(
		'default' => '',
		'transport' => 'refresh'
		));
		
		$wp_customize -> add_control("id_setting_dimensioni_collage_personali_$valore",
		array(
		'label' => 'Dimensioni',
		'description' => 'Descrizione',
		'section' => "id_section_collage_personali_$valore",
		'type' => 'text', 
		'priority' => 10
		));

		$wp_customize -> add_setting("id_setting_disponibile_collage_personali_$valore",
		array(
		'default' => '',
		'transport' => 'refresh'
		));
		
		$wp_customize -> add_control("id_setting_disponibile_collage_personali_$valore",
		array(
		'label' => 'Disponibilità',
		'description' => '',
		'section' => "id_section_collage_personali_$valore",
		'type' => 'checkbox', 
		'priority' => 10
		));
		
		$wp_customize -> add_setting("id_setting_descrizione_collage_personali_$valore",
		array(
		'default' => '',
		'transport' => 'refresh'
		));
		
		$wp_customize -> add_control("id_setting_descrizione_collage_personali_$valore",
		array(
		'label' => 'Descrizione',
		'description' => 'Descrizione',
		'section' => "id_section_collage_personali_$valore",
		'type' => 'textarea', 
		'priority' => 10
		));
		
			$wp_customize -> add_setting("id_setting_ecommerce_collage_personali_$valore",
		array(
		'default' => '',
		'transport' => 'refresh'
		));
		
		$wp_customize -> add_control("id_setting_ecommerce_collage_personali_$valore",
		array(
		'label' => 'E-commerce',
		'description' => 'Inserisci link',
		'section' => "id_section_collage_personali_$valore",
		'type' => 'url', 
		'priority' => 10
		));
		
	
	}
	}
	add_action('customize_register', 'collage_personali');   

	function collage_epoca($wp_customize){
		//PANNELLO
		$wp_customize -> add_panel(
		'id_opzioni_collage_epoca', array(
		'title' =>__('Collage_epoca', 'madda'),
		'priority' => 50
		));
		$wp_customize -> add_section("id_section_collage_epoca_testo",
		array(
			'panel' => 'id_opzioni_collage_epoca',
			'title' => __('Testo', 'madda'),
			'priority' => 10
			));	
		$wp_customize -> add_setting("id_setting_collage_epoca_titolo",
		array(
		'default' => '',
		'transport' => 'refresh'
		));
			
		$wp_customize -> add_control("id_setting_collage_epoca_titolo",
		array(
		'label' => 'Titolo',
		'description' => 'Inserisci descrizione',
		'section' => "id_section_collage_epoca_testo",
		'type' => 'text', 
		'priority' => 10
		));

		$wp_customize -> add_setting("id_setting_collage_epoca_paragrafo",
		array(
		'default' => '',
		'transport' => 'refresh'
		));
		
		$wp_customize -> add_control("id_setting_collage_epoca_paragrafo",
		array(
		'label' => 'Paragrafo',
		'description' => 'Inserisci descrizione',
		'section' => "id_section_collage_epoca_testo",
		'type' => 'textarea', 
		'priority' => 20
		));
		$collage_epoca = array('collage1','collage2','collage3', 'collage4', 'collage5', 'collage6', 'collage7', 'collage8', 'collage9', 'collage10', 'collage11', 'collage12');
		foreach ($collage_epoca as $chiave => $valore){
		$wp_customize -> add_section("id_section_collage_epoca_$valore",
		array(
		'panel' => 'id_opzioni_collage_epoca',
		'title' => __($valore, 'madda'),
		'priority' => 10
		));	
		$wp_customize -> add_setting("id_setting_collage_epoca_$valore",
			array(
			'default' => '',
			'transport' => 'refresh'
			));
		$wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize, 
			"id_setting_collage_epoca_$valore", array(
			'label' => 'Inserisci Immagine',
			'description' => 'Descrizione',
			'section' => "id_section_collage_epoca_$valore",
			'button_labels' => array(
			'select' => 'Seleziona Immagine',
			'change' => 'Cambia Immagine',
			'remove' => 'Elimina Immagine',
			'default' => 'Defult',
			'placeholder' => 'Nessuna Immagine Selezionata',
			'frame_title' => 'Seleziona Immagine',
			'frame_button'=> 'Scegli Immagine'
			),		
			)));

			
			$wp_customize -> add_setting("id_setting_show_collage_epoca_$valore",
			array(
			'default' => '',
			'transport' => 'refresh'
			));
			
			$wp_customize -> add_control("id_setting_show_collage_epoca_$valore",
			array(
			'label' => 'Visualizza',
			'description' => '',
			'section' => "id_section_collage_epoca_$valore",
			'type' => 'checkbox', 
			'priority' => 10
			));
	
			
		$wp_customize -> add_setting("id_setting_titolo_collage_epoca_$valore",
		array(
		'default' => '',
		'transport' => 'refresh'
		));
		
		$wp_customize -> add_control("id_setting_titolo_collage_epoca_$valore",
		array(
		'label' => 'Titolo',
		'description' => 'Descrizione',
		'section' => "id_section_collage_epoca_$valore",
		'type' => 'text', 
		'priority' => 10
		));

		$wp_customize -> add_setting("id_setting_tecnica_collage_epoca_$valore",
		array(
		'default' => '',
		'transport' => 'refresh'
		));
		
		$wp_customize -> add_control("id_setting_tecnica_collage_epoca_$valore",
		array(
		'label' => 'Tecnica',
		'description' => 'Descrizione',
		'section' => "id_section_collage_epoca_$valore",
		'type' => 'text', 
		'priority' => 10
		));

		$wp_customize -> add_setting("id_setting_dimensioni_collage_epoca_$valore",
		array(
		'default' => '',
		'transport' => 'refresh'
		));
		
		$wp_customize -> add_control("id_setting_dimensioni_collage_epoca_$valore",
		array(
		'label' => 'Dimensioni',
		'description' => 'Descrizione',
		'section' => "id_section_collage_epoca_$valore",
		'type' => 'text', 
		'priority' => 10
		));

		$wp_customize -> add_setting("id_setting_disponibile_collage_epoca_$valore",
		array(
		'default' => '',
		'transport' => 'refresh'
		));
		
		$wp_customize -> add_control("id_setting_disponibile_collage_epoca_$valore",
		array(
		'label' => 'Disponibilità',
		'description' => '',
		'section' => "id_section_collage_epoca_$valore",
		'type' => 'checkbox', 
		'priority' => 10
		));
		
		$wp_customize -> add_setting("id_setting_descrizione_collage_epoca_$valore",
		array(
		'default' => '',
		'transport' => 'refresh'
		));
		
		$wp_customize -> add_control("id_setting_descrizione_collage_epoca_$valore",
		array(
		'label' => 'Descrizione',
		'description' => 'Descrizione',
		'section' => "id_section_collage_epoca_$valore",
		'type' => 'textarea', 
		'priority' => 10
		));
		
			$wp_customize -> add_setting("id_setting_ecommerce_collage_epoca_$valore",
		array(
		'default' => '',
		'transport' => 'refresh'
		));
		
		$wp_customize -> add_control("id_setting_ecommerce_collage_epoca_$valore",
		array(
		'label' => 'E-commerce',
		'description' => 'Inserisci link',
		'section' => "id_section_collage_epoca_$valore",
		'type' => 'url', 
		'priority' => 10
		));
		
	
	}
	}
	add_action('customize_register', 'collage_epoca');   

	function collage_commissione($wp_customize){
		//PANNELLO
		$wp_customize -> add_panel(
		'id_opzioni_collage_commissione', array(
		'title' =>__('Collage_commissione', 'madda'),
		'priority' => 50
		));
		
		$wp_customize -> add_section('id_section_collage_commissione_informazioni',
        array(
	    'panel' => 'id_opzioni_collage_commissione',
	    'title' => __('Informazioni', 'madda'),
	    'priority' => 10
	    ));
		$wp_customize -> add_setting('id_setting_titolo_collage_commissione_informazioni',
        array(
        'default'=>'',
        'transport'=>'refresh'
        ));
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'id_setting_titolo_collage_commissione_informazioni',
        array(
        'label'=>'Titolo',
        'description'=>'Descrizione',
        'section'=>'id_section_collage_commissione_informazioni',
		'type' => 'text',
        'position'=>10
        )));
        $wp_customize -> add_setting('id_setting_descrizione_collage_commissione_informazioni',
        array(
        'default'=>'',
        'transport'=>'refresh'
        ));
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'id_setting_descrizione_collage_commissione_informazioni',
        array(
        'label'=>'Informazioni',
        'description'=>'Descrizione',
        'section'=>'id_section_collage_commissione_informazioni',
		'type' => 'textarea',
        'position'=>20
        )));

		$wp_customize -> add_section("id_section_collage_commissione_testo",
		array(
			'panel' => 'id_opzioni_collage_commissione',
			'title' => __('Testo', 'madda'),
			'priority' => 10
			));	
		$wp_customize -> add_setting("id_setting_collage_commissione_titolo",
		array(
		'default' => '',
		'transport' => 'refresh'
		));
			
		$wp_customize -> add_control("id_setting_collage_commissione_titolo",
		array(
		'label' => 'Titolo',
		'description' => 'Inserisci descrizione',
		'section' => "id_section_collage_commissione_testo",
		'type' => 'text', 
		'priority' => 10
		));

		$wp_customize -> add_setting("id_setting_collage_commissione_paragrafo",
		array(
		'default' => '',
		'transport' => 'refresh'
		));
		
		$wp_customize -> add_control("id_setting_collage_commissione_paragrafo",
		array(
		'label' => 'Paragrafo',
		'description' => 'Inserisci descrizione',
		'section' => "id_section_collage_commissione_testo",
		'type' => 'textarea', 
		'priority' => 20
		));
	    
		$collage_commissione = array('collage1','collage2','collage3', 'collage4', 'collage5', 'collage6', 'collage7', 'collage8', 'collage9', 'collage10', 'collage11', 'collage12');
		foreach ($collage_commissione as $chiave => $valore){
		$wp_customize -> add_section("id_section_collage_commissione_$valore",
		array(
		'panel' => 'id_opzioni_collage_commissione',
		'title' => __($valore, 'madda'),
		'priority' => 20
		));	
		$wp_customize -> add_setting("id_setting_collage_commissione_$valore",
			array(
			'default' => '',
			'transport' => 'refresh'
			));
		$wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize, 
			"id_setting_collage_commissione_$valore", array(
			'label' => 'Inserisci Immagine',
			'description' => 'Descrizione',
			'section' => "id_section_collage_commissione_$valore",
			'button_labels' => array(
			'select' => 'Seleziona Immagine',
			'change' => 'Cambia Immagine',
			'remove' => 'Elimina Immagine',
			'default' => 'Defult',
			'placeholder' => 'Nessuna Immagine Selezionata',
			'frame_title' => 'Seleziona Immagine',
			'frame_button'=> 'Scegli Immagine'
			),		
			)));

			$wp_customize -> add_setting("id_setting_show_collage_commissione_$valore",
			array(
			'default' => '',
			'transport' => 'refresh'
			));
			
			$wp_customize -> add_control("id_setting_show_collage_commissione_$valore",
			array(
			'label' => 'Visualizza',
			'description' => '',
			'section' => "id_section_collage_commissione_$valore",
			'type' => 'checkbox', 
			'priority' => 10
			));
	
			
		$wp_customize -> add_setting("id_setting_titolo_collage_commissione_$valore",
		array(
		'default' => '',
		'transport' => 'refresh'
		));
		
		$wp_customize -> add_control("id_setting_titolo_collage_commissione_$valore",
		array(
		'label' => 'Titolo',
		'description' => 'Descrizione',
		'section' => "id_section_collage_commissione_$valore",
		'type' => 'text', 
		'priority' => 10
		));

		$wp_customize -> add_setting("id_setting_tecnica_collage_commissione_$valore",
		array(
		'default' => '',
		'transport' => 'refresh'
		));
		
		$wp_customize -> add_control("id_setting_tecnica_collage_commissione_$valore",
		array(
		'label' => 'Tecnica',
		'description' => 'Descrizione',
		'section' => "id_section_collage_commissione_$valore",
		'type' => 'text', 
		'priority' => 10
		));

		$wp_customize -> add_setting("id_setting_dimensioni_collage_commissione_$valore",
		array(
		'default' => '',
		'transport' => 'refresh'
		));
		
		$wp_customize -> add_control("id_setting_dimensioni_collage_commissione_$valore",
		array(
		'label' => 'Dimensioni',
		'description' => 'Descrizione',
		'section' => "id_section_collage_commissione_$valore",
		'type' => 'text', 
		'priority' => 10
		));

		$wp_customize -> add_setting("id_setting_disponibile_collage_commissione_$valore",
		array(
		'default' => '',
		'transport' => 'refresh'
		));
		
		$wp_customize -> add_control("id_setting_disponibile_collage_commissione_$valore",
		array(
		'label' => 'Disponibilità',
		'description' => '',
		'section' => "id_section_collage_commissione_$valore",
		'type' => 'checkbox', 
		'priority' => 10
		));
		
		$wp_customize -> add_setting("id_setting_descrizione_collage_commissione_$valore",
		array(
		'default' => '',
		'transport' => 'refresh'
		));
		
		$wp_customize -> add_control("id_setting_descrizione_collage_commissione_$valore",
		array(
		'label' => 'Descrizione',
		'description' => 'Descrizione',
		'section' => "id_section_collage_commissione_$valore",
		'type' => 'textarea', 
		'priority' => 10
		));
		
			$wp_customize -> add_setting("id_setting_ecommerce_collage_commissione_$valore",
		array(
		'default' => '',
		'transport' => 'refresh'
		));
		
		$wp_customize -> add_control("id_setting_ecommerce_collage_commissione_$valore",
		array(
		'label' => 'E-commerce',
		'description' => 'Inserisci link',
		'section' => "id_section_collage_commissione_$valore",
		'type' => 'url', 
		'priority' => 10
		));
		
	
	}
	}
	add_action('customize_register', 'collage_commissione');   

	function shop($wp_customize){
		//PANNELLO
		$wp_customize -> add_panel(
		'id_opzioni_shop', array(
		'title' =>__('Shop', 'madda'),
		'priority' => 60
		));
		$wp_customize -> add_section("id_section_shop_immagini",
		array(
		'panel' => 'id_opzioni_shop',
		'title' => __('Shop_immagini', 'madda'),
		'priority' => 10
		));	
        $shop_immagini = array('Immagine1', 'Immagine2', 'Immagine3');
		foreach ($shop_immagini as $chiave => $valore){
		$wp_customize -> add_setting("id_setting_shop_$valore",
			array(
			'default' => '',
			'transport' => 'refresh'
			));
		$wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize, 
			"id_setting_shop_$valore", array(
			'label' => 'Inserisci Immagine',
			'description' => 'Descrizione',
			'section' => "id_section_shop_immagini",
			'button_labels' => array(
			'select' => 'Seleziona Immagine',
			'change' => 'Cambia Immagine',
			'remove' => 'Elimina Immagine',
			'default' => 'Defult',
			'placeholder' => 'Nessuna Immagine Selezionata',
			'frame_title' => 'Seleziona Immagine',
			'frame_button'=> 'Scegli Immagine'
			),		
			)));
		}

		$wp_customize -> add_section("id_section_shop",
			array(
			'panel' => 'id_opzioni_shop',
			'title' => __('Shop', 'madda'),
			'priority' => 10
			));
			
		$wp_customize -> add_setting("id_setting_nome_shop",
		array(
		'default' => '',
		'transport' => 'refresh'
		));
		
		$wp_customize -> add_control("id_setting_nome_shop",
		array(
		'label' => 'Titolo',
		'description' => 'Descrizione',
		'section' => "id_section_shop",
		'type' => 'text', 
		'priority' => 10
		));

		$wp_customize -> add_setting("id_setting_testata_shop",
		array(
		'default' => '',
		'transport' => 'refresh'
		));
		
		$wp_customize -> add_control("id_setting_testata_shop",
		array(
		'label' => 'Testata',
		'description' => 'Descrizione',
		'section' => "id_section_shop",
		'type' => 'textarea', 
		'priority' => 10
		));
		
		$wp_customize -> add_setting("id_setting_descrizione_shop",
		array(
		'default' => '',
		'transport' => 'refresh'
		));
		
		$wp_customize -> add_control("id_setting_descrizione_shop",
		array(
		'label' => 'Descrizione',
		'description' => 'Descrizione',
		'section' => "id_section_shop",
		'type' => 'textarea', 
		'priority' => 10
		));
		
			$wp_customize -> add_setting("id_setting_ecommerce_shop",
		array(
		'default' => '',
		'transport' => 'refresh'
		));
		
		$wp_customize -> add_control("id_setting_ecommerce_shop",
		array(
		'label' => 'E-commerce',
		'description' => 'Inserisci link',
		'section' => "id_section_shop",
		'type' => 'url', 
		'priority' => 10
		));

		$wp_customize -> add_setting("id_setting_shop",
			array(
			'default' => '',
			'transport' => 'refresh'
			));
		$wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize, 
			"id_setting_shop", array(
			'label' => 'Inserisci Immagine',
			'description' => 'Descrizione',
			'section' => "id_section_shop",
			'button_labels' => array(
			'select' => 'Seleziona Immagine',
			'change' => 'Cambia Immagine',
			'remove' => 'Elimina Immagine',
			'default' => 'Defult',
			'placeholder' => 'Nessuna Immagine Selezionata',
			'frame_title' => 'Seleziona Immagine',
			'frame_button'=> 'Scegli Immagine'
			),		
			)));
	}
	add_action('customize_register', 'shop');