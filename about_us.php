<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visi, Misi, dan Profil Perusahaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: #f8f9fa;
        }

        .card {
            background: rgba(255, 255, 255, 0.9);
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            transition: transform 0.3s ease-in-out;
            margin-bottom: 1.5rem;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .card-body {
            padding: 2rem;
        }

        .card-title {
            font-size: 1.5rem;
            font-weight: 700;
        }

        .card-title .bi {
            margin-right: 10px;
        }

        .card-text {
            font-size: 1.1rem;
            margin-bottom: 1rem;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-in {
            animation: fadeIn 1s ease-in-out;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid d-flex justify-content-between">
            <div>
                <img src="./assets/image/logo_prediksi.jpg" class="img-fluid rounded-5" alt="Logo">
            </div>
            <div>
                <a class="navbar-brand" href="index.php"><strong>PREDIKSI CLUB</strong></a>
            </div>
            <div>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample"
                    aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasExampleLabel"><strong>THE PREDIKSI CLUB</strong></h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="profile.php">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="about_us.php">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="product.php">Merchandise</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-5 fade-in">
        <div class="row mt-4 d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center"><i class="bi bi-person-fill"></i> Profile</h3>
                        <p class="card-text text-center">Kami adalah klub motor yang berdedikasi untuk membangun
                            komunitas yang erat, saling mendukung, dan peduli terhadap lingkungan sekitar.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-4">
                    <div class="image-container">
                        <img src="https://cdn1-production-images-kly.akamaized.net/IXOlcsuKm09c59s3Nf4U-16elAU=/1200x1200/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/4356881/original/089660900_1678713660-theprediksi_-13-03-2023-0003.jpg"
                            alt="" />
                        <div class="image-text">PREDIKSI CLUB</div>
                    </div>
                    <div class="image-container mt-4">
                        <img src="https://asset.kompas.com/crops/xrSzVaIxxE_7KHzhBzJUim2fZro=/74x176:586x517/750x500/data/photo/2022/09/05/63160bc299e61.jpg"
                            alt="" />
                        <div class="image-text">PREDIKSI CLUB</div>
                    </div>
                    <div class="image-container mt-4">
                        <img src="https://cdn.antaranews.com/cache/1200x800/2022/09/28/WhatsApp-Image-2022-09-28-at-19.24.23.jpeg"
                            alt="" />
                        <div class="image-text">PREDIKSI CLUB</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image-container">
                        <img src="https://studio.mrngroup.co/storage/app/media/Prambors/Editorial%202/THE%20PREDIKSI-20220915195022.jpg?tr=w-600"
                            alt="" />
                        <div class="image-text">PREDIKSI CLUB</div>
                    </div>
                    <div class="image-container mt-4">
                        <img src="https://akcdn.detik.net.id/visual/2022/09/28/the-prediksi_43.jpeg?w=650&q=90"
                            alt="" />
                        <div class="image-text">PREDIKSI CLUB</div>
                    </div>
                    <div class="image-container mt-4">
                        <img src="https://rockomotif.com/wp-content/uploads/2023/09/rockomotif-komunitas-motor-prediksi.jpg"
                            alt="" />
                        <div class="image-text">PREDIKSI CLUB</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image-container">
                        <img src="https://thumb.viva.id/intipseleb/1265x711/2022/06/29/62bc18042a516-the-prediksi.jpg"
                            alt="" />
                        <div class="image-text">PREDIKSI CLUB</div>
                    </div>
                    <div class="image-container mt-4">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSLHVYjPoUqH16YUno5WTgFEFiVc97Xvk0MIQ&usqp=CAU"
                            alt="" />
                        <div class="image-text">PREDIKSI CLUB</div>
                    </div>
                    <div class="image-container mt-4">
                        <img src="https://studio.mrngroup.co/storage/app/media/Prambors/Editorial%202/The%20Prediksi-20220929123623.jpg?tr=w-600"
                            alt="" />
                        <div class="image-text">PREDIKSI CLUB</div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center"> Visi</h3>
                        <p class="card-text text-center">Menjadi klub motor terdepan yang menginspirasi dan
                            mempromosikan persaudaraan serta kepedulian sosial di antara anggotanya dan masyarakat
                            luas.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center">Misi</h3>
                        <div class="text-center">
                            <p>Mengembangkan dan memperkuat persaudaraan antar anggota.</p>
                            <p>Menyelenggarakan kegiatan sosial dan kemanusiaan secara rutin.</p>
                            <p>Memfasiptasi kegiatan berkendara yang aman dan menyenangkan.</p>
                            <p>Menyediakan pelatihan dan edukasi mengenai keselamatan berkendara.</p>
                            <p>Mengajak masyarakat untuk berpartisipasi dalam kegiatan positif dan bermanfaat.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container text-center mt-5 bg-black text-white py-5">
            <div class="contact-info">
                <h5>Kontak Kami</h5>
                <p>Alamat: Jl. Contoh No. 123, Kota, Negara</p>
                <p>No Telepon: (012) 345-6789</p>
                <p>Fax: (012) 345-6789</p>
                <p>Email: info@prediksiclub.com</p>
            </div>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css"></script>
</body>

</html>