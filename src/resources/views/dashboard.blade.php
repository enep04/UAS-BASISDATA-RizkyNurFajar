<!DOCTYPE html>
<html
    lang="en"
    dir="ltr"
    class="fi min-h-screen"
>
    <head>
        

        <meta charset="utf-8" />
        <meta name="csrf-token" content="TrHmLcSjiUFT5VLQFlYqZn1c1z9euO8rs6oWlVuB" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        
        <title>
            Tags - 
            Laravel
        </title>

        

        <style>
            [x-cloak=''],
            [x-cloak='x-cloak'],
            [x-cloak='1'] {
                display: none !important;
            }

            @media (max-width: 1023px) {
                [x-cloak='-lg'] {
                    display: none !important;
                }
            }

            @media (min-width: 1024px) {
                [x-cloak='lg'] {
                    display: none !important;
                }
            }
        </style>

        <link
            href="http://localhost/css/filament/forms/forms.css?v=3.2.14.0"
            rel="stylesheet"
            data-navigate-track
        />
                <link
            href="http://localhost/css/filament/support/support.css?v=3.2.14.0"
            rel="stylesheet"
            data-navigate-track
        />
    
<style>
    :root {
         --danger-50:254, 242, 242;  --danger-100:254, 226, 226;  --danger-200:254, 202, 202;  --danger-300:252, 165, 165;  --danger-400:248, 113, 113;  --danger-500:239, 68, 68;  --danger-600:220, 38, 38;  --danger-700:185, 28, 28;  --danger-800:153, 27, 27;  --danger-900:127, 29, 29;  --danger-950:69, 10, 10;  --gray-50:250, 250, 250;  --gray-100:244, 244, 245;  --gray-200:228, 228, 231;  --gray-300:212, 212, 216;  --gray-400:161, 161, 170;  --gray-500:113, 113, 122;  --gray-600:82, 82, 91;  --gray-700:63, 63, 70;  --gray-800:39, 39, 42;  --gray-900:24, 24, 27;  --gray-950:9, 9, 11;  --info-50:239, 246, 255;  --info-100:219, 234, 254;  --info-200:191, 219, 254;  --info-300:147, 197, 253;  --info-400:96, 165, 250;  --info-500:59, 130, 246;  --info-600:37, 99, 235;  --info-700:29, 78, 216;  --info-800:30, 64, 175;  --info-900:30, 58, 138;  --info-950:23, 37, 84;  --primary-50:255, 251, 235;  --primary-100:254, 243, 199;  --primary-200:253, 230, 138;  --primary-300:252, 211, 77;  --primary-400:251, 191, 36;  --primary-500:245, 158, 11;  --primary-600:217, 119, 6;  --primary-700:180, 83, 9;  --primary-800:146, 64, 14;  --primary-900:120, 53, 15;  --primary-950:69, 26, 3;  --success-50:240, 253, 244;  --success-100:220, 252, 231;  --success-200:187, 247, 208;  --success-300:134, 239, 172;  --success-400:74, 222, 128;  --success-500:34, 197, 94;  --success-600:22, 163, 74;  --success-700:21, 128, 61;  --success-800:22, 101, 52;  --success-900:20, 83, 45;  --success-950:5, 46, 22;  --warning-50:255, 251, 235;  --warning-100:254, 243, 199;  --warning-200:253, 230, 138;  --warning-300:252, 211, 77;  --warning-400:251, 191, 36;  --warning-500:245, 158, 11;  --warning-600:217, 119, 6;  --warning-700:180, 83, 9;  --warning-800:146, 64, 14;  --warning-900:120, 53, 15;  --warning-950:69, 26, 3;     }
</style>

        <link
            href="http://localhost/css/filament/filament/app.css?v=3.2.14.0"
            rel="stylesheet"
            data-navigate-track
        />
        
            <link rel="preconnect" href="https://fonts.bunny.net">
            <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />
        

        <style>
            :root {
                --font-family: 'Inter';
                --sidebar-width: 20rem;
                --collapsed-sidebar-width: 4.5rem;
            }
        </style>

        
        

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                setTimeout(() => {
                    const activeSidebarItem = document.querySelector('.fi-sidebar-item-active')

                    if (! activeSidebarItem) {
                        return
                    }
                    
                    const sidebarWrapper = document.querySelector('.fi-sidebar-nav')

                    if (! sidebarWrapper) {
                        return
                    }

                    sidebarWrapper.scrollTo(0, activeSidebarItem.offsetTop - (window.innerHeight / 2))
                }, 0)
            })
        </script>

                    <script>
                const theme = localStorage.getItem('theme') ?? 'system'
                if (
                    theme === 'dark' ||
                    (theme === 'system' &&
                        window.matchMedia('(prefers-color-scheme: dark)')
                            .matches)
                ) {
                    document.documentElement.classList.add('dark')
                }
            </script>
        
        
    <!-- Livewire Styles --><style >[wire\:loading][wire\:loading], [wire\:loading\.delay][wire\:loading\.delay], [wire\:loading\.inline-block][wire\:loading\.inline-block], [wire\:loading\.inline][wire\:loading\.inline], [wire\:loading\.block][wire\:loading\.block], [wire\:loading\.flex][wire\:loading\.flex], [wire\:loading\.table][wire\:loading\.table], [wire\:loading\.grid][wire\:loading\.grid], [wire\:loading\.inline-flex][wire\:loading\.inline-flex] {display: none;}[wire\:loading\.delay\.none][wire\:loading\.delay\.none], [wire\:loading\.delay\.shortest][wire\:loading\.delay\.shortest], [wire\:loading\.delay\.shorter][wire\:loading\.delay\.shorter], [wire\:loading\.delay\.short][wire\:loading\.delay\.short], [wire\:loading\.delay\.default][wire\:loading\.delay\.default], [wire\:loading\.delay\.long][wire\:loading\.delay\.long], [wire\:loading\.delay\.longer][wire\:loading\.delay\.longer], [wire\:loading\.delay\.longest][wire\:loading\.delay\.longest] {display: none;}[wire\:offline][wire\:offline] {display: none;}[wire\:dirty]:not(textarea):not(input):not(select) {display: none;}:root {--livewire-progress-bar-color: #2299dd;}[x-cloak] {display: none !important;}</style>
</head>

    <body
        class="fi-body fi-panel-admin min-h-screen bg-gray-50 font-normal text-gray-950 antialiased dark:bg-gray-950 dark:text-white"
    >
        

        <div class="fi-layout flex min-h-screen w-full overflow-x-clip">
                    <div
                x-cloak
                x-data="{}"
                x-on:click="$store.sidebar.close()"
                x-show="$store.sidebar.isOpen"
                x-transition.opacity.300ms
                class="fi-sidebar-close-overlay fixed inset-0 z-30 bg-gray-950/50 transition duration-500 lg:hidden dark:bg-gray-950/75"
            ></div>

            <aside
    x-data="{}"
                        x-cloak="-lg"
            x-bind:class="
                $store.sidebar.isOpen
                    ? 'fi-sidebar-open w-[--sidebar-width] translate-x-0 shadow-xl ring-1 ring-gray-950\/5 rtl:-translate-x-0 dark:ring-white\/10 lg:sticky'                    : 'w-[--sidebar-width] -translate-x-full rtl:translate-x-full lg:sticky'
            "
                class="fi-sidebar fixed inset-y-0 start-0 z-30 flex flex-col h-screen content-start bg-white transition-all dark:bg-gray-900 lg:z-0 lg:bg-transparent lg:shadow-none lg:ring-0 lg:transition-none dark:lg:bg-transparent lg:translate-x-0 rtl:lg:-translate-x-0"
>
    <div class="overflow-x-clip">
        <header
            class="fi-sidebar-header flex h-16 items-center bg-white px-6 ring-1 ring-gray-950/5 dark:bg-gray-900 dark:ring-white/10 lg:shadow-sm"
        >
            <div
                            >
                                    <a href="http://localhost/admin">
                        <!--[if BLOCK]><![endif]-->        <div
            class="fi-logo inline-flex text-xl font-bold leading-5 tracking-tight text-gray-950 dark:text-white"
        >
            Laravel
        </div>
     <!--[if ENDBLOCK]><![endif]-->

            

<!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                    </a>
                            </div>

            
                    </header>
    </div>

    <nav
        class="fi-sidebar-nav flex-grow flex flex-col gap-y-7 overflow-y-auto overflow-x-hidden px-6 py-8"
        style="scrollbar-gutter: stable"
    >
        

        
        <ul class="fi-sidebar-nav-groups -mx-2 flex flex-col gap-y-7">
                            <li
    x-data="{ label: null }"
    data-group-label=""
    class="fi-sidebar-group flex flex-col gap-y-1"
>
    
    <ul
        x-show="! ($store.sidebar.groupIsCollapsed(label) && ($store.sidebar.isOpen || true))"
                x-collapse.duration.200ms
        class="fi-sidebar-group-items flex flex-col gap-y-1"
    >
                    <li
    class="fi-sidebar-item"
>
    <a
        href="http://localhost/admin"
        x-on:click="window.matchMedia(`(max-width: 1024px)`).matches && $store.sidebar.close()"
                class="fi-sidebar-item-button relative flex items-center justify-center gap-x-3 rounded-lg px-2 py-2 outline-none transition duration-75 hover:bg-gray-100 focus-visible:bg-gray-100 dark:hover:bg-white/5 dark:focus-visible:bg-white/5"
    >
                    <!--[if BLOCK]><![endif]-->    <svg class="fi-sidebar-item-icon h-6 w-6 text-gray-400 dark:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
  <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"/>
</svg> <!--[if ENDBLOCK]><![endif]-->
        
        
        <span
                        class="fi-sidebar-item-label flex-1 truncate font-medium text-sm text-gray-700 dark:text-gray-200"
        >
            Dashboard
        </span>

            </a>

    </li>
    <li></li>
    <li></li>

    <li>Shop</li>
                    <li
                
    class="fi-sidebar-item"
>
    <a
        href="http://localhost/admin/categories"
        x-on:click="window.matchMedia(`(max-width: 1024px)`).matches && $store.sidebar.close()"
                class="fi-sidebar-item-button relative flex items-center justify-center gap-x-3 rounded-lg px-2 py-2 outline-none transition duration-75 hover:bg-gray-100 focus-visible:bg-gray-100 dark:hover:bg-white/5 dark:focus-visible:bg-white/5"
    >
                    <!--[if BLOCK]><![endif]-->    <svg class="fi-sidebar-item-icon h-6 w-6 text-gray-400 dark:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
  <path stroke-linecap="round" stroke-linejoin="round" d="M6 6.878V6a2.25 2.25 0 0 1 2.25-2.25h7.5A2.25 2.25 0 0 1 18 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 0 0 4.5 9v.878m13.5-3A2.25 2.25 0 0 1 19.5 9v.878m0 0a2.246 2.246 0 0 0-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0 1 21 12v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6c0-.98.626-1.813 1.5-2.122"/>
</svg> <!--[if ENDBLOCK]><![endif]-->
        
        
        <span
                        class="fi-sidebar-item-label flex-1 truncate font-medium text-sm text-gray-700 dark:text-gray-200"
        >
            Products
        </span>

            </a>

    </li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li>Setting Product</li>
                    <li
    class="fi-sidebar-item"
>
    <a
        href="http://localhost/admin/products"
        x-on:click="window.matchMedia(`(max-width: 1024px)`).matches && $store.sidebar.close()"
                class="fi-sidebar-item-button relative flex items-center justify-center gap-x-3 rounded-lg px-2 py-2 outline-none transition duration-75 hover:bg-gray-100 focus-visible:bg-gray-100 dark:hover:bg-white/5 dark:focus-visible:bg-white/5"
    >
                    <!--[if BLOCK]><![endif]-->    <svg class="fi-sidebar-item-icon h-6 w-6 text-gray-400 dark:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
  <path stroke-linecap="round" stroke-linejoin="round" d="M6 6.878V6a2.25 2.25 0 0 1 2.25-2.25h7.5A2.25 2.25 0 0 1 18 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 0 0 4.5 9v.878m13.5-3A2.25 2.25 0 0 1 19.5 9v.878m0 0a2.246 2.246 0 0 0-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0 1 21 12v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6c0-.98.626-1.813 1.5-2.122"/>
</svg> <!--[if ENDBLOCK]><![endif]-->
        
        
        <span
                        class="fi-sidebar-item-label flex-1 truncate font-medium text-sm text-gray-700 dark:text-gray-200"
        >
            Categories
        </span>

            </a>

    </li>
                    <li
    class="fi-sidebar-item fi-active fi-sidebar-item-active flex flex-col gap-y-1"
>
    <a
        href="http://localhost/admin/tags"
        x-on:click="window.matchMedia(`(max-width: 1024px)`).matches && $store.sidebar.close()"
                class="fi-sidebar-item-button relative flex items-center justify-center gap-x-3 rounded-lg px-2 py-2 outline-none transition duration-75 hover:bg-gray-100 focus-visible:bg-gray-100 dark:hover:bg-white/5 dark:focus-visible:bg-white/5 bg-gray-100 dark:bg-white/5"
    >
                    <!--[if BLOCK]><![endif]-->    <svg class="fi-sidebar-item-icon h-6 w-6 text-primary-600 dark:text-primary-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
  <path stroke-linecap="round" stroke-linejoin="round" d="M6 6.878V6a2.25 2.25 0 0 1 2.25-2.25h7.5A2.25 2.25 0 0 1 18 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 0 0 4.5 9v.878m13.5-3A2.25 2.25 0 0 1 19.5 9v.878m0 0a2.246 2.246 0 0 0-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0 1 21 12v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6c0-.98.626-1.813 1.5-2.122"/>
</svg> <!--[if ENDBLOCK]><![endif]-->
        
        
        <span
                        class="fi-sidebar-item-label flex-1 truncate font-medium text-sm text-primary-600 dark:text-primary-400"
        >
            Tags
        </span>

            </a>

    </li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li>Management User</li>
                    <li
    class="fi-sidebar-item"
>
    <a
        href="http://localhost/admin/usersses"
        x-on:click="window.matchMedia(`(max-width: 1024px)`).matches && $store.sidebar.close()"
                class="fi-sidebar-item-button relative flex items-center justify-center gap-x-3 rounded-lg px-2 py-2 outline-none transition duration-75 hover:bg-gray-100 focus-visible:bg-gray-100 dark:hover:bg-white/5 dark:focus-visible:bg-white/5"
    >
                    <!--[if BLOCK]><![endif]-->    <svg class="fi-sidebar-item-icon h-6 w-6 text-gray-400 dark:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
  <path stroke-linecap="round" stroke-linejoin="round" d="M6 6.878V6a2.25 2.25 0 0 1 2.25-2.25h7.5A2.25 2.25 0 0 1 18 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 0 0 4.5 9v.878m13.5-3A2.25 2.25 0 0 1 19.5 9v.878m0 0a2.246 2.246 0 0 0-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0 1 21 12v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6c0-.98.626-1.813 1.5-2.122"/>
</svg> <!--[if ENDBLOCK]><![endif]-->
        
        
        <span
                        class="fi-sidebar-item-label flex-1 truncate font-medium text-sm text-gray-700 dark:text-gray-200"
        >
            Users
        </span>

            </a>

    </li>
            </ul>
</li>
                    </ul>

        <script>
            var collapsedGroups = JSON.parse(
                localStorage.getItem('collapsedGroups'),
            )

            if (collapsedGroups === null || collapsedGroups === 'null') {
                localStorage.setItem(
                    'collapsedGroups',
                    JSON.stringify([]),
                )
            }

            collapsedGroups = JSON.parse(
                localStorage.getItem('collapsedGroups'),
            )

            document
                .querySelectorAll('.fi-sidebar-group')
                .forEach((group) => {
                    if (
                        !collapsedGroups.includes(group.dataset.groupLabel)
                    ) {
                        return
                    }

                    // Alpine.js loads too slow, so attempt to hide a
                    // collapsed sidebar group earlier.
                    group.querySelector(
                        '.fi-sidebar-group-items',
                    ).style.display = 'none'
                    group
                        .querySelector('.fi-sidebar-group-collapse-button')
                        .classList.add('rotate-180')
                })
        </script>

        
    </nav>

    
</aside>

        
        <div
                            x-data="{}"
                x-bind:style="'display: flex; opacity:1;'" 
                        class="fi-main-ctn w-screen flex-1 flex-col opacity-0"
        >
                            

                <div
    class="fi-topbar sticky top-0 z-20 overflow-x-clip"
>
    <nav
        class="flex h-16 items-center gap-x-4 bg-white px-4 shadow-sm ring-1 ring-gray-950/5 md:px-6 lg:px-8 dark:bg-gray-900 dark:ring-white/10"
    >
        

                    <!--[if BLOCK]><![endif]-->    <button
                                style="--c-300:var(--gray-300);--c-400:var(--gray-400);--c-500:var(--gray-500);--c-600:var(--gray-600);" class="fi-icon-btn relative flex items-center justify-center rounded-lg outline-none transition duration-75 focus-visible:ring-2 disabled:pointer-events-none disabled:opacity-70 -m-1.5 h-9 w-9 fi-color-gray text-gray-400 hover:text-gray-500 focus-visible:ring-primary-600 dark:text-gray-500 dark:hover:text-gray-400 dark:focus-visible:ring-primary-500 fi-topbar-open-sidebar-btn lg:hidden" title="Expand sidebar" type="button" x-cloak="x-cloak" x-data="{}" x-on:click="$store.sidebar.open()" x-show="! $store.sidebar.isOpen"
    >
        <!--[if BLOCK]><![endif]-->            <span class="sr-only">
                Expand sidebar
            </span>
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->    <svg class="fi-icon-btn-icon h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
</svg> <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </button>
 <!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]-->    <button
                                style="--c-300:var(--gray-300);--c-400:var(--gray-400);--c-500:var(--gray-500);--c-600:var(--gray-600);" class="fi-icon-btn relative flex items-center justify-center rounded-lg outline-none transition duration-75 focus-visible:ring-2 disabled:pointer-events-none disabled:opacity-70 -m-1.5 h-9 w-9 fi-color-gray text-gray-400 hover:text-gray-500 focus-visible:ring-primary-600 dark:text-gray-500 dark:hover:text-gray-400 dark:focus-visible:ring-primary-500 fi-topbar-close-sidebar-btn lg:hidden" title="Collapse sidebar" type="button" x-cloak="x-cloak" x-data="{}" x-on:click="$store.sidebar.close()" x-show="$store.sidebar.isOpen"
    >
        <!--[if BLOCK]><![endif]-->            <span class="sr-only">
                Collapse sidebar
            </span>
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->    <svg class="fi-icon-btn-icon h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/>
</svg> <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </button>
 <!--[if ENDBLOCK]><![endif]-->
        
        
        <div
            x-persist="topbar.end"
            class="ms-auto flex items-center gap-x-4"
        >
            

            
            

                            
                <div
    x-data="{
        toggle: function (event) {
            $refs.panel.toggle(event)
        },

        open: function (event) {
            $refs.panel.open(event)
        },

        close: function (event) {
            $refs.panel.close(event)
        },
    }"
    class="fi-dropdown fi-user-menu"
