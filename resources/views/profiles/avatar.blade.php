<x-app>
    <form method="POST" action="{{ $user->path() }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="mb-6">
            <label
                class="flex justify-center block mb-2 uppercase font-bold text-xs text-gray-700"
                for="avatar"
            >
            Avatar
            </label>

            <div class="flex justify-center p-4">
                <img
                    src="{{ $user->avatar }}"
                    alt=""
                    class="rounded-full"
                    width="300"
                    id="preview-avatar"
                >
            </div>

            <div class="flex justify-center p-4">
                <input
                    onchange="previewImagem()"
                    class="rounded py-1 px-2 hover:bg-gray-200 mr-4"
                    type="file"
                    name="avatar"
                    id="avatar"
                >
            </div>

            <script type="text/javascript">
                function previewImagem() {
                    var avatar = document.querySelector('input[name=avatar]').files[0];
                    var preview = document.querySelector('img[id=preview-avatar]');

                    var reader = new FileReader();

                    reader.onloadend = function() {
                        preview.src = reader.result;
                    }

                    if(avatar) {
                        reader.readAsDataURL(avatar);
                    } else {
                        preview.src = "{{ $user->avatar }}";
                    }
                }
            </script>

        </div>

        <div class="flex justify-center mb-6">
            <button
                type="submit"
                class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500 mr-4"
            >
            Submit
            </button>

            <a href="{{ $user->path()}}" class="bg-gray-200 rounded py-2 px-4 hover:bg-gray-400 mr-4">Cancel</a>
        </div>

    </form>
</x-app>
