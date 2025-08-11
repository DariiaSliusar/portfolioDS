<section class="about">
    <div class="titlebar">
        <h1>{{ $formMode === 'edit' ? 'Edit Testimonial' : 'Create Testimonial' }}</h1>
        <button>{{ $formMode === 'edit' ? 'Update Testimonial' : 'Save Testimonial' }}</button>
    </div>
    <div class="card-wrapper">
        <div class="wrapper_left">
            <div class="card">
                <label>Name</label>
                {!! $errors->first('name', '<p class="alert">:message</p>') !!}
                <input type="text" name="name" value="{{ isset($testimonial->name) ? $testimonial->name : '' }}"/>

                <label>Function</label>
                {!! $errors->first('function', '<p class="alert">:message</p>') !!}
                <input type="text" name="function" value="{{ isset($testimonial->function) ? $testimonial->function : '' }}"/>

                <label>Testimony</label>
                {!! $errors->first('testimony', '<p class="alert">:message</p>') !!}
                <textarea cols="10" rows="5" name="testimony">{{ isset($testimonial->testimony) ? $testimonial->testimony : '' }}</textarea>

                <label>Rating</label>
                {!! $errors->first('rating', '<p class="alert">:message</p>') !!}
                <input type="text" name="rating" value="{{ isset($testimonial->rating) ? $testimonial->rating : '' }}"/>
            </div>
        </div>

        <div class="wrapper_right">
            <div class="card">
                <img src="{{ isset($testimonial->image) ? asset('image/'.$testimonial->image) : asset('../../template/assets/img/avatar.jpg') }}" class="avatar_img">
                <input type="file" id="fileimg" name="image" accept="image/*" onChange="showImageFile(event)">
            </div>
        </div>

    </div>
    <div class="titlebar">
        <h1></h1>
        <button>{{ $formMode === 'edit' ? 'Update Testimonial' : 'Save Testimonial' }}</button>
    </div>
</section>

<script>
    function showImageFile(event) {
        var input = event.target;
        var reader = new FileReader();
        reader.onload = function() {
            var dataURL = reader.result;
            var output = document.getElementById('file-preview-image');
            output.src = dataURL;
        };
        reader.readAsDataURL(input.files[0]);
    }
</script>
