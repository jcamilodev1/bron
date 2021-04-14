    <?php // opcional 👉👉 get_sidebar(); ?>
    <footer class="footer">
      <div class="footer__container">
        <div class="footer__left">
          <!-- LOGO -->
          <a href="#" class="logo">
            <span class="logo__text">
              Bronquisol
            </span>
          </a>
          <!-- END LOGO -->
        </div>
        <div class="footer__right">
          <span class="footer__goUp">
            Volver arriba
          </span>
        </div>
      </div>
    </footer>
    <?php wp_footer(); ?>
    <!-- scripts before end of body -->
    </body>
    <!-- <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBAZxv_YttToYIQZH5wp8ZITaeq99iu3E0&callback=initMap&libraries=&v=weekly"
      async></script> -->
    <script>
const panoramic = document.querySelector(".panoramic__img");
const container_boxes = document.querySelector(".container--boxes")
const container_products = document.querySelector(".container--products")
const container_map = document.querySelector(".container--map")
const container_text = document.querySelector(".container--text")
const general = document.querySelector(".container--general")
container_boxes.style.visibility = "hidden";
container_products.style.visibility = "hidden";
container_map.style.visibility = "hidden";
container_text.style.visibility = "hidden";
panoramic.addEventListener("click", (e) => {
  console.log(e.offsetX);
  let rango1 = e.offsetX > 750 && e.offsetX < 1000
  let rango2 = e.offsetX > 400 && e.offsetX < 500
  console.log(rango1 || rango2)
  if (rango1 || rango2) {
    if (e.offsetY > 0 && e.offsetY < 600) {

      container_boxes.style.visibility = "visible";
      container_products.style.visibility = "visible";
      container_map.style.visibility = "visible";
      container_text.style.visibility = "visible";
      general.style.height = "auto"
      general.style.overflowY = "visible"

    }
  }

});
    </script>

    </html>