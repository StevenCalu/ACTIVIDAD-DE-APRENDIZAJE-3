<!-- Modal -->
<div class="modal fade" id="authorModal" tabindex="-1" aria-labelledby="authorModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form id="authorForm">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="authorModalLabel">Crear/Editar Autor</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>
        <div class="modal-body">
           <input type="hidden" id="authorId" name="id">
           <div class="mb-3">
             <label for="name" class="form-label">Nombre</label>
             <input type="text" class="form-control" id="name" name="name" required>
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
