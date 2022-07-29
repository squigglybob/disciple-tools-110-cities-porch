<?php

class DT_110_Cities_Porch_Loader extends DT_Generic_Porch_Loader {

    public $id = '110-cities-porch';

    public function __construct() {
        parent::__construct( __DIR__ );

        $this->label = __( '110 Cities Porch', 'disciple-tools-prayer-campaign' );
    }
}
( new DT_110_Cities_Porch_Loader() )->register_porch();
