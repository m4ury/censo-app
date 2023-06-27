<div class="modal fade" id="productModal{{ $control->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Detalle Control</h4>
                <button type="button" class="close text-right" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fas fa-times"></i>
                    </span>
                </button>
            </div>
            <div class="modal-body">
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Trastornos mentales y del comportamiento debido Consumo de sust. psicotropicas
                        <span class="badge badge-primary badge-pill">{{ $control->trConsumo ?? '' }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Trastornos del humor
                        <span class="badge badge-primary badge-pill">{{ $control->trHumor ?? '' }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Trastornos del comportamiento y emociones en infancia y adolescencia
                        <span class="badge badge-primary badge-pill">{{ $control->trInfAdol ?? '' }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Trastornos de anciedad
                        <span class="badge badge-primary badge-pill">{{ $control->trAns ?? '' }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Demencias
                        <span class="badge badge-primary badge-pill">{{ $control->demencias ?? '' }}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
