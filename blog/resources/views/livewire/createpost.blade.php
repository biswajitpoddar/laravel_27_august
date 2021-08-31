<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#PostCreateModal">

	Create Posts

</button>


<!-- Modal -->

<div wire:ignore.self class="modal fade" id="PostCreateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel">Create Posts</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                     <span aria-hidden="true close-btn">×</span>

                </button>

            </div>

           <div class="modal-body">

                <form>

                    <div class="form-group">

                        <label for="exampleFormControlInput1">Post Title</label>

                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Title" wire:model="title">

                        @error('title') <span class="text-danger error">{{ $message }}</span>@enderror

                    </div>

                    <div class="form-group">

                        <label for="exampleFormControlInput2">Post Body</label>

                        <input type="text" class="form-control" id="exampleFormControlInput2" wire:model="body" value="dddd" placeholder="Enter Body">

                        @error('body') <span class="text-danger error">{{ $message }}</span>@enderror
                        <input type="text" class="form-control" id="exampleFormControlInput3" wire:model="user_id"  value="aaaaa">
                        @error('user_id') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>

                </form>

            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>

                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Save changes</button>

            </div>

        </div>

    </div>

</div>
