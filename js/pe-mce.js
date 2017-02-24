/**
 * Created by emmaedgar on 1/25/16.
 */

(function() {
    /* Register the buttons */
    tinymce.create('tinymce.plugins.PeButtons', {
        init : function(ed, url) {
            /**
             * Inserts shortcode content
             */
            ed.addButton( 'button_pin_embed', {
                title : 'Insert shortcode',
                image : '../wp-content/plugins/pin-embed/images/pin-embed-button.png',
                onclick : function() {
                    ed.selection.setContent('[pin-embed url= size=small align=center description=true]');
                }
            });
        },
        createControl : function(n, cm) {
            return null;
        },
    });
    /* Start the buttons */
    tinymce.PluginManager.add( 'pe_button_script', tinymce.plugins.PeButtons );
})();