>
    <div
        x-on:click="toggle"
        class="fi-dropdown-trigger flex cursor-pointer"
    >
        <button
            aria-label="User menu"
            type="button"
            class="shrink-0"
        >
            <img
    class="fi-avatar object-cover object-center fi-circular rounded-full h-8 w-8 fi-user-avatar" src="https://ui-avatars.com/api/?name=a&amp;color=FFFFFF&amp;background=09090b"
/>
        </button>
    </div>

    <div
        x-cloak
        x-float.placement.bottom-end.flip.teleport.offset="{ offset: 8 }"
        x-ref="panel"
        x-transition:enter-start="opacity-0"
        x-transition:leave-end="opacity-0"
                class="fi-dropdown-panel absolute z-10 w-screen divide-y divide-gray-100 rounded-lg bg-white shadow-lg ring-1 ring-gray-950/5 transition dark:divide-white/5 dark:bg-gray-900 dark:ring-white/10 max-w-[14rem]"
        style=""
    >
        <div
    class="fi-dropdown-header flex w-full gap-2 p-3 text-sm fi-color-gray fi-dropdown-header-color-gray"
>
            <!--[if BLOCK]><![endif]-->    <svg class="fi-dropdown-header-icon h-5 w-5 text-gray-400 dark:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path fill-rule="evenodd" d="M18 10a8 8 0 1 1-16 0 8 8 0 0 1 16 0Zm-5.5-2.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0ZM10 12a5.99 5.99 0 0 0-4.793 2.39A6.483 6.483 0 0 0 10 16.5a6.483 6.483 0 0 0 4.793-2.11A5.99 5.99 0 0 0 10 12Z" clip-rule="evenodd"/>
</svg> <!--[if ENDBLOCK]><![endif]-->
    
    <span
        class="fi-dropdown-header-label flex-1 truncate text-start text-gray-700 dark:text-gray-200"
        style=""
    >
        admin
    </span>
</div>
        
        
    
            <div class="fi-dropdown-list p-1">
    <div
    x-data="{ theme: null }"
    x-init="
        $watch('theme', () => {
            $dispatch('theme-changed', theme)
        })

        theme = localStorage.getItem('theme') || 'system'    "
    class="fi-theme-switcher grid grid-flow-col gap-x-1"
>
    <button
    aria-label="Enable light theme"
    type="button"
    x-on:click="(theme = 'light') && close()"
    x-tooltip="{
        content: 'Enable light theme',
        theme: $store.theme,
    }"
    class="fi-theme-switcher-btn flex justify-center rounded-md p-2 outline-none transition duration-75 hover:bg-gray-50 focus-visible:bg-gray-50 dark:hover:bg-white/5 dark:focus-visible:bg-white/5"
    x-bind:class="
        theme === 'light'            ? 'fi-active bg-gray-50 text-primary-500 dark:bg-white/5 dark:text-primary-400'
            : 'text-gray-400 hover:text-gray-500 focus-visible:text-gray-500 dark:text-gray-500 dark:hover:text-gray-400 dark:focus-visible:text-gray-400'
    "
>
    <!--[if BLOCK]><![endif]-->    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path d="M10 2a.75.75 0 0 1 .75.75v1.5a.75.75 0 0 1-1.5 0v-1.5A.75.75 0 0 1 10 2ZM10 15a.75.75 0 0 1 .75.75v1.5a.75.75 0 0 1-1.5 0v-1.5A.75.75 0 0 1 10 15ZM10 7a3 3 0 1 0 0 6 3 3 0 0 0 0-6ZM15.657 5.404a.75.75 0 1 0-1.06-1.06l-1.061 1.06a.75.75 0 0 0 1.06 1.06l1.06-1.06ZM6.464 14.596a.75.75 0 1 0-1.06-1.06l-1.06 1.06a.75.75 0 0 0 1.06 1.06l1.06-1.06ZM18 10a.75.75 0 0 1-.75.75h-1.5a.75.75 0 0 1 0-1.5h1.5A.75.75 0 0 1 18 10ZM5 10a.75.75 0 0 1-.75.75h-1.5a.75.75 0 0 1 0-1.5h1.5A.75.75 0 0 1 5 10ZM14.596 15.657a.75.75 0 0 0 1.06-1.06l-1.06-1.061a.75.75 0 1 0-1.06 1.06l1.06 1.06ZM5.404 6.464a.75.75 0 0 0 1.06-1.06l-1.06-1.06a.75.75 0 1 0-1.061 1.06l1.06 1.06Z"/>
