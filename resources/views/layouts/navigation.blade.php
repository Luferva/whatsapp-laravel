<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="" class="brand-link text-center">
        <span class="brand-text font-weight-light">
            <i class="fa-brands fa-whatsapp"></i>
            MyWhatsapp
        </span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            </div>
        </div>
        <nav class="mt-2" x-data>
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="{{ route('whatsapp.messages') }}" class="nav-link @if(request()->routeIs('whatsapp.messages')) active @endif">
                        <i class="fa-solid fa-comments"></i> 
                        <p>Mensagens</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('contacts.list') }}" class="nav-link @if(request()->routeIs('contacts.list')) active @endif">
                        <i class="fa-solid fa-address-book"></i> 
                        <p>Contatos</p>
                    </a>
                </li>
                
                <li class="nav-header">Administrador</li>

                <li class="nav-item">
                    <a href="../calendar.html" class="nav-link">
                        <i class="fa-solid fa-user-tie"></i> 
                        <p>Sei la</p>
                    </a>
                </li>
            </ul>
        </nav>

    </div>

</aside>
