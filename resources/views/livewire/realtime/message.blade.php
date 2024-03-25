<div>
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col">
                <h2 class="mb-4">
                    Realtime Message
                </h2>
                <form class="form" wire:submit.prevent='sendMessage'>
                    <input wire:model='message' type="text"  class="form-input" placeholder="Enter Your Message">
                    <button type="submit">
                        Send
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
