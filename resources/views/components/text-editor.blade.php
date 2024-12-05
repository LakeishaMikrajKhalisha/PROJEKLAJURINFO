{{-- <div id="editor"></div>
<script>
    const quill = new Quill('#editor', {
        modules: {
            toolbar: [
                [{
                    header: [1, 2, false]
                }],
                ['bold', 'italic', 'underline'],
                ['image', 'code-block'],
            ],
        },
        placeholder: 'Compose an epic...',
        theme: 'snow', // or 'bubble'
    });
</script> --}}
{{-- <div id="toolbar-container">
    <span class="ql-formats">
        <select class="ql-size"></select>
    </span>
    <span class="ql-formats">
        <button class="ql-bold"></button>
        <button class="ql-italic"></button>
        <button class="ql-underline"></button>
    </span>
    <span class="ql-formats">
        <button class="ql-list" value="ordered"></button>
        <button class="ql-list" value="bullet"></button>
        <button class="ql-indent" value="-1"></button>
      <button class="ql-indent" value="+1"></button>
    </span>
    <span class="ql-formats">
        <select class="ql-align"></select>
    </span>
    <span class="ql-formats">
        <button class="ql-link"></button>
        <button class="ql-image"></button>
    </span>
</div> --}}
<div id="editor"></div>

<!-- Initialize Quill editor -->
<script>
    var toolbarOptions = {
        container: [
            [{
                'header': [1, 2, false]
            }],
            ['bold', 'italic', 'underline'],
            [{
                'list': 'ordered'
            }, {
                'list': 'bullet'
            }],
            ['image', 'link']
        ],
        handlers: {
            image: function() {
                var input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('accept', 'image/*');
                input.click();

                input.onchange = function() {
                    var file = input.files[0];
                    if (file) {
                        var formData = new FormData();
                        formData.append('image', file);

                        fetch('{{ route('artikel.upload-image') }}', {
                                method: 'POST',
                                headers: {
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                                },
                                body: formData
                            })
                            .then(response => response.json())
                            .then(data => {
                                var range = quill.getSelection();
                                quill.insertEmbed(range.index, 'image', data.url);
                            })
                            .catch(error => console.error('Error:', error));
                    }
                };
            }
        }
    };

    const quill = new Quill('#editor', {
        modules: {
            syntax: true,
            toolbar: toolbarOptions,
        },
        placeholder: 'Ketik di sini...',
        theme: 'snow',
    });

    document.getElementById('article').onsubmit = function() {
        document.getElementById('content').value = quill.root.innerHTML;
    };
</script>
