<div class="col-3 col-xl-4 d-lg-none">
    <aside class="profile__sidebar">
        <!-- User -->
        <div class="profile-user">
            <img src="site/assets/img/avatar/avatar-3.png" alt="" class="profile-user__avatar" />
            <h1 class="profile-user__name">{{$user->last_name}} {{$user->first_name}}</h1>
            <p class="profile-user__desc">{{$user->created_at->format('d-m-Y')}}</p>
        </div>

        <!-- Menu 1 -->
        <div class="profile-menu">
            <h3 class="profile-menu__title"></h3>
            <ul class="profile-menu__list">
                <li>
                    <a href="{{route('home.dashboard')}}" class="profile-menu__link">
                        <span class="profile-menu__icon">
                            <img src="site/assets/icons/shield.svg" alt="" class="icon" />
                        </span>
                        Tổng quan
                    </a>
                </li>
                <li>
                    <a href="#!" class="profile-menu__link">
                        <span class="profile-menu__icon">
                            <img src="site/assets/icons/download.svg" alt="" class="icon" />
                        </span>
                        Lịch sử mua
                    </a>
                </li>
                <li>
                    <a href="#!" class="profile-menu__link">
                        <span class="profile-menu__icon">
                            <img src="site/assets/icons/gift-2.svg" alt="" class="icon" />
                        </span>
                        Sản phẩm yêu thích
                    </a>
                </li>
                <li>
                    <a href="#!" class="profile-menu__link">
                        <span class="profile-menu__icon">
                            <img src="site/assets/icons/location.svg" alt="" class="icon" />
                        </span>
                        Địa chỉ
                    </a>
                </li>
                <li>
                    <a href="{{route('home.profile')}}" class="profile-menu__link">
                        <span class="profile-menu__icon">
                            <img src="site/assets/icons/profile.svg" alt="" class="icon" />
                        </span>
                        Cài đặt tài khoản
                    </a>
                </li>
               
            </ul>
        </div>

    </aside>
</div>