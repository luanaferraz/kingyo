
<!-- Sidebar - Brand -->
<a class=" d-flex align-items-center justify-content-center" href="{{ url('/profissional') }}">
    <div class="mx-3"> <img src="/images/kingyo.png" class="img-fluid sidebar-brand-img"> </div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="{{ url('/profissional') }}">
        <i class="fas fa-paw"></i>
        <span>Home</span></a>
</li>

<li class="nav-item active">
    <a class="nav-link" href="{{ url('/profissional/agenda') }}">
        <i class="far fa-calendar-alt"></i>
        <span>Agenda</span></a>
</li>


<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Menu
</div>

<li class="nav-item {{ Request::is('eventoProfissional*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('eventoProfissional.index') !!}">
        <i class="fas fa-fw fa-table"></i>
        <span>Agenda</span></a>
</li>

<li class="nav-item {{ Request::is('servicos*') ? 'active' : '' }}">
    <a class="nav-link" href="{!! route('servicos.index') !!}">
        <i class="fas fa-fw fa-table"></i>
        <span>Serviços</span></a>
</li>



