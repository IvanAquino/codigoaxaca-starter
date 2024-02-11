<div class="flex min-h-screen flex-col items-center bg-background pt-6 dark:bg-gray-900 sm:justify-center sm:pt-0">
    <div>
        {{ $logo }}
    </div>

    <div class="mt-6 w-full overflow-hidden bg-white px-6 py-4 dark:bg-gray-800 sm:max-w-md sm:rounded-lg">
        {{ $slot }}
    </div>
</div>