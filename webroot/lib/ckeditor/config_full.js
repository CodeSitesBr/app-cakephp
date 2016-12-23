/**
 * @license Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function (config) {
    // Config do editor
    //config.uiColor = '#AADC6E';
    config.language = 'pt-br';
    // config.width = '800px';
    // config.height = '500px';

    // // Tema para o editor
    //config.skin = 'kama';
    //config.skin = 'moono';
    //config.skin = 'moono-lisa';
    config.skin = 'moonocolor,' + path_url + '/lib/ckeditor/skins/moonocolor/';
    //config.skin = 'office2013,' + path_url + '/lib/ckeditor/skins/office2013/';
//    config.skin = 'bootstrapck,' + path_url + '/lib/ckeditor/skins/bootstrapck/';
//    config.skin = 'flat,' + path_url + '/lib/ckeditor/skins/flat/';
//    config.skin = 'moono-dark,' + path_url + '/lib/ckeditor/skins/moono-dark/';
//    config.skin = 'minimalist,' + path_url + '/lib/ckeditor/skins/minimalist/';
//    config.skin = 'icy_orange,' + path_url + '/lib/ckeditor/skins/icy_orange/';
//    config.skin = 'Moono_blue,' + path_url + '/lib/ckeditor/skins/Moono_blue/';

    // Remove some buttons provided by the standard plugins, which are
    // not needed in the Standard(s) toolbar.
    config.removeButtons = 'About';
};
