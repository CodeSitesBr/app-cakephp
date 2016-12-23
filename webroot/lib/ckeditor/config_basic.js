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

    // The toolbar groups arrangement, optimized for a single toolbar row.
    config.toolbarGroups = [
        {name: 'document', groups: ['mode', 'document', 'doctools']},
        {name: 'clipboard', groups: ['clipboard', 'undo']},
        {name: 'editing', groups: ['find', 'selection', 'spellchecker']},
        {name: 'forms'},
        {name: 'basicstyles', groups: ['basicstyles', 'cleanup']},
        {name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi']},
        {name: 'links'},
        {name: 'insert'},
        {name: 'styles'},
        {name: 'colors'},
        {name: 'tools'},
        {name: 'others'}
    ];

    // Plugins extras
    config.extraPlugins = 'colorbutton';
    config.extraPlugins = 'youtube';

    // Configurando o plugin do youtube
    config.youtube_width = '640';
    config.youtube_height = '480';
    config.youtube_related = true; // mostrar videos relacionados
    config.youtube_older = false; // Usar embed antigo
    config.youtube_privacy = false; // Ativar modo protegido por privacidade

    // The default plugins included in the basic setup define some buttons that
    // are not needed in a basic editor. They are removed here.
    config.removeButtons = 'Cut,Copy,Paste,Undo,Redo,Anchor,Underline,Strike,Subscript,Superscript';

    // Dialog windows are also simplified.
    config.removeDialogTabs = 'link:advanced';
};
