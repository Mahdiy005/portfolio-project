<aside class="bg-white shadow sidebar-left border-right" id="leftSidebar" data-simplebar>
    <a href="#" class="mt-3 ml-2 btn collapseSidebar toggle-btn d-lg-none text-muted" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
        <!-- nav bar -->
        <div class="mb-4 w-100 d-flex">
            <a class="mx-auto mt-2 text-center navbar-brand flex-fill" href="index.html">
                <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120"
                    xml:space="preserve">
                    <g>
                        <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                        <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                        <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                    </g>
                </svg>
            </a>
        </div>

        <x-tab-bar-button :link="route('dashboard.index')" icon="fe-home">{{ __('messages.home') }}</x-tab-bar-button>

        <p class="mt-4 mb-1 text-muted nav-heading">
            <span>{{ __('messages.components') }}</span>
        </p>
        <x-tab-bar-button :link="route('dashboard.services.index')" icon="fe-layers">{{ __('messages.services') }}</x-tab-bar-button>
        <x-tab-bar-button :link="route('dashboard.features.index')" icon="fe-bookmark">{{ __('messages.features') }}</x-tab-bar-button>
        <x-tab-bar-button :link="route('dashboard.messages.index')" icon="fe-file-text">{{ __('messages.messages') }}</x-tab-bar-button>
        <x-tab-bar-button :link="route('dashboard.subscribers.index')" icon="fe-share-2">{{ __('messages.subscribers') }}</x-tab-bar-button>
        <x-tab-bar-button :link="route('dashboard.testimonials.index')" icon="fe-list">{{ __('messages.testimonials') }}</x-tab-bar-button>
        <x-tab-bar-button :link="route('dashboard.settings.index')" icon="fe-settings">{{ __('messages.settings') }}</x-tab-bar-button>
    </nav>
</aside>
