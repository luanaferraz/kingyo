
{{-- <li class="nav-item {{ Request::is('tutors*') ? 'active' : '' }}">--}}
{{--        <a class="nav-link" href="{!! route('tutors.index') !!}">--}}
{{--            <i class="fas fa-fw fa-table"></i>--}}
{{--            <span>Tutors</span></a>--}}
{{--    </li>--}}
{{-- <li class="nav-item {{ Request::is('eventoPets*') ? 'active' : '' }}">--}}
{{--        <a class="nav-link" href="{!! route('eventoPets.index') !!}">--}}
{{--            <i class="fas fa-fw fa-table"></i>--}}
{{--            <span>Evento</span></a>--}}
{{--    </li>--}}

{{-- <li class="nav-item {{ Request::is('pets*') ? 'active' : '' }}">--}}
{{--        <a class="nav-link" href="{!! route('pets.index') !!}">--}}
{{--            <i class="fas fa-fw fa-table"></i>--}}
{{--            <span>Pet</span></a>--}}
{{--    </li>--}}
{{-- <li class="nav-item {{ Request::is('vacinas*') ? 'active' : '' }}">--}}
{{--        <a class="nav-link" href="{!! route('vacinas.index') !!}">--}}
{{--            <i class="fas fa-fw fa-table"></i>--}}
{{--            <span>Vacinas</span></a>--}}
{{--    </li>--}}
{{-- <li class="nav-item {{ Request::is('petdocs*') ? 'active' : '' }}">--}}
{{--        <a class="nav-link" href="{!! route('petdocs.index') !!}">--}}
{{--            <i class="fas fa-fw fa-table"></i>--}}
{{--            <span>Documentos</span></a>--}}
{{--    </li>--}}
{{-- <li class="nav-item {{ Request::is('pets*') ? 'active' : '' }}">--}}
{{--        <a class="nav-link" href="{!! route('pets.index') !!}">--}}
{{--            <i class="fas fa-fw fa-table"></i>--}}
{{--            <span>Pet</span></a>--}}
{{--    </li>--}}
{{-- <li class="nav-item {{ Request::is('vacinas*') ? 'active' : '' }}">--}}
{{--        <a class="nav-link" href="{!! route('vacinas.index') !!}">--}}
{{--            <i class="fas fa-fw fa-table"></i>--}}
{{--            <span>Vacinas</span></a>--}}
{{--    </li>--}}
{{-- <li class="nav-item {{ Request::is('petdocs*') ? 'active' : '' }}">--}}
{{--        <a class="nav-link" href="{!! route('petdocs.index') !!}">--}}
{{--            <i class="fas fa-fw fa-table"></i>--}}
{{--            <span>Petdocs</span></a>--}}
{{--    </li>--}}
{{-- <li class="nav-item {{ Request::is('medicacaos*') ? 'active' : '' }}">--}}
{{--        <a class="nav-link" href="{!! route('medicacaos.index') !!}">--}}
{{--            <i class="fas fa-fw fa-table"></i>--}}
{{--            <span>Medicacaos</span></a>--}}
{{--    </li>--}}

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