<!doctype html>
<html lang="en">
    <head>
        <title>Formulari</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <form action="/crearArxiu" method="POST" enctype="multipart/form-data" name="form">
            @csrf
            <div class="col-12">
                <label for="Nom" class="form-label">Nom</label>
                <input type="text" class="form-control" name="Nom" id="Nom" required>
            </div>
            <div class="col-12">
                <label for="Descripcio" class="form-label">Descripció</label>
                <input type="text" class="form-control" name="Descripcio" id="Descripcio" required>
            </div>
            <div class="col-12">
                <label for="Preu" class="form-label">Preu</label>
                <input type="number" class="form-control" name="Preu" id="Preu" required>
            </div>
            <div class="col-12">
                <label for="IVA" class="form-label">% IVA</label>
                <input type="number" class="form-control" name="IVA" id="IVA" placeholder="Si no s'indica es posarà 21% automàticament">
            </div>
            <div class="col-12">
                <label for="Color" class="form-label">Color</label>
                <input type="text" class="form-control" name="Color" id="Color" required>
            </div>
            <div class="col-12">
                <label for="Talla" class="form-label">Talla</label>
                <input type="text" class="form-control" name="Talla" id="Talla" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
