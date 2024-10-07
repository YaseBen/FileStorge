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
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <div class="row g-3">
                <form action="crearArxiu" method="post" enctype="multiplart/form-data">
                    @csrf
                    <div class="col-12">
                        <label for="exampleInputEmail1" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="Nom">
                    </div>
                    <div class="col-12">
                        <label for="exampleInputEmail1" class="form-label">Descripció</label>
                        <input type="text" class="form-control" id="Descripcio">
                    </div>
                    <div class="col-12">
                        <label for="exampleInputEmail1" class="form-label">Preu </label>
                        <input type="number" class="form-control" id="Preu" placeholder="Insereix el preu sense IVA">
                    </div>
                    <div class="col-12">
                        <label for="exampleInputEmail1" class="form-label">% IVA </label>
                        <input type="number" class="form-control" id="IVA" placeholder="Si no s'indica es posara 21% automaticament">
                    </div>
                    <div class="col-12">
                        <label for="exampleInputEmail1" class="form-label">Color</label>
                        <input type="text" class="form-control" id="P_IVA">
                    </div>
                    <div class="col-12">
                        <label for="exampleInputEmail1" class="form-label">Talla</label>
                        <input type="text" class="form-control" id="Talla">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
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
