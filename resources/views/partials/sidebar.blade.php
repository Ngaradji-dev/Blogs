    <aside class="sidebar">
        <button type="button" class="sidebar-close-btn"><iconify-icon icon="radix-icons:cross-2"></iconify-icon></button>
        <div>
            <a href="index.html" class="sidebar-logo">
                <img src="assets/images/logo.png" alt="site logo" class="light-logo" />
                <img src="assets/images/logo-light.png" alt="site logo" class="dark-logo" />
                <img src="assets/images/logo-icon.png" alt="site logo" class="logo-icon" />
            </a>
        </div>


        <div class="sidebar-menu-area">
            <ul class="sidebar-menu" id="sidebar-menu">
                <li class="">
                    <a href="{{ route('home') }}">
                        <iconify-icon icon="solar:home-smile-angle-outline" class="menu-icon"></iconify-icon>
                        <span>Tableau de bord</span>
                    </a>
                </li>
                <li class="sidebar-menu-group-title">Modules</li>


                <li class="dropdown">
                    <a href="javascript:void(0)">
                        <iconify-icon icon="ph:folder-duotone" class="menu-icon"></iconify-icon>
                        <span>Catégories</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="{{ route('categorie.index') }}"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Liste</a>
                        </li>
                        <li>
                            <a href="{{ route('categorie.create') }}"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Ajout</a>
                        </li>
                    </ul>
                </li>


                <li class="dropdown">
                    <a href="javascript:void(0)">
                        <iconify-icon icon="ph:article-duotone" class="menu-icon"></iconify-icon>
                        <span>Articles</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="{{ route('article.index') }}">
                                <i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i>Liste</a>
                        </li>
                        <li>
                            <a href="{{ route('article.create') }}"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i>Ajout</a>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="email.html">
                        <iconify-icon icon="mage:email" class="menu-icon"></iconify-icon>
                        <span>Email</span>
                    </a>
                </li>

                <li class="dropdown">
                    <a href="javascript:void(0)">
                        <iconify-icon icon="flowbite:users-group-outline" class="menu-icon"></iconify-icon>
                        <span>Users</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="users-list.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Users List</a>
                        </li>
                        <li>
                            <a href="users-grid.html"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Users Grid</a>
                        </li>
                        <li>
                            <a href="add-user.html"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i> Add User</a>
                        </li>
                        <li>
                            <a href="view-profile.html"><i class="ri-circle-fill circle-icon text-danger-main w-auto"></i> View Profile</a>
                        </li>
                        <li>
                            <a href="users-role-permission.html"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i> User Role & Permission</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="javascript:void(0)">
                        <i class="ri-user-settings-line text-xl me-14 d-flex w-auto"></i>
                        <span>Role & Access</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="role-access.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Role & Access</a>
                        </li>
                        <li>
                            <a href="assign-role.html"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Assign Role</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-menu-group-title">Application</li>

                <li class="dropdown">
                    <a href="javascript:void(0)">
                        <iconify-icon icon="simple-line-icons:vector" class="menu-icon"></iconify-icon>
                        <span>Authentication</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="sign-in.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Sign In</a>
                        </li>
                        <li>
                            <a href="sign-up.html"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Sign Up</a>
                        </li>
                        <li>
                            <a href="forgot-password.html"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i> Forgot Password</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="javascript:void(0)">
                        <iconify-icon icon="solar:gallery-wide-linear" class="menu-icon"></iconify-icon>
                        <span>Gallery</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="gallery-grid.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Gallery Grid</a>
                        </li>
                        <li>
                            <a href="gallery.html"><i class="ri-circle-fill circle-icon text-danger-600 w-auto"></i> Gallery Grid Desc</a>
                        </li>
                        <li>
                            <a href="gallery-masonry.html"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i> Gallery Masonry</a>
                        </li>
                        <li>
                            <a href="gallery-hover.html"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i> Gallery Hover Effect</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="javascript:void(0)">
                        <i class="ri-news-line text-xl me-14 d-flex w-auto"></i>
                        <span>Blog</span>
                    </a>
                    <ul class="sidebar-submenu">
                        <li>
                            <a href="blog.html"><i class="ri-circle-fill circle-icon text-primary-600 w-auto"></i> Blog</a>
                        </li>
                        <li>
                            <a href="blog-details.html"><i class="ri-circle-fill circle-icon text-warning-main w-auto"></i> Blog Details</a>
                        </li>
                        <li>
                            <a href="add-blog.html"><i class="ri-circle-fill circle-icon text-info-main w-auto"></i> Add Blog</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="testimonials.html">
                        <i class="ri-star-line text-xl me-14 d-flex w-auto"></i>
                        <span>Testimonial</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>