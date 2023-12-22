{{-- resources/views/partials/expiry-tracking.blade.php --}}
<div class="expiry-tracking card shadow-sm mb-4">
    <div class="card-body">
        <h3 class="card-title">Expiry Tracking</h3>
        <p class="card-text">Monitor medicines nearing their expiry dates.</p>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Expiry Date</th>
                        <th>Days Remaining</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($medicinesExpiringSoon as $medicine)
                        <tr>
                            <td>{{ $medicine->Name }}</td>
                            <td>{{ $medicine->ExpiryDate->format('Y-m-d') }}</td>
                            <td>{{ $medicine->ExpiryDate->diffInDays(now()) }} days</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
