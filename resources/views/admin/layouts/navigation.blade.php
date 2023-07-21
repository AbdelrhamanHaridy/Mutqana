<div class="card card-sidebar-mobile">
    <ul class="nav nav-sidebar" data-nav-type="accordion">
        <!-- Main -->
        <li class="nav-item-header mt-0"><div class="text-uppercase font-size-xs line-height-xs">قائمة التنقل والإعدادت</div> <i class="icon-menu" title="قائمة التنقل والإعدادت"></i></li>

        <li class="nav-item">
            <a href="{{url('/')}}" class="nav-link" target="_blank">
                <i class="icon-home5"></i>
                <span>زيارة الموقع</span>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{route('admin.index')}}" class="nav-link {{active()->route('admin.index')}}">
                <i class="icon-home4"></i>
                <span>لوحة التحكم</span>
            </a>
        </li>

        <li class="nav-item-header mt-0">
            <div class="text-uppercase font-size-xs line-height-xs">  شريط التنقل </div><i class="icon-menu" title="Main"></i>
        </li>

        <li class="nav-item nav-item-submenu @if(active()->route('users.*')) nav-item-expanded nav-item-open @endif">
            <a href="{{route('users.index')}}" class="nav-link {{active()->route('users.*')}}">
                <i class="icon-users4"></i>
                <span> المستخدمين</span>
            </a>
            <ul class="nav nav-group-sub" data-submenu-title="المستخدمين ">
                <li class="nav-item"><a href="{{route('users.index')}}" class="nav-link {{active()->route('users.index')}}"><i class="icon-users4" ></i><span><span> جميع المستخدمين</span></span></a></li>
                <li class="nav-item"><a href="{{route('users.create')}}" class="nav-link {{active()->route('users.create')}}"><i class="icon-user-plus" ></i><span> إنشاء مستخدم جديد </span></a></li>
            </ul>
        </li>

        <li class="nav-item nav-item-submenu @if(active()->route('categories.*')) nav-item-expanded nav-item-open @endif">
            <a href="{{route('categories.index')}}" class="nav-link {{active()->route('categories.*')}}">
                <i class="icon-grid6"></i>
                <span>الأقسام</span>
            </a>
            <ul class="nav nav-group-sub" data-submenu-title="الأقسام">
                <li class="nav-item"><a href="{{route('categories.index')}}" class="nav-link {{active()->route('categories.index')}}"><i class="icon-grid6" ></i><span> جميع الأقسام </span></a></li>
                <li class="nav-item"><a href="{{route('categories.create')}}" class="nav-link {{active()->route('categories.create')}}"><i class="icon-plus22" ></i><span> إنشاء أقسام جديدة  </span></a></li>
            </ul>
        </li>

        <li class="nav-item nav-item-submenu @if(active()->route('tags.*')) nav-item-expanded nav-item-open @endif">
            <a href="{{route('tags.index')}}" class="nav-link {{active()->route('tags.*')}}">
                <i class="icon-price-tag2"> </i>
                <span>العلامات</span>
            </a>
            <ul class="nav nav-group-sub" data-submenu-title="العلامات">
                <li class="nav-item"><a href="{{route('tags.index')}}" class="nav-link {{active()->route('tags.index')}}"><i class="icon-price-tag2" ></i><span>جميع العلامات</span></a></li>

                <li class="nav-item"><a href="{{route('tags.create')}}" class="nav-link {{active()->route('tags.create')}}"><i class="icon-plus22" ></i><span>إنشاء علامات جديدة</span></a></li>
            </ul>
        </li>

        <li class="nav-item nav-item-submenu @if(active()->route('icons.*')) nav-item-expanded nav-item-open @endif">
            <a href="{{route('icons.index')}}" class="nav-link {{active()->route('icons.*')}}">
                <i class="icon-thumbs-up3"></i>
                <span>الأيقونات</span>
            </a>
            <ul class="nav nav-group-sub" data-submenu-title="الأيقونات">
                <li class="nav-item"><a href="{{route('icons.index')}}" class="nav-link {{active()->route('icons.index')}}"><i class="icon-thumbs-up3"></i><span>جميع الأيقونات</span></a></li>
                <li class="nav-item"><a href="{{route('icons.create')}}" class="nav-link {{active()->route('icons.create')}}"><i class="icon-plus22" ></i><span>إنشاء الأيقونات جديد</span></a></li>
            </ul>
        </li>

        <li class="nav-item nav-item-submenu @if(active()->route('articles.*')) nav-item-expanded nav-item-open @endif">
            <a href="{{route('articles.index')}}" class="nav-link {{active()->route('articles.*')}}">
                <i class="icon-file-text3"></i>
                <span>المقالات</span>
            </a>
            <ul class="nav nav-group-sub" data-submenu-title="المقالات">
                <li class="nav-item"><a href="{{route('articles.index')}}" class="nav-link {{active()->route('articles.index')}}"><i class="icon-file-text3" ></i><span>جميع المقالات</span></a></li>
                <li class="nav-item"><a href="{{route('articles.create')}}" class="nav-link {{active()->route('articles.create')}}"><i class="icon-file-plus2" ></i><span>إنشاء مقالة جديد</span></a></li>
            </ul>
        </li>

        <li class="nav-item nav-item-submenu @if(active()->route('services.*')) nav-item-expanded nav-item-open @endif">
            <a href="{{route('services.index')}}" class="nav-link {{active()->route('services.*')}}">
                <i class="icon-wrench3"></i>
                <span>الخدمات</span>
            </a>
            <ul class="nav nav-group-sub" data-submenu-title="الخدمات">
                <li class="nav-item"><a href="{{route('services.index')}}" class="nav-link {{active()->route('services.index')}}"><i class="icon-wrench3" ></i><span>جميع الخدمات</span></a></li>
                <li class="nav-item"><a href="{{route('services.create')}}" class="nav-link {{active()->route('services.create')}}"><i class="icon-aid-kit" ></i><span>إنشاء خدمة جديده</span></a></li>
            </ul>
        </li>


        <li class="nav-item nav-item-submenu @if(active()->route('testimonials.*')) nav-item-expanded nav-item-open @endif">
            <a href="{{route('testimonials.index')}}" class="nav-link {{active()->route('testimonials.*')}}">
                <i class="icon-comment-discussion"></i>
                <span>الشهادات والتوصيات</span>
            </a>
            <ul class="nav nav-group-sub" data-submenu-title="الشهادات والتوصيات">
                <li class="nav-item"><a href="{{route('testimonials.index')}}" class="nav-link {{active()->route('testimonials.index')}}"><i class="icon-comment-discussion" ></i><span>جميع الشهادات والتوصيات</span></a></li>
                <li class="nav-item"><a href="{{route('testimonials.create')}}" class="nav-link {{active()->route('testimonials.create')}}"><i class="icon-diff-added" ></i><span>إنشاء جديد</span></a></li>
            </ul>
        </li>

        <li class="nav-item nav-item-submenu @if(active()->route('mail.*')) nav-item-expanded nav-item-open @endif">
            <a href="{{route('mail.index')}}" class="nav-link {{active()->route('mail.*')}}">
                <i class="icon-mail5"></i>
                <span>البريد الإلكتروني</span>
            </a>
            <ul class="nav nav-group-sub" data-submenu-title="البريد الإلكتروني">
                <li class="nav-item"><a href="{{route('mail.index')}}" class="nav-link {{active()->route('mail.index')}}"><i class="icon-drawer-in" ></i><span>البريد الوارد</span></a></li>
                <li class="nav-item"><a href="{{route('mail.create')}}" class="nav-link {{active()->route('mail.create')}}"><i class="icon-drawer-out" ></i><span>البريد المرسل</span></a></li>
            </ul>
        </li>
         <!-- /main -->
        <li class="nav-item-header mt-0"><div class="text-uppercase font-size-xs line-height-xs">قائمة الإعدادت</div> <i class="icon-menu" title="Main"></i></li>

        <li class="nav-item nav-item-submenu">
            <a href="{{route('settings.index')}}" class="nav-link {{active()->route('settings.*')}}">
                <i class="icon-cog3"></i>
                <span>الإعدادات</span>
            </a>
            <ul class="nav nav-group-sub" data-submenu-title="الإعدادات">
                @if (count($settings) == 0)
                    <li class="nav-item"><a href="{{route('settings.create')}}" class="nav-link {{active()->route('about.create')}}"><i class="icon-plus2" ></i><span>إنشاء إعدادات</span></a></li>
                @else
                    <li class="nav-item"><a href="{{route('settings.edit',$setting->id)}}" class="nav-link {{active()->route('settings.edit',$setting->id)}}"><i class="icon-pen-plus" ></i><span>تعديل الإعدادات</span></a></li>
                @endif
            </ul>
        </li>

        <li class="nav-item nav-item-submenu">
            <a href="{{route('about.index')}}" class="nav-link {{active()->route('about.*')}}">
                <i class="icon-info3"></i>
                <span>حول الموقع</span>
            </a>
            <ul class="nav nav-group-sub" data-submenu-title="حول الموقع">
                @if (count($about) == 0)
                    <li class="nav-item"><a href="{{route('about.create')}}" class="nav-link {{active()->route('about.create')}}"><i class="icon-plus2" ></i><span>إنشاء حول الموقع</span></a></li>
                @else
                    <li class="nav-item"><a href="{{route('about.edit',$about_us->id)}}" class="nav-link {{active()->route('about.edit',$about_us->id)}}"><i class="icon-pen-plus" ></i><span>تعديل حول الموقع</span></a></li>
                @endif
            </ul>
        </li>
    </ul>
</div>
