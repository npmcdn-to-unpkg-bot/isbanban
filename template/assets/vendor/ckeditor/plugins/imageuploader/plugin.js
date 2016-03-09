// Copyright (c) 2015, Fujana Solutions - Moritz Maleck. All rights reserved.
// For licensing, see LICENSE.md
var path = 'http://isbanban.dev';

CKEDITOR.plugins.add( 'imageuploader', {
    init: function( editor ) {
        editor.config.filebrowserBrowseUrl = path + '/template/assets/vendor/ckeditor/plugins/imageuploader/imgbrowser.php';
        // editor.config.filebrowserBrowseUrl = '../../../../uploads/';
        // editor.config.filebrowserBrowseUrl = path + '/uploads/';
    }
});
