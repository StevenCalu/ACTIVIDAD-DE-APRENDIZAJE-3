<!-- Modal -->
<div class="modal fade" id="bookModal" tabindex="-1" aria-labelledby="bookModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form id="bookForm">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="bookModalLabel">Crear/Editar Libro</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
           <input type="hidden" id="bookId" name="id">
           <div class="mb-3">
             <label for="title" class="form-label">Título</label>
             <input type="text" class="form-control" id="title" name="title" required>
           </div>
           <div class="mb-3">
             <label for="author" class="form-label">Autor</label>
             <input type="text" class="form-control" id="author" name="author" required>
           </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </div>
    </form>
  </div>
</div>
