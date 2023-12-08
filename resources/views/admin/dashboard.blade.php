<x-app>
    <div class="p-5 text-center bg-body-tertiary">
        <div class="container py-5">
            <h1 class="text-body-emphasis fw-semibold">Selamat datang <span
                    class="badge bg-success">{{ Auth::user()->name }}</span> anda sebagai <br>
                Administrator
            </h1>
            <p class="col-lg-8 mx-auto lead">
                Saat ini anda berada di Halaman Administrator yang memungkinkan untuk menulis artikel terbaru
            </p>
        </div>
    </div>

</x-app>
