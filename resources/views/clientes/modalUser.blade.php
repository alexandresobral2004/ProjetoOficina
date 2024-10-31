 <!-- Modal -->
 <div class="modal fade" id="exampleModal_{{ $user->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <div class="modal-body">
                 Deseja remover <strong id="userName">{{ $user->name }}</strong>?
             </div>

             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>

                 <a class="btn btn-danger" href="{{ route('user.destroy', $user->id) }}"
                     class="dropdown-item remove-item-btn">
                     <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                     Delete
                 </a>
             </div>
         </div>
     </div>
 </div>
 <!-- Modal -->