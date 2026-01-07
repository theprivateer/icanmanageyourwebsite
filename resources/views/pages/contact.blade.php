<!DOCTYPE html>
<html lang="en-us">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>I can manage your website</title>
		<meta name="description" content="I am a freelance web designer and developer who manages websites for small to medium sized businesses">

		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/kelpui@1/css/kelp.css">
        <script type="module" src="https://cdn.jsdelivr.net/npm/kelpui@1/js/kelp.js"></script>

        <link rel="stylesheet" href="/css/fonts.css">
        <style>
            @layer kelp.theme {
                :root {
                    --font-size-base: 150%;
                    --font-primary: "Satoshi", sans-serif;
		            --font-secondary: "Satoshi", sans-serif;
                }
            }
        </style>
	</head>
	<body>
        <header class="container">
            <nav class="navbar">
                <a class="logo" href="/">I Can Manage Your Website</a>
                <ul>
                    <li><a class="btn primary" href="/contact">Contact</a></li>
                </ul>
            </nav>
        </header>
		<main>
            <section class="container">
                <h1 class="size-6xl">Ready?</h1>

                <p class="size-2xl">Tell me about your website and what you need help with.</p>

                <kelp-form-ajax
                    msg-success="Thanks for reaching out - I will be in touch shortly!"
                    msg-class="callout"
                    >
                    <form action="/contact" method="post" class="callout primary">
                        @csrf
                        @honeypot

                        <label for="name">Your name</label>
                        <input type="text" id="name" name="name" placeholder="Full name please" required>

                        <label for="company">Your company or brand name</label>
                        <input type="text" id="company" name="company">

                        <label for="email">Your email</label>
                        <input type="email" id="email" name="email" required>

                        <fieldset>
                            <legend class="size-3xl"><strong>The Website</strong></legend>

                            <label for="url">Website URL</label>
                            <input type="text" id="url" name="url" placeholder="https://" required>

                            <label for="description">Tell me more about what you need managing</label>
                            <kelp-autogrow class="margin-end-l">
                                <textarea id="description" name="description" required></textarea>
                            </kelp-autogrow>

                            <label for="more">Anything else?</label>
                            <kelp-autogrow>
                                <textarea id="more" name="more" placeholder="Anything else?"></textarea>
                            </kelp-autogrow>
                        </fieldset>

                        <button type="submit" class="size-xl">Send</button>
                    </form>
                </kelp-form-ajax>
            </section>
        </main>

        <footer class="container margin-start-4xl margin-end-4xl">
            <div class="split">
                <p>&copy; <a href="https://philstephens.com">Phil Stephens</a> {{ date('Y') }}</p>
                <p><a href="https://www.linkedin.com/in/phil-stephens/">LinkedIn</a></p>
                <p>Made with <a href="https://kelpui.com">Kelp</a></p>
            </div>
        </footer>
	</body>
</html>
