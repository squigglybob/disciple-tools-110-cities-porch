<?php

class DT_110_Cities_Porch_Loader extends DT_Generic_Porch_Loader {

    public $id = '110-cities-porch';

    public function __construct() {
        parent::__construct( __DIR__ );

        $this->label = __( '110 Cities Landing Page', 'disciple-tools-prayer-campaign' );
        add_filter( 'dt_campaigns_wizard_types', array( $this, 'wizard_types' ) );
    }

    public function wizard_types( $wizard_types ) {
        $hundred_ten_wizard = [
            "campaign_type" => "ongoing",
            "porch" => $this->id,
            "label" => "Setup Landing page for 110 Cities Campaign",
        ];
        $wizard_types[$this->id] = $hundred_ten_wizard;

        return $wizard_types;
    }
}
( new DT_110_Cities_Porch_Loader() )->register_porch();
