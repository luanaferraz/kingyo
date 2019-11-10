<!-- Sidebar - Brand -->
<a class=" d-flex align-items-center justify-content-center" href="{{ url('/home') }}">
    <div class="mx-3"> <img src="/images/logo.png" class="img-fluid sidebar-brand-img"> </div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="{{ url('/home') }}">
        <i class="fas fa-paw"></i>
        <span>Meus Pets</span></a>
</li>

<li class="nav-item active">
    <a class="nav-link" href="{{ url('/agenda') }}">
        <i class="far fa-calendar-alt"></i>
        <span>Agenda</span></a>
</li>

<li class="nav-item active">
    <a class="nav-link" href="{{ url('/profissionals') }}">
        <i class="fas fa-map-marker-alt"></i>
        <span>Encontre um Profissional</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Pets
</div>

@foreach($petsMenu as $pet)
    <li class="nav-item">
        <a class="nav-link" href="{!! route('pets.show', [$pet->id]) !!}">
            @if($pet->especie == 'Cão')
                <i class="fas fa-dog"></i>
            @elseif($pet->especie == 'Gato')
                <i class="fas fa-cat"></i>
            @elseif($pet->especie == 'Pássaro')
                <i class="fas fa-dove"></i>
            @elseif($pet->especie == 'Peixe')
                <i class="fas fa-fish"></i>
            @else
                <i class="fas fa-bone"></i>
            @endif
            <span>{{$pet->nome}}</span></a>
    </li>
@endforeach
