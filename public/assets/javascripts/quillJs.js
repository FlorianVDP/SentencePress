let container = document.getElementById('editor');
let toolbarOptions = [
    ['bold', 'italic', 'underline', 'strike'],        // toggled buttons
    ['blockquote', 'code-block'],
    [{ 'list': 'ordered'}, { 'list': 'bullet' }],
    [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
    [{ 'align': [] }],
];
let options = {
    modules: {
        toolbar: toolbarOptions
    },
    theme: 'snow'
};
let editor = new Quill('#editor', options);