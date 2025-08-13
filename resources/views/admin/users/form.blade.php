<div class="modal " >
    <div class="modal-content">
        <h2>{{ $formMode === 'edit' ? 'Edit User' : 'Create User' }}</h2>
        <span class="close-modal">×</span>
        <hr>
        <div>
            <label>Name</label>
            @error('name')<p class="alert">{{ $message }}</p>@enderror
            <input type="text" name="name" value="{{ isset($user->name) ? $user->name : '' }}"/>

            <label>Email</label>
            @error('email')<p class="alert">{{ $message }}</p>@enderror
            <input type="text" name="email"  value="{{ isset($user->email) ? $user->email : '' }}"/>

            <label>Bio</label>
            <textarea cols="20" rows="3" name="bio">{{ isset($user->bio) ? $user->bio : '' }}</textarea>

            <label>Password (Please leave this input empty, if you don't need to change password)</label>
            @error('password')<p class="alert">{{ $message }}</p>@enderror
            <input  type="password" id="password" name="password"/>
        </div>
        <hr>
        <div class="modal-footer">
            <button class="close-modal">
                Cancel
            </button>
            <button class="secondary close-modal">
                <span><i class="fa fa-spinner fa-spin"></i></span>
                {{ $formMode === 'edit' ? 'Update User' : 'Save User' }}
            </button>
        </div>
    </div>
</div>
