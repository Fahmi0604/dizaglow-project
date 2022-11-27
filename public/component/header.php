
<nav class="absolute top-0 z-50 w-full bg-custom-black border-gray-200 pb-0">
    <div class="lg:container flex flex-wrap items-center justify-between mx-auto mb-1 md:mt-1 sm:px-4 py-2.5 ">
        <div class="flex pl-2">
            <!-- btn menu -->
            <button id="navbar-btn-menu" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg lg:hidden focus:outline-none" aria-controls="navbar-menu" aria-expanded="false">
                <span class="sr-only">Open menu</span>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21.8389 11.1111H2.16111C1.51985 11.1111 1 11.6309 1 12.2722V12.3944C1 13.0357 1.51985 13.5555 2.16111 13.5555H21.8389C22.4802 13.5555 23 13.0357 23 12.3944V12.2722C23 11.6309 22.4802 11.1111 21.8389 11.1111Z" fill="white"/>
                    <path d="M21.8389 17.2222H2.16111C1.51985 17.2222 1 17.7421 1 18.3833V18.5056C1 19.1468 1.51985 19.6667 2.16111 19.6667H21.8389C22.4802 19.6667 23 19.1468 23 18.5056V18.3833C23 17.7421 22.4802 17.2222 21.8389 17.2222Z" fill="white"/>
                    <path d="M21.8389 5H2.16111C1.51985 5 1 5.51985 1 6.16111V6.28333C1 6.9246 1.51985 7.44444 2.16111 7.44444H21.8389C22.4802 7.44444 23 6.9246 23 6.28333V6.16111C23 5.51985 22.4802 5 21.8389 5Z" fill="white"/>
                </svg>
            </button>
            <!-- btn close -->
            <button id="navbar-btn-close" type="button" class="hidden items-center p-2 text-sm text-gray-500 rounded-lg lg:hidden focus:outline-none" aria-controls="navbar-close" aria-expanded="false">
                <span class="sr-only">Open menu</span>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.41784 20C4.1374 19.9999 3.86328 19.9167 3.63012 19.7609C3.39696 19.6051 3.21524 19.3836 3.10793 19.1245C3.00062 18.8654 2.97254 18.5803 3.02723 18.3053C3.08193 18.0303 3.21694 17.7776 3.41521 17.5793L17.5967 3.39808C17.8641 3.13976 18.2223 2.99682 18.5942 3.00005C18.966 3.00328 19.3217 3.15243 19.5846 3.41536C19.8476 3.67829 19.9967 4.03397 19.9999 4.4058C20.0032 4.77762 19.8602 5.13584 19.6019 5.4033L5.42047 19.5845C5.28895 19.7164 5.13268 19.821 4.96061 19.8923C4.78855 19.9636 4.60409 20.0002 4.41784 20V20Z" fill="white"/>
                    <path d="M18.5822 20C18.3959 20.0002 18.2115 19.9636 18.0394 19.8923C17.8673 19.821 17.711 19.7164 17.5795 19.5845L3.39809 5.4033C3.13976 5.13584 2.99682 4.77762 3.00005 4.4058C3.00328 4.03397 3.15243 3.67829 3.41537 3.41536C3.6783 3.15243 4.03399 3.00328 4.40582 3.00005C4.77765 2.99682 5.13588 3.13976 5.40335 3.39808L19.5848 17.5793C19.7831 17.7776 19.9181 18.0303 19.9728 18.3053C20.0275 18.5803 19.9994 18.8654 19.8921 19.1245C19.7848 19.3836 19.603 19.6051 19.3699 19.7609C19.1367 19.9167 18.8626 19.9999 18.5822 20Z" fill="white"/>
                </svg>
            </button>
            <!-- logo -->
            <a href="#" class="flex items-center">
                <img src="assets/logo.png" class="h-6 mr-3 sm:h-9" alt="Dizaglow Logo" />
            </a>
        </div>
        <div class="flex items-center pr-2 md:order-2">
            <!-- btn search -->
            <button type="button" id="navbar-btn-search" aria-controls="navbar-search" aria-expanded="false" class="lg:hidden text-gray-500 focus:outline-none rounded-lg text-sm p-2.5 mr-1" >
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_180_75)">
                    <path d="M11.3662 19.6865C15.9781 19.6865 19.7167 15.9479 19.7167 11.336C19.7167 6.72418 15.9781 2.98553 11.3662 2.98553C6.75435 2.98553 3.01571 6.72418 3.01571 11.336C3.01571 15.9479 6.75435 19.6865 11.3662 19.6865Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M17.2699 17.2398L21.1099 21.0798" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_180_75">
                    <rect width="24" height="24" fill="white"/>
                    </clipPath>
                    </defs>
                </svg>
                <span class="sr-only">Search</span>
            </button>
            <!-- input search -->
            <div class="relative hidden lg:block">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <!-- <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg> -->
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_180_75)">
                        <path d="M11.3662 19.6865C15.9781 19.6865 19.7167 15.9479 19.7167 11.336C19.7167 6.72418 15.9781 2.98553 11.3662 2.98553C6.75435 2.98553 3.01571 6.72418 3.01571 11.336C3.01571 15.9479 6.75435 19.6865 11.3662 19.6865Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M17.2699 17.2398L21.1099 21.0798" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_180_75">
                        <rect width="24" height="24" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg>
                    <span class="sr-only">Search icon</span>
                </div>
                <input type="text" id="search-navbar" class="block w-full p-2 pl-10 text-sm text-white border border-white rounded-lg bg-custom-black" placeholder="Search...">
            </div>
            <!-- btn account -->
            <button type="button" id="navbar-btn-search" aria-controls="navbar-search" aria-expanded="false" class="hidden lg:block text-gray-500 focus:outline-none rounded-lg text-sm p-2 ml-3 mr-1" >
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_159_1254)">
                    <path d="M12 15C15.3137 15 18 12.3137 18 9C18 5.68629 15.3137 3 12 3C8.68629 3 6 5.68629 6 9C6 12.3137 8.68629 15 12 15Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M2.90521 20.2491C3.8273 18.6531 5.15316 17.3278 6.7496 16.4064C8.34605 15.485 10.1568 15 12.0001 15C13.8434 15 15.6541 15.4851 17.2506 16.4065C18.847 17.3279 20.1728 18.6533 21.0949 20.2493" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </g>
                    <defs>
                    <clipPath id="clip0_159_1254">
                    <rect width="24" height="24" fill="white"/>
                    </clipPath>
                    </defs>
                </svg>
                <span class="sr-only">Account</span>
            </button>
            <!-- btn cart -->
            <button type="button" id="navbar-btn-cart" aria-controls="navbar-search" aria-expanded="false" class="text-gray-500 focus:outline-none rounded-lg text-sm p-2 mr-1" >
                <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_134_469)">
                    <path d="M6.03141 6.99603L4.02094 24.085H20.1047L18.0942 6.99603H6.03141Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M9.04712 9.00646L9.6583 5.95155C9.7694 5.39565 10.0697 4.89542 10.5081 4.53601C10.9465 4.1766 11.4959 3.98022 12.0628 3.98029C12.6297 3.98022 13.1791 4.1766 13.6175 4.53601C14.0559 4.89542 14.3562 5.39565 14.4673 5.95155L15.0785 9.00646" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </g>
                    <circle cx="20.5" cy="6.5" r="5.5" fill="#EC4646"/>
                    <path d="M18.89 10L21.99 3.89H23.18L20.17 10H18.89ZM18.36 4.06V3H23.18V3.89L22.09 4.06H18.36Z" fill="white"/>
                    <defs>
                    <clipPath id="clip0_134_469">
                    <rect width="24" height="24" fill="white" transform="translate(0 2)"/>
                    </clipPath>
                    </defs>
                </svg>
                <span class="sr-only">Cart</span>
            </button>
        </div>
        <!-- search dropdown -->
        <div class="items-center justify-between hidden w-full px-2 mt-2 border-t border-primary md:hidden md:w-auto md:order-1" id="navbar-search">
            <div class="relative mt-3">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <!-- <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg> -->
                    <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.9688 8.16758H3.76146L8.1099 2.71807C8.31323 2.46282 8.41105 2.13375 8.38185 1.80325C8.35264 1.47274 8.1988 1.16788 7.95417 0.955726C7.70953 0.743572 7.39414 0.641504 7.07738 0.671976C6.76062 0.702448 6.46844 0.862964 6.2651 1.11821L0.275521 8.61754C0.235224 8.67719 0.199189 8.73985 0.167708 8.80502C0.167708 8.86752 0.167709 8.90501 0.0838544 8.96751C0.029557 9.11082 0.00112738 9.26337 0 9.41747C0.00112738 9.57157 0.029557 9.72412 0.0838544 9.86743C0.0838544 9.92992 0.083854 9.96742 0.167708 10.0299C0.199189 10.0951 0.235224 10.1577 0.275521 10.2174L6.2651 17.7167C6.37774 17.8578 6.51878 17.9713 6.6782 18.0491C6.83763 18.1268 7.01151 18.167 7.1875 18.1667C7.4674 18.1673 7.73865 18.0655 7.95417 17.8792C8.07547 17.7743 8.17573 17.6454 8.24923 17.5C8.32272 17.3546 8.368 17.1955 8.38247 17.0318C8.39693 16.868 8.3803 16.703 8.33353 16.546C8.28676 16.389 8.21076 16.2432 8.1099 16.1169L3.76146 10.6674H17.9688C18.2865 10.6674 18.5912 10.5357 18.8158 10.3013C19.0405 10.0669 19.1667 9.74896 19.1667 9.41747C19.1667 9.08598 19.0405 8.76806 18.8158 8.53366C18.5912 8.29926 18.2865 8.16758 17.9688 8.16758Z" fill="white"/>
                    </svg>
                </div>
                <input type="text" id="search-navbar" class="block w-full p-2 py-2 pl-10 text-sm text-white border border-white rounded-lg bg-transparent outline-none" placeholder="Search...">
            </div>
        </div>
        <!-- menu dropdown -->
        <div class="items-center justify-between hidden w-full border-y mt-2 border-white md:border-none md:mt-0 md:flex md:w-auto md:order-1" id="navbar-menu">
            <ul class="flex flex-col mt-4 rounded-lg bg-custom-black font-Proxima md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium">
                <li class="flex justify-between items-center">
                    <a href="#" class="block py-4 pl-3 pr-4 text-white text-base rounded md:text-sm md:bg-transparent md:p-0" aria-current="page">Skincare</a>
                    <svg class="mr-3 md:hidden" width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.266071 14.7808C0.560617 15.0733 1.03698 15.0733 1.3308 14.7808L7.55844 8.58283C7.69784 8.44621 7.80884 8.28178 7.88469 8.09953C7.96054 7.91728 7.99965 7.72103 7.99965 7.52271C7.99965 7.32438 7.96054 7.12813 7.88469 6.94588C7.80884 6.76364 7.69784 6.5992 7.55844 6.46258L1.28571 0.218832C1.14335 0.0792929 0.954821 0.000862546 0.758418 -0.00053044C0.562016 -0.00192343 0.372462 0.0738254 0.228253 0.211332C0.156814 0.279237 0.0996541 0.361544 0.0603118 0.453154C0.0209695 0.544765 0.000282825 0.643729 -0.000467132 0.743918C-0.00121709 0.844108 0.0179856 0.94339 0.0559519 1.03562C0.0939181 1.12784 0.14984 1.21105 0.220253 1.28008L5.96134 6.99283C6.0311 7.06115 6.08665 7.14339 6.12461 7.23455C6.16257 7.3257 6.18215 7.42387 6.18215 7.52308C6.18215 7.62229 6.16257 7.72046 6.12461 7.81162C6.08665 7.90278 6.0311 7.98502 5.96134 8.05333L0.266071 13.7211C0.196333 13.7893 0.140797 13.8715 0.102847 13.9626C0.0648958 14.0537 0.0453243 14.1518 0.0453243 14.251C0.0453243 14.3501 0.0648958 14.4482 0.102847 14.5393C0.140797 14.6304 0.196333 14.7126 0.266071 14.7808" fill="white"/>
                    </svg>
                </li>
                <li class="flex justify-between items-center">
                    <a href="#" class="block py-4 pl-3 pr-4 text-white text-base rounded md:text-sm md:p-0">Kontak</a>
                    <svg class="mr-3 md:hidden" width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.266071 14.7808C0.560617 15.0733 1.03698 15.0733 1.3308 14.7808L7.55844 8.58283C7.69784 8.44621 7.80884 8.28178 7.88469 8.09953C7.96054 7.91728 7.99965 7.72103 7.99965 7.52271C7.99965 7.32438 7.96054 7.12813 7.88469 6.94588C7.80884 6.76364 7.69784 6.5992 7.55844 6.46258L1.28571 0.218832C1.14335 0.0792929 0.954821 0.000862546 0.758418 -0.00053044C0.562016 -0.00192343 0.372462 0.0738254 0.228253 0.211332C0.156814 0.279237 0.0996541 0.361544 0.0603118 0.453154C0.0209695 0.544765 0.000282825 0.643729 -0.000467132 0.743918C-0.00121709 0.844108 0.0179856 0.94339 0.0559519 1.03562C0.0939181 1.12784 0.14984 1.21105 0.220253 1.28008L5.96134 6.99283C6.0311 7.06115 6.08665 7.14339 6.12461 7.23455C6.16257 7.3257 6.18215 7.42387 6.18215 7.52308C6.18215 7.62229 6.16257 7.72046 6.12461 7.81162C6.08665 7.90278 6.0311 7.98502 5.96134 8.05333L0.266071 13.7211C0.196333 13.7893 0.140797 13.8715 0.102847 13.9626C0.0648958 14.0537 0.0453243 14.1518 0.0453243 14.251C0.0453243 14.3501 0.0648958 14.4482 0.102847 14.5393C0.140797 14.6304 0.196333 14.7126 0.266071 14.7808" fill="white"/>
                    </svg>
                </li>
                <li class="flex justify-between items-center md:hidden">
                    <a href="#" class="block py-4 pl-3 pr-4 text-white text-base rounded md:text-sm md:p-0">Account</a>
                    <svg class="mr-3 md:hidden" width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.266071 14.7808C0.560617 15.0733 1.03698 15.0733 1.3308 14.7808L7.55844 8.58283C7.69784 8.44621 7.80884 8.28178 7.88469 8.09953C7.96054 7.91728 7.99965 7.72103 7.99965 7.52271C7.99965 7.32438 7.96054 7.12813 7.88469 6.94588C7.80884 6.76364 7.69784 6.5992 7.55844 6.46258L1.28571 0.218832C1.14335 0.0792929 0.954821 0.000862546 0.758418 -0.00053044C0.562016 -0.00192343 0.372462 0.0738254 0.228253 0.211332C0.156814 0.279237 0.0996541 0.361544 0.0603118 0.453154C0.0209695 0.544765 0.000282825 0.643729 -0.000467132 0.743918C-0.00121709 0.844108 0.0179856 0.94339 0.0559519 1.03562C0.0939181 1.12784 0.14984 1.21105 0.220253 1.28008L5.96134 6.99283C6.0311 7.06115 6.08665 7.14339 6.12461 7.23455C6.16257 7.3257 6.18215 7.42387 6.18215 7.52308C6.18215 7.62229 6.16257 7.72046 6.12461 7.81162C6.08665 7.90278 6.0311 7.98502 5.96134 8.05333L0.266071 13.7211C0.196333 13.7893 0.140797 13.8715 0.102847 13.9626C0.0648958 14.0537 0.0453243 14.1518 0.0453243 14.251C0.0453243 14.3501 0.0648958 14.4482 0.102847 14.5393C0.140797 14.6304 0.196333 14.7126 0.266071 14.7808" fill="white"/>
                    </svg>
                </li>
                <li class="flex justify-between items-center">
                    <a href="#" class="block py-4 pl-3 pr-4 text-white text-base rounded md:text-sm md:p-0">About us</a>
                    <svg class="mr-3 md:hidden" width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.266071 14.7808C0.560617 15.0733 1.03698 15.0733 1.3308 14.7808L7.55844 8.58283C7.69784 8.44621 7.80884 8.28178 7.88469 8.09953C7.96054 7.91728 7.99965 7.72103 7.99965 7.52271C7.99965 7.32438 7.96054 7.12813 7.88469 6.94588C7.80884 6.76364 7.69784 6.5992 7.55844 6.46258L1.28571 0.218832C1.14335 0.0792929 0.954821 0.000862546 0.758418 -0.00053044C0.562016 -0.00192343 0.372462 0.0738254 0.228253 0.211332C0.156814 0.279237 0.0996541 0.361544 0.0603118 0.453154C0.0209695 0.544765 0.000282825 0.643729 -0.000467132 0.743918C-0.00121709 0.844108 0.0179856 0.94339 0.0559519 1.03562C0.0939181 1.12784 0.14984 1.21105 0.220253 1.28008L5.96134 6.99283C6.0311 7.06115 6.08665 7.14339 6.12461 7.23455C6.16257 7.3257 6.18215 7.42387 6.18215 7.52308C6.18215 7.62229 6.16257 7.72046 6.12461 7.81162C6.08665 7.90278 6.0311 7.98502 5.96134 8.05333L0.266071 13.7211C0.196333 13.7893 0.140797 13.8715 0.102847 13.9626C0.0648958 14.0537 0.0453243 14.1518 0.0453243 14.251C0.0453243 14.3501 0.0648958 14.4482 0.102847 14.5393C0.140797 14.6304 0.196333 14.7126 0.266071 14.7808" fill="white"/>
                    </svg>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- pop up cart -->
