<x-site-layout>
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
</x-site-layout>
