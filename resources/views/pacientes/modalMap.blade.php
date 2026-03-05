<!-- Modal con el mapa -->
<div class="modal fade" id="mapModal" tabindex="-1" aria-labelledby="mapModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
           <h5 class="modal-title" id="mapModalLabel">Seleccionar Ubicación</h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar">X</button>
        </div>
        <div class="modal-body">
            <div class="row">
                    <label for="Latitud_label" class="col-sm-2 col-form-label">Latitud</label>
                <div class="col-sm">
                    {{ html()->text('latitud', old('latitud', $paciente->latitud ?? ''))->class('form-control form-control-sm')->classIf($errors->has('Latitud'), 'is-invalid')->id('latitude') }}
                </div>

                <label for="Longitud_label" class="col-sm-2 col-form-label">Longitud</label>
                <div class="col-sm">
                    {{ html()->text('longitud', old('latitud', $paciente->longitud ?? ''))->class('form-control form-control-sm')->classIf($errors->has('Longitud'), 'is-invalid')->id('longitude') }}
                </div>
            </div>
           <!-- Contenedor del mapa con altura definida -->
           <div id="map" style="width:100%; height: 400px;"></div>
        </div>
        <div class="modal-footer">
           <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