<div class="hidden md:block">
    <div id="dropdown-cart" class="hidden absolute right-[7.5%] z-20 w-full max-w-xs bg-custom-black rounded p-4 border border-white" aria-labelledby="dropdownCart">
        <div class="block pb-2 font-bold font-Proxima text-white">
            You Bag
        </div>

        <!-- container card -->
        <div class="w-full border-y border-white font-Proxima">
            <!-- card 1 -->
            <div class="flex py-6">
                <div class="w-[25%]">
                    <img src="assets/produk1.png" alt="cart1" class="w-full rounded">
                </div>
                <div class="w-[70%] ml-[5%] text-white">
                    <h2 class="text-base font-bold mb-1">Dizaglow Serum - Face serum</h2>
                    <p class="text-xs">Rp 120,000</p>

                    <div class="flex items-center mt-6">
                        <!-- counter produk -->
                        <div class="w-[60%] border border-white rounded-md mr-4">
                            <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent text-base">
                                <button id="decrement" class="bg-custom-black text-white h-full w-20 rounded-l cursor-pointer outline-none">
                                    <span class="m-auto font-medium">−</span>
                                </button>
                                <input type="number" class="outline-none focus:outline-none text-center w-full bg-custom-black font-semibold text-md focus:text-black  md:text-basecursor-default flex items-center text-white " id="counter-product" value="0"></input>
                                <button id="increment" class="bg-custom-black text-white h-full w-20 rounded-r cursor-pointer">
                                    <span class="m-auto font-medium">+</span>
                                </button>
                            </div>
                        </div>
        
                        <svg width="28" height="27" viewBox="0 0 28 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.0425 20.25C12.342 20.25 12.6293 20.1315 12.8411 19.9205C13.0528 19.7095 13.1718 19.4234 13.1718 19.125V12.375C13.1718 12.0766 13.0528 11.7905 12.8411 11.5795C12.6293 11.3685 12.342 11.25 12.0425 11.25C11.743 11.25 11.4557 11.3685 11.2439 11.5795C11.0321 11.7905 10.9131 12.0766 10.9131 12.375V19.125C10.9131 19.4234 11.0321 19.7095 11.2439 19.9205C11.4557 20.1315 11.743 20.25 12.0425 20.25ZM23.3359 6.75H18.8186V5.625C18.8186 4.72989 18.4616 3.87145 17.8262 3.23851C17.1908 2.60558 16.3291 2.25 15.4305 2.25H13.1718C12.2733 2.25 11.4115 2.60558 10.7761 3.23851C10.1408 3.87145 9.7838 4.72989 9.7838 5.625V6.75H5.26643C4.96691 6.75 4.67966 6.86853 4.46786 7.0795C4.25607 7.29048 4.13708 7.57663 4.13708 7.875C4.13708 8.17337 4.25607 8.45952 4.46786 8.6705C4.67966 8.88147 4.96691 9 5.26643 9H6.39577V21.375C6.39577 22.2701 6.75272 23.1286 7.3881 23.7615C8.02348 24.3944 8.88524 24.75 9.7838 24.75H18.8186C19.7171 24.75 20.5789 24.3944 21.2143 23.7615C21.8496 23.1286 22.2066 22.2701 22.2066 21.375V9H23.3359C23.6354 9 23.9227 8.88147 24.1345 8.6705C24.3463 8.45952 24.4653 8.17337 24.4653 7.875C24.4653 7.57663 24.3463 7.29048 24.1345 7.0795C23.9227 6.86853 23.6354 6.75 23.3359 6.75ZM12.0425 5.625C12.0425 5.32663 12.1615 5.04048 12.3733 4.8295C12.5851 4.61853 12.8723 4.5 13.1718 4.5H15.4305C15.73 4.5 16.0173 4.61853 16.2291 4.8295C16.4409 5.04048 16.5599 5.32663 16.5599 5.625V6.75H12.0425V5.625ZM19.9479 21.375C19.9479 21.6734 19.8289 21.9595 19.6171 22.1705C19.4053 22.3815 19.1181 22.5 18.8186 22.5H9.7838C9.48428 22.5 9.19703 22.3815 8.98524 22.1705C8.77344 21.9595 8.65446 21.6734 8.65446 21.375V9H19.9479V21.375ZM16.5599 20.25C16.8594 20.25 17.1466 20.1315 17.3584 19.9205C17.5702 19.7095 17.6892 19.4234 17.6892 19.125V12.375C17.6892 12.0766 17.5702 11.7905 17.3584 11.5795C17.1466 11.3685 16.8594 11.25 16.5599 11.25C16.2603 11.25 15.9731 11.3685 15.7613 11.5795C15.5495 11.7905 15.4305 12.0766 15.4305 12.375V19.125C15.4305 19.4234 15.5495 19.7095 15.7613 19.9205C15.9731 20.1315 16.2603 20.25 16.5599 20.25Z" fill="#BA3232"/>
                        </svg>
                    </div>
                </div>
            </div>
            <!-- card 2 -->
            <div class="flex py-6">
                <div class="w-[25%]">
                    <img src="assets/produk1.png" alt="cart1" class="w-full rounded">
                </div>
                <div class="w-[70%] ml-[5%] text-white">
                    <h2 class="text-base font-bold mb-1">Dizaglow Serum - Face serum</h2>
                    <p class="text-xs">Rp 120,000</p>

                    <div class="flex items-center mt-6">
                        <div class="w-[60%] border border-white rounded-md mr-4">
                            <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent text-base">
                                <button data-action="decrement" class="bg-custom-black text-white h-full w-20 rounded-l cursor-pointer outline-none">
                                    <span class="m-auto font-medium">−</span>
                                </button>
                                <input type="number" class="outline-none focus:outline-none text-center w-full bg-custom-black font-semibold text-md focus:text-black  md:text-basecursor-default flex items-center text-white " name="custom-input-number" value="0"></input>
                                <button data-action="increment" class="bg-custom-black text-white h-full w-20 rounded-r cursor-pointer">
                                    <span class="m-auto font-medium">+</span>
                                </button>
                            </div>
                        </div>
        
                        <svg width="28" height="27" viewBox="0 0 28 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.0425 20.25C12.342 20.25 12.6293 20.1315 12.8411 19.9205C13.0528 19.7095 13.1718 19.4234 13.1718 19.125V12.375C13.1718 12.0766 13.0528 11.7905 12.8411 11.5795C12.6293 11.3685 12.342 11.25 12.0425 11.25C11.743 11.25 11.4557 11.3685 11.2439 11.5795C11.0321 11.7905 10.9131 12.0766 10.9131 12.375V19.125C10.9131 19.4234 11.0321 19.7095 11.2439 19.9205C11.4557 20.1315 11.743 20.25 12.0425 20.25ZM23.3359 6.75H18.8186V5.625C18.8186 4.72989 18.4616 3.87145 17.8262 3.23851C17.1908 2.60558 16.3291 2.25 15.4305 2.25H13.1718C12.2733 2.25 11.4115 2.60558 10.7761 3.23851C10.1408 3.87145 9.7838 4.72989 9.7838 5.625V6.75H5.26643C4.96691 6.75 4.67966 6.86853 4.46786 7.0795C4.25607 7.29048 4.13708 7.57663 4.13708 7.875C4.13708 8.17337 4.25607 8.45952 4.46786 8.6705C4.67966 8.88147 4.96691 9 5.26643 9H6.39577V21.375C6.39577 22.2701 6.75272 23.1286 7.3881 23.7615C8.02348 24.3944 8.88524 24.75 9.7838 24.75H18.8186C19.7171 24.75 20.5789 24.3944 21.2143 23.7615C21.8496 23.1286 22.2066 22.2701 22.2066 21.375V9H23.3359C23.6354 9 23.9227 8.88147 24.1345 8.6705C24.3463 8.45952 24.4653 8.17337 24.4653 7.875C24.4653 7.57663 24.3463 7.29048 24.1345 7.0795C23.9227 6.86853 23.6354 6.75 23.3359 6.75ZM12.0425 5.625C12.0425 5.32663 12.1615 5.04048 12.3733 4.8295C12.5851 4.61853 12.8723 4.5 13.1718 4.5H15.4305C15.73 4.5 16.0173 4.61853 16.2291 4.8295C16.4409 5.04048 16.5599 5.32663 16.5599 5.625V6.75H12.0425V5.625ZM19.9479 21.375C19.9479 21.6734 19.8289 21.9595 19.6171 22.1705C19.4053 22.3815 19.1181 22.5 18.8186 22.5H9.7838C9.48428 22.5 9.19703 22.3815 8.98524 22.1705C8.77344 21.9595 8.65446 21.6734 8.65446 21.375V9H19.9479V21.375ZM16.5599 20.25C16.8594 20.25 17.1466 20.1315 17.3584 19.9205C17.5702 19.7095 17.6892 19.4234 17.6892 19.125V12.375C17.6892 12.0766 17.5702 11.7905 17.3584 11.5795C17.1466 11.3685 16.8594 11.25 16.5599 11.25C16.2603 11.25 15.9731 11.3685 15.7613 11.5795C15.5495 11.7905 15.4305 12.0766 15.4305 12.375V19.125C15.4305 19.4234 15.5495 19.7095 15.7613 19.9205C15.9731 20.1315 16.2603 20.25 16.5599 20.25Z" fill="#BA3232"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full font-Proxima py-4">
            <div class="flex justify-between">
                <span class="font-bold text-white">Subtotal</span>
                <span class="font-bold text-white">Rp 240,000</span>
            </div>
        </div>

        <button class="w-full py-3 bg-secondary text-white text-xs font-bold rounded">Checkout</button>
    </div>
</div>
