<?php

if ( ! class_exists( 'WP_Customize_Control' ) )
    return NULL;

/**
 * A class to create a dropdown for all categories in your WordPress site
 */
 class Classic_Ecommerce_Category_Dropdown_Custom_Control extends WP_Customize_Control {
    private $cats = false;

    public function __construct($manager, $id, $classic_ecommerce_args = array(), $options = array()){
      $this->cats = get_categories($options);
      parent::__construct( $manager, $id, $classic_ecommerce_args );
    }

    /**
     * Render the content of the category dropdown
     *
     * @return HTML
     */
    public function render_content(){
      if(!empty($this->cats)) { ?>
        <label>
          <span class="customize-category-select-control"><?php echo esc_html( $this->label ); ?></span>
          <select <?php $this->link(); ?>>
            <option value="0"><?php esc_html_e('Select Category','classic-ecommerce'); ?> </option>
            <?php
              foreach ( $this->cats as $cat )
              {
                printf('<option value="%s" %s>%s</option>', esc_attr( $cat->term_id ), selected($this->value(), esc_attr( $cat->term_id ), false), esc_html( $cat->name ) );
              }
            ?>
          </select>
        </label>
    <?php }
    }
  }
?>