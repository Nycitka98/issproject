<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
  <div class="container-fluid">
    <a class="navbar-brand">{{ config('app.name', 'Systém') }}</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link"  href="/sklad">Sklad</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/zamestnanci">Zamestnanci</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/ekonomika">Ekonomika</a>
        </li>
      </ul>
      
      <div class="dropdown text-end">
        <x-dropdown align="right" width="20">
            <x-slot name="trigger">
                <button type="button" class="btn btn-dark" >
                    <div>{{ Auth::user()->name }}</div> 
                </button>
            </x-slot>
        
            <x-slot name="content">
                <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                         @csrf
                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();" class="btn btn-white" >
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </x-slot>
        </x-dropdown>
    </div>  
</div>
 </div>  
</nav>

