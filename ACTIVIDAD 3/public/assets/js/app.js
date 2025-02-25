// public/assets/js/app.js

// Función para abrir el modal y, en caso de edición, cargar los datos del libro
function openModal(action, id = null) {
    const form = document.getElementById('bookForm');
    if (action === 'create') {
        form.reset();
        document.getElementById('bookModalLabel').textContent = 'Crear Libro';
        document.getElementById('bookId').value = '';
    } else if (action === 'edit') {
        document.getElementById('bookModalLabel').textContent = 'Editar Libro';
        // Aquí se puede realizar una petición para obtener los datos del libro y llenar el formulario
        axios.get(`books/get/${id}`)
            .then(response => {
                const data = response.data;
                document.getElementById('bookId').value = data.id;
                document.getElementById('title').value = data.title;
                document.getElementById('author').value = data.author;
            })
            .catch(error => {
                console.error('Error al cargar datos', error);
            });
    }
}

// Manejo del envío del formulario mediante AJAX
document.getElementById('bookForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const formData = new FormData(this);
    // Enviar datos mediante Axios a la acción create o edit
    axios.post('books/create', formData)
        .then(response => {
            const res = response.data;
            if(res.status === 'success'){
                // Actualizar la lista, cerrar modal y mostrar mensaje de éxito
                location.reload();
            } else {
                alert(res.message);
            }
        })
        .catch(error => console.error('Error en la petición', error));
});

// Función para eliminar un libro (similar lógica con Axios)
function deleteBook(id) {
    if(confirm('¿Está seguro de eliminar este libro?')) {
        axios.post('books/delete', { id })
            .then(response => {
                const res = response.data;
                if(res.status === 'success'){
                    location.reload();
                } else {
                    alert(res.message);
                }
            })
            .catch(error => console.error('Error al eliminar', error));
    }
}
