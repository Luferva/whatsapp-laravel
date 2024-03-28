<nav class="navbar bg-success navbar-expand">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="/"><i class="fa-brands fa-whatsapp"></i> MyWhatsapp</a>
        <button class="navbar-toggler" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navbarScroll" 
                aria-controls="navbarScroll" 
                aria-expanded="false" 
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
              <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                  <li class="nav-item">
                      <a class="nav-link text-white" href=""><i class="fa-solid fa-comments"></i> Mensagens</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link text-white" href="{{ route('contacts.list') }}"><i class="fa-solid fa-address-book"></i> Contatos</a>
                  </li>
              </ul>
          </div>
    </div>
</nav>
