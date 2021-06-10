ClassicEditor.create( document.querySelector('#txtConteudo'), {
    toolbar: {
        items: [
            'heading',
            'bold',
            'underline',
            'italic',
            'link',
            'code',
            'bulletedList',
            'numberedList',
            'fontSize',
            'fontFamily',
            '|',
            'outdent',
            'indent',
            '|',
            'imageUpload',
            'blockQuote',
            'insertTable',
            'mediaEmbed',
            'undo',
            'redo'
        ]
    },
    language: 'pt-br',
    image: {
        toolbar: [
            'imageTextAlternative',
            'imageStyle:full',
            'imageStyle:side'
        ]
    },
    table: {
        contentToolbar: [
            'tableColumn',
            'tableRow',
            'mergeTableCells'
        ]
    },
    licenseKey: '',
} )
.then( editor => {
    window.editor = editor;
} )
.catch( error => {
    console.error( 'Oops, something went wrong!' );
    console.error( 'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
    console.warn( 'Build id: eawyn5kn7phe-kgf5patworsl' );
    console.error( error );
} );