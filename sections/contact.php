<section class="section-cta" id="cta">
        <div class="container">
          <div class="cta">
            <div class="cta-text-box">
              <h2 class="heading-secondary">Participa en el gran sorteo</h2>
              <p class="cta-text">
                Cuando esten registradas al menos 300 personas, iniciaremos un sorteo en la plataforma
                de instragam y haremos la dinamica en vivo para que sea transparente la decision. Sera un unico premio,
                pronto estaremos publicando, promociones y articulos nuevos por el correo electronico que nos brindes.
                <br>
                Numeros de personas inscritas:
              </p>

              <form action="" method="post" class="cta-form" name="sign-up" netlify>
                <div>
                  <label for="full_name">Nombre completo</label>
                  <input
                    id="full-name"
                    type="text"
                    placeholder="Luis Gonzalez"
                    name="full_name"
                    required
                  />
                </div>

                <div>
                  <label for="email">Correo electronico</label>
                  <input
                    id="email"
                    type="email"
                    placeholder="me@example.com"
                    name="email"
                    required
                  />
                </div>

                <div>
                  <label for="select-where">Donde escuchaste de nosotros?</label>
                  <select id="select-where" name="hear_us" required>
                    <option value="">Por favor, escoge una opcion:</option>
                    <option value="1">Amigos, familiares</option>
                    <option value="2">YouTube video</option>
                    <option value="3">Facebook</option>
                    <option value="4">Instagram</option>
                    <option value="5">Otro</option>
                  </select>
                </div>

                <button style="display:none" class="btn btn--form" name="send">Enviar</button>

                <!-- <input type="checkbox" />
                <input type="number" /> -->
              </form>
            </div>
            <div
              class="cta-img-box"
              role="img"
              aria-label="Woman modeling"
            ></div>
          </div>
        </div>
      </section>