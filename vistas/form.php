<div class="section-home">
    <div class="container-home modal-dialog modal-xl" id="ReporteActivo">
        <div class="modal-header">
            <h3>Mesa de Ayuda IT <i class="bi bi-tools"></i></h3>
            <p>¡Hola! En este espacio podrás reportar cualquier error, fallo o necesidad que estés enfrentando. 🚀 Simplemente selecciona la opción que mejor describa tu situación y envía el formulario. Nuestro equipo se encargará de brindarte la atención adecuada para resolverlo de manera rápida y eficiente. ¡Gracias por confiar en nosotros! 🙌</p>
        </div>
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="datesUser modal-content">
                <div class="modal-body">
                    <div class="title">
                        <h4>Datos de Usuario <i class="bi bi-person-fill"></i></h4>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <strong>Identificación:</strong>
                            <br>
                            <span id="">1031806235</span>
                        </li>
                        <li class="list-group-item">
                            <strong>Nombre Completo:</strong>
                            <br>
                            <span id="">Juan Cañas</span>
                        </li>
                        <li class="list-group-item">
                            <strong>Teléfono de Contacto:</strong>
                            <br>
                            <span id="">3107973575</span>
                        </li>
                        <li class="list-group-item">
                            <strong>Usuario SAP:</strong>
                            <br>
                            <span id="">Juan2</span>
                        </li>
                        <li class="list-group-item">
                            <strong>Usuario Windows:</strong>
                            <br>
                            <span id="">Juan2</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="modal-content content-form">
                <div class="modal-body">
                    <div class="title">
                        <h4>Realiza tu solicitud</h4>
                    </div>
                    <!--En este formualrio se podrá reportar los errores ya sea de la información o del activo como tal-->
                    <form id="formulario" class="row g-3">
                        <div class="col-md-4">
                            <label for="motivoReport" class="form-label">Categoría</label>
                            <select class="form-select" id="motivoReport" name="categoria" required>
                                <option selected disabled value="">Seleccione</option>
                            </select>
                        </div>
                        <div class="col-md-5">
                            <label for="motivoReport" class="form-label">Subcategoría</label>
                            <select class="form-select" id="motivoCategoria" name="subcategoria" required>
                                <option selected disabled value="">Seleccione</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="nimpacto" class="form-label">Nivel de Impacto</label>
                            <div class="radios">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="impacto" id="impactoNormal" required value="option2">
                                    <label class="form-check-label" for="impacto">Normal</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="impacto" id="impactoUrgente" required value="option2">
                                    <label class="form-check-label" for="impacto">Urgente</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="asunto" class="form-label">Asunto de la Solicitud</label>
                            <input type="text" class="form-control" id="asunto" name="asunto" required>
                        </div>
                        <div class="col-md-7">
                            <label for="motivoSolicitud3" class="form-label">Descripción de la solicitud</label>
                            <textarea class="form-control" name="descripcion" id="motivoSolicitud3" placeholder="Escribe el motivo de la solicitud" required></textarea>
                        </div>
                        <div class="col-md-5">
                            <label for="soporte" class="form-label" style="padding-bottom: 0.8rem;">Soporte de Solicitud</label>
                            <input type="file" id="soporte" name="soporte" class="form-control" aria-label="soporte de solicitud" required>
                        </div>
                        <div class="send col-12">
                            <!--Botón para enviar el reporte a la persona encargada--> 
                            <button id="submit-button" class="btn-style" style="width: 8rem;" type="submit">Enviar solicitud</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>