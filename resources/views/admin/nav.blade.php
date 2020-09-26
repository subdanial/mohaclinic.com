<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container">

        <a class="navbar-brand border border-white px-2" href="#">پنل مدیریت مها </a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
            aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('admin.statics.index')}}">اطلاعات اصلی</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('admin.gallery.edit')}}">گالری تصاویر</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('admin.teammate.index')}}">همکاران</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('admin.category.index')}}">دسته بندی</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('admin.about.edit')}}">درباره </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('admin.post.index')}}">وبلاگ </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('admin.contact.edit')}}">ارتباط </a>
                </li>
                <li class="nav-item active">
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                    <button type="submit" class="nav-link border-white border bg-dark text-white" >خروج</button>
                </form>
                </li>
                <li class="nav-item active">
                    <a class="border border-white mr-2 nav-link" href="{{route('index')}}">مشاهده سایت </a>
                </li>
                
            </ul>

        </div>
    </div>
</nav>