</svg> <!--[if ENDBLOCK]><![endif]-->
</button>

    <button
    aria-label="Enable dark theme"
    type="button"
    x-on:click="(theme = 'dark') && close()"
    x-tooltip="{
        content: 'Enable dark theme',
        theme: $store.theme,
    }"
    class="fi-theme-switcher-btn flex justify-center rounded-md p-2 outline-none transition duration-75 hover:bg-gray-50 focus-visible:bg-gray-50 dark:hover:bg-white/5 dark:focus-visible:bg-white/5"
    x-bind:class="
        theme === 'dark'            ? 'fi-active bg-gray-50 text-primary-500 dark:bg-white/5 dark:text-primary-400'
            : 'text-gray-400 hover:text-gray-500 focus-visible:text-gray-500 dark:text-gray-500 dark:hover:text-gray-400 dark:focus-visible:text-gray-400'
    "
>
    <!--[if BLOCK]><![endif]-->    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path fill-rule="evenodd" d="M7.455 2.004a.75.75 0 0 1 .26.77 7 7 0 0 0 9.958 7.967.75.75 0 0 1 1.067.853A8.5 8.5 0 1 1 6.647 1.921a.75.75 0 0 1 .808.083Z" clip-rule="evenodd"/>
</svg> <!--[if ENDBLOCK]><![endif]-->
</button>

    <button
    aria-label="Enable system theme"
    type="button"
    x-on:click="(theme = 'system') && close()"
    x-tooltip="{
        content: 'Enable system theme',
        theme: $store.theme,
    }"
    class="fi-theme-switcher-btn flex justify-center rounded-md p-2 outline-none transition duration-75 hover:bg-gray-50 focus-visible:bg-gray-50 dark:hover:bg-white/5 dark:focus-visible:bg-white/5"
    x-bind:class="
        theme === 'system'            ? 'fi-active bg-gray-50 text-primary-500 dark:bg-white/5 dark:text-primary-400'
            : 'text-gray-400 hover:text-gray-500 focus-visible:text-gray-500 dark:text-gray-500 dark:hover:text-gray-400 dark:focus-visible:text-gray-400'
    "
>
    <!--[if BLOCK]><![endif]-->    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path fill-rule="evenodd" d="M2 4.25A2.25 2.25 0 0 1 4.25 2h11.5A2.25 2.25 0 0 1 18 4.25v8.5A2.25 2.25 0 0 1 15.75 15h-3.105a3.501 3.501 0 0 0 1.1 1.677A.75.75 0 0 1 13.26 18H6.74a.75.75 0 0 1-.484-1.323A3.501 3.501 0 0 0 7.355 15H4.25A2.25 2.25 0 0 1 2 12.75v-8.5Zm1.5 0a.75.75 0 0 1 .75-.75h11.5a.75.75 0 0 1 .75.75v7.5a.75.75 0 0 1-.75.75H4.25a.75.75 0 0 1-.75-.75v-7.5Z" clip-rule="evenodd"/>
</svg> <!--[if ENDBLOCK]><![endif]-->
</button>
</div>
</div>
    
    <div class="fi-dropdown-list p-1">
    <form
        action="http://localhost/admin/logout" method="post"
    >
        <input type="hidden" name="_token" value="TrHmLcSjiUFT5VLQFlYqZn1c1z9euO8rs6oWlVuB" autocomplete="off">
        <button
                                                type="submit"
            style=";" class="fi-dropdown-list-item flex w-full items-center gap-2 whitespace-nowrap rounded-md p-2 text-sm transition-colors duration-75 outline-none disabled:pointer-events-none disabled:opacity-70 fi-color-gray fi-dropdown-list-item-color-gray hover:bg-gray-50 focus-visible:bg-gray-50 dark:hover:bg-white/5 dark:focus-visible:bg-white/5"
        >
                            <!--[if BLOCK]><![endif]-->    <svg class="fi-dropdown-list-item-icon h-5 w-5 text-gray-400 dark:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path fill-rule="evenodd" d="M3 4.25A2.25 2.25 0 0 1 5.25 2h5.5A2.25 2.25 0 0 1 13 4.25v2a.75.75 0 0 1-1.5 0v-2a.75.75 0 0 0-.75-.75h-5.5a.75.75 0 0 0-.75.75v11.5c0 .414.336.75.75.75h5.5a.75.75 0 0 0 .75-.75v-2a.75.75 0 0 1 1.5 0v2A2.25 2.25 0 0 1 10.75 18h-5.5A2.25 2.25 0 0 1 3 15.75V4.25Z" clip-rule="evenodd"/>
  <path fill-rule="evenodd" d="M19 10a.75.75 0 0 0-.75-.75H8.704l1.048-.943a.75.75 0 1 0-1.004-1.114l-2.5 2.25a.75.75 0 0 0 0 1.114l2.5 2.25a.75.75 0 1 0 1.004-1.114l-1.048-.943h9.546A.75.75 0 0 0 19 10Z" clip-rule="evenodd"/>
</svg> <!--[if ENDBLOCK]><![endif]-->
            
            <span class="fi-dropdown-list-item-label flex-1 truncate text-start text-gray-700 dark:text-gray-200" style="">
                Sign out
            </span>

                    </button>
    </form>
</div>
    </div>
</div>


                    </div>

        
    </nav>
</div>

                
            
            <main
                class="fi-main mx-auto h-full w-full px-4 md:px-6 lg:px-8 max-w-7xl"
            >
                

                <div wire:snapshot="{&quot;data&quot;:{&quot;isTableReordering&quot;:false,&quot;tableFilters&quot;:null,&quot;tableGrouping&quot;:null,&quot;tableGroupingDirection&quot;:null,&quot;tableSearch&quot;:&quot;&quot;,&quot;tableSortColumn&quot;:null,&quot;tableSortDirection&quot;:null,&quot;activeTab&quot;:null,&quot;mountedActions&quot;:[[],{&quot;s&quot;:&quot;arr&quot;}],&quot;mountedActionsArguments&quot;:[[],{&quot;s&quot;:&quot;arr&quot;}],&quot;mountedActionsData&quot;:[[],{&quot;s&quot;:&quot;arr&quot;}],&quot;defaultAction&quot;:null,&quot;defaultActionArguments&quot;:null,&quot;componentFileAttachments&quot;:[[],{&quot;s&quot;:&quot;arr&quot;}],&quot;mountedFormComponentActions&quot;:[[],{&quot;s&quot;:&quot;arr&quot;}],&quot;mountedFormComponentActionsArguments&quot;:[[],{&quot;s&quot;:&quot;arr&quot;}],&quot;mountedFormComponentActionsData&quot;:[[],{&quot;s&quot;:&quot;arr&quot;}],&quot;mountedFormComponentActionsComponents&quot;:[[],{&quot;s&quot;:&quot;arr&quot;}],&quot;mountedInfolistActions&quot;:[[],{&quot;s&quot;:&quot;arr&quot;}],&quot;mountedInfolistActionsData&quot;:[[],{&quot;s&quot;:&quot;arr&quot;}],&quot;mountedInfolistActionsComponent&quot;:null,&quot;mountedInfolistActionsInfolist&quot;:null,&quot;isTableLoaded&quot;:false,&quot;tableRecordsPerPage&quot;:10,&quot;tableColumnSearches&quot;:[[],{&quot;s&quot;:&quot;arr&quot;}],&quot;toggledTableColumns&quot;:[{&quot;created_at&quot;:false,&quot;updated_at&quot;:false},{&quot;s&quot;:&quot;arr&quot;}],&quot;mountedTableActions&quot;:[[],{&quot;s&quot;:&quot;arr&quot;}],&quot;mountedTableActionsData&quot;:[[],{&quot;s&quot;:&quot;arr&quot;}],&quot;mountedTableActionsArguments&quot;:[[],{&quot;s&quot;:&quot;arr&quot;}],&quot;mountedTableActionRecord&quot;:null,&quot;defaultTableAction&quot;:null,&quot;defaultTableActionArguments&quot;:null,&quot;defaultTableActionRecord&quot;:null,&quot;selectedTableRecords&quot;:[[],{&quot;s&quot;:&quot;arr&quot;}],&quot;mountedTableBulkAction&quot;:null,&quot;mountedTableBulkActionData&quot;:[[],{&quot;s&quot;:&quot;arr&quot;}],&quot;tableDeferredFilters&quot;:null,&quot;paginators&quot;:[{&quot;page&quot;:1},{&quot;s&quot;:&quot;arr&quot;}]},&quot;memo&quot;:{&quot;id&quot;:&quot;W37T8F6DBeDlOAulW4em&quot;,&quot;name&quot;:&quot;app.filament.resources.tags-resource.pages.list-tags&quot;,&quot;path&quot;:&quot;admin\/tags&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;scripts&quot;:[],&quot;assets&quot;:[],&quot;errors&quot;:[],&quot;locale&quot;:&quot;en&quot;},&quot;checksum&quot;:&quot;ae13ff11708672a69e30f8733abac5788df6c5ecca95dd4f1a75bc2cbc111bc3&quot;}" wire:effects="{&quot;url&quot;:{&quot;isTableReordering&quot;:{&quot;as&quot;:null,&quot;use&quot;:&quot;replace&quot;,&quot;alwaysShow&quot;:false,&quot;except&quot;:null},&quot;tableFilters&quot;:{&quot;as&quot;:null,&quot;use&quot;:&quot;replace&quot;,&quot;alwaysShow&quot;:false,&quot;except&quot;:null},&quot;tableGrouping&quot;:{&quot;as&quot;:null,&quot;use&quot;:&quot;replace&quot;,&quot;alwaysShow&quot;:false,&quot;except&quot;:null},&quot;tableGroupingDirection&quot;:{&quot;as&quot;:null,&quot;use&quot;:&quot;replace&quot;,&quot;alwaysShow&quot;:false,&quot;except&quot;:null},&quot;tableSearch&quot;:{&quot;as&quot;:null,&quot;use&quot;:&quot;replace&quot;,&quot;alwaysShow&quot;:false,&quot;except&quot;:null},&quot;tableSortColumn&quot;:{&quot;as&quot;:null,&quot;use&quot;:&quot;replace&quot;,&quot;alwaysShow&quot;:false,&quot;except&quot;:null},&quot;tableSortDirection&quot;:{&quot;as&quot;:null,&quot;use&quot;:&quot;replace&quot;,&quot;alwaysShow&quot;:false,&quot;except&quot;:null},&quot;activeTab&quot;:{&quot;as&quot;:null,&quot;use&quot;:&quot;replace&quot;,&quot;alwaysShow&quot;:false,&quot;except&quot;:null},&quot;defaultAction&quot;:{&quot;as&quot;:&quot;action&quot;,&quot;use&quot;:&quot;replace&quot;,&quot;alwaysShow&quot;:false,&quot;except&quot;:null},&quot;defaultActionArguments&quot;:{&quot;as&quot;:&quot;actionArguments&quot;,&quot;use&quot;:&quot;replace&quot;,&quot;alwaysShow&quot;:false,&quot;except&quot;:null},&quot;defaultTableAction&quot;:{&quot;as&quot;:&quot;tableAction&quot;,&quot;use&quot;:&quot;replace&quot;,&quot;alwaysShow&quot;:false,&quot;except&quot;:null},&quot;defaultTableActionArguments&quot;:{&quot;as&quot;:&quot;tableActionArguments&quot;,&quot;use&quot;:&quot;replace&quot;,&quot;alwaysShow&quot;:false,&quot;except&quot;:null},&quot;defaultTableActionRecord&quot;:{&quot;as&quot;:&quot;tableActionRecord&quot;,&quot;use&quot;:&quot;replace&quot;,&quot;alwaysShow&quot;:false,&quot;except&quot;:null},&quot;paginators.page&quot;:{&quot;as&quot;:&quot;page&quot;,&quot;use&quot;:&quot;push&quot;,&quot;alwaysShow&quot;:false,&quot;except&quot;:null}}}" wire:id="W37T8F6DBeDlOAulW4em"
    class="fi-page fi-resource-list-records-page fi-resource-tags"
