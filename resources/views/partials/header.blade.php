<header>
    {{-- Topbar --}}
    <div class="container-fluid d-flex justify-content-between align-items-center bg-333333">
        <div class="btn-group">
            <button class="btn btn-secondary btn-sm dropdown-toggle fs-12 bg-none border-none" type="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                ไทย
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">ไทย</a></li>
                <li><a class="dropdown-item" href="#">อังกฤษ</a></li>
            </ul>
        </div>
        <div>
            <span class="text-white fs-12">ลงชื่อเข้าใช้</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13"
                 fill="none">
                <path
                    d="M6 7.3125C7.86328 7.3125 9.375 5.6748 9.375 3.65625C9.375 1.6377 7.86328 0 6 0C4.13672 0 2.625 1.6377 2.625 3.65625C2.625 5.6748 4.13672 7.3125 6 7.3125ZM9 8.125H7.70859C7.18828 8.38398 6.60938 8.53125 6 8.53125C5.39062 8.53125 4.81406 8.38398 4.29141 8.125H3C1.34297 8.125 0 9.57988 0 11.375V11.7812C0 12.4541 0.503906 13 1.125 13H10.875C11.4961 13 12 12.4541 12 11.7812V11.375C12 9.57988 10.657 8.125 9 8.125Z"
                    fill="white"/>
            </svg>
        </div>
    </div>

    {{-- Navbar --}}
    <x-navbar/>
</header>
