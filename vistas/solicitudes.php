<div class="section-solicitudes">
  <div class="container-solicitudes text-center">
    <div class="title">
      <h4>¡Consulta todas tus solicitudes!</h4>
    </div>
    <div class="search-container">
      <form class="d-flex justify-content-center">
        <input 
          class="form-control me-2 text-center w-50" 
          type="search" 
          placeholder="Buscar solicitudes..." 
          aria-label="Buscar">
        <button class="btn btn-warning" type="submit">Buscar</button>
      </form>
    </div>
    <div class="table table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Fecha</th>
            <th scope="col">Ticket</th>
            <th scope="col">Colaborador</th>
            <th scope="col">Categoría</th>
            <th scope="col">Estado</th>
            <th scope="col">Detalles</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>28/11/2024</td>
            <td>MA -IT-97.1_202</td>
            <td>Juan David Cañas</td>
            <td>Correo</td>
            <td><span class="badge rounded-pill text-bg-warning">En Proceso</span></td>
            <td><a class="nav-link" href="/mesa_it/detalles"><button class="btn btn-light">Detalles</button></a></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>28/11/2024</td>
            <td>MA -IT-97.1_202</td>
            <td>Juan David Cañas</td>
            <td>Periféricos</td>
            <td><span class="badge rounded-pill text-bg-danger">Pendiente</span></td>
            <td><a class="nav-link" href="/mesa_it/detalles"><button class="btn btn-light">Detalles</button></a></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>28/11/2024</td>
            <td>MA -IT-97.1_202</td>
            <td>Juan David Cañas</td>
            <td>Windows</td>
            <td><span class="badge rounded-pill text-bg-success">Finalizada</span></td>
            <td><a class="nav-link" href="/mesa_it/detalles"><button class="btn btn-light">Detalles</button></a></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="back">
      <a class="btn-style nav-link"aria-current="page" href="/mesa_it/home">Volver</a>
    </div>
  </div>
</div>
