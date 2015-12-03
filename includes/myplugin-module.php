<?php


class MyPluginClass extends FLBuilderModule {

    public function __construct()
    {
        parent::__construct(array(
            'name'          => __( 'My Module', 'fl-builder' ),
            'description'   => __( 'Blank module template', 'fl-builder' ),
            'category'      => __( 'My Plugins', 'fl-builder' ),
            'dir'           => MYPLUGIN_MODULE_DIR . '/',
            'url'           => MYPLUGIN_URL . '/',
            'editor_export' => true, // Defaults to true and can be omitted.
            'enabled'       => true, // Defaults to true and can be omitted.
        ));

        // $this->add_js('myplugin.js', $this->url . 'js/myplugin.js', array(), '', true);      
        // $this->add_css( 'myplugin.css', $this->url . 'css/myplugin.css'); 
        
    }    
    
}

FLBuilder::register_module( 'MyPluginClass', array(
    
    'content-tab'      => array(
        
        'title'         => __( 'Content', 'fl-builder' ),
        'sections'      => array( 
            
              'content_select'  => array(
                'title'         => __( 'My Plugin', 'fl-builder' ),
                'fields'        => array(
                    
                    'myfield'     => array(
                        'type'      => 'text',
                        'label'     => __( 'Field Label', 'fl_builder' ),
                    ),  // end myfield
                    
                ) // end fields
                  
            ) // end content_select
            
        ) // end sections
        
    ), // end content-tab
    
) ); 
    