>
    

    <section
        class="flex flex-col gap-y-8 py-8"
    >
        <!--[if BLOCK]><![endif]-->            <header
    class="fi-header flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between"
>
    <div>
        <!--[if BLOCK]><![endif]-->            <nav class="fi-breadcrumbs mb-2 hidden sm:block">
    <ol class="fi-breadcrumbs-list flex flex-wrap items-center gap-x-2">
        <!--[if BLOCK]><![endif]-->            <li class="fi-breadcrumbs-item flex gap-x-2">
                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                <a
                    href="http://localhost/admin/tags"
                    class="fi-breadcrumbs-item-label text-sm font-medium text-gray-500 transition duration-75 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200"
                >
                    Tags
                </a>
            </li>
                    <li class="fi-breadcrumbs-item flex gap-x-2">
                <!--[if BLOCK]><![endif]-->                    <!--[if BLOCK]><![endif]-->    <svg class="fi-breadcrumbs-item-separator flex h-5 w-5 text-gray-400 dark:text-gray-500 rtl:hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path fill-rule="evenodd" d="M8.22 5.22a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 0 1 0 1.06l-4.25 4.25a.75.75 0 0 1-1.06-1.06L11.94 10 8.22 6.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"/>
</svg> <!--[if ENDBLOCK]><![endif]-->

                    <!--[if BLOCK]><![endif]-->    <svg class="fi-breadcrumbs-item-separator flex h-5 w-5 text-gray-400 dark:text-gray-500 ltr:hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path fill-rule="evenodd" d="M11.78 5.22a.75.75 0 0 1 0 1.06L8.06 10l3.72 3.72a.75.75 0 1 1-1.06 1.06l-4.25-4.25a.75.75 0 0 1 0-1.06l4.25-4.25a.75.75 0 0 1 1.06 0Z" clip-rule="evenodd"/>
</svg> <!--[if ENDBLOCK]><![endif]-->
                 <!--[if ENDBLOCK]><![endif]-->

                <a
                    href="#"
                    class="fi-breadcrumbs-item-label text-sm font-medium text-gray-500 transition duration-75 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200"
                >
                    List
                </a>
            </li>
         <!--[if ENDBLOCK]><![endif]-->
    </ol>
</nav>
         <!--[if ENDBLOCK]><![endif]-->

        <h1
            class="fi-header-heading text-2xl font-bold tracking-tight text-gray-950 sm:text-3xl dark:text-white"
        >
            Tags
        </h1>

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    

    <!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]-->    
    <!--[if BLOCK]><![endif]-->        <div
            class="fi-ac gap-3 flex flex-wrap items-center justify-start shrink-0 sm:mt-7"
        >
            <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

<a
            href="http://localhost/admin/tags/create"
                        style="--c-400:var(--primary-400);--c-500:var(--primary-500);--c-600:var(--primary-600);" class="fi-btn relative grid-flow-col items-center justify-center font-semibold outline-none transition duration-75 focus-visible:ring-2 rounded-lg fi-color-custom fi-btn-color-primary fi-size-md fi-btn-size-md gap-1.5 px-3 py-2 text-sm inline-grid shadow-sm bg-custom-600 text-white hover:bg-custom-500 focus-visible:ring-custom-500/50 dark:bg-custom-500 dark:hover:bg-custom-400 dark:focus-visible:ring-custom-400/50 fi-ac-action fi-ac-btn-action"
>
    <!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
     <!--[if ENDBLOCK]><![endif]-->

    <span
                class="fi-btn-label"
    >
        New tags
    </span>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</a>

             <!--[if ENDBLOCK]><![endif]-->
        </div>
     <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->
     <!--[if ENDBLOCK]><![endif]-->

    
</header>
         <!--[if ENDBLOCK]><![endif]-->

        <div
            class=""
        >
            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

            <div
                class="grid flex-1 auto-cols-fr gap-y-8"
            >
                

                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                

                <div class="flex flex-col gap-y-6">
        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

        

        <div
        x-ignore
            ax-load
        ax-load-src="http://localhost/js/filament/tables/components/table.js?v=3.2.14.0"
    x-data="table"
    class="fi-ta"
>
    <div
    class="fi-ta-ctn divide-y divide-gray-200 overflow-hidden rounded-xl bg-white shadow-sm ring-1 ring-gray-950/5 dark:divide-white/10 dark:bg-gray-900 dark:ring-white/10"
>
    <div
                        x-bind:hidden="! (true || (selectedRecords.length && 1))"
            x-show="true || (selectedRecords.length && 1)"
            class="fi-ta-header-ctn divide-y divide-gray-200 dark:divide-white/10"
        >
            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

            <div
                                x-show="true || (selectedRecords.length && 1)"
                class="fi-ta-header-toolbar flex items-center justify-between gap-x-4 px-4 py-3 sm:px-6"
            >
                

                <div class="flex shrink-0 items-center gap-x-4">
                    

                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                    

                    <!--[if BLOCK]><![endif]-->                        <div
    class="fi-ta-actions flex shrink-0 items-center gap-3 justify-end" x-cloak="x-cloak" x-show="selectedRecords.length"
>
    <!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]-->    
    <div
    x-data="{
        toggle: function (event) {
            $refs.panel.toggle(event)
        },

        open: function (event) {
            $refs.panel.open(event)
        },

        close: function (event) {
            $refs.panel.close(event)
        },
    }"
    class="fi-dropdown"
>
    <div
        x-on:click="toggle"
        class="fi-dropdown-trigger flex cursor-pointer"
    >
        <!--[if BLOCK]><![endif]-->    <!--[if BLOCK]><![endif]-->    <button
                                style="--c-300:var(--gray-300);--c-400:var(--gray-400);--c-500:var(--gray-500);--c-600:var(--gray-600);" class="fi-icon-btn relative flex items-center justify-center rounded-lg outline-none transition duration-75 focus-visible:ring-2 disabled:pointer-events-none disabled:opacity-70 -m-2 h-9 w-9 fi-color-gray text-gray-400 hover:text-gray-500 focus-visible:ring-primary-600 dark:text-gray-500 dark:hover:text-gray-400 dark:focus-visible:ring-primary-500 sm:hidden fi-ac-btn-group" title="Bulk actions" type="button"
    >
        <!--[if BLOCK]><![endif]-->            <span class="sr-only">
                Bulk actions
            </span>
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->    <svg class="fi-icon-btn-icon h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path d="M10 3a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM10 8.5a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM11.5 15.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z"/>
</svg> <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </button>
 <!--[if ENDBLOCK]><![endif]-->
 <!--[if ENDBLOCK]><![endif]-->

<button
                        style=";" class="fi-btn relative grid-flow-col items-center justify-center font-semibold outline-none transition duration-75 focus-visible:ring-2 rounded-lg fi-color-gray fi-btn-color-gray fi-size-md fi-btn-size-md gap-1.5 px-3 py-2 text-sm hidden sm:inline-grid shadow-sm bg-white text-gray-950 hover:bg-gray-50 dark:bg-white/5 dark:text-white dark:hover:bg-white/10 ring-1 ring-gray-950/10 dark:ring-white/20 fi-ac-btn-group" type="button" wire:loading.attr="disabled"
>
    <!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]-->            <!--[if BLOCK]><![endif]-->    <svg class="fi-btn-icon transition duration-75 h-5 w-5 text-gray-400 dark:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path d="M10 3a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM10 8.5a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM11.5 15.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z"/>
</svg> <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
     <!--[if ENDBLOCK]><![endif]-->

    <span
                class="fi-btn-label"
    >
        Bulk actions
    </span>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</button>
    </div>

    <div
        x-cloak
        x-float.placement.bottom-start.flip.teleport.offset="{ offset: 8 }"
        x-ref="panel"
        x-transition:enter-start="opacity-0"
        x-transition:leave-end="opacity-0"
                class="fi-dropdown-panel absolute z-10 w-screen divide-y divide-gray-100 rounded-lg bg-white shadow-lg ring-1 ring-gray-950/5 transition dark:divide-white/5 dark:bg-gray-900 dark:ring-white/10 max-w-[14rem]"
        style=""
    >
        <!--[if BLOCK]><![endif]-->            <div class="fi-dropdown-list p-1">
    <!--[if BLOCK]><![endif]-->                    <button
                                style="--c-50:var(--danger-50);--c-400:var(--danger-400);" class="fi-dropdown-list-item flex w-full items-center gap-2 whitespace-nowrap rounded-md p-2 text-sm transition-colors duration-75 outline-none disabled:pointer-events-none disabled:opacity-70 fi-color-custom fi-dropdown-list-item-color-danger hover:bg-custom-50 focus-visible:bg-custom-50 dark:hover:bg-custom-400/10 dark:focus-visible:bg-custom-400/10 fi-ac-action fi-ac-grouped-action" type="button" wire:loading.attr="disabled" wire:target="mountTableBulkAction(&#039;delete&#039;)" x-on:click="mountBulkAction(&#039;delete&#039;)" x-bind:disabled="! selectedRecords.length"
    >
                    <!--[if BLOCK]><![endif]-->    <svg style="--c-400:var(--danger-400);--c-500:var(--danger-500);" wire:loading.remove.delay.default="1" wire:target="mountTableBulkAction('delete')" class="fi-dropdown-list-item-icon h-5 w-5 text-custom-500 dark:text-custom-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path fill-rule="evenodd" d="M8.75 1A2.75 2.75 0 0 0 6 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 1 0 .23 1.482l.149-.022.841 10.518A2.75 2.75 0 0 0 7.596 19h4.807a2.75 2.75 0 0 0 2.742-2.53l.841-10.52.149.023a.75.75 0 0 0 .23-1.482A41.03 41.03 0 0 0 14 4.193V3.75A2.75 2.75 0 0 0 11.25 1h-2.5ZM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4ZM8.58 7.72a.75.75 0 0 0-1.5.06l.3 7.5a.75.75 0 1 0 1.5-.06l-.3-7.5Zm4.34.06a.75.75 0 1 0-1.5-.06l-.3 7.5a.75.75 0 1 0 1.5.06l.3-7.5Z" clip-rule="evenodd"/>
</svg> <!--[if ENDBLOCK]><![endif]-->
        
        
                    <svg
    fill="none"
    viewBox="0 0 24 24"
    xmlns="http://www.w3.org/2000/svg"
    class="animate-spin fi-dropdown-list-item-icon h-5 w-5 text-custom-500 dark:text-custom-400" style="--c-400:var(--danger-400);--c-500:var(--danger-500);" wire:loading.delay.default="" wire:target="mountTableBulkAction('delete')"
>
    <path
        clip-rule="evenodd"
        d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
        fill-rule="evenodd"
        fill="currentColor"
        opacity="0.2"
    ></path>
    <path
        d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z"
        fill="currentColor"
    ></path>
</svg>
        
        <span class="fi-dropdown-list-item-label flex-1 truncate text-start text-custom-600 dark:text-custom-400 " style="--c-400:var(--danger-400);--c-600:var(--danger-600);">
            Delete selected
        </span>

            </button>

                 <!--[if ENDBLOCK]><![endif]-->
