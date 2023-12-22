{{-- resources/views/partials/inventory-overview.blade.php --}}
<div class="inventory-overview card shadow-sm mb-4">
    <div class="card-body">
        <h3 class="card-title">Inventory Overview</h3>
        <p class="card-text">Quick stats on your current stock.</p>
        <!-- Placeholders for dynamic data -->
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="stat-box">
                    <h4>Total Medicines</h4>
                    <p>{{ $totalMedicines ?? 'Loading...' }}</p>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="stat-box">
                    <h4>Low Stock</h4>
                    <p>{{ $lowStockMedicines ?? 'Loading...' }}</p>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="stat-box">
                    <h4>Out of Stock</h4>
                    <p>{{ $outOfStockMedicines ?? 'Loading...' }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
