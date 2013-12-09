/*
Copyright (c) 2003-2011, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

CKEDITOR.editorConfig = function( config )
{
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';

	config.entities = false;
	//config.bodyClass = 'content'; //class that body needs to refer to

	
	config.toolbar =[
					    [ 	'Source', 'Save','-', 
					    	'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-',  
					    	'Undo', 'Redo', '-',
					    	'Bold', 'Italic','Underline', 'Strike', 'Subscript', 'Superscript', '-', 'RemoveFormat', '-',
					    	'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-',
					    	'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-',
					    	'Link', 'Unlink', 'Anchor', '-',
					    	'Image','HorizontalRule', '-',
					    	'Styles', 'Format', 'Font', 'FontSize'
				    	]
					];
};
