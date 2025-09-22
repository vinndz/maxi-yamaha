<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maxi Yamaha - Form Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('index-one-page') }}">Maxi Yamaha</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <!-- Background Hero -->
    <!-- <header class="bg-dark text-white text-center py-5" style="background: url('https://picsum.photos/1600/400') center/cover no-repeat;"> -->
    <header class="bg-dark text-white text-center d-flex align-items-center justify-content-center"
        style="background: url('{{ asset('assets/images/home-page/n-max.jpg') }}') center/cover no-repeat;
               min-height: 400px;">
    <div class="container">
        <h1 class="display-4 fw-bold">Form Data</h1>
        <p class="lead">Isi data Anda untuk bergabung bersama komunitas Maxi Yamaha</p>
    </div>
</header>


    <!-- Form -->
    <section class="py-5">
        <div class="container">
            <div class="card shadow-lg rounded-4 p-4">
                <form method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3">
                        <!-- Name -->
                        <div class="col-md-6">
                            <label for="name" class="form-label fw-bold">Full Name</label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Enter full name" required>
                        </div>

                        <!-- Email -->
                        <div class="col-md-6">
                            <label for="email" class="form-label fw-bold">Email</label>
                            <input type="email" id="email" name="email" class="form-control" placeholder="Enter email" required>
                        </div>

                        <!-- Phone -->
                        <div class="col-md-6">
                            <label for="phone" class="form-label fw-bold">Phone</label>
                            <input type="text" id="phone" name="phone" class="form-control" placeholder="Enter phone number" required>
                        </div>

                        <!-- Instagram -->
                        <div class="col-md-6">
                            <label for="instagram" class="form-label fw-bold">Instagram</label>
                            <input type="text" id="instagram" name="instagram" class="form-control" placeholder="@username">
                        </div>
                    </div>

                    <!-- Upload Image -->
                    <div class="mt-4">
                        <label class="form-label fw-bold">Photo</label>
                        <div id="drop-area" class="border border-2 border-dashed rounded-4 p-5 text-center bg-light"
                            style="cursor: pointer; position: relative;">
                            <i class="bi bi-cloud-arrow-up fs-1 text-primary"></i>
                            <p class="mt-2 mb-0">Drag & Drop image here</p>
                            <small class="text-muted">or click to upload</small>
                            <input type="file" name="image" id="image" accept="image/*"
                                style="position:absolute;top:0;left:0;width:100%;height:100%;opacity:0;cursor:pointer;">
                        </div>
                        <div class="mt-3 text-center">
                            <img id="preview" src="" class="img-fluid rounded-4 shadow" style="max-height: 250px; display:none;" />
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="mt-4 text-center">
                        <button type="submit" class="btn btn-primary btn-lg rounded-4 px-5 shadow">Send Data</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p class="mb-0">&copy; 2025 Maxi Yamaha. All rights reserved.</p>
    </footer>

    <!-- Script -->
    <script>
        const dropArea = document.getElementById('drop-area');
        const fileInput = document.getElementById('image');
        const preview = document.getElementById('preview');

        // Drag highlight
        dropArea.addEventListener('dragover', (e) => {
            e.preventDefault();
            dropArea.classList.add('bg-white');
        });
        dropArea.addEventListener('dragleave', () => {
            dropArea.classList.remove('bg-white');
        });

        // Drop file
        dropArea.addEventListener('drop', (e) => {
            e.preventDefault();
            fileInput.files = e.dataTransfer.files;
            previewFile(fileInput.files[0]);
        });

        // Change file input
        fileInput.addEventListener('change', () => {
            if (fileInput.files.length > 0) {
                previewFile(fileInput.files[0]);
            }
        });

        function previewFile(file) {
            const reader = new FileReader();
            reader.onload = (e) => {
                preview.src = e.target.result;
                preview.style.display = 'block';
            };
            reader.readAsDataURL(file);
        }
    </script>

</body>

</html>