</div>
         <!--[if ENDBLOCK]><![endif]-->
    </div>
</div>
 <!--[if ENDBLOCK]><![endif]-->

     <!--[if ENDBLOCK]><![endif]-->
</div>
                     <!--[if ENDBLOCK]><![endif]-->

                    

                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                    
                </div>

                <!--[if BLOCK]><![endif]-->                    <div class="ms-auto flex items-center gap-x-4">
                        

                        <!--[if BLOCK]><![endif]-->                            <div
    x-id="['input']"
    class="fi-ta-search-field"
>
    <label x-bind:for="$id('input')" class="sr-only">
        Search
    </label>

    <div
        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 dark:bg-white/5 ring-gray-950/10 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:ring-white/20 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500"
>
    <!--[if BLOCK]><![endif]-->        <div
                        class="items-center gap-x-3 ps-3 flex pe-2"
        >
            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]-->                <!--[if BLOCK]><![endif]-->    <svg style=";" wire:loading.remove.delay.default="1" wire:target="tableSearch" class="fi-input-wrp-icon h-5 w-5 text-gray-400 dark:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 1 0 0 11 5.5 5.5 0 0 0 0-11ZM2 9a7 7 0 1 1 12.452 4.391l3.328 3.329a.75.75 0 1 1-1.06 1.06l-3.329-3.328A7 7 0 0 1 2 9Z" clip-rule="evenodd"/>
</svg> <!--[if ENDBLOCK]><![endif]-->
             <!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]-->                <svg
    fill="none"
    viewBox="0 0 24 24"
    xmlns="http://www.w3.org/2000/svg"
    class="animate-spin fi-input-wrp-icon h-5 w-5 text-gray-400 dark:text-gray-500" wire:loading.delay.default="wire:loading.delay.default" wire:target="tableSearch"
>
    <path
        clip-rule="evenodd"
        d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
        fill-rule="evenodd"
        fill="currentColor"
        opacity="0.2"
    ></path>
    <path
        d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z"
        fill="currentColor"
    ></path>
</svg>
             <!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
        </div>
     <!--[if ENDBLOCK]><![endif]-->

    <div
                class="min-w-0 flex-1"
    >
        <input
    class="fi-input block w-full border-none py-1.5 text-base text-gray-950 transition duration-75 placeholder:text-gray-400 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.400)] sm:text-sm sm:leading-6 dark:text-white dark:placeholder:text-gray-500 dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] dark:disabled:placeholder:[-webkit-text-fill-color:theme(colors.gray.500)] bg-white/0 ps-0 pe-3" autocomplete="off" placeholder="Search" type="search" wire:key="W37T8F6DBeDlOAulW4em.table.tableSearch.field.input" wire:model.live.debounce.500ms="tableSearch" x-bind:id="$id(&#039;input&#039;)" x-on:keyup="if ($event.key === &#039;Enter&#039;) { $wire.$refresh() }"
/>
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</div>
</div>
                         <!--[if ENDBLOCK]><![endif]-->

                        

                        <!--[if BLOCK]><![endif]-->                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            

                            <!--[if BLOCK]><![endif]-->                                <div
    x-data="{
        toggle: function (event) {
            $refs.panel.toggle(event)
        },

        open: function (event) {
            $refs.panel.open(event)
        },

        close: function (event) {
            $refs.panel.close(event)
        },
    }"
    class="fi-dropdown fi-ta-col-toggle" wire:key="W37T8F6DBeDlOAulW4em.table.column-toggle"
>
    <div
        x-on:click="toggle"
        class="fi-dropdown-trigger flex cursor-pointer"
    >
        <!--[if BLOCK]><![endif]-->    <button
                                style="--c-300:var(--gray-300);--c-400:var(--gray-400);--c-500:var(--gray-500);--c-600:var(--gray-600);" class="fi-icon-btn relative flex items-center justify-center rounded-lg outline-none transition duration-75 focus-visible:ring-2 disabled:pointer-events-none disabled:opacity-70 -m-2 h-9 w-9 fi-color-gray text-gray-400 hover:text-gray-500 focus-visible:ring-primary-600 dark:text-gray-500 dark:hover:text-gray-400 dark:focus-visible:ring-primary-500 fi-ac-action fi-ac-icon-btn-action" title="Toggle columns" type="button"
    >
        <!--[if BLOCK]><![endif]-->            <span class="sr-only">
                Toggle columns
            </span>
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->    <svg class="fi-icon-btn-icon h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path d="M14 17h2.75A2.25 2.25 0 0 0 19 14.75v-9.5A2.25 2.25 0 0 0 16.75 3H14v14ZM12.5 3h-5v14h5V3ZM3.25 3H6v14H3.25A2.25 2.25 0 0 1 1 14.75v-9.5A2.25 2.25 0 0 1 3.25 3Z"/>
</svg> <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </button>
 <!--[if ENDBLOCK]><![endif]-->
    </div>

    <div
        x-cloak
        x-float.placement.bottom-end.flip.shift.offset="{ offset: 8 }"
        x-ref="panel"
        x-transition:enter-start="opacity-0"
        x-transition:leave-end="opacity-0"
                    wire:ignore.self
            wire:key="W37T8F6DBeDlOAulW4em.table.column-toggle.panel"
                class="fi-dropdown-panel absolute z-10 w-screen divide-y divide-gray-100 rounded-lg bg-white shadow-lg ring-1 ring-gray-950/5 transition dark:divide-white/5 dark:bg-gray-900 dark:ring-white/10 max-w-xs"
        style=""
    >
        <div class="grid gap-y-4 p-6">
        <h4
            class="text-base font-semibold leading-6 text-gray-950 dark:text-white"
        >
            Columns
        </h4>

        <div
    style="--cols-default: repeat(1, minmax(0, 1fr)); --cols-lg: repeat(1, minmax(0, 1fr));" class="grid grid-cols-[--cols-default] lg:grid-cols-[--cols-lg] fi-fo-component-ctn gap-6" x-data="{}" x-on:form-validation-error.window="if ($event.detail.livewireId !== &#039;W37T8F6DBeDlOAulW4em&#039;) {
                return
            }

            $nextTick(() =&gt; {
                error = $el.querySelector(&#039;[data-validation-error]&#039;)

                if (! error) {
                    return
                }

                elementToExpand = error

                while (elementToExpand) {
                    elementToExpand.dispatchEvent(new CustomEvent(&#039;expand&#039;))

                    elementToExpand = elementToExpand.parentNode
                }

                setTimeout(
                    () =&gt;
                        error.closest(&#039;[data-field-wrapper]&#039;).scrollIntoView({
                            behavior: &#039;smooth&#039;,
                            block: &#039;start&#039;,
                            inline: &#039;start&#039;,
                        }),
                    200,
                )
        })"
>
    <!--[if BLOCK]><![endif]-->        
        <div
    style="--col-span-default: span 1 / span 1;" class="col-[--col-span-default]" wire:key="W37T8F6DBeDlOAulW4em.toggledTableColumns.created_at.Filament\Forms\Components\Checkbox"
>
    <!--[if BLOCK]><![endif]-->                <div data-field-wrapper class="fi-fo-field-wrp">
    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div
        class="grid gap-y-2"
    >
        <!--[if BLOCK]><![endif]-->            <div
                class="flex items-center justify-between gap-x-3 "
            >
                <!--[if BLOCK]><![endif]-->                    <label
    class="fi-fo-field-wrp-label inline-flex items-center gap-x-3" for="toggledTableColumns.created_at"
>
    <input
    type="checkbox"
        class="fi-checkbox-input rounded border-none bg-white shadow-sm ring-1 transition duration-75 checked:ring-0 focus:ring-2 focus:ring-offset-0 disabled:pointer-events-none disabled:bg-gray-50 disabled:text-gray-50 disabled:checked:bg-current disabled:checked:text-gray-400 dark:bg-white/5 dark:disabled:bg-transparent dark:disabled:checked:bg-gray-600 text-primary-600 ring-gray-950/10 focus:ring-primary-600 checked:focus:ring-primary-500/50 dark:text-primary-500 dark:ring-white/20 dark:checked:bg-primary-500 dark:focus:ring-primary-500 dark:checked:focus:ring-primary-400/50 dark:disabled:ring-white/10" id="toggledTableColumns.created_at" wire:loading.attr="disabled" wire:model.live="toggledTableColumns.created_at"
/>

    <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
        
        Created at<!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </span>

    
</label>
                 <!--[if ENDBLOCK]><![endif]-->

                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
            </div>
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>
</div>

             <!--[if ENDBLOCK]><![endif]-->
</div>
            
        <div
    style="--col-span-default: span 1 / span 1;" class="col-[--col-span-default]" wire:key="W37T8F6DBeDlOAulW4em.toggledTableColumns.updated_at.Filament\Forms\Components\Checkbox"
>
    <!--[if BLOCK]><![endif]-->                <div data-field-wrapper class="fi-fo-field-wrp">
    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div
        class="grid gap-y-2"
    >
        <!--[if BLOCK]><![endif]-->            <div
                class="flex items-center justify-between gap-x-3 "
            >
                <!--[if BLOCK]><![endif]-->                    <label
    class="fi-fo-field-wrp-label inline-flex items-center gap-x-3" for="toggledTableColumns.updated_at"
>
    <input
    type="checkbox"
        class="fi-checkbox-input rounded border-none bg-white shadow-sm ring-1 transition duration-75 checked:ring-0 focus:ring-2 focus:ring-offset-0 disabled:pointer-events-none disabled:bg-gray-50 disabled:text-gray-50 disabled:checked:bg-current disabled:checked:text-gray-400 dark:bg-white/5 dark:disabled:bg-transparent dark:disabled:checked:bg-gray-600 text-primary-600 ring-gray-950/10 focus:ring-primary-600 checked:focus:ring-primary-500/50 dark:text-primary-500 dark:ring-white/20 dark:checked:bg-primary-500 dark:focus:ring-primary-500 dark:checked:focus:ring-primary-400/50 dark:disabled:ring-white/10" id="toggledTableColumns.updated_at" wire:loading.attr="disabled" wire:model.live="toggledTableColumns.updated_at"
/>

    <span class="text-sm font-medium leading-6 text-gray-950 dark:text-white">
        
        Updated at<!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </span>

    
</label>
                 <!--[if ENDBLOCK]><![endif]-->

                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
            </div>
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>
</div>

             <!--[if ENDBLOCK]><![endif]-->
</div>
     <!--[if ENDBLOCK]><![endif]-->
</div>

    </div>
    </div>
</div>
                             <!--[if ENDBLOCK]><![endif]-->

                            
                         <!--[if ENDBLOCK]><![endif]-->
                    </div>
                 <!--[if ENDBLOCK]><![endif]-->

                
            </div>
        </div>

        <!--[if BLOCK]><![endif]-->            <div
    x-cloak
    class="fi-ta-selection-indicator flex flex-col justify-between gap-y-1 bg-gray-50 px-3 py-2 sm:flex-row sm:items-center sm:px-6 sm:py-1.5 dark:bg-white/5" wire:key="W37T8F6DBeDlOAulW4em.table.selection.indicator" colspan="3" x-bind:hidden="! selectedRecords.length" x-show="selectedRecords.length"
>
    <div class="flex gap-x-3">
        <svg
    fill="none"
    viewBox="0 0 24 24"
    xmlns="http://www.w3.org/2000/svg"
    class="animate-spin h-5 w-5 text-gray-400 dark:text-gray-500" x-show="isLoading"
>
    <path
        clip-rule="evenodd"
        d="M12 19C15.866 19 19 15.866 19 12C19 8.13401 15.866 5 12 5C8.13401 5 5 8.13401 5 12C5 15.866 8.13401 19 12 19ZM12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
        fill-rule="evenodd"
        fill="currentColor"
        opacity="0.2"
    ></path>
    <path
        d="M2 12C2 6.47715 6.47715 2 12 2V5C8.13401 5 5 8.13401 5 12H2Z"
        fill="currentColor"
    ></path>
</svg>

        <span
            x-text="
                window.pluralize('1 record selected|:count records selected', selectedRecords.length, {
                    count: selectedRecords.length,
                })
            "
            class="text-sm font-medium leading-6 text-gray-700 dark:text-gray-200"
        ></span>
    </div>

    <div class="flex gap-x-3">
        <!--[if BLOCK]><![endif]-->    <button
                                class="fi-link group/link relative inline-flex items-center justify-center outline-none fi-size-md fi-link-size-md gap-1.5 fi-color-custom" type="button" wire:loading.attr="disabled" id="W37T8F6DBeDlOAulW4em.table.selection.indicator.record-count.1" x-on:click="selectAllRecords" x-show="1 !== selectedRecords.length"
    >
        <!--[if BLOCK]><![endif]-->            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <span class="font-semibold group-hover/link:underline group-focus-visible/link:underline text-sm text-custom-600 dark:text-custom-400" style="--c-400:var(--primary-400);--c-600:var(--primary-600);">
            Select all 1
        </span>

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </button> <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]-->    <button
                                class="fi-link group/link relative inline-flex items-center justify-center outline-none fi-size-md fi-link-size-md gap-1.5 fi-color-custom" type="button" wire:loading.attr="disabled" x-on:click="deselectAllRecords"
    >
        <!--[if BLOCK]><![endif]-->            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <span class="font-semibold group-hover/link:underline group-focus-visible/link:underline text-sm text-custom-600 dark:text-custom-400" style="--c-400:var(--danger-400);--c-600:var(--danger-600);">
            Deselect all
        </span>

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </button> <!--[if ENDBLOCK]><![endif]-->

        
    </div>
</div>
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

        <div
                        class="fi-ta-content divide-y divide-gray-200 overflow-x-auto dark:divide-white/10 dark:border-t-white/10"
        >
            <!--[if BLOCK]><![endif]-->                <table
    class="fi-ta-table w-full table-auto divide-y divide-gray-200 text-start dark:divide-white/5"
>
    <!--[if BLOCK]><![endif]-->        <thead class="divide-y divide-gray-200 dark:divide-white/5">
            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

            <tr class="bg-gray-50 dark:bg-white/5">
                <!--[if BLOCK]><![endif]-->                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <!--[if BLOCK]><![endif]-->                                <th
    class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 w-1"
>
    <div class="px-3 py-4">
        <label class="flex">
    <input
    type="checkbox"
        class="fi-checkbox-input rounded border-none bg-white shadow-sm ring-1 transition duration-75 checked:ring-0 focus:ring-2 focus:ring-offset-0 disabled:pointer-events-none disabled:bg-gray-50 disabled:text-gray-50 disabled:checked:bg-current disabled:checked:text-gray-400 dark:bg-white/5 dark:disabled:bg-transparent dark:disabled:checked:bg-gray-600 text-primary-600 ring-gray-950/10 focus:ring-primary-600 checked:focus:ring-primary-500/50 dark:text-primary-500 dark:ring-white/20 dark:checked:bg-primary-500 dark:focus:ring-primary-500 dark:checked:focus:ring-primary-400/50 dark:disabled:ring-white/10" wire:loading.attr="disabled" wire:target="gotoPage,nextPage,previousPage,removeTableFilter,removeTableFilters,reorderTable,resetTableFiltersForm,sortTable,tableColumnSearches,tableFilters,tableRecordsPerPage,tableSearch" wire:key="W37T8F6DBeDlOAulW4em.table.bulk_select_page.checkbox.SWOZkIzo98tKFRVu" x-bind:checked="const recordsOnPage = getRecordsOnPage()

                                            if (recordsOnPage.length && areRecordsSelected(recordsOnPage)) {
                                                $el.checked = true

                                                return 'checked'
                                            }

                                            $el.checked = false

                                            return null" x-on:click="toggleSelectRecordsOnPage"
/>

    <!--[if BLOCK]><![endif]-->        <span class="sr-only">
            Select/deselect all items for bulk actions.
        </span>
     <!--[if ENDBLOCK]><![endif]-->
</label>
    </div>
</th>
                             <!--[if ENDBLOCK]><![endif]-->

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                         <!--[if ENDBLOCK]><![endif]-->

                        <!--[if BLOCK]><![endif]-->                            <th
    class="fi-ta-header-cell px-3 py-3.5 sm:first-of-type:ps-6 sm:last-of-type:pe-6 fi-table-header-cell-name"
>
    <span
                class="group flex w-full items-center gap-x-1 whitespace-nowrap justify-start"
    >
        <span
            class="fi-ta-header-cell-label text-sm font-semibold text-gray-950 dark:text-white"
        >
            Name
        </span>

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </span>
</th>
                         <!--[if ENDBLOCK]><![endif]-->

                        <!--[if BLOCK]><![endif]-->                            <!--[if BLOCK]><![endif]-->                                <!--[if BLOCK]><![endif]-->                                    <th class="w-1"></th>
                                 <!--[if ENDBLOCK]><![endif]-->
                             <!--[if ENDBLOCK]><![endif]-->

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                         <!--[if ENDBLOCK]><![endif]-->
            </tr>
        </thead>
     <!--[if ENDBLOCK]><![endif]-->

    <tbody
                class="divide-y divide-gray-200 whitespace-nowrap dark:divide-white/5"
    >
        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                     
                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                    <!--[if BLOCK]><![endif]-->                        
                        <!--[if BLOCK]><![endif]-->                            
                            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                            <!--[if BLOCK]><![endif]-->                                <tr
            x-bind:class="{
            &#039;hidden&#039;: false &amp;&amp; isGroupCollapsed(&#039;&#039;),
            &#039;bg-gray-50 dark:bg-white/5&#039;: isRecordSelected(&#039;1&#039;),
            &#039;[&amp;&gt;*:first-child]:relative [&amp;&gt;*:first-child]:before:absolute [&amp;&gt;*:first-child]:before:start-0 [&amp;&gt;*:first-child]:before:inset-y-0 [&amp;&gt;*:first-child]:before:w-0.5 [&amp;&gt;*:first-child]:before:bg-primary-600 [&amp;&gt;*:first-child]:dark:before:bg-primary-500&#039;: isRecordSelected(&#039;1&#039;),
        }"
        class="fi-ta-row [@media(hover:hover)]:transition [@media(hover:hover)]:duration-75 hover:bg-gray-50 dark:hover:bg-white/5" wire:key="W37T8F6DBeDlOAulW4em.table.records.1"
