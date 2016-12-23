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
    //config.skin = 'office2013,' + path_url + '/lib/ckeditor/skins/office2013/';
    config.skin = 'moonocolor,' + path_url + '/lib/ckeditor/skins/moonocolor/';
//    config.skin = 'bootstrapck,' + path_url + '/lib/ckeditor/skins/bootstrapck/';
//    config.skin = 'flat,' + path_url + '/lib/ckeditor/skins/flat/';
//    config.skin = 'moono-dark,' + path_url + '/lib/ckeditor/skins/moono-dark/';
//    config.skin = 'minimalist,' + path_url + '/lib/ckeditor/skins/minimalist/';
//    config.skin = 'icy_orange,' + path_url + '/lib/ckeditor/skins/icy_orange/';
//    config.skin = 'Moono_blue,' + path_url + '/lib/ckeditor/skins/Moono_blue/';

    // The toolbar groups arrangement, optimized for two toolbar rows.
    config.toolbarGroups = [
        {name: 'document', groups: ['mode', 'document', 'doctools']},
        {name: 'clipboard', groups: ['clipboard', 'undo']},
        {name: 'editing', groups: ['find', 'selection', 'spellchecker']},
        {name: 'forms'},
        {name: 'basicstyles', groups: ['basicstyles', 'cleanup']},
        {name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi']},
        {name: 'links'},
        {name: 'insert'},
        '/',
        {name: 'styles'},
        {name: 'colors'},
        {name: 'others'},
        {name: 'tools'},
        {name: 'about'}
    ];

    config.removeButtons = 'Subscript,Superscript';

    // Set the most common block elements.
    config.format_tags = 'p;h1;h2;h3;pre';

    // Simplify the dialog windows.
    config.removeDialogTabs = 'image:advanced;link:advanced';
};
