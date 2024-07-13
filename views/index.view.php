<?php require base_path('views/partials/head.php'); ?>
<?php require('partials/nav.php'); ?>

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <h2 class="text-center text-4xl font-bold leading-9 tracking-tight text-gray-900">Graceful Goals</h2>
        <p class="text-xs mt-6 ">Graceful Goals is the ultimate Elden Ring progress checklist. Browse the list of bosses, weapons, locations, and more. Create an account to use save your checked-off items on your journey to become Elden Lord.</p>
        <img class="mx-auto h-20 w-auto" src="images/logo.jpg" alt="Your Company">
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" method="POST">
            <div>
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                <div class="mt-2">
                    <input id="email" name="email" type="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div>
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                    <div class="text-sm">
                        <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
                    </div>
                </div>
                <div class="mt-2">
                    <input id="password" name="password" type="password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                <?php if(isset($errors['msg'])) : ?>
                    <p class="text-red-500 text-xs mt-2"><?= $errors['msg']; ?></p>
                <?php endif; ?>
            </div>

            <div>
                <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
            </div>
        </form>

        <p class="mt-10 text-center text-sm text-gray-500">
            No account?
            <a href="#" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Sign up for free</a>
        </p>
    </div>
</div>


<?php require('partials/foot.php'); ?>