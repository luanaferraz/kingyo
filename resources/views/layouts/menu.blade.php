
{{-- <li class="nav-item {{ Request::is('tutors*') ? 'active' : '' }}">--}}
{{--        <a class="nav-link" href="{!! route('tutors.index') !!}">--}}
{{--            <i class="fas fa-fw fa-table"></i>--}}
{{--            <span>Tutors</span></a>--}}
{{--    </li>--}}
 <li class="nav-item {{ Request::is('eventoPets*') ? 'active' : '' }}">
        <a class="nav-link" href="{!! route('eventoPets.index') !!}">
            <i class="fas fa-fw fa-table"></i>
            <span>Evento</span></a>
    </li>

 <li class="nav-item {{ Request::is('pets*') ? 'active' : '' }}">
        <a class="nav-link" href="{!! route('pets.index') !!}">
            <i class="fas fa-fw fa-table"></i>
            <span>Pet</span></a>
    </li>
