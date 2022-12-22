<?php

//New CPT - CASE STUDY - Herson Martinez

//FUNCTION CUSTOM POST TYPE
/*          CASE STUDY TAG FOR MENU MAIN WORDPRESS                  */

                function case_study_cpt(){
                    //definiendo los nombres de las etiquetas de nombre
                    $labels = array(
                    'name'                  => esc_html__( 'Case Study'),
                    'singular_name'         => esc_html__( 'Case Study' ),
                    'menu_name'             => esc_html__( 'Case Studies'),
                    'name_admin_bar'        => esc_html__( 'Case Study'),
                    'archives'              => esc_html__( 'Archive Case Study'),
                    'all_items'             => esc_html__( 'All Case Study'),
                    'add_new_item'          => esc_html__( 'Add new Case Study'),
                    'add_new'               => esc_html__( 'Add Case Study' ),
                    'new_item'              => esc_html__( 'New Case Study' ),
                    'edit_item'             => esc_html__( 'Edit Case Study' ),
                    'update_item'           => esc_html__( 'Update Case Study' ),
                    'view_item'             => esc_html__( 'View Case Study'),
                    'view_items'            => esc_html__( 'View Case Study' ),
                    'search_items'          => esc_html__( 'Search Case Study' ),
                    'not_found'             => esc_html__( 'Case Study not Found' ),
                    'items_list'            => esc_html__( 'Case Study List' )
                    );
            
            
                $args = array(
                    'label'                 => esc_html__( 'Case Study'),
                    'labels'                => $labels,
                    'public'                => true,
                    'menu_position'         => 25,
                    'supports'              => array('title', 'editor', 'thumbnail', 'excerpt','custom-fields','revisions','page-attributes'),
                    'hierarchical'          => true,
                    'has_archive'           => true,
                    /*'taxonomies'            => array( 'category', 'post_tag' ),*/
                    'menu_icon'             => 'dashicons-open-folder',
                    'rewrite'               =>  array('slug' => 'case-study')
                );
                register_post_type( 'case-study', $args );
  
                register_taxonomy( 'categories', array('case-study'), array(
                    'hierarchical' => true, 
                    'label' => 'Categories',
                    'show_ui' => true,
                    'singular_label' => 'Category', 
                    'rewrite' => array( 'slug' => 'categories')
                    )
                );
            
                register_taxonomy_for_object_type( 'categories', 'case-study' );
            }
            add_action('init', 'case_study_cpt');
  //END FUNTION CUSTOM POST TYPE FOR CASE STUDY