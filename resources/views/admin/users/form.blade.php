<div class="modal " >
    <div class="modal-content">
        <h2>Create User</h2>
        <span class="close-modal">×</span>
        <hr>
        <div>
            <label>Name</label>
            @error('name')<p class="alert">{{ $message }}</p>@enderror
            <input type="text" name="name"/>

            <label>Email</label>
            @error('email')<p class="alert">{{ $message }}</p>@enderror
            <input type="text" name="email"/>

            <label>Bio</label>
            <textarea cols="20" rows="3" name="bio"></textarea>

            <label>Password</label>
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
                Save
            </button>
        </div>
    </div>
</div>
