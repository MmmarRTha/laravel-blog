@csrf

<label class="uppercase text-gray-700 text-xs">Title</label>
<input type="text" name="title" class="rounded border-gray-200 w-full mb-4" value="{{ $post->title }}">

<label class="uppercase text-gray-700 text-xs">Content</label>
<textarea name="content" rows="5" class="rounded border-gray-200 w-full mb-4">{{ $post->content }}</textarea>

<div class="flex justify-between items-center">
    <a href="{{ route('posts.index') }}" class="text-blue-700">Back</a>
    <input type="submit" value="Save" class="bg-blue-600 rounded px-4 py-2 text-base font-extrabold text-white hover:bg-blue-800">
</div>