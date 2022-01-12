
<div class="quixnav">
    @if(Auth::user()->hasVerifiedEmail())
    <div class="quixnav-scroll">
        <ul class="metismenu">
            <li><a href="{{route('landing')}}" aria-expanded="false">
                    <i class="fas fa-tachometer-alt"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
        </ul>
        <ul class="metismenu">
            <li>
                <a href="widget-basic.html" aria-expanded="false">
                    <i class="fas fa-user-graduate"></i>
                    <span class="nav-text">Parents/Adults</span>
                </a>
            </li>
        </ul>

        <ul class="metismenu">
            <li>
                <a href="widget-basic.html" aria-expanded="false">
                    <i class="fas fa-map-marker-alt"></i>
                    <span class="nav-text">Locations</span>
                </a>
            </li>
        </ul>
        <ul class="metismenu">
            <li>
                <a href="widget-basic.html" aria-expanded="false">
                    <i class="fas fa-users"></i>
                    <span class="nav-text">Players</span>
                </a>
            </li>
        </ul>
        <ul class="metismenu">
            <li>
                <a href="widget-basic.html" aria-expanded="false">
                    <i class="fas fa-joint"></i>
                    <span class="nav-text">Coaches</span>
                </a>
            </li>
        </ul>
        <ul class="metismenu">
            <li>
                <a href="widget-basic.html" aria-expanded="false">
                    <i class="fas fa-sitemap"></i>
                    <span class="nav-text">Team</span>
                </a>
            </li>
        </ul>
        <ul class="metismenu">
            <li>
                <a href="widget-basic.html" aria-expanded="false">
                    <i class="fas fa-donate"></i>
                    <span class="nav-text">Finance</span>
                </a>
            </li>
        </ul>
        <ul class="metismenu">
            <li>
                <a href="widget-basic.html" aria-expanded="false">
                    <i class="fas fa-user-tag"></i>
                    <span class="nav-text">Roles Team</span>
                </a>
            </li>
        </ul>
        <ul class="metismenu">
            <li>
                <a href="widget-basic.html" aria-expanded="false">
                    <i class="fab fa-uikit"></i>
                    <span class="nav-text">kits</span>
                </a>
            </li>
        </ul>

    </div>
    @endif
</div>

