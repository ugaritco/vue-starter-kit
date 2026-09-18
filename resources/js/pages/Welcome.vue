<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import { dashboard, login } from '@/routes';
/* @chisel-registration */
import { register } from '@/routes';
/* @end-chisel-registration */
</script>

<template>
    <Head title="Welcome">
        <link rel="preconnect" href="https://rsms.me/" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    </Head>
    <div
        class="flex min-h-screen flex-col items-center bg-[#FDFDFC] p-6 text-[#1b1b18] lg:justify-center lg:p-8 dark:bg-[#0a0a0a]"
    >
        <header
            class="mb-6 w-full max-w-[335px] text-sm not-has-[nav]:hidden lg:max-w-4xl"
        >
            <nav class="flex items-center justify-end gap-4">
                <Link
                    v-if="$page.props.auth.user"
                    :href="dashboard()"
                    class="inline-block rounded-sm border border-[#19140035] px-5 py-1.5 text-sm leading-normal text-[#1b1b18] hover:border-[#1915014a] dark:border-[#3E3E3A] dark:text-[#EDEDEC] dark:hover:border-[#62605b]"
                >
                    Dashboard
                </Link>
                <template v-else>
                    <Link
                        :href="login()"
                        class="inline-block rounded-sm border border-transparent px-5 py-1.5 text-sm leading-normal text-[#1b1b18] hover:border-[#19140035] dark:text-[#EDEDEC] dark:hover:border-[#3E3E3A]"
                    >
                        Log in
                    </Link>
                    <!-- @chisel-registration -->
                    <Link
                        :href="register()"
                        class="inline-block rounded-sm border border-[#19140035] px-5 py-1.5 text-sm leading-normal text-[#1b1b18] hover:border-[#1915014a] dark:border-[#3E3E3A] dark:text-[#EDEDEC] dark:hover:border-[#62605b]"
                    >
                        Register
                    </Link>
                    <!-- @end-chisel-registration -->
                </template>
            </nav>
        </header>
        <div
            class="flex w-full items-center justify-center opacity-100 transition-opacity duration-750 lg:grow starting:opacity-0"
        >
            <main
                class="flex w-full max-w-[335px] flex-col-reverse overflow-hidden rounded-lg lg:max-w-4xl lg:flex-row"
            >
                <div
                    class="flex-1 rounded-br-lg rounded-bl-lg bg-white p-6 pb-12 text-[13px] leading-[20px] shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] lg:rounded-tl-lg lg:rounded-br-none lg:p-20 dark:bg-[#161615] dark:text-[#EDEDEC] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]"
                >
                    <h1 class="mb-1 font-medium">Let's get started</h1>
                    <p class="mb-2 text-[#706f6c] dark:text-[#A1A09A]">
                        Ugarit has an incredibly rich ecosystem. <br />We
                        suggest starting with the following.
                    </p>
                    <ul class="mb-4 flex flex-col lg:mb-6">
                        <li
                            class="relative flex items-center gap-4 py-2 before:absolute before:top-1/2 before:bottom-0 before:left-[0.4rem] before:border-l before:border-[#e3e3e0] dark:before:border-[#3E3E3A]"
                        >
                            <span
                                class="relative bg-white py-1 dark:bg-[#161615]"
                            >
                                <span
                                    class="flex h-3.5 w-3.5 items-center justify-center rounded-full border border-[#e3e3e0] bg-[#FDFDFC] shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)] dark:border-[#3E3E3A] dark:bg-[#161615]"
                                >
                                    <span
                                        class="h-1.5 w-1.5 rounded-full bg-[#dbdbd7] dark:bg-[#3E3E3A]"
                                    />
                                </span>
                            </span>
                            <span>
                                Read the
                                <a
                                    href="https://ugarit.com/docs"
                                    target="_blank"
                                    class="ml-1 inline-flex items-center space-x-1 font-medium text-[#f53003] underline underline-offset-4 dark:text-[#FF4433]"
                                >
                                    <span>Documentation</span>
                                    <svg
                                        width="10"
                                        height="11"
                                        viewBox="0 0 10 11"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-2.5 w-2.5"
                                    >
                                        <path
                                            d="M7.70833 6.95834V2.79167H3.54167M2.5 8L7.5 3.00001"
                                            stroke="currentColor"
                                            stroke-linecap="square"
                                        />
                                    </svg>
                                </a>
                            </span>
                        </li>
                        <li
                            class="relative flex items-center gap-4 py-2 before:absolute before:top-0 before:bottom-1/2 before:left-[0.4rem] before:border-l before:border-[#e3e3e0] dark:before:border-[#3E3E3A]"
                        >
                            <span
                                class="relative bg-white py-1 dark:bg-[#161615]"
                            >
                                <span
                                    class="flex h-3.5 w-3.5 items-center justify-center rounded-full border border-[#e3e3e0] bg-[#FDFDFC] shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)] dark:border-[#3E3E3A] dark:bg-[#161615]"
                                >
                                    <span
                                        class="h-1.5 w-1.5 rounded-full bg-[#dbdbd7] dark:bg-[#3E3E3A]"
                                    />
                                </span>
                            </span>
                            <span>
                                Watch video tutorials at
                                <a
                                    href="https://bootcamp.ugarit.com"
                                    target="_blank"
                                    class="ml-1 inline-flex items-center space-x-1 font-medium text-[#f53003] underline underline-offset-4 dark:text-[#FF4433]"
                                >
                                    <span>Ugarit Bootcamp</span>
                                    <svg
                                        width="10"
                                        height="11"
                                        viewBox="0 0 10 11"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="h-2.5 w-2.5"
                                    >
                                        <path
                                            d="M7.70833 6.95834V2.79167H3.54167M2.5 8L7.5 3.00001"
                                            stroke="currentColor"
                                            stroke-linecap="square"
                                        />
                                    </svg>
                                </a>
                            </span>
                        </li>
                    </ul>
                    <ul class="flex gap-3 text-sm leading-normal">
                        <li>
                            <a
                                href="https://cloud.ugarit.com"
                                target="_blank"
                                class="inline-block rounded-sm border border-black bg-[#1b1b18] px-5 py-1.5 text-sm leading-normal text-white hover:border-black hover:bg-black dark:border-[#eeeeec] dark:bg-[#eeeeec] dark:text-[#1C1C1A] dark:hover:border-white dark:hover:bg-white"
                            >
                                Deploy now
                            </a>
                        </li>
                    </ul>
                </div>
                <div
                    class="relative -mb-px aspect-[335/364] w-full shrink-0 overflow-hidden rounded-t-lg bg-[#fff2f2] lg:mb-0 lg:-ml-px lg:aspect-auto lg:w-[438px] lg:rounded-t-none lg:rounded-r-lg dark:bg-[#1D0002]"
                >
                    <!-- Ugarit Header & Version -->
                    <svg
                        class="w-full max-w-none translate-y-0 text-[#F53003] opacity-100 transition-all duration-750 dark:text-[#FF4433] starting:opacity-0 motion-safe:starting:translate-y-6"
                        viewBox="0 0 438 104"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <!-- Ugarit Isometric Cube Emblem -->
                        <g transform="translate(24, 20) scale(0.036)" fill="currentColor">
                            <path d="M791.5 1714L215 1381.5c-8.5-5.5-15-8.5-15-19.5V357.5c0-8.158 5-13.5 9.5-16L502 173c9.5-5.5 17.5-5.5 26.5 0L819 340c11.5 6.5 12 15 12 22.5v622L1073.5 845V527c0-11 5-17.5 17-24.5L1380 336c7-4 12.5-4 19.5 0l295 170c9.5 5.5 10.5 12 10.5 21.5V858c0 10.5-2.5 16-13 22.5l-278.5 160v317c0 12.5-3 17.5-14 24L821 1714c-11 6-18.5 6-29.5 0zm-9-61.5v-279l-276-156c-9-5.5-15.5-9.5-15.5-23V543L248 403.5V1345zm583-307.5v-277L831 1373.5v279zm-25.528-318.167L1098 886.5 565 1194l241 137zM782.5 1012V403L540 543v609zm583-28V708l-243-140v277zm291-139V568l-243 140v276zm-267-179.5l242-139.5-242-139.5L1147 526zM757.635 361.004L515 221.5 273 361l242 140z"/>
                        </g>
                        <!-- Ugarit Wordmark -->
                        <text x="106" y="66" font-family="'Instrument Sans', system-ui, -apple-system, sans-serif" font-weight="800" font-size="40" letter-spacing="4" fill="currentColor">
                            UGARIT
                        </text>
                        <!-- Version Badge -->
                        <g transform="translate(322, 34)">
                            <rect width="90" height="32" rx="16" fill="currentColor" fill-opacity="0.1" stroke="currentColor" stroke-width="1.5" />
                            <text x="45" y="21" font-family="'Instrument Sans', monospace, sans-serif" font-weight="700" font-size="13" fill="currentColor" text-anchor="middle">
                                v1.00.00
                            </text>
                        </g>
                    </svg>

                    <!-- Ugarit v1 Chromatic Artwork -->
                    <svg
                        class="relative -mt-[5rem] -ml-8 w-[438px] max-w-none [--stroke-color:#1B1B18] lg:ml-0 dark:[--stroke-color:#FF750F]"
                        viewBox="0 0 440 392"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <!-- Layer 1: Base Dark -->
                        <g
                            class="text-[#1B1B18] opacity-100 mix-blend-darken transition-all delay-300 duration-750 dark:text-black dark:mix-blend-normal starting:opacity-0"
                        >
                            <mask
                                id="path-1-mask"
                                maskUnits="userSpaceOnUse"
                                x="140"
                                y="103"
                                width="160"
                                height="299"
                                fill="black"
                            >
                                <rect fill="white" x="140" y="103" width="160" height="299" />
                                <path d="M198.87 167.6H173.67V105.2H266.67V400.2H198.87V167.6Z" />
                            </mask>
                            <path
                                d="M198.87 167.6H173.67V105.2H266.67V400.2H198.87V167.6Z"
                                fill="currentColor"
                            />
                            <path
                                d="M198.87 167.6H173.67V105.2H266.67V400.2H198.87V167.6Z"
                                stroke="var(--stroke-color)"
                                stroke-width="2.4"
                                mask="url(#path-1-mask)"
                            />
                        </g>

                        <!-- Layer 2: Soft Crimson -->
                        <g
                            class="text-[#F3BEC7] opacity-100 transition-all delay-400 duration-750 dark:text-[#4B0600] starting:opacity-0 motion-safe:starting:-translate-x-[26px]"
                        >
                            <mask
                                id="path-2-mask"
                                maskUnits="userSpaceOnUse"
                                x="166"
                                y="103"
                                width="160"
                                height="299"
                                fill="black"
                            >
                                <rect fill="white" x="166" y="103" width="160" height="299" />
                                <path d="M224.87 167.6H199.67V105.2H292.67V400.2H224.87V167.6Z" />
                            </mask>
                            <path
                                d="M224.87 167.6H199.67V105.2H292.67V400.2H224.87V167.6Z"
                                fill="currentColor"
                            />
                            <path
                                d="M224.87 167.6H199.67V105.2H292.67V400.2H224.87V167.6Z"
                                stroke="var(--stroke-color)"
                                stroke-width="2.4"
                                mask="url(#path-2-mask)"
                            />
                        </g>

                        <!-- Layer 3: Gold / Amber -->
                        <g
                            class="text-[#F8B803] opacity-100 mix-blend-color transition-all delay-400 duration-750 dark:text-[#391800] dark:mix-blend-hard-light starting:opacity-0 motion-safe:starting:-translate-x-[51px]"
                        >
                            <mask
                                id="path-3-mask"
                                maskUnits="userSpaceOnUse"
                                x="191"
                                y="103"
                                width="160"
                                height="299"
                                fill="black"
                            >
                                <rect fill="white" x="191" y="103" width="160" height="299" />
                                <path d="M249.87 167.6H224.67V105.2H317.67V400.2H249.87V167.6Z" />
                            </mask>
                            <path
                                d="M249.87 167.6H224.67V105.2H317.67V400.2H249.87V167.6Z"
                                fill="currentColor"
                            />
                            <path
                                d="M249.87 167.6H224.67V105.2H317.67V400.2H249.87V167.6Z"
                                stroke="var(--stroke-color)"
                                stroke-width="2.4"
                                mask="url(#path-3-mask)"
                            />
                        </g>

                        <!-- Layer 4: Deep Amber -->
                        <g
                            class="text-[#F3BEC7] opacity-100 mix-blend-multiply transition-all delay-400 duration-750 dark:text-[#733000] dark:mix-blend-normal starting:opacity-0 motion-safe:starting:-translate-x-[78px]"
                        >
                            <mask
                                id="path-4-mask"
                                maskUnits="userSpaceOnUse"
                                x="218"
                                y="103"
                                width="160"
                                height="299"
                                fill="black"
                            >
                                <rect fill="white" x="218" y="103" width="160" height="299" />
                                <path d="M276.87 167.6H251.67V105.2H344.67V400.2H276.87V167.6Z" />
                            </mask>
                            <path
                                d="M276.87 167.6H251.67V105.2H344.67V400.2H276.87V167.6Z"
                                fill="currentColor"
                            />
                            <path
                                d="M276.87 167.6H251.67V105.2H344.67V400.2H276.87V167.6Z"
                                stroke="var(--stroke-color)"
                                stroke-width="2.4"
                                mask="url(#path-4-mask)"
                            />
                        </g>

                        <!-- Layer 5: Accent Shift -->
                        <g
                            class="text-[#F3BEC7] opacity-100 mix-blend-hard-light transition-all delay-400 duration-750 dark:text-[#4B0600] starting:opacity-0 motion-safe:starting:-translate-x-[102px]"
                        >
                            <mask
                                id="path-5-mask"
                                maskUnits="userSpaceOnUse"
                                x="242"
                                y="103"
                                width="160"
                                height="299"
                                fill="black"
                            >
                                <rect fill="white" x="242" y="103" width="160" height="299" />
                                <path d="M300.87 167.6H275.67V105.2H368.67V400.2H300.87V167.6Z" />
                            </mask>
                            <path
                                d="M300.87 167.6H275.67V105.2H368.67V400.2H300.87V167.6Z"
                                fill="currentColor"
                            />
                            <path
                                d="M300.87 167.6H275.67V105.2H368.67V400.2H300.87V167.6Z"
                                stroke="var(--stroke-color)"
                                stroke-width="2.4"
                                mask="url(#path-5-mask)"
                            />
                        </g>
                    </svg>

                    <!-- Ecosystem Sub-badge -->
                    <div class="absolute bottom-6 left-0 right-0 text-center">
                        <span class="inline-flex items-center gap-2 rounded-full border border-[#19140020] bg-white/85 px-4 py-1.5 text-xs font-semibold tracking-wider text-[#1b1b18] backdrop-blur-sm shadow-sm dark:border-[#3E3E3A] dark:bg-[#161615]/85 dark:text-[#EDEDEC]">
                            <span class="h-2 w-2 rounded-full bg-[#f53003] animate-pulse"></span>
                            UGARIT ECOSYSTEM v1.00.00
                        </span>
                    </div>

                    <div
                        class="absolute inset-0 rounded-t-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] lg:rounded-t-none lg:rounded-r-lg dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]"
                    ></div>
                </div>
            </main>
        </div>
        <div class="hidden h-14.5 lg:block"></div>
    </div>
</template>