>
    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                    <!--[if BLOCK]><![endif]-->                                        <td
    class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 w-1"
>
    <div class="px-3 py-4">
        <!--[if BLOCK]><![endif]-->                                                <label class="flex">
    <input
    type="checkbox"
        class="fi-checkbox-input rounded border-none bg-white shadow-sm ring-1 transition duration-75 checked:ring-0 focus:ring-2 focus:ring-offset-0 disabled:pointer-events-none disabled:bg-gray-50 disabled:text-gray-50 disabled:checked:bg-current disabled:checked:text-gray-400 dark:bg-white/5 dark:disabled:bg-transparent dark:disabled:checked:bg-gray-600 text-primary-600 ring-gray-950/10 focus:ring-primary-600 checked:focus:ring-primary-500/50 dark:text-primary-500 dark:ring-white/20 dark:checked:bg-primary-500 dark:focus:ring-primary-500 dark:checked:focus:ring-primary-400/50 dark:disabled:ring-white/10 fi-ta-record-checkbox" wire:loading.attr="disabled" wire:target="gotoPage,nextPage,previousPage,removeTableFilter,removeTableFilters,reorderTable,resetTableFiltersForm,sortTable,tableColumnSearches,tableFilters,tableRecordsPerPage,tableSearch" value="1" x-model="selectedRecords"
/>

    <!--[if BLOCK]><![endif]-->        <span class="sr-only">
            Select/deselect item 1 for bulk actions.
        </span>
     <!--[if ENDBLOCK]><![endif]-->
</label>
                                             <!--[if ENDBLOCK]><![endif]-->
    </div>
</td>
                                     <!--[if ENDBLOCK]><![endif]-->

                                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                    <!--[if BLOCK]><![endif]-->                                        
                                        <td
    class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3 fi-table-cell-name" wire:key="W37T8F6DBeDlOAulW4em.table.record.1.column.name"
>
    <div
        class="fi-ta-col-wrp"
>
    <!--[if BLOCK]><![endif]-->        <a
            href="http://localhost/admin/tags/1/edit"
            class="flex w-full disabled:pointer-events-none justify-start text-start"
        >
            <div
    class="fi-ta-text grid w-full gap-y-1 px-3 py-4"
>
    <!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

        <div
            class="flex "
                    >
                                                
                    <div
                                                                        class="flex max-w-max"
                    >
                        <!--[if BLOCK]><![endif]-->                            <div
                                class="fi-ta-text-item inline-flex items-center gap-1.5 "
                            >
                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                <span
                                    class="fi-ta-text-item-label text-sm leading-6 text-gray-950 dark:text-white  "
                                    style=""
                                >
                                    Baju
                                </span>

                                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                            </div>
                         <!--[if ENDBLOCK]><![endif]-->
                    </div>
                 <!--[if ENDBLOCK]><![endif]-->
             <!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
        </div>

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
     <!--[if ENDBLOCK]><![endif]-->
</div>

        </a>
     <!--[if ENDBLOCK]><![endif]-->
</div>
</td>
                                     <!--[if ENDBLOCK]><![endif]-->

                                    <!--[if BLOCK]><![endif]-->                                        <td
    class="fi-ta-cell p-0 first-of-type:ps-1 last-of-type:pe-1 sm:first-of-type:ps-3 sm:last-of-type:pe-3"
>
    <div class="whitespace-nowrap px-3 py-4">
        <div
    class="fi-ta-actions flex shrink-0 items-center gap-3 justify-end"
>
    <!--[if BLOCK]><![endif]-->        <!--[if BLOCK]><![endif]-->    <a
        href="http://localhost/admin/tags/1/edit"
                                class="fi-link group/link relative inline-flex items-center justify-center outline-none fi-size-sm fi-link-size-sm gap-1 fi-color-custom fi-ac-action fi-ac-link-action"
    >
        <!--[if BLOCK]><![endif]-->            <!--[if BLOCK]><![endif]-->    <svg style="--c-400:var(--primary-400);--c-600:var(--primary-600);" class="fi-link-icon h-4 w-4 text-custom-600 dark:text-custom-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path d="m5.433 13.917 1.262-3.155A4 4 0 0 1 7.58 9.42l6.92-6.918a2.121 2.121 0 0 1 3 3l-6.92 6.918c-.383.383-.84.685-1.343.886l-3.154 1.262a.5.5 0 0 1-.65-.65Z"/>
  <path d="M3.5 5.75c0-.69.56-1.25 1.25-1.25H10A.75.75 0 0 0 10 3H4.75A2.75 2.75 0 0 0 2 5.75v9.5A2.75 2.75 0 0 0 4.75 18h9.5A2.75 2.75 0 0 0 17 15.25V10a.75.75 0 0 0-1.5 0v5.25c0 .69-.56 1.25-1.25 1.25h-9.5c-.69 0-1.25-.56-1.25-1.25v-9.5Z"/>
