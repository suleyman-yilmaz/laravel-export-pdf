<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Veri Tablosu</title>
    <!-- Bootstrap CSS Bağlantısı -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h2 class="mb-4">Örnek Veri Tablosu</h2>

        <!-- Veri Ekle Butonu -->
        <div class="d-flex justify-content-end">
            <button class="btn btn-success mb-3 me-2" data-bs-toggle="offcanvas" data-bs-target="#offcanvasForm"
                aria-controls="offcanvasForm">Veri Ekle</button>
            <a href="{{ route('data.export') }}" class="btn btn-primary mb-3">Veriyi Dışa Aktar</a>
        </div>

        <table class="table table-striped table-bordered mt-3">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Ad</th>
                    <th>Soyad</th>
                    <th>Yaş</th>
                    <th>Şehir</th>
                    <th>İşlemler</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->surname }}</td>
                        <td>{{ $item->age }}</td>
                        <td>{{ $item->city }}</td>
                        <td class="d-flex justify-content-center">
                            <form action="{{ route('data.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="confirm('Silmek istediğinize emin misiniz? Silinen datalar geri getirilemez!!!')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @include('addCanvas')

    <!-- Bootstrap JS ve gerekli JS Bağlantıları -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>
