 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="assets/css/estilos.css" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Academia K-Banillas</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
    <link rel="icon" type="image/png" href="assets/Image/icon.png">
  </head>
  <body class="bg-info d-flex justify-content-center align-items-center vh-100" background="assets/Image/fondo.png">
  <form action="./assets/util/validar.php" method="POST"> 
  <div
      class="bg-white p-5 rounded-5 text-secondary shadow"
      style="width: 25rem"
    >
      <div class="d-flex justify-content-center">
        <img
        src="assets/Image/logo.png"
        alt="logo"
        style="height: 12rem"
      />      </div>
      <div class="text-center fs-1 fw-bold">Bienvenido</div>
      <div class="input-group mt-4">
        <div class="input-group-text bg-info">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
          </svg>
        </div>
        <input
          id="Nombre"
          name="Nombre"
          pattern="[A-Za-Z0-9-@_-]{1,15}"
          class="form-control bg-light"
          type="text"
          placeholder="Nombre de usuario"
        />
      </div>
      <div><br></div>
      <div class="input-group mt-1">
        <div class="input-group-text bg-info">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
            <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
          </svg>
        </div>  
        <input
          id="Contraseña"
          name="Contraseña"
          pattern="[A-Za-Z0-9-@_-]{1,15}"
          class="form-control bg-light"
          type="password"
          placeholder="Contraseña"
        />
      </div>
      <div class="d-flex justify-content-around mt-1">
        <div class="d-flex align-items-center gap-1">
          <input class="form-check-input" type="checkbox" />
          <div class="pt-1" style="font-size: 0.9rem">Recuerdame</div>
        </div>
        <div class="pt-1">
          <a
            href="#"
            class="text-decoration-none text-info fw-semibold fst-italic"
            style="font-size: 0.9rem"
            >¿Olvidaste tu contraseña?</a
          >
        </div>
      </div>
      <div class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm">
      <input type="submit" value="Iniciar sesión" class="btn btn-info text-white">
      </div>
    </div>
     
  </form>
  </body>
</html>
