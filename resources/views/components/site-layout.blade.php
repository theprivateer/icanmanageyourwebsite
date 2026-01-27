<!DOCTYPE html>
<html lang="en-us">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>I Can Manage Your Website</title>
		<meta name="description" content="Web design and development that helps your business grow, with performance, clarity, and ownership up front">

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/kelpui@1/css/kelp.css">
        <script type="module" src="https://cdn.jsdelivr.net/npm/kelpui@1/js/kelp.js"></script>

        <x-feed-links />

        <link rel="stylesheet" href="/css/fonts.css">
        <style>
            @layer kelp.theme {
                :root {
                    --font-size-base: 150%;
                    --font-primary: "Satoshi", sans-serif;
		            --font-secondary: "Satoshi", sans-serif;
                }
            }

            .logo {
                display: flex;
                align-items: center;
                gap: 0.25rem;
            }

            .logo svg {
                width: 2rem;
                height: auto;
            }
        </style>
	</head>
	<body>
        <header class="container">
            <nav class="navbar">
                <a class="logo" href="/">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5.25 14.25h13.5m-13.5 0a3 3 0 0 1-3-3m3 3a3 3 0 1 0 0 6h13.5a3 3 0 1 0 0-6m-16.5-3a3 3 0 0 1 3-3h13.5a3 3 0 0 1 3 3m-19.5 0a4.5 4.5 0 0 1 .9-2.7L5.737 5.1a3.375 3.375 0 0 1 2.7-1.35h7.126c1.062 0 2.062.5 2.7 1.35l2.587 3.45a4.5 4.5 0 0 1 .9 2.7m0 0a3 3 0 0 1-3 3m0 3h.008v.008h-.008v-.008Zm0-6h.008v.008h-.008v-.008Zm-3 6h.008v.008h-.008v-.008Zm0-6h.008v.008h-.008v-.008Z" />
                    </svg>

                    I Can Manage Your Website</a>
                <ul>
                    <li><a href="/blog">Blog</a></li>
                    <li><a class="btn primary" href="/contact">Contact</a></li>
                </ul>
            </nav>
        </header>
		<main>
            {{ $slot }}
        </main>

        <footer class="container margin-start-6xl margin-end-4xl">
            <div class="split">
                <p>&copy; Phil Stephens 2025-{{ date('Y') }}</p>
                <p><a href="https://www.linkedin.com/company/i-can-manage-your-website/">LinkedIn</a></p>
                {{-- <p>Made with <a href="https://kelpui.com">Kelp</a></p> --}}
            </div>
        </footer>
	</body>
</html>
