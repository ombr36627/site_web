<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Témoignages</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php include 'header.php'; ?>

    <main class="container mt-5">
        <section id="temoignages" class="mt-5">
            <h2 class="text-center mb-4">Témoignages</h2>
            <div class="carousel slide" id="testimonialCarousel" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <blockquote class="blockquote text-center">
                            <p class="mb-4">"Grâce au BUT RT, j'ai intégré une grande école d'ingénieurs et je travaille maintenant chez un opérateur télécom."</p>
                            <footer class="blockquote-footer">Amina</footer>
                        </blockquote>
                    </div>
                    <div class="carousel-item">
                        <blockquote class="blockquote text-center">
                            <p class="mb-4">"Les certifications comme AWS et Cisco m'ont permis de décrocher un poste de consultant cloud en moins d'un an."</p>
                            <footer class="blockquote-footer">Karim</footer>
                        </blockquote>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
