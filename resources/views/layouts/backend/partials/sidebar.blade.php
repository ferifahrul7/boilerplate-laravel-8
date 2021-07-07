<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-lg-down-none">
        <div class="c-sidebar-brand-full" alt="{{ config('app.name') }} Logo">
            <div class="row">
                <div class="col-sm-12">
                    <img src="{{ asset('img/profile/logo-new.png') }}" class="img-fluid" style="max-width:100px">
                </div>
            </div>
        </div>
        <svg class="c-sidebar-brand-minimized" width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="{{ asset('coreui/assets/brand/coreui.svg#signet') }}"></use>
        </svg>
    </div>
    <div class="c-sidebar-brand d-lg-none">
        <img src="{{ asset('img/profile/logo-new.png') }}" width="190" height="100">
    </div>
    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('home') }}">
                <i class="c-sidebar-nav-icon c-icon cil-home"></i> Dashboard</a>
        </li>
        @can('read-inventory')
        <li class="c-sidebar-nav-divider"></li>
        <li class="c-sidebar-nav-title">
            Inventaris Management
        </li>
        @endcan

        @can('read-barang')
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('barangs.index') }}">
                <i class="c-sidebar-nav-icon c-icon cil-devices"></i> Barang
            </a>
        </li>
        @endcan

        @can('read-inventory')
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('inventories.index') }}">
                <i class="c-sidebar-nav-icon c-icon cil-money"></i> Inventaris
            </a>
        </li>
        @endcan

        @can('read-kondisi')
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('kondisis.index') }}">
                <i class="c-sidebar-nav-icon c-icon cil-speech"></i> Status Kondisi
            </a>
        </li>
        @endcan

        @can('read-divisi')
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('divisi.index') }}">
                <i class="c-sidebar-nav-icon c-icon cil-institution"></i> Divisi
            </a>
        </li>
        @endcan

        @can('read-anggota')
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('anggota.index') }}">
                <i class="c-sidebar-nav-icon c-icon cil-user"></i> Anggota
            </a>
        </li>
        @endcan

        @can('read-member')
        <li class="c-sidebar-nav-divider"></li>
        <li class="c-sidebar-nav-title">
            Member Management
        </li>
        @endcan

        @can('read-member')
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('member.index') }}">
                <i class="c-sidebar-nav-icon c-icon cil-user"></i> Data Member
            </a>
        </li>
        @endcan

        @can('read-olahsurvey')
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('olahsurvey.index') }}">
                <i class="c-sidebar-nav-icon c-icon cil-user"></i> Data Survey<span class="badge badge-info">NEW</span>
            </a>
        </li>
        @endcan

        @can('read-gallery')
        <li class="c-sidebar-nav-divider"></li>
        <li class="c-sidebar-nav-title">
            Landing Page Management
        </li>
        @endcan
        @can('read-slider')
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('sliders.index') }}">
                <i class="c-sidebar-nav-icon c-icon cil-image-plus"></i> Slider
            </a>
        </li>
        @endcan

        @can('read-about')
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('abouts.index') }}">
                <i class="c-sidebar-nav-icon c-icon cil-info"></i> About
            </a>
        </li>
        @endcan

        @can('read-service')
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('services.index') }}">
                <i class="c-sidebar-nav-icon c-icon cil-industry"></i> Services
            </a>
        </li>
        @endcan

        @can('read-gallery')
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('galleries.index') }}">
                <i class="c-sidebar-nav-icon c-icon cil-animal"></i> Gallery
            </a>
        </li>
        @endcan

        @can('read-partner')
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('partners.index') }}">
                <i class="c-sidebar-nav-icon c-icon cil-thumb-up"></i> Partner
            </a>
        </li>
        @endcan

        @can('read-business')
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('businesses.index') }}">
                <i class="c-sidebar-nav-icon c-icon cil-chart"></i> Business Alliance
            </a>
        </li>
        @endcan


        @can('read-broadcast')
        <li class="c-sidebar-nav-divider"></li>
        <li class="c-sidebar-nav-title">Contact Management</li>
        @endcan

        @can('read-broadcast')
        <li class="c-sidebar-nav-item">
            <a class="c-sidebar-nav-link" href="{{ route('broadcast-email.index') }}">
                <i class="c-sidebar-nav-icon cil-envelope-closed"></i> Broadcast Email
            </a>
        </li>
        @endcan

        @can('read-user')
        <li class="c-sidebar-nav-divider"></li>
        <li class="c-sidebar-nav-title">Setting</li>
        @endcan
        <li class="c-sidebar-nav-item c-sidebar-nav-dropdown">

            @can('read-user')
            <a class="c-sidebar-nav-dropdown-toggle" href="#">
                <i class="c-sidebar-nav-icon c-icon cil-star"></i> Users and Roles
            </a>
            @endcan
            <ul class="c-sidebar-nav-dropdown-items">

                @can('read-role')
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link" href="{{ route('roles.index') }}" target="_top">
                        <i class="c-sidebar-nav-icon c-icon cil-settings"> </i>Manage Roles
                    </a>
                </li>
                @endcan

                @can('read-user')
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="{{ route('users.index') }}" target="_top">
                        <i class="c-sidebar-nav-icon c-icon cil-user"> </i>Manage User
                    </a>
                </li>
                @endcan
            </ul>
        </li>
    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div>