<div class="card mb-3">
    <h5 class="card-header bg-success text-white">Billetera Electrónica</h5>
    <div class="card-body">
        <h6 class="card-subtitle text-muted">Detalle</h6>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Saldo Disponible:   <strong>{{ $bill->saldo_disponible }} Ecomonedas</strong></li>
        <li class="list-group-item">Saldo Compras:      <strong>{{ $bill->saldo_compras }} Ecomonedas</strong></li>
        <li class="list-group-item">Saldo Total:        <strong>{{ $bill->saldo_canjes }} Ecomonedas</strong></li>
    </ul>
    <div class="card-body">
        <a href="{{ route('cupones-disponibles') }}" class="card-link text-success font-weight-bold">Compras</a>
        <a href="#" class="card-link text-success font-weight-bold">Historial</a>
    </div>
</div>