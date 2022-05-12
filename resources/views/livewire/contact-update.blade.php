<div>
    <form wire:submit.prevent='update'>
        <input type="hidden" name="" wire:model="contactId">
        <div class="form-group">
            <div class="row">
                <div class="col-6">
                    <input wire:model='name' type="text" name="name" id="" placeholder="Name"
                        class="form-control @error('name') is-invalid @enderror">
                    @error('name')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="col-6">
                    <input wire:model='phone' type="text" name="phone" id="" placeholder="Phone"
                        class="form-control @error('phone') is-invalid @enderror">
                    @error('phone')
                        <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-sm btn-primary mt-2">Submit</button>
    </form>
</div>
