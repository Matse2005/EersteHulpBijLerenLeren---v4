<!DOCTYPE html>
<html lang="en" class="dark [--scroll-mt:9.875rem] lg:[--scroll-mt:6.3125rem]">

<head>
  <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png?v=3" />
  <link rel="icon" type="image/png" sizes="32x32" href="/favicons/favicon-32x32.png?v=3" />
  <link rel="icon" type="image/png" sizes="16x16" href="/favicons/favicon-16x16.png?v=3" />
  <link rel="manifest" href="/favicons/site.webmanifest?v=3" />
  <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg?v=3" color="#38bdf8" />
  <link rel="shortcut icon" href="/favicons/favicon.ico?v=3" />
  <meta name="apple-mobile-web-app-title" content="Tailwind CSS" />
  <meta name="application-name" content="Tailwind CSS" />
  <meta name="msapplication-TileColor" content="#38bdf8" />
  <meta name="msapplication-config" content="/favicons/browserconfig.xml?v=3" />
  <meta name="theme-color" content="#ffffff" />
  <script>
    try {
      if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark')
      } else {
        document.documentElement.classList.remove('dark')
      }
    } catch (_) {}
  </script>
  <meta name="viewport" content="width=device-width" />
  <meta charSet="utf-8" />
  <meta name="twitter:title" content="Headless UI v1.5: The One With Comboboxes - Tailwind CSS" />
  <meta property="og:title" content="Headless UI v1.5: The One With Comboboxes - Tailwind CSS" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@tailwindcss" />
  <meta name="twitter:description" content="We just released Headless UI v1.5, which includes a brand new `Combobox` component." />
  <meta name="twitter:image" content="https://tailwindcss.com/_next/static/media/social-card-large.f6878fd8df804f73ba3f1a271122105a.jpg" />
  <meta name="twitter:creator" content="@tailwindcss" />
  <meta property="og:url" content="https://tailwindcss.com/blog/headless-ui-v1-5" />
  <meta property="og:type" content="article" />
  <meta property="og:description" content="We just released Headless UI v1.5, which includes a brand new `Combobox` component." />
  <meta property="og:image" content="https://tailwindcss.com/_next/static/media/social-card-large.f6878fd8df804f73ba3f1a271122105a.jpg" />
  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="/feeds/feed.xml" />
  <link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="/feeds/atom.xml" />
  <link rel="alternate" type="application/json" title="JSON Feed" href="/feeds/feed.json" />
  <link rel="preconnect" href="https://KNPXZI5B0M-dsn.algolia.net" crossorigin="true" />
  <title>Headless UI v1.5: The One With Comboboxes – Tailwind CSS</title>
  <meta name="twitter:site" content="@tailwindcss" />
  <meta name="twitter:creator" content="@tailwindcss" />
  <meta name="twitter:title" content="Headless UI v1.5: The One With Comboboxes – Tailwind CSS" />
  <meta name="twitter:description" content="We just released Headless UI v1.5, which includes a brand new `Combobox` component." />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:image" content="https://tailwindcss.com/_next/static/media/card.89820a6212d9ac6ef9c10c47784ee9bd.jpg" />
  <meta property="og:url" content="https://tailwindcss.com/blog/headless-ui-v1-5" />
  <meta property="og:type" content="article" />
  <meta property="og:title" content="Headless UI v1.5: The One With Comboboxes – Tailwind CSS" />
  <meta property="og:description" content="We just released Headless UI v1.5, which includes a brand new `Combobox` component." />
  <meta property="og:image" content="https://tailwindcss.com/_next/static/media/card.89820a6212d9ac6ef9c10c47784ee9bd.jpg" />
  <meta name="description" content="We just released Headless UI v1.5, which includes a brand new `Combobox` component." />
  <meta name="next-head-count" content="30" />
  <link rel="preload" href="/_next/static/css/7e978e466e31b71c374f.css" as="style" />
  <link rel="stylesheet" href="/_next/static/css/7e978e466e31b71c374f.css" data-n-g="" /><noscript data-n-css=""></noscript>
  <script defer="" nomodule="" src="/_next/static/chunks/polyfills-a40ef1678bae11e696dba45124eadd70.js"></script>
  <script src="/_next/static/chunks/webpack-920dd9d7c6885e4fc459.js" defer=""></script>
  <script src="/_next/static/chunks/framework-106d25c2ed81dc45938c.js" defer=""></script>
  <script src="/_next/static/chunks/main-b6623fed25da726ebc13.js" defer=""></script>
  <script src="/_next/static/chunks/pages/_app-7f414bb07c9c9280f305.js" defer=""></script>
  <script src="/_next/static/chunks/05d954cf-1933901c33ddd8ee4efc.js" defer=""></script>
  <script src="/_next/static/chunks/184-be35cd83ec9b32d2316b.js" defer=""></script>
  <script src="/_next/static/chunks/5855-b984b61d50f430a6d23b.js" defer=""></script>
  <script src="/_next/static/chunks/4327-be074c2b3cad1d751430.js" defer=""></script>
  <script src="/_next/static/chunks/489-f362ff384689b083124f.js" defer=""></script>
  <script src="/_next/static/chunks/4802-f4083001dcdf2046d077.js" defer=""></script>
  <script src="/_next/static/chunks/9852-22746e1ea5a530f87114.js" defer=""></script>
  <script src="/_next/static/chunks/pages/blog/headless-ui-v1-5-7ff02bbd83e7685ea3f0.js" defer=""></script>
  <script src="/_next/static/7QHokU1ztzKUQWX1ERDYD/_buildManifest.js" defer=""></script>
  <script src="/_next/static/7QHokU1ztzKUQWX1ERDYD/_ssgManifest.js" defer=""></script>
