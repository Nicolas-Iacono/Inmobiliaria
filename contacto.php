<?php
include 'includes/templates/header.php';
?>
    <main class="contenedor contenedorFormulario">
      <h1>Contacto</h1>

      <form class="formulario" action="">
        <fieldset>
          <legend>Informacion Personal</legend>

          <div class="form-nombreCompleto">
            <div class="conjunto">
              <label for="nombre">Nombre</label>
              <input
                id="nombre"
                type="text"
                name="nombre"
                placeholder="Nombre"
              />
            </div>
            <div class="conjunto">
              <label for="apellido">Apellido</label>
              <input
                id="apellido"
                type="text"
                name="apellido"
                placeholder="Apellido"
              />
            </div>

            <div class="conjunto">
              <label for="telefono">Telefono</label>
              <input
                type="tel"
                id="telefono"
                name="telefono"
                placeholder="11 9999 9999"
              />
            </div>
          </div>
          <div class="conjunto conjuntoEmail">
            <label for="mail" class="labelEmail">Email</label>
            <input class="inputEmail" type="email" name="mail" id="mail" placeholder="Email" />
          </div>
        </fieldset>
        <fieldset>
          <legend>Estoy en busca de</legend>
          <div class="form-enBusca">
            <div>
              <input type="checkbox" name="compra" id="compra" />
              <label for="compra" id="compra">Comprar propiedad</label>
            </div>

            <div>
              <input type="checkbox" name="venta" id="venta" />
              <label for="venta" id="venta">Vender propiedad</label>
            </div>

            <div>
              <input type="checkbox" name="alquiler" id="alquiler" />
              <label for="alquiler" id="alquiler">Alquilar propiedad</label>
            </div>

            <div>
              <input type="checkbox" name="tasar" id="tasar" />
              <label for="tasar" id="tasar">Tasar propiedad</label>
            </div>
          </div>
        </fieldset>

        <fieldset class="fRadio">
          <legend>Quiero que me contacten por</legend>
          <div class="radioForm">
            <div>
              <input type="radio" name="contacto" id="Whatsapp" />
              <label for="Whatsapp" value="Whatsapp">Whatsapp</label>
            </div>
            <div>
              <input type="radio" name="contacto" id="email" />
              <label for="email" value="Email">Email</label>
            </div>
          </div>
        </fieldset>

        <div class="textAreaConjunto">
            <label for="comentario">Mensaje</label>
            <textarea name="comentario" id="" cols="30" rows="10"></textarea>

        </div>
        <div class="botonEnviar">
          <input class="submit boton-verde" type="submit" value="Enviar" />
        </div>
      </form>
    </main>
    <footer>
      <nav>
        <div class="logo">
          <h1 class="logoTitulo logoFooter">
            BIENES<span class="logoTituloSpan logoFooterSpan">RAICES</span>
          </h1>
        </div>

        <div class="navegacion">
          <ul>
            <li><a href="nosotros.html">Nosotros</a></li>
            <li><a href="anuncios.html">Avisos</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="#">Contacto</a></li>
          </ul>
        </div>
      </nav>
    </footer>
  </body>
</html>
