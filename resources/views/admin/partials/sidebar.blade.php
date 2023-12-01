{{-- link admin  --}}

<aside class="bg-dark">
    {{-- contiene una nav della dashboard  --}}

    <nav>
        <ul class="pt-4">
            <li>
                <a href="{{ route('admin.home')}}">
                    <i class="fa-solid fa-house"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.projects.index')}}">
                    <i class="fa-solid fa-list"></i>
                    <span>Project list</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.technologies.index')}}">
                    <i class="fa-solid fa-gear"></i>
                    <span>Technologies</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.types.index')}}">
                    <i class="fa-regular fa-circle"></i>
                    <span>Types</span>
                </a>
            </li>
        </ul>
    </nav>
</aside>