</head>

<body class="antialiased text-slate-500 dark:text-slate-400 bg-white dark:bg-slate-900">
  <div id="__next">
    <div class="absolute z-20 top-0 inset-x-0 flex justify-center overflow-hidden pointer-events-none">
      <div class="w-[108rem] flex-none flex justify-end">
        <picture>
          <source srcSet="/_next/static/media/docs@30.beeb08605f12f699c5abc3814763b65e.avif" type="image/avif" /><img src="/_next/static/media/docs@tinypng.61f4d3334a6d245fc2297517c87ae044.png" alt="" class="w-[71.75rem] flex-none max-w-none dark:hidden" />
        </picture>
        <picture>
          <source srcSet="/_next/static/media/docs-dark@30.77f062b5fd90f0d2cd4752cd9a8649c8.avif" type="image/avif" /><img src="/_next/static/media/docs-dark@tinypng.a8984b7fb44a4f8232d04de50220ab31.png" alt="" class="w-[90rem] flex-none max-w-none hidden dark:block" />
        </picture>
      </div>
    </div>
    <div class="sticky top-0 z-40 w-full backdrop-blur flex-none transition-colors duration-500 lg:z-50 lg:border-b lg:border-slate-900/10 dark:border-slate-50/[0.06] bg-white/95 supports-backdrop-blur:bg-white/60 dark:bg-transparent">
      <div class="max-w-8xl mx-auto">
        <div class="py-4 border-b border-slate-900/10 lg:px-8 lg:border-0 dark:border-slate-300/10 px-4">
          <div class="relative flex items-center"><a class="mr-3 flex-none w-[2.0625rem] overflow-hidden md:w-auto" href="/"><span class="sr-only">Tailwind CSS home page</span><svg viewBox="0 0 248 31" class="text-slate-900 dark:text-white w-auto h-5">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M25.517 0C18.712 0 14.46 3.382 12.758 10.146c2.552-3.382 5.529-4.65 8.931-3.805 1.941.482 3.329 1.882 4.864 3.432 2.502 2.524 5.398 5.445 11.722 5.445 6.804 0 11.057-3.382 12.758-10.145-2.551 3.382-5.528 4.65-8.93 3.804-1.942-.482-3.33-1.882-4.865-3.431C34.736 2.92 31.841 0 25.517 0zM12.758 15.218C5.954 15.218 1.701 18.6 0 25.364c2.552-3.382 5.529-4.65 8.93-3.805 1.942.482 3.33 1.882 4.865 3.432 2.502 2.524 5.397 5.445 11.722 5.445 6.804 0 11.057-3.381 12.758-10.145-2.552 3.382-5.529 4.65-8.931 3.805-1.941-.483-3.329-1.883-4.864-3.432-2.502-2.524-5.398-5.446-11.722-5.446z" fill="#38bdf8"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M76.546 12.825h-4.453v8.567c0 2.285 1.508 2.249 4.453 2.106v3.463c-5.962.714-8.332-.928-8.332-5.569v-8.567H64.91V9.112h3.304V4.318l3.879-1.143v5.937h4.453v3.713zM93.52 9.112h3.878v17.849h-3.878v-2.57c-1.365 1.891-3.484 3.034-6.285 3.034-4.884 0-8.942-4.105-8.942-9.389 0-5.318 4.058-9.388 8.942-9.388 2.801 0 4.92 1.142 6.285 2.999V9.112zm-5.674 14.636c3.232 0 5.674-2.392 5.674-5.712s-2.442-5.711-5.674-5.711-5.674 2.392-5.674 5.711c0 3.32 2.442 5.712 5.674 5.712zm16.016-17.313c-1.364 0-2.477-1.142-2.477-2.463a2.475 2.475 0 012.477-2.463 2.475 2.475 0 012.478 2.463c0 1.32-1.113 2.463-2.478 2.463zm-1.939 20.526V9.112h3.879v17.849h-3.879zm8.368 0V.9h3.878v26.06h-3.878zm29.053-17.849h4.094l-5.638 17.849h-3.807l-3.735-12.03-3.771 12.03h-3.806l-5.639-17.849h4.094l3.484 12.315 3.771-12.315h3.699l3.734 12.315 3.52-12.315zm8.906-2.677c-1.365 0-2.478-1.142-2.478-2.463a2.475 2.475 0 012.478-2.463 2.475 2.475 0 012.478 2.463c0 1.32-1.113 2.463-2.478 2.463zm-1.939 20.526V9.112h3.878v17.849h-3.878zm17.812-18.313c4.022 0 6.895 2.713 6.895 7.354V26.96h-3.878V16.394c0-2.713-1.58-4.14-4.022-4.14-2.55 0-4.561 1.499-4.561 5.14v9.567h-3.879V9.112h3.879v2.285c1.185-1.856 3.124-2.749 5.566-2.749zm25.282-6.675h3.879V26.96h-3.879v-2.57c-1.364 1.892-3.483 3.034-6.284 3.034-4.884 0-8.942-4.105-8.942-9.389 0-5.318 4.058-9.388 8.942-9.388 2.801 0 4.92 1.142 6.284 2.999V1.973zm-5.674 21.775c3.232 0 5.674-2.392 5.674-5.712s-2.442-5.711-5.674-5.711-5.674 2.392-5.674 5.711c0 3.32 2.442 5.712 5.674 5.712zm22.553 3.677c-5.423 0-9.481-4.105-9.481-9.389 0-5.318 4.058-9.388 9.481-9.388 3.519 0 6.572 1.82 8.008 4.605l-3.34 1.928c-.79-1.678-2.549-2.749-4.704-2.749-3.16 0-5.566 2.392-5.566 5.604 0 3.213 2.406 5.605 5.566 5.605 2.155 0 3.914-1.107 4.776-2.749l3.34 1.892c-1.508 2.82-4.561 4.64-8.08 4.64zm14.472-13.387c0 3.249 9.661 1.285 9.661 7.89 0 3.57-3.125 5.497-7.003 5.497-3.591 0-6.177-1.607-7.326-4.177l3.34-1.927c.574 1.606 2.011 2.57 3.986 2.57 1.724 0 3.052-.571 3.052-2 0-3.176-9.66-1.391-9.66-7.781 0-3.356 2.909-5.462 6.572-5.462 2.945 0 5.387 1.357 6.644 3.713l-3.268 1.82c-.647-1.392-1.904-2.035-3.376-2.035-1.401 0-2.622.607-2.622 1.892zm16.556 0c0 3.249 9.66 1.285 9.66 7.89 0 3.57-3.124 5.497-7.003 5.497-3.591 0-6.176-1.607-7.326-4.177l3.34-1.927c.575 1.606 2.011 2.57 3.986 2.57 1.724 0 3.053-.571 3.053-2 0-3.176-9.66-1.391-9.66-7.781 0-3.356 2.908-5.462 6.572-5.462 2.944 0 5.386 1.357 6.643 3.713l-3.268 1.82c-.646-1.392-1.903-2.035-3.375-2.035-1.401 0-2.622.607-2.622 1.892z" fill="currentColor"></path>
              </svg></a>
            <div class="relative"><button class="text-xs leading-5 font-semibold bg-slate-400/10 rounded-full py-1 px-3 flex items-center space-x-2 hover:bg-slate-400/20 dark:highlight-white/5" id="headlessui-menu-button-undefined" type="button" aria-haspopup="true" aria-expanded="false">v
                <!-- -->3.0.24<svg width="6" height="3" class="ml-2 overflow-visible" aria-hidden="true">
                  <path d="M0 0L3 3L6 0" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                </svg>
              </button></div><a class="ml-3 text-xs leading-5 font-medium text-sky-600 dark:text-sky-400 bg-sky-400/10 rounded-full py-1 px-3 hidden xl:flex items-center hover:bg-sky-400/20" href="/blog/tailwindcss-v3"><strong class="font-semibold">Tailwind CSS v3.0</strong><svg width="2" height="2" fill="currentColor" aria-hidden="true" class="ml-2 text-sky-600 dark:text-sky-400/70">
                <circle cx="1" cy="1" r="1"></circle>
              </svg><span class="ml-2">Just-in-Time all the time, colored shadows, scroll snap and more</span><svg width="3" height="6" class="ml-3 overflow-visible text-sky-300 dark:text-sky-400" aria-hidden="true">
                <path d="M0 0L3 3L0 6" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
              </svg></a>
            <div class="relative hidden lg:flex items-center ml-auto">
              <nav class="text-sm leading-6 font-semibold text-slate-700 dark:text-slate-200">
                <ul class="flex space-x-8">
                  <li><a class="hover:text-sky-500 dark:hover:text-sky-400" href="/docs/installation">Docs</a></li>
                  <li><a href="https://tailwindui.com" class="hover:text-sky-500 dark:hover:text-sky-400">Components</a></li>
                  <li><a class="hover:text-sky-500 dark:hover:text-sky-400" href="/blog">Blog</a></li>
                </ul>
              </nav>
              <div class="flex items-center border-l border-slate-200 ml-6 pl-6 dark:border-slate-800"><label class="sr-only" id="headlessui-listbox-label-undefined">Theme</label><button type="button" id="headlessui-listbox-button-undefined" aria-haspopup="true" aria-expanded="false"><span class="dark:hidden"><svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6">
                      <path d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" class="stroke-slate-400 dark:stroke-slate-500"></path>
                      <path d="M12 4v1M17.66 6.344l-.828.828M20.005 12.004h-1M17.66 17.664l-.828-.828M12 20.01V19M6.34 17.664l.835-.836M3.995 12.004h1.01M6 6l.835.836" class="stroke-slate-400 dark:stroke-slate-500"></path>
                    </svg></span><span class="hidden dark:inline"><svg viewBox="0 0 24 24" fill="none" class="w-6 h-6">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M17.715 15.15A6.5 6.5 0 0 1 9 6.035C6.106 6.922 4 9.645 4 12.867c0 3.94 3.153 7.136 7.042 7.136 3.101 0 5.734-2.032 6.673-4.853Z" class="fill-transparent"></path>
                      <path d="m17.715 15.15.95.316a1 1 0 0 0-1.445-1.185l.495.869ZM9 6.035l.846.534a1 1 0 0 0-1.14-1.49L9 6.035Zm8.221 8.246a5.47 5.47 0 0 1-2.72.718v2a7.47 7.47 0 0 0 3.71-.98l-.99-1.738Zm-2.72.718A5.5 5.5 0 0 1 9 9.5H7a7.5 7.5 0 0 0 7.5 7.5v-2ZM9 9.5c0-1.079.31-2.082.845-2.93L8.153 5.5A7.47 7.47 0 0 0 7 9.5h2Zm-4 3.368C5 10.089 6.815 7.75 9.292 6.99L8.706 5.08C5.397 6.094 3 9.201 3 12.867h2Zm6.042 6.136C7.718 19.003 5 16.268 5 12.867H3c0 4.48 3.588 8.136 8.042 8.136v-2Zm5.725-4.17c-.81 2.433-3.074 4.17-5.725 4.17v2c3.552 0 6.553-2.327 7.622-5.537l-1.897-.632Z" class="fill-slate-400 dark:fill-slate-500"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M17 3a1 1 0 0 1 1 1 2 2 0 0 0 2 2 1 1 0 1 1 0 2 2 2 0 0 0-2 2 1 1 0 1 1-2 0 2 2 0 0 0-2-2 1 1 0 1 1 0-2 2 2 0 0 0 2-2 1 1 0 0 1 1-1Z" class="fill-slate-400 dark:fill-slate-500"></path>
                    </svg></span></button><a href="https://github.com/tailwindlabs/tailwindcss" class="ml-6 block text-slate-400 hover:text-slate-500 dark:hover:text-slate-300"><span class="sr-only">Tailwind CSS on GitHub</span><svg viewBox="0 0 16 16" class="w-5 h-5" fill="currentColor" aria-hidden="true">
                    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0016 8c0-4.42-3.58-8-8-8z"></path>
                  </svg></a></div>
            </div><button type="button" class="ml-auto text-slate-500 w-8 h-8 -my-1 flex items-center justify-center hover:text-slate-600 lg:hidden dark:text-slate-400 dark:hover:text-slate-300"><span class="sr-only">Search</span><svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="m19 19-3.5-3.5"></path>
                <circle cx="11" cy="11" r="6"></circle>
              </svg></button>
            <div class="ml-2 -my-1 lg:hidden"><button type="button" class="text-slate-500 w-8 h-8 flex items-center justify-center hover:text-slate-600 dark:text-slate-400 dark:hover:text-slate-300"><span class="sr-only">Navigation</span><svg width="24" height="24" fill="none" aria-hidden="true">
                  <path d="M12 6v.01M12 12v.01M12 18v.01M12 7a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm0 6a1 1 0 1 1 0-2 1 1 0 0 1 0 2Zm0 6a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg></button></div>
          </div>
        </div>
      </div>
    </div>
    <div class="overflow-hidden">
      <div class="max-w-8xl mx-auto">
        <div class="flex px-4 pt-8 pb-10 lg:px-8"><a class="group flex font-semibold text-sm leading-6 text-slate-700 hover:text-slate-900 dark:text-slate-200 dark:hover:text-white" href="/blog"><svg viewBox="0 -9 3 24" class="overflow-visible mr-3 text-slate-400 w-auto h-6 group-hover:text-slate-600 dark:group-hover:text-slate-300">
              <path d="M3 0L0 3L3 6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>Go back</a></div>
      </div>
      <div class="px-4 sm:px-6 md:px-8">
        <div class="max-w-3xl mx-auto pb-28">
          <main>
            <article class="relative pt-10">
              <h1 class="text-2xl font-extrabold tracking-tight text-slate-900 dark:text-slate-200 md:text-3xl">Headless UI v1.5: The One With Comboboxes</h1>
              <div class="text-sm leading-6">
                <dl>
                  <dt class="sr-only">Date</dt>
                  <dd class="absolute top-0 inset-x-0 text-slate-700 dark:text-slate-400"><time dateTime="2022-02-24T12:00:00.000Z">Thursday, February 24, 2022</time></dd>
                </dl>
              </div>
              <div class="mt-6">
                <ul class="flex flex-wrap text-sm leading-6 -mt-6 -mx-5">
                  <li class="flex items-center font-medium whitespace-nowrap px-5 mt-6"><img src="/_next/static/media/reinink.0f27bc652c398edc16fd8a0a8a6fef8e.jpg" alt="" class="mr-3 w-9 h-9 rounded-full bg-slate-50 dark:bg-slate-800" />
                    <div class="text-sm leading-4">
                      <div class="text-slate-900 dark:text-slate-200">Jonathan Reinink</div>
                      <div class="mt-1"><a href="https://twitter.com/reinink" class="text-sky-500 hover:text-sky-600 dark:text-sky-400">@
                          <!-- -->reinink
                        </a></div>
                    </div>
                  </li>
                  <li class="flex items-center font-medium whitespace-nowrap px-5 mt-6"><img src="/_next/static/media/adamwathan.689c56542418d0427d9f13696efd4ab7.jpg" alt="" class="mr-3 w-9 h-9 rounded-full bg-slate-50 dark:bg-slate-800" />
                    <div class="text-sm leading-4">
                      <div class="text-slate-900 dark:text-slate-200">Adam Wathan</div>
                      <div class="mt-1"><a href="https://twitter.com/adamwathan" class="text-sky-500 hover:text-sky-600 dark:text-sky-400">@
                          <!-- -->adamwathan
                        </a></div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="mt-12 prose prose-slate dark:prose-dark">
                <p>We just released Headless UI v1.5, which includes a brand new <code>Combobox</code> component. Comboboxes are like select controls but with autocomplete/typeahead functionality, and are a great alternative to a regular select when you’re working with large datasets and want to quickly filter for the right option.</p><a href="https://headlessui.dev">
                  <div class="relative not-prose my-[2em] first:mt-0 last:mb-0 rounded-lg overflow-hidden"><img src="/_next/static/media/banner.bc8ca280ae60aaa6a4b0e5f225a917ce.jpg" alt="Headless UI v1.5" />
                    <div class="absolute inset-0 rounded-lg ring-1 ring-inset ring-slate-900/10"></div>
                  </div>
                </a>
                <p>Like all other Headless UI components, the combobox abstracts away all of the complex accessibility considerations but leaves the styling completely up to you, giving you total control to design exactly the combobox you want without worrying about things like keyboard navigation or screen reader support.</p>
                <p>Here’s a quick demo if you’d like to see it in action:</p>
                <div>
                  <div class="not-prose relative bg-slate-50 rounded-xl overflow-hidden dark:bg-slate-800/25">
                    <div style="background-position:10px 10px" class="absolute inset-0 bg-grid-slate-100 [mask-image:linear-gradient(0deg,#fff,rgba(255,255,255,0.6))] dark:bg-grid-slate-700/25 dark:[mask-image:linear-gradient(0deg,rgba(255,255,255,0.1),rgba(255,255,255,0.5))]"></div>
                    <div class="relative rounded-xl overflow-auto p-8 h-96 flex items-start justify-center pt-12">
                      <div class="relative w-full max-w-xs"><input type="text" class="w-full rounded-lg bg-white py-2 pl-3 pr-10 shadow-md focus:outline-none focus:ring-2 focus:ring-indigo-500 sm:text-sm" id="headlessui-combobox-input-undefined" role="combobox" aria-expanded="true" /><button class="absolute inset-y-0 right-0 flex items-center rounded-r-md px-2 focus:outline-none" id="headlessui-combobox-button-undefined" type="button" tabindex="-1" aria-haspopup="true" aria-expanded="true"><svg class="w-5 h-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                          </svg></button>
                        <ul class="absolute z-10 mt-1 max-h-60 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm" role="listbox" id="headlessui-combobox-options-undefined">
                          <li class="relative cursor-default select-none py-2 pl-3 pr-9 text-gray-900" id="headlessui-combobox-option-undefined" role="option" tabindex="-1"><span class="block truncate ">Wade Cooper</span></li>
                          <li class="relative cursor-default select-none py-2 pl-3 pr-9 text-gray-900" id="headlessui-combobox-option-undefined" role="option" tabindex="-1"><span class="block truncate ">Arlene McCoy</span></li>
                          <li class="relative cursor-default select-none py-2 pl-3 pr-9 text-gray-900" id="headlessui-combobox-option-undefined" role="option" tabindex="-1"><span class="block truncate ">Devon Webb</span></li>
                          <li class="relative cursor-default select-none py-2 pl-3 pr-9 text-gray-900" id="headlessui-combobox-option-undefined" role="option" tabindex="-1" aria-selected="true"><span class="block truncate font-semibold">Tom Cook</span><span class="absolute inset-y-0 right-0 flex items-center pr-4 text-indigo-600"><svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                              </svg></span></li>
                          <li class="relative cursor-default select-none py-2 pl-3 pr-9 text-gray-900" id="headlessui-combobox-option-undefined" role="option" tabindex="-1"><span class="block truncate ">Tanya Fox</span></li>
                          <li class="relative cursor-default select-none py-2 pl-3 pr-9 text-gray-900" id="headlessui-combobox-option-undefined" role="option" tabindex="-1"><span class="block truncate ">Hellen Schmidt</span></li>
                        </ul>
                      </div>
                    </div>
                    <div class="absolute inset-0 pointer-events-none border border-black/5 rounded-xl dark:border-white/5"></div>
                  </div>
                </div>
                <p>We’ve intentionally designed it so that you have full control over filtering the actual results. You can do basic string comparisons, use a fuzzy search library like <a href="https://fusejs.io/">Fuse.js</a>, or even make server-side requests to an API — whatever makes sense for your project.</p>
                <p>Here’s what it looks like to filter the results using a basic string comparison:</p>
                <div class="my-6 bg-slate-800 rounded-xl dark:ring-1 dark:ring-inset dark:ring-white/10">
                  <div class="relative space-x-2 px-4 pt-3" role="tablist" aria-orientation="horizontal"><button class="py-2 px-4 inline-block rounded-md bg-transparent hover:bg-slate-700 text-sm text-white font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-slate-800 focus:ring-slate-600" id="headlessui-tabs-tab-undefined" role="tab" type="button" aria-selected="false" tabindex="-1">React</button><button class="py-2 px-4 inline-block rounded-md bg-transparent hover:bg-slate-700 text-sm text-white font-medium focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-slate-800 focus:ring-slate-600" id="headlessui-tabs-tab-undefined" role="tab" type="button" aria-selected="false" tabindex="-1">Vue</button></div>
                  <div></div>
                </div>
                <h2 class="group flex whitespace-pre-wrap -ml-4 pl-4" id="command-palettes"><a href="#command-palettes" class="absolute -ml-10 flex items-center opacity-0 border-0 group-hover:opacity-100" aria-label="Anchor">​<div class="w-6 h-6 text-slate-400 ring-1 ring-slate-900/5 rounded-md shadow-sm flex items-center justify-center hover:ring-slate-900/10 hover:shadow hover:text-slate-700 dark:bg-slate-700 dark:text-slate-300 dark:shadow-none dark:ring-0"><svg width="12" height="12" fill="none" aria-hidden="true">
                        <path d="M3.75 1v10M8.25 1v10M1 3.75h10M1 8.25h10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                      </svg></div></a><span>Command palettes</span></h2>
                <p>Comboboxes are not only great as standalone inputs, but they can also be used as a lower-level primitive for building more complex components, such as command palettes.</p>
                <p>This is actually what originally motivated us to create the combobox component in the first place — we wanted to add a new command palettes category to Tailwind UI and needed this component to make that happen.</p>
                <p>If you happen to have a Tailwind UI license, be sure to browse the new <a href="https://tailwindui.com/components/application-ui/navigation/command-palettes">Command Palettes</a> category to see how these turned out. And if you’re wondering, we also added a new <a href="https://tailwindui.com/components/application-ui/forms/comboboxes">Comboboxes</a> category as well.</p><a href="https://tailwindui.com/components/application-ui/navigation/command-palettes">
                  <div class="relative not-prose my-[2em] first:mt-0 last:mb-0 rounded-lg overflow-hidden"><img src="/_next/static/media/command-palette.e23601b8825d77bb72544c66ad8153b3.jpg" alt="Command palette from Tailwind UI" />
                    <div class="absolute inset-0 rounded-lg ring-1 ring-inset ring-slate-900/10"></div>
                  </div>
                </a>
                <p>Riding on the excitement of the new command palettes, we also just published a new <a href="https://www.youtube.com/watch?v=-jix4KyxLuQ">in-depth screencast</a> on building a command palette from scratch with Tailwind CSS, React and Headless UI.</p>
                <p>It covers tons of interesting Tailwind tricks for getting the design and animations just right, and teaches you a ton about how to use the new combobox component and wire it into your app.</p>
                <h2 class="group flex whitespace-pre-wrap -ml-4 pl-4" id="try-it-out"><a href="#try-it-out" class="absolute -ml-10 flex items-center opacity-0 border-0 group-hover:opacity-100" aria-label="Anchor">​<div class="w-6 h-6 text-slate-400 ring-1 ring-slate-900/5 rounded-md shadow-sm flex items-center justify-center hover:ring-slate-900/10 hover:shadow hover:text-slate-700 dark:bg-slate-700 dark:text-slate-300 dark:shadow-none dark:ring-0"><svg width="12" height="12" fill="none" aria-hidden="true">
                        <path d="M3.75 1v10M8.25 1v10M1 3.75h10M1 8.25h10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                      </svg></div></a><span>Try it out</span></h2>
                <p>If you already have Headless UI installed in your project, be sure to upgrade to v1.5 to get the new <code>Combobox</code> component. This is a minor update so there are no breaking changes.</p>
                <pre class="language-shell"><code class="language-shell"><span class="token comment"># For React</span>
