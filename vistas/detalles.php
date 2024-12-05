<div class="section-detalles">
    <div class="container-detalles text-center">
        <div class="modal-header">
            <h3>¡Acerca de la solicitud! <i class="bi bi-wrench-adjustable-circle"></i></h3>
            <p>Aquí encontrarás el proceso de gestión de la solicitud que realizaste.</p>
        </div>
        <div class="modal-dialog cuadro-detalle modal-xxl">
            <div class="tablaDatos modal-content">
                <div class="modal-body">
                    <h4>Datos de Usuario <i class="bi bi-person-fill"></i></h4>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <strong>Número de Ticket</strong>
                            <br>
                            <span id="">MA -IT-97.1_202</span>
                        </li>
                        <li class="list-group-item">
                            <strong>Identificación</strong>
                            <br>
                            <span id="">1031806235</span>
                        </li>
                        <li class="list-group-item">
                            <strong>Nombre Completo</strong>
                            <br>
                            <span id="">Juan Cañas</span>
                        </li>
                        <li class="list-group-item">
                            <strong>Teléfono de Contacto</strong>
                            <br>
                            <span id="">3107973575</span>
                        </li>
                        <li class="list-group-item">
                            <strong>Usuario SAP</strong>
                            <br>
                            <span id="">Juan2</span>
                        </li>
                        <li class="list-group-item">
                            <strong>Usuario</strong>
                            <br>
                            <span id="">Juan2</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="dates">
                <div class="title">
                    <h4>Solicitud MA -IT-97.1_202 <i class="bi bi-info-circle"></i></h4>
                </div>
                <div class="detalles modal-content content-form">
                    <div class="modal-body">
                        <!--En este formualrio se podrá reportar los errores ya sea de la información o del activo como tal-->
                        <div id="formulario" class="row g-3">
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="historial modal-content">
                <div class="modal-body">
                    <h4>Historial Solicitud <i class="bi bi-chat-dots-fill"></i></h4>
                    <div class="chat-box">
                        <!-- Chat header -->
                        <div class="chat-header">
                            <p class="chat"><strong>Chat Activo </strong><i class="bi bi-circle-fill"></i></p>
                        </div>

                        <!-- Chat messages -->
                        <div class="chat-messages">

                        </div>
                        <!-- Chat input -->
                        <div class="chat-input">
                            <input class="form-control" type="text" placeholder="Escribe un mensaje..." />
                            <button class="btn-style" type="button">Enviar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modals">
            <!-- Botones para los modales y volver -->
            <div class="container mt-4">
                <!-- Botones -->
                <button type="button" id="ReasignarTarea" class="btn-style" data-bs-toggle="modal" data-bs-target="#modalReasignarTarea">Reasignar</button>
                <button type="button" id="AsignarTarea" class="btn-style" data-bs-toggle="modal" data-bs-target="#modalAsignarTarea">Asignar</button>
                <button type="button" id="estadoTarea" class="btn-style" data-bs-toggle="modal" data-bs-target="#modalEstadoTarea">Estado</button>
                <button type="button" class="btn-style"><a class="nav-link"aria-current="page" href="/mesa_it/solicitudes">Volver</a></button>
            </div>
            <!-- Modales para cada uno de los botones -->
            <div class="modal fade" id="modalReasignarTarea" tabindex="-1" aria-labelledby="ReasignarTareaLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="headerModal modal-header" style="display: ruby; padding-bottom: 1rem !important;">
                            <h1 class="titleModal modal-title fs-5" id="asignarTareaLabel" style="width: 92% !important">Asígnala a uno de tu equipo</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label for="tareaNombre" class="form-label">Asignar a:</label>
                                    <input type="text" class="form-control" id="tareaNombre" placeholder="Persona a asignar la tarea">
                                </div>
                                <div class="mb-3">
                                    <label for="asignadoA" class="form-label">Asignada Por:</label>
                                    <input type="text" class="form-control" id="asignadoA" placeholder="Quién la asigna">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-dark">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modalAsignarTarea" tabindex="-1" aria-labelledby="AsignarTareaLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="headerModal modal-header" style="display: ruby; padding-bottom: 1rem !important;">
                            <h1 class="titleModal modal-title fs-5" id="asignarTareaLabel" style="width: 92% !important">Añadir a mis solicitudes</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label for="personaEncargada" class="form-label">Persona encargada de la tarea</label>
                                    <input type="text" class="form-control" id="personaEncargada" placeholder="Seleccione la persona encargada">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-dark">Añadir</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modalEstadoTarea" tabindex="-1" aria-labelledby="AsignarTareaLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="headerModal modal-header" style="display: ruby; padding-bottom: 1rem !important;">
                            <h1 class="titleModal modal-title fs-5" id="asignarTareaLabel" style="width: 92% !important">Cambiar estado de la solicitud</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <p>Selecciona el estado de la solicitud</p>
                                    <select name="EstadoSolicitud" id="EstadoSolicitud" class="form-select" aria-label="Default select example">
                                        <option value="" selected disabled>Seleccione</option>
                                        <option value="">En validación por IT</option>
                                        <option value="">Pendiente completar información solicitante</option>
                                        <option value="">Pendiente Autorización</option>
                                        <option value="">Pendiente Aprobación Solicitante</option>
                                        <option value="">Finalizada</option>
                                        <option value="">Finalizada (Por Tiempo)</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-dark">Cambiar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
