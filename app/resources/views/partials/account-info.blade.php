{{-- resources/views/partials/account-info.blade.php --}}

<div class="medicine-info">
    <h3 class="mb-4">Medicine Stock</h3>
    <div class="medicine-list" style="height: 600px; overflow-y: auto;">
        @foreach ($medicines as $medicine)
        <div class="card mb-3" style="max-width: 500px;"> 
            <div class="row g-0">
                <div class="col-md-4 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('storage/medicines/' . $medicine->Name . '.png') }}" alt="{{ $medicine->Name }}" class="img-fluid rounded-start" style="max-height: 100px;"> <!-- Adjust max-height as needed -->
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $medicine->Name }}</h5>
                        <p class="card-text"><strong>Manufacturer:</strong> {{ $medicine->Manufacturer }}</p>
                        <p class="card-text"><strong>Therapeutic Class:</strong> {{ $medicine->TherapeuticClass }}</p>
                        <p class="card-text"><strong>Description:</strong> {{ $medicine->Description }}</p>
                        <p class="card-text"><strong>Unit Price:</strong> ${{ number_format($medicine->UnitPrice, 2) }}</p>
                        <p class="card-text">
                            <strong>Stock Quantity:</strong>
                            <span class="{{ $medicine->StockQuantity < 10 ? 'text-danger' : '' }}">
                                {{ $medicine->StockQuantity }}
                            </span>
                        </p>
                        <p class="card-text"><small class="text-muted">Expiry Date: {{ $medicine->ExpiryDate->toFormattedDateString() }}</small></p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var searchInput = document.querySelector('#search-medicine-input');
    var medicineList = document.querySelector('.medicine-list');

    searchInput.addEventListener('keyup', function (e) {
        var searchQuery = e.target.value.toLowerCase();

        medicineList.childNodes.forEach(function (card) {
            var medicineName = card.querySelector('.card-title').textContent.toLowerCase();
            if (medicineName.includes(searchQuery)) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    });
});
</script>
