<div class="app-title">
    <div>
        <h1><i class="bi bi-speedometer"></i> {{ $titulo }} </h1>
        <p>{{ $descricao }}</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
        <li class="breadcrumb-item"><a href="{{ route( $url ) }}">{{ $nomeurl }}</a></li>
    </ul>
</div>