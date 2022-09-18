<style>
    .map-container {
        height: 200px;
        position: relative;
    }

    .map-container iframe {
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        position: absolute;
    }
</style>

<h3 class="font-weight-bold orange-text text-center mt-5"><i class="fas fa-search-location"></i> {{ $description }} </h3>

<div id="map-container-google-1" class="z-depth-1 map-container mb-5 mt-5">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.5796777800592!2d-46.539085784496024!3d-23.439546062991475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef51fbefbd5d1%3A0xe5c9bad8386c089f!2sAv.%20Salgado%20Filho%2C%203501%20-%20Centro%2C%20Guarulhos%20-%20SP%2C%2007115-000%2C%20Brasil!5e0!3m2!1spt-BR!2sus!4v1663465779557!5m2!1spt-BR!2sus"
        frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
