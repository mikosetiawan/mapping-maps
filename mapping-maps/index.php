<!DOCTYPE html>
<html>

<head>
    <title>OpenStreetMap Integration</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>



    <style>
        /* Atur ukuran peta sesuai kebutuhan Anda */
        #map {
            width: 100%;
            height: 350px;
        }
    </style>

</head>

<body>
    <div class="container py-5 px-5">
        <div class="text-center">
            <h1>LOKASI RUMAH SAKIT DI CILEGON</h1>
            <p>MAPPING MAPS</p>
        </div>
        <div class="sticky-top">
            <div id="map" class="shadow rounded-4"></div>
        </div>
        <div class="card my-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <h5>RS TONGGAK HUSADA</h5>
                        <p>Desa Tunggak, Jl. Bojonegara No.8, Kertasana, Kec. Bojonegara, Kota Cilegon, Banten 42454</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card my-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <h5>Rumah Sakit Kurnia Cilegon</h5>
                        <p>Jl. Jombang Masjid No.4, Jombang Wetan, Kec. Jombang, Kota Cilegon, Banten 42411</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card my-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <h5>RSUD Kota Cilegon</h5>
                        <p>Jl. Kapt. Piere Tendean No.KM.3, Panggung Rawi, Kec. Jombang, Kota Cilegon, Banten 42412</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card my-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <h5>RS Citra Sundari</h5>
                        <p>Jl. Temu Putih No.100, Jombang Wetan, Kec. Jombang, Kota Cilegon, Banten 42411</p>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <script>
        var locations = [
            ["RS TONGGAK HUSADA", -5.995736, 106.076394],
            ["Rumah Sakit Kurnia Cilegon", -6.017292, 106.052053],
            ["RSUD Kota Cilegon", -6.002122, 106.066565],
            ["RS Citra Sundari", -6.017493, 106.049958]
        ];

        var map = L.map('map').setView([-6.0190439991503775, 106.05389126998232], 13);
        mapLink =
            '<a href="http://openstreetmap.org">OpenStreetMap</a>';
        L.tileLayer(
            'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; ' + mapLink + ' Contributors',
                maxZoom: 18,
            }).addTo(map);

        for (var i = 0; i < locations.length; i++) {
            marker = new L.marker([locations[i][1], locations[i][2]])
                .bindPopup(locations[i][0])
                .addTo(map);
        }
    </script>



</body>

</html>