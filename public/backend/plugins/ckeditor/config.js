/**
 * @license Copyright (c) 2003-2023, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	config.language = 'vi';

	config.allowedContent = true;

	config.clipboard_handleImages = false;

    // config.toolbarGroups = [
    //     {name: 'document', groups: ['mode', 'document', 'doctools']},
    //     {name: 'clipboard', groups: ['clipboard', 'undo']},
    //     {name: 'editing', groups: ['find', 'selection', 'spellchecker', 'editing']},
    //     {name: 'forms', groups: ['forms']},
    //     {name: 'basicstyles', groups: ['basicstyles', 'cleanup']},
    //     {name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi', 'paragraph']},
    //     {name: 'links', groups: ['links']},
    //     {name: 'insert', groups: ['insert']},
    //     {name: 'styles', groups: ['styles']},
    //     {name: 'colors', groups: ['colors']},
    //     {name: 'tools', groups: ['tools']},
    //     {name: 'others', groups: ['others']},
    // ];
    config.toolbarGroups = [
        { name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
        { name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
        { name: 'editing', groups: [ 'find', 'selection', 'spellchecker' ] },
        { name: 'forms' },
        '/',
        { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
        { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
        { name: 'links' },
        { name: 'insert' },
        '/',
        { name: 'styles' },
        { name: 'colors' },
        { name: 'tools' },
        { name: 'others' },
        { name: 'about' }
    ];

	config.removeButtons = 'Font,Save,Preview,Print,Templates,PasteText,PasteFromWord,Language,Scayt,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,CopyFormatting,Anchor,Flash,Smiley,About';

    config.extraPlugins = 'image2,clipboard,dialogui,dialog,notification,toolbar,button,contents,widget,lineutils,tableresize';

	config.removePlugins = 'image,exportpdf,iframe';
	
};