</svg> <!--[if ENDBLOCK]><![endif]-->
         <!--[if ENDBLOCK]><![endif]-->

        <span class="font-semibold group-hover/link:underline group-focus-visible/link:underline text-sm text-custom-600 dark:text-custom-400" style="--c-400:var(--primary-400);--c-600:var(--primary-600);">
            Edit
        </span>

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </a> <!--[if ENDBLOCK]><![endif]-->

     <!--[if ENDBLOCK]><![endif]-->
</div>
    </div>
</td>
                                     <!--[if ENDBLOCK]><![endif]-->

                                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                                    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</tr>
                             <!--[if ENDBLOCK]><![endif]-->

                                                     <!--[if ENDBLOCK]><![endif]-->

                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
                     <!--[if ENDBLOCK]><![endif]-->
    </tbody>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</table>
             <!--[if ENDBLOCK]><![endif]-->
        </div>

        <!--[if BLOCK]><![endif]-->            <nav
    aria-label="Pagination navigation"
    role="navigation"
    class="fi-pagination grid grid-cols-[1fr_auto_1fr] items-center gap-x-3 fi-ta-pagination px-3 py-3 sm:px-6"
>
    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]-->        <span
            class="fi-pagination-overview text-sm font-medium text-gray-700 dark:text-gray-200"
        >
            Showing 1 result
        </span>
    
            <div class="col-start-2 justify-self-center">
            <label class="fi-pagination-records-per-page-select fi-compact">
                <div
        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 dark:bg-white/5 ring-gray-950/10 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:ring-white/20 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500"
>
    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div
                class="min-w-0 flex-1"
    >
        <select
    class="fi-select-input block w-full border-none bg-transparent py-1.5 pe-8 text-base text-gray-950 transition duration-75 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 dark:text-white dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] [&amp;_optgroup]:bg-white [&amp;_optgroup]:dark:bg-gray-900 [&amp;_option]:bg-white [&amp;_option]:dark:bg-gray-900 ps-3" wire:model.live="tableRecordsPerPage"
>
    <!--[if BLOCK]><![endif]-->                            <option value="5">
                                5
                            </option>
                                                    <option value="10">
                                10
                            </option>
                                                    <option value="25">
                                25
                            </option>
                                                    <option value="50">
                                50
                            </option>
                                                    <option value="all">
                                All
                            </option>
                         <!--[if ENDBLOCK]><![endif]-->
</select>
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</div>

                <span class="sr-only">
                    Per page
                </span>
            </label>

            <label class="fi-pagination-records-per-page-select">
                <div
        class="fi-input-wrp flex rounded-lg shadow-sm ring-1 transition duration-75 bg-white [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-2 dark:bg-white/5 ring-gray-950/10 [&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-600 dark:ring-white/20 dark:[&amp;:not(:has(.fi-ac-action:focus))]:focus-within:ring-primary-500"
>
    <!--[if BLOCK]><![endif]-->        <div
                        class="items-center gap-x-3 ps-3 flex border-e border-gray-200 pe-3 ps-3 dark:border-white/10"
        >
            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

            <!--[if BLOCK]><![endif]-->                <span class="fi-input-wrp-label whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">
                    Per page
                </span>
             <!--[if ENDBLOCK]><![endif]-->
        </div>
     <!--[if ENDBLOCK]><![endif]-->

    <div
                class="min-w-0 flex-1"
    >
        <select
    class="fi-select-input block w-full border-none bg-transparent py-1.5 pe-8 text-base text-gray-950 transition duration-75 focus:ring-0 disabled:text-gray-500 disabled:[-webkit-text-fill-color:theme(colors.gray.500)] sm:text-sm sm:leading-6 dark:text-white dark:disabled:text-gray-400 dark:disabled:[-webkit-text-fill-color:theme(colors.gray.400)] [&amp;_optgroup]:bg-white [&amp;_optgroup]:dark:bg-gray-900 [&amp;_option]:bg-white [&amp;_option]:dark:bg-gray-900 ps-3" wire:model.live="tableRecordsPerPage"
>
    <!--[if BLOCK]><![endif]-->                            <option value="5">
                                5
                            </option>
                                                    <option value="10">
                                10
                            </option>
                                                    <option value="25">
                                25
                            </option>
                                                    <option value="50">
                                50
                            </option>
                                                    <option value="all">
                                All
                            </option>
                         <!--[if ENDBLOCK]><![endif]-->
</select>
    </div>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</div>
            </label>
        </div>
     <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</nav>
         <!--[if ENDBLOCK]><![endif]-->

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</div>

    <!--[if BLOCK]><![endif]-->    <form wire:submit.prevent="callMountedAction">
        
        <div
        aria-modal="true"
    role="dialog"
    x-data="{
        isOpen: false,

        livewire: null,

        close: function () {
            this.isOpen = false

            this.$refs.modalContainer.dispatchEvent(
                new CustomEvent('modal-closed', { id: 'W37T8F6DBeDlOAulW4em-action' }),
            )

            
        },

        open: function () {
            this.isOpen = true

            

            this.$refs.modalContainer.dispatchEvent(
                new CustomEvent('modal-opened', { id: 'W37T8F6DBeDlOAulW4em-action' }),
            )
        },
    }"
            x-on:close-modal.window="if ($event.detail.id === 'W37T8F6DBeDlOAulW4em-action') close()"
        x-on:open-modal.window="if ($event.detail.id === 'W37T8F6DBeDlOAulW4em-action') open()"
        x-trap.noscroll="isOpen"
    wire:ignore.self
    
    class="fi-modal block"
>
    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div
        x-cloak
        x-show="isOpen"
        x-transition.duration.300ms.opacity
        class="fixed inset-0 z-40 min-h-full overflow-y-auto overflow-x-hidden transition flex items-center"
    >
        <div
            aria-hidden="true"
                                                x-on:click="$dispatch('close-modal', { id: 'W37T8F6DBeDlOAulW4em-action' })"
                                        class="fi-modal-close-overlay fixed inset-0 bg-gray-950/50 dark:bg-gray-950/75 cursor-pointer"
            style="will-change: transform"
        ></div>

        <div
            x-cloak
            x-ref="modalContainer"
            class="pointer-events-none relative w-full transition my-auto p-4" x-on:closed-form-component-action-modal.window="if (($event.detail.id === 'W37T8F6DBeDlOAulW4em') && $wire.mountedActions.length) open()" x-on:modal-closed.stop="const mountedActionShouldOpenModal = false


                if (! mountedActionShouldOpenModal) {
                    return
                }

                if ($wire.mountedFormComponentActions.length) {
                    return
                }

                $wire.unmountAction(false)" x-on:opened-form-component-action-modal.window="if ($event.detail.id === 'W37T8F6DBeDlOAulW4em') close()"
        >
            <div
                x-cloak
                x-data="{ isShown: false }"
                x-init="
                    $nextTick(() => {
                        isShown = isOpen
                        $watch('isOpen', () => (isShown = isOpen))
                    })
                "
                                    x-on:keydown.window.escape="$dispatch('close-modal', { id: 'W37T8F6DBeDlOAulW4em-action' })"
                                x-show="isShown"
                x-transition:enter="duration-300"
                x-transition:leave="duration-300"
                                    x-transition:enter-start="scale-95"
                    x-transition:enter-end="scale-100"
                    x-transition:leave-start="scale-95"
                    x-transition:leave-end="scale-100"
                                class="fi-modal-window pointer-events-auto relative flex w-full cursor-default flex-col bg-white shadow-xl ring-1 ring-gray-950/5 dark:bg-gray-900 dark:ring-white/10 mx-auto rounded-xl hidden max-w-sm"
            >
                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
    </div>
</div>
    </form>

     <!--[if ENDBLOCK]><![endif]-->

<!--[if BLOCK]><![endif]-->    <form wire:submit.prevent="callMountedTableAction">
        
        <div
        aria-modal="true"
    role="dialog"
    x-data="{
        isOpen: false,

        livewire: null,

        close: function () {
            this.isOpen = false

            this.$refs.modalContainer.dispatchEvent(
                new CustomEvent('modal-closed', { id: 'W37T8F6DBeDlOAulW4em-table-action' }),
            )

            
        },

        open: function () {
            this.isOpen = true

            

            this.$refs.modalContainer.dispatchEvent(
                new CustomEvent('modal-opened', { id: 'W37T8F6DBeDlOAulW4em-table-action' }),
            )
        },
    }"
            x-on:close-modal.window="if ($event.detail.id === 'W37T8F6DBeDlOAulW4em-table-action') close()"
        x-on:open-modal.window="if ($event.detail.id === 'W37T8F6DBeDlOAulW4em-table-action') open()"
        x-trap.noscroll="isOpen"
    wire:ignore.self
    
    class="fi-modal block"
>
    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div
        x-cloak
        x-show="isOpen"
        x-transition.duration.300ms.opacity
        class="fixed inset-0 z-40 min-h-full overflow-y-auto overflow-x-hidden transition flex items-center"
    >
        <div
            aria-hidden="true"
                                                x-on:click="$dispatch('close-modal', { id: 'W37T8F6DBeDlOAulW4em-table-action' })"
                                        class="fi-modal-close-overlay fixed inset-0 bg-gray-950/50 dark:bg-gray-950/75 cursor-pointer"
            style="will-change: transform"
        ></div>

        <div
            x-cloak
            x-ref="modalContainer"
            class="pointer-events-none relative w-full transition my-auto p-4" x-on:closed-form-component-action-modal.window="if (($event.detail.id === 'W37T8F6DBeDlOAulW4em') && $wire.mountedTableActions.length) open()" x-on:modal-closed.stop="const mountedTableActionShouldOpenModal = false


                if (! mountedTableActionShouldOpenModal) {
                    return
                }

                if ($wire.mountedFormComponentActions.length) {
                    return
                }

                $wire.unmountTableAction(false)" x-on:opened-form-component-action-modal.window="if ($event.detail.id === 'W37T8F6DBeDlOAulW4em') close()"
        >
            <div
                x-cloak
                x-data="{ isShown: false }"
                x-init="
                    $nextTick(() => {
                        isShown = isOpen
                        $watch('isOpen', () => (isShown = isOpen))
                    })
                "
                                    x-on:keydown.window.escape="$dispatch('close-modal', { id: 'W37T8F6DBeDlOAulW4em-table-action' })"
                                x-show="isShown"
                x-transition:enter="duration-300"
                x-transition:leave="duration-300"
                                    x-transition:enter-start="scale-95"
                    x-transition:enter-end="scale-100"
                    x-transition:leave-start="scale-95"
                    x-transition:leave-end="scale-100"
                                class="fi-modal-window pointer-events-auto relative flex w-full cursor-default flex-col bg-white shadow-xl ring-1 ring-gray-950/5 dark:bg-gray-900 dark:ring-white/10 mx-auto rounded-xl hidden max-w-sm"
            >
                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
    </div>
</div>
    </form>

    <form wire:submit.prevent="callMountedTableBulkAction">
        
        <div
        aria-modal="true"
    role="dialog"
    x-data="{
        isOpen: false,

        livewire: null,

        close: function () {
            this.isOpen = false

            this.$refs.modalContainer.dispatchEvent(
                new CustomEvent('modal-closed', { id: 'W37T8F6DBeDlOAulW4em-table-bulk-action' }),
            )

            
        },

        open: function () {
            this.isOpen = true

            

            this.$refs.modalContainer.dispatchEvent(
                new CustomEvent('modal-opened', { id: 'W37T8F6DBeDlOAulW4em-table-bulk-action' }),
            )
        },
    }"
            x-on:close-modal.window="if ($event.detail.id === 'W37T8F6DBeDlOAulW4em-table-bulk-action') close()"
        x-on:open-modal.window="if ($event.detail.id === 'W37T8F6DBeDlOAulW4em-table-bulk-action') open()"
        x-trap.noscroll="isOpen"
    wire:ignore.self
    
    class="fi-modal block"
