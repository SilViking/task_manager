<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="{{asset('css/app.css')}}" rel = "stylesheet">
    <link href="{{asset('css/style.css')}}" rel = "stylesheet">
    <link href="{{asset('css/side-bar.css')}}" rel = "stylesheet">
    <meta name="csrf-token" content = "{{csrf_token()}}">
    <title>Lojinha</title>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>
<body>
   <div class="wrapper">
        <!-- Sidebar  -->
        
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Task Manager</h3>
            </div>

            <ul class="list-unstyled components">
                <li @if($current == "principal") class = "active" @endif>
                    <a href="/inicial">Página Inicial</a>
                </li>
                <li @if($current == "tarefas") class = "active" @endif>
                    <a href="#tarefasSubmenu"  data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">Tarefas</a>
                    <ul class="collapse list-unstyled" id="tarefasSubmenu">
                        <li>
                            <a href="{{route('tarefas.create')}}" }}>Nova tarefa</a>
                        </li>
                        <li>
                            <a href="{{route('tarefas.index')}}">Listar tarefas</a>
                        </li>                        
                    </ul>
                </li>
                <li @if($current == "tipos") class = "active" @endif >
                    <a href="#tiposSubmenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">Tipos de tarefas</a>
                    <ul class="collapse list-unstyled" id="tiposSubmenu">
                        <li>
                            <a href="{{route('tipos.create')}}">Cadastrar novo tipo de tarefa</a>
                        </li>
                        <li>
                            <a href="{{route('tipos.index')}}">Listar tipos de tarefas</a>
                        </li>
                    </ul>
                </li>
                <li @if($current == "usuarios") class = "active" @endif >
                    <a href="#usuariosSubmenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle">Usuários</a>
                    <ul class="collapse list-unstyled" id="usuariosSubmenu">
                        <li>
                            <a href="{{route('usuarios.edit', Auth::user()->id)}}">Editar seu cadastro</a>
                        </li>                     
                        <li>
                            <a href="{{route('usuarios.index')}}">Listar usuarios</a>
                        </li>
                    </ul>
                </li>                                 
            </ul>
            <div>
                <a class="btn btn-danger" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Sair') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
            </div>
            
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                    <!--
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                        </ul>
                    </div>
                    -->
                </div>
            </nav>           
            

            @hasSection('body')
                 @yield('body')
            @endif
        </div>
    </div>
    <script src="{{asset('js/app.js')}}" type = "text/javascript"></script>
    <script src="{{asset('js/side-bar.js')}}" type = "text/javascript"></script>
 
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>

</body>
</html>