<span class="token function">npm</span> <span class="token function">install</span> @headlessui/react

<span class="token comment"># For Vue</span>
<span class="token function">npm</span> <span class="token function">install</span> @headlessui/vue</code></pre>
                <p>Be sure to also check out <a href="https://headlessui.dev">the official website</a> for the latest documentation.</p>
              </div>
            </article>
          </main>
          <footer class="mt-16">
            <div class="relative"><img src="/_next/static/media/blog-post-form@80.ceafc576054bfafd93f4075abebc771f.jpg" alt="" class="absolute top-px sm:left-auto sm:right-0 left-1/4 dark:hidden max-w-none" width="476" /><img src="/_next/static/media/blog-post-form-dark@90.4b182b17aa21af970219f8fd47331cda.jpg" alt="" class="absolute top-px -left-1/4 sm:left-0 hidden dark:block max-w-none" width="1429" />
              <section class="relative py-16 border-t border-slate-200 dark:border-slate-200/5">
                <h2 class="text-xl font-semibold text-slate-900 dark:text-white">Get all of our updates directly to your inbox.<br />Sign up for our newsletter.</h2>
                <div class="mt-5 max-w-md">
                  <form action="https://app.convertkit.com/forms/3181881/subscriptions" method="post" class="flex flex-wrap -mx-2">
                    <div class="px-2 grow-[9999] basis-64 mt-3">
                      <div class="group relative"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" class="w-6 h-full absolute inset-y-0 left-3 text-slate-400 pointer-events-none group-focus-within:text-sky-500 dark:group-focus-within:text-slate-400">
                          <path d="M5 7.92C5 6.86 5.865 6 6.931 6h10.138C18.135 6 19 6.86 19 7.92v8.16c0 1.06-.865 1.92-1.931 1.92H6.931A1.926 1.926 0 0 1 5 16.08V7.92Z"></path>
                          <path d="m6 7 6 5 6-5"></path>
                        </svg><input type="email" name="email_address" required="" aria-label="Email address" class="appearance-none shadow rounded-md ring-1 ring-slate-900/5 leading-5 sm:text-sm border border-transparent py-2 placeholder:text-slate-400 pl-12 pr-3 block w-full text-slate-900 focus:outline-none focus:ring-2 focus:ring-sky-500 bg-white dark:bg-slate-700/20 dark:ring-slate-200/20 dark:focus:ring-sky-500 dark:text-white" placeholder="Subscribe via email" /></div>
                    </div>
                    <div class="px-2 grow flex mt-3"><button type="submit" class="bg-sky-500 flex-auto shadow text-white rounded-md text-sm border-y border-transparent py-2 font-semibold px-3 hover:bg-sky-600 dark:hover:bg-sky-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-300 dark:focus:ring-offset-slate-900 dark:focus:ring-sky-700">Subscribe</button></div>
                  </form>
                </div>
              </section>
              <section class="relative pt-16 border-t border-slate-200 dark:border-slate-200/5">
                <h2 class="mb-6 font-semibold text-slate-900 dark:text-slate-200">Latest articles</h2>
                <div class="grid grid-cols-1 gap-x-8 gap-y-10 md:grid-cols-2">
                  <article class="flex flex-col items-start">
                    <h3 class="order-1 text-lg text-slate-900 font-semibold dark:text-slate-200"><a href="/blog/automatic-class-sorting-with-prettier">Automatic Class Sorting with Prettier</a></h3><time dateTime="2022-01-24T19:00:00.000Z" class="text-sm leading-7 dark:text-slate-400">January 24, 2022</time><a class="group inline-flex items-center h-9 rounded-full text-sm font-semibold whitespace-nowrap px-3 focus:outline-none focus:ring-2 bg-slate-100 text-slate-700 hover:bg-slate-200 hover:text-slate-900 focus:ring-slate-500 dark:bg-slate-700 dark:text-slate-100 dark:hover:bg-slate-600 dark:hover:text-white dark:focus:ring-slate-500 order-1 mt-6" href="/blog/automatic-class-sorting-with-prettier">Read more<span class="sr-only">,
                        <!-- -->Automatic Class Sorting with Prettier
                      </span><svg class="overflow-visible ml-3 text-slate-300 group-hover:text-slate-400 dark:text-slate-500 dark:group-hover:text-slate-400" width="3" height="6" viewBox="0 0 3 6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M0 0L3 3L0 6"></path>
                      </svg></a>
                  </article>
                  <article class="flex flex-col items-start">
                    <h3 class="order-1 text-lg text-slate-900 font-semibold dark:text-slate-200"><a href="/blog/tailwindcss-typography-v0-5">Effortless Typography, Even in Dark Mode</a></h3><time dateTime="2021-12-17T18:50:00.000Z" class="text-sm leading-7 dark:text-slate-400">December 17, 2021</time><a class="group inline-flex items-center h-9 rounded-full text-sm font-semibold whitespace-nowrap px-3 focus:outline-none focus:ring-2 bg-slate-100 text-slate-700 hover:bg-slate-200 hover:text-slate-900 focus:ring-slate-500 dark:bg-slate-700 dark:text-slate-100 dark:hover:bg-slate-600 dark:hover:text-white dark:focus:ring-slate-500 order-1 mt-6" href="/blog/tailwindcss-typography-v0-5">Read more<span class="sr-only">,
                        <!-- -->Effortless Typography, Even in Dark Mode
                      </span><svg class="overflow-visible ml-3 text-slate-300 group-hover:text-slate-400 dark:text-slate-500 dark:group-hover:text-slate-400" width="3" height="6" viewBox="0 0 3 6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M0 0L3 3L0 6"></path>
                      </svg></a>
                  </article>
                </div>
              </section>
            </div>
          </footer>
        </div>
      </div>
    </div>
  </div>
  <script id="__NEXT_DATA__" type="application/json">
    {
      "props": {
        "pageProps": {
          "latestPosts": [{
            "slug": "headless-ui-v1-5",
            "title": "Headless UI v1.5: The One With Comboboxes",
            "description": "We just released Headless UI v1.5, which includes a brand new `Combobox` component.",
            "date": "2022-02-24T12:00:00.000Z"
          }, {
            "slug": "automatic-class-sorting-with-prettier",
            "title": "Automatic Class Sorting with Prettier",
            "description": "People have been talking about the best way to sort your utility classes in Tailwind projects for at least four years. Today we’re excited to announce that you can finally stop worrying about it with the release of our official Prettier plugin for Tailwind CSS.",
            "date": "2022-01-24T19:00:00.000Z"
          }, {
            "slug": "tailwindcss-typography-v0-5",
            "title": "Effortless Typography, Even in Dark Mode",
            "description": "Today we're announcing the next version of the Tailwind CSS Typography plugin, which brings easy dark mode support and a brand new customization API.",
            "date": "2021-12-17T18:50:00.000Z"
          }]
        },
        "__N_SSG": true
      },
      "page": "/blog/headless-ui-v1-5",
      "query": {},
      "buildId": "7QHokU1ztzKUQWX1ERDYD",
      "isFallback": false,
      "gsp": true,
      "scriptLoader": []
    }
  </script>
  <script> </script>
</body>

</html>