>
    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div
        x-cloak
        x-show="isOpen"
        x-transition.duration.300ms.opacity
        class="fixed inset-0 z-40 min-h-full overflow-y-auto overflow-x-hidden transition flex items-center"
    >
        <div
            aria-hidden="true"
                                                x-on:click="$dispatch('close-modal', { id: 'W37T8F6DBeDlOAulW4em-table-bulk-action' })"
                                        class="fi-modal-close-overlay fixed inset-0 bg-gray-950/50 dark:bg-gray-950/75 cursor-pointer"
            style="will-change: transform"
        ></div>

        <div
            x-cloak
            x-ref="modalContainer"
            class="pointer-events-none relative w-full transition my-auto p-4" x-on:closed-form-component-action-modal.window="if (($event.detail.id === 'W37T8F6DBeDlOAulW4em') && $wire.mountedTableBulkAction) open()" x-on:modal-closed.stop="const mountedTableBulkActionShouldOpenModal = false


                if (! mountedTableBulkActionShouldOpenModal) {
                    return
                }

                if ($wire.mountedFormComponentActions.length) {
                    return
                }

                $wire.unmountTableBulkAction(false)" x-on:opened-form-component-action-modal.window="if ($event.detail.id === 'W37T8F6DBeDlOAulW4em') close()"
        >
            <div
                x-cloak
                x-data="{ isShown: false }"
                x-init="
                    $nextTick(() => {
                        isShown = isOpen
                        $watch('isOpen', () => (isShown = isOpen))
                    })
                "
                                    x-on:keydown.window.escape="$dispatch('close-modal', { id: 'W37T8F6DBeDlOAulW4em-table-bulk-action' })"
                                x-show="isShown"
                x-transition:enter="duration-300"
                x-transition:leave="duration-300"
                                    x-transition:enter-start="scale-95"
                    x-transition:enter-end="scale-100"
                    x-transition:leave-start="scale-95"
                    x-transition:leave-end="scale-100"
                                class="fi-modal-window pointer-events-auto relative flex w-full cursor-default flex-col bg-white shadow-xl ring-1 ring-gray-950/5 dark:bg-gray-900 dark:ring-white/10 mx-auto rounded-xl hidden max-w-sm"
            >
                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
    </div>
</div>
    </form>

     <!--[if ENDBLOCK]><![endif]-->

<!--[if BLOCK]><![endif]-->    <form wire:submit.prevent="callMountedInfolistAction">
        
        <div
        aria-modal="true"
    role="dialog"
    x-data="{
        isOpen: false,

        livewire: null,

        close: function () {
            this.isOpen = false

            this.$refs.modalContainer.dispatchEvent(
                new CustomEvent('modal-closed', { id: 'W37T8F6DBeDlOAulW4em-infolist-action' }),
            )

            
        },

        open: function () {
            this.isOpen = true

            

            this.$refs.modalContainer.dispatchEvent(
                new CustomEvent('modal-opened', { id: 'W37T8F6DBeDlOAulW4em-infolist-action' }),
            )
        },
    }"
            x-on:close-modal.window="if ($event.detail.id === 'W37T8F6DBeDlOAulW4em-infolist-action') close()"
        x-on:open-modal.window="if ($event.detail.id === 'W37T8F6DBeDlOAulW4em-infolist-action') open()"
        x-trap.noscroll="isOpen"
    wire:ignore.self
    
    class="fi-modal block"
>
    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div
        x-cloak
        x-show="isOpen"
        x-transition.duration.300ms.opacity
        class="fixed inset-0 z-40 min-h-full overflow-y-auto overflow-x-hidden transition flex items-center"
    >
        <div
            aria-hidden="true"
                                                x-on:click="$dispatch('close-modal', { id: 'W37T8F6DBeDlOAulW4em-infolist-action' })"
                                        class="fi-modal-close-overlay fixed inset-0 bg-gray-950/50 dark:bg-gray-950/75 cursor-pointer"
            style="will-change: transform"
        ></div>

        <div
            x-cloak
            x-ref="modalContainer"
            class="pointer-events-none relative w-full transition my-auto p-4" x-on:closed-form-component-action-modal.window="if (($event.detail.id === 'W37T8F6DBeDlOAulW4em') && $wire.mountedInfolistActions.length) open()" x-on:modal-closed.stop="const mountedInfolistActionShouldOpenModal = false


                if (! mountedInfolistActionShouldOpenModal) {
                    return
                }

                if ($wire.mountedFormComponentActions.length) {
                    return
                }

                $wire.unmountInfolistAction(false)" x-on:opened-form-component-action-modal.window="if ($event.detail.id === 'W37T8F6DBeDlOAulW4em') close()"
        >
            <div
                x-cloak
                x-data="{ isShown: false }"
                x-init="
                    $nextTick(() => {
                        isShown = isOpen
                        $watch('isOpen', () => (isShown = isOpen))
                    })
                "
                                    x-on:keydown.window.escape="$dispatch('close-modal', { id: 'W37T8F6DBeDlOAulW4em-infolist-action' })"
                                x-show="isShown"
                x-transition:enter="duration-300"
                x-transition:leave="duration-300"
                                    x-transition:enter-start="scale-95"
                    x-transition:enter-end="scale-100"
                    x-transition:leave-start="scale-95"
                    x-transition:leave-end="scale-100"
                                class="fi-modal-window pointer-events-auto relative flex w-full cursor-default flex-col bg-white shadow-xl ring-1 ring-gray-950/5 dark:bg-gray-900 dark:ring-white/10 mx-auto rounded-xl hidden max-w-sm"
            >
                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
    </div>
</div>
    </form>

     <!--[if ENDBLOCK]><![endif]-->

<!--[if BLOCK]><![endif]-->    
    <form wire:submit.prevent="callMountedFormComponentAction">
        <div
        aria-modal="true"
    role="dialog"
    x-data="{
        isOpen: false,

        livewire: null,

        close: function () {
            this.isOpen = false

            this.$refs.modalContainer.dispatchEvent(
                new CustomEvent('modal-closed', { id: 'W37T8F6DBeDlOAulW4em-form-component-action' }),
            )

            
        },

        open: function () {
            this.isOpen = true

            

            this.$refs.modalContainer.dispatchEvent(
                new CustomEvent('modal-opened', { id: 'W37T8F6DBeDlOAulW4em-form-component-action' }),
            )
        },
    }"
            x-on:close-modal.window="if ($event.detail.id === 'W37T8F6DBeDlOAulW4em-form-component-action') close()"
        x-on:open-modal.window="if ($event.detail.id === 'W37T8F6DBeDlOAulW4em-form-component-action') open()"
        x-trap.noscroll="isOpen"
    wire:ignore.self
    
    class="fi-modal block"
>
    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <div
        x-cloak
        x-show="isOpen"
        x-transition.duration.300ms.opacity
        class="fixed inset-0 z-40 min-h-full overflow-y-auto overflow-x-hidden transition flex items-center"
    >
        <div
            aria-hidden="true"
                                                x-on:click="$dispatch('close-modal', { id: 'W37T8F6DBeDlOAulW4em-form-component-action' })"
                                        class="fi-modal-close-overlay fixed inset-0 bg-gray-950/50 dark:bg-gray-950/75 cursor-pointer"
            style="will-change: transform"
        ></div>

        <div
            x-cloak
            x-ref="modalContainer"
            class="pointer-events-none relative w-full transition my-auto p-4" x-on:modal-closed.stop="const mountedFormComponentActionShouldOpenModal = false


                if (mountedFormComponentActionShouldOpenModal) {
                    $wire.unmountFormComponentAction(false)
                }"
        >
            <div
                x-cloak
                x-data="{ isShown: false }"
                x-init="
                    $nextTick(() => {
                        isShown = isOpen
                        $watch('isOpen', () => (isShown = isOpen))
                    })
                "
                                    x-on:keydown.window.escape="$dispatch('close-modal', { id: 'W37T8F6DBeDlOAulW4em-form-component-action' })"
                                x-show="isShown"
                x-transition:enter="duration-300"
                x-transition:leave="duration-300"
                                    x-transition:enter-start="scale-95"
                    x-transition:enter-end="scale-100"
                    x-transition:leave-start="scale-95"
                    x-transition:leave-end="scale-100"
                                class="fi-modal-window pointer-events-auto relative flex w-full cursor-default flex-col bg-white shadow-xl ring-1 ring-gray-950/5 dark:bg-gray-900 dark:ring-white/10 mx-auto rounded-xl hidden max-w-sm"
            >
                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
            </div>
        </div>
    </div>
</div>
    </form>

     <!--[if ENDBLOCK]><![endif]-->
</div>


        
    </div>

                

                <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

                
            </div>

            <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
        </div>

        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </section>

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->

    

    <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
</div>

                
            </main>

            
        </div>
    </div>

        <div wire:snapshot="{&quot;data&quot;:{&quot;isFilamentNotificationsComponent&quot;:true,&quot;notifications&quot;:[[],{&quot;class&quot;:&quot;Filament\\Notifications\\Collection&quot;,&quot;s&quot;:&quot;wrbl&quot;}]},&quot;memo&quot;:{&quot;id&quot;:&quot;XKS98RnyipyqBT7htrcq&quot;,&quot;name&quot;:&quot;filament.livewire.notifications&quot;,&quot;path&quot;:&quot;admin\/tags&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;children&quot;:[],&quot;scripts&quot;:[],&quot;assets&quot;:[],&quot;errors&quot;:[],&quot;locale&quot;:&quot;en&quot;},&quot;checksum&quot;:&quot;c588f00f0ae446e7b5fde6142d0093c8a97612c9650fbd04d049557e93d7e40d&quot;}" wire:effects="{&quot;listeners&quot;:[&quot;notificationsSent&quot;,&quot;notificationSent&quot;,&quot;notificationClosed&quot;]}" wire:id="XKS98RnyipyqBT7htrcq">
    <div
        class="fi-no pointer-events-none fixed inset-4 z-50 mx-auto flex gap-3 items-end flex-col-reverse justify-end"
        role="status"
    >
        <!--[if BLOCK]><![endif]--> <!--[if ENDBLOCK]><![endif]-->
    </div>

    <!--[if BLOCK]><![endif]-->        <div
    x-data="{}"
    x-init="
        window.addEventListener('EchoLoaded', () => {
            window.Echo.private('App.Models.User.1').notification((notification) => {
                setTimeout(() => $wire.handleBroadcastNotification(notification), 500)
            })
        })

        if (window.Echo) {
            window.dispatchEvent(new CustomEvent('EchoLoaded'))
        }
    "
    
></div>
     <!--[if ENDBLOCK]><![endif]-->
</div>

        

        <script>
        window.filamentData = []    </script>

            
            <script
                src="http://localhost/js/filament/notifications/notifications.js?v=3.2.14.0"
                
                
                
                
                
            ></script>
        
                
            <script
                src="http://localhost/js/filament/support/async-alpine.js?v=3.2.14.0"
                
                
                
                
                
            ></script>
        
                
            <script
                src="http://localhost/js/filament/support/support.js?v=3.2.14.0"
                
                
                
                
                
            ></script>
        
                
            <script
                src="http://localhost/js/filament/filament/echo.js?v=3.2.14.0"
                
                
                
                
                
            ></script>
        
                
            <script
                src="http://localhost/js/filament/filament/app.js?v=3.2.14.0"
                
                
                
                
                
            ></script>
        
    
<style>
    :root {
            }
</style>

        
        
        

        
    <!-- Livewire Scripts -->
<script src="/livewire/livewire.js?id=5eee0fac"   data-csrf="TrHmLcSjiUFT5VLQFlYqZn1c1z9euO8rs6oWlVuB" data-update-uri="/livewire/update" data-navigate-once="true"></script>
</body>
</html>
