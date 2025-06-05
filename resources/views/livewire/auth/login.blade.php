<div>
    <div class="bg-gray-100 w-full h-screen flex items-center justify-center">
        <div class="w-64 h-64 bg-white flex flex-col items-center justify-center rounded-md">
            <span class="mb-5 text-2xl font-medium">Login</span>
            <form wire:submit.prevent="login" class="flex flex-col space-y-3">
                <input type="email" wire:model="email" placeholder="Email" class="border border-gray-400 p-1 rounded-md">
                <input type="password" wire:model="password" placeholder="Password" class="border border-gray-400 p-1 rounded-md">
                
                <div>
                    <input type="checkbox" wire:model="remember">
                <span>Remember</span>
                </div>
                <button type="submit" class="py-2 bg-blue-500 text-white rounded-md">Login</button>
            </form>
        </div>
    </div>
</div>
