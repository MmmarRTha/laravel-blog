@csrf
<div>
    <label class="uppercase text-gray-700 text-sm font-semibold">Title</label>
    <input type="text" name="title" class="rounded border-gray-200 w-full" value="{{ old('title', $post->title) }}">
    <span class="text-xs text-red-600 mb-4">@error('title') {{ $message }} @enderror</span>
</div>
<div class="mt-4">
    <label class="uppercase text-gray-700 text-sm font-semibold">Slug</label>
    <input type="text" name="slug" class="rounded border-gray-200 w-full" value="{{ old('slug', $post->slug) }}">
    <span class="text-xs text-red-600">@error('slug') {{ $message }} @enderror</span>

</div>
<div class="mt-4">
    <label class="uppercase text-gray-700 text-sm font-semibold">Content</label>
    <textarea name="content" rows="5" class="rounded border-gray-200 w-full">{{ old('content', $post->content) }}</textarea>
    <span class="text-xs text-red-600">@error('content') {{ $message }} @enderror</span>
</div>

<div class="flex justify-between items-center">
    <a href="{{ route('posts.index') }}" class="text-blue-700">Back</a>
    <input type="submit" value="Save" class="bg-blue-600 rounded px-4 py-2 text-base font-extrabold text-white hover:bg-blue-800">
</div>