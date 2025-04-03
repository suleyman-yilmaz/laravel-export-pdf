<!-- Offcanvas Panel -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasForm" aria-labelledby="offcanvasFormLabel">
    <div class="offcanvas-header">
        <h5 id="offcanvasFormLabel">Veri Girişi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Kapat"></button>
    </div>
    <div class="offcanvas-body">
        <form action="{{ route('data.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Ad</label>
                <input type="text" class="form-control" name="name" placeholder="Adınızı girin">
            </div>
            <div class="mb-3">
                <label for="surname" class="form-label">Soyad</label>
                <input type="text" class="form-control" name="surname" placeholder="Soyadınızı girin">
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Yaş</label>
                <input type="number" class="form-control" name="age" placeholder="Yaşınızı girin">
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">Şehir</label>
                <input type="text" class="form-control" name="city" placeholder="Şehir adını girin">
            </div>
            <button type="submit" class="btn btn-primary">Ekle</button>
        </form>
    </div>
</div>
