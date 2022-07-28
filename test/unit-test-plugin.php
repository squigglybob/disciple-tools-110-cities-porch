<?php

class PluginTest extends TestCase
{
    public function test_plugin_installed() {
        activate_plugin( 'disciple-tools-110-cities-porch/disciple-tools-110-cities-porch.php' );

        $this->assertContains(
            'disciple-tools-110-cities-porch/disciple-tools-110-cities-porch.php',
            get_option( 'active_plugins' )
        );
    }
}
