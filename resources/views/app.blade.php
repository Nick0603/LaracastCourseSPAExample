<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laracast assets </title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
</head>

<body class="font-sans">
    <div id="app">
        <header class="p-6 mb-8" style="background: url('/images/splash.svg') 0px 0px no-repeat;">
            <h1>
                <a href="https://laracasts.com"><img alt="Laracasts" src="/images/logo.svg"></a>
            </h1>
        </header>
        <div class="container px-8">
            <main class="flex">
                <aside class="w-48 pt-8">
                    <section class="mb-10">
                        <h5 class="uppercase font-bold mb-5 text-base">The Bread</h5>
                        <ul>
                            <li class="text-sm leading-loose">
                                <router-link class="text-black font-light" to="/" exact>Logo</router-link>
                            </li>
                            <li class="text-sm leading-loose">
                                <router-link class="text-black font-light" to="/logo-symbol">Logo Symbol</router-link>
                            </li>
                            <li class="text-sm leading-loose">
                                <router-link class="text-black font-light" to="/colors">Colors</router-link>
                            </li>
                            <li class="text-sm leading-loose">
                                <router-link class="text-black font-light" to="/typography">Typography</router-link>
                            </li>
                        </ul>
                    </section>
                    <section class="mb-10">
                        <h5 class="uppercase font-bold mb-5 text-base">Doodles</h5>
                        <ul>
                            <li class="text-sm leading-loose">
                                <router-link class="text-black font-light" to="/mascot">Mascot</router-link>
                            </li>
                            <li class="text-sm leading-loose">
                                <router-link class="text-black font-light" to="/illustrations">Illustrations
                                </router-link>
                            </li>
                            <li class="text-sm leading-loose">
                                <router-link class="text-black font-light" to="/loaders-and-animations">Loaders and
                                    Animations</router-link>
                            </li>
                            <li class="text-sm leading-loose">
                                <router-link class="text-black font-light" to="/wallpapers">Wallpapers</router-link>
                            </li>
                        </ul>
                    </section>
                    <section class="mb-10">
                        <h5 class="uppercase font-bold mb-5 text-base">ABOUT LARACASTS</h5>
                        <ul>
                            <li class="text-sm leading-loose">
                                <router-link class="text-black font-light" to="/the-team">The Team</router-link>
                            </li>
                        </ul>
                    </section>
                    <section>
                        <h5 class="uppercase font-bold mb-5 text-base">States</h5>
                        <ul>
                            <li class="text-sm leading-loose">
                                <router-link class="text-black font-light" to="/site-stats">Site Stats</router-link>
                            </li>
                        </ul>
                    </section>
                </aside>
                <div class="primary flex-1 px-6">
                    <router-view></router-view>
                </div>
            </main>
        </div>
    </div>
    <script src="/js/app.js"></script>
</body>

</html>