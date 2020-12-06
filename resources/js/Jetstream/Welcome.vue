<template>
    <div>
        <div class="p-6 sm:px-20 bg-white border-b border-gray-200">

            <div class="mt-8 text-2xl">
                Welcome to Wealthbot.io!
            </div>

            <div class="mt-6 text-gray-500">
                Hi, I'm wealthbot.io. Webo for short. I'm an open source wealth management platform. I help Investment Advisors profitably serve the mass affluent.
            </div>
        </div>

        <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-1">
            <div class="p-6 border-t border-gray-200 md:border-t-0 md:border-l">
                <div class="flex items-center">
                    <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="https://laravel.com/docs">!! Verify your email!</a></div>
                </div>

                <div class="ml-12">
                    <div class="mt-2 text-sm text-gray-500">
                        I need to check if the email address that you provided during register belongs to you. So please follow the instructions to validate it.
                    </div>

                    <a href="https://laravel.com/docs">
                        <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                                <div>Validate your email address</div>

                                <div class="ml-1 text-indigo-500">
                                    <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="p-6 border-t border-gray-200">
                <div class="flex items-center">
                    <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold"><a href="https://laracasts.com">!! Send me an ID that proves that you are you</a></div>
                </div>

                <div class="ml-12">
                    <div class="mt-2 text-sm text-gray-500">
                        I trust you! But you know, regulators don't, and there is a bunch of bad people in the world. So please send me your ID. Follow the instructions above.
                    </div>

                    <a href="https://laracasts.com">
                        <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                                <div>Send ID picture</div>

                                <div class="ml-1 text-indigo-500">
                                    <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import JetApplicationLogo from '@/Jetstream/ApplicationLogo'

    export default {
        components: {
            JetApplicationLogo,
        },
    }